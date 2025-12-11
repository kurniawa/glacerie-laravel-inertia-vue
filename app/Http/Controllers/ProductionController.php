<?php

namespace App\Http\Controllers;

use App\Models\ProductionTask;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = DB::table('production_tasks')
            ->join('product_variants', 'production_tasks.product_variant_id', '=', 'product_variants.id')
            ->join('users', 'production_tasks.customer_id', '=', 'users.id')
            ->select(
                'production_tasks.production_date',
                'product_variants.alias as product_name',
                'users.name as customer_name',
                'production_tasks.quantity'
            )
            ->orderBy('production_tasks.production_date')
            ->orderBy('production_tasks.product')
            ->get();

        $summary = [];

        foreach ($rows as $row) {

            $date = $row->production_date;
            $product = $row->product_name;
            $customer = $row->customer_name;
            $qty = $row->quantity;

            if (!isset($summary[$date])) {
                $summary[$date] = [
                    "product_summary" => [],
                    "customer_summary" => [],
                ];
            }

            // PRODUCT SUMMARY
            if (!isset($summary[$date]["product_summary"][$product])) {
                $summary[$date]["product_summary"][$product] = [
                    "product" => $product,
                    "total_quantity" => 0,
                    "customers" => [],
                ];
            }

            $summary[$date]["product_summary"][$product]["total_quantity"] += $qty;

            $summary[$date]["product_summary"][$product]["customers"][] = [
                "name" => $customer,
                "order_quantity" => $qty,
            ];

            // CUSTOMER SUMMARY
            if (!isset($summary[$date]["customer_summary"][$customer])) {
                $summary[$date]["customer_summary"][$customer] = [
                    "customer" => $customer,
                    "total_quantity" => 0,
                    "products" => [],
                ];
            }

            $summary[$date]["customer_summary"][$customer]["total_quantity"] += $qty;

            $summary[$date]["customer_summary"][$customer]["products"][] = [
                "name" => $product,
                "quantity" => $qty,
            ];
        }

        $production_plans = [];

        foreach ($summary as $date => $data) {
            $production_plans[] = [
                "date" => $date,
                "product_summary" => array_values($data["product_summary"]),
                "customer_summary" => array_values($data["customer_summary"]),
            ];
        }

        // dd($production_plans);

        // ambil semua product variants
        $product_variants = ProductVariant::all()->toArray();

        return Inertia::render('Production/Board', [
            // 'start_date' => $start->format('Y-m-d'),
            // 'days' => collect(range(0,6))->map(function($i) use ($start, $grouped){
            //     $date = $start->copy()->addDays($i)->format('Y-m-d');
            //     return [
            //         'date' => $date,
            //         'tasks' => $grouped->get($date, []),
            //     ];
            // }),
            'production_plans' => $production_plans,
            'product_variants' => $product_variants,
            // 'daily_tasks'  => $daily_tasks,
            // 'customer_summary' => $customer_summary,
            // 'product_summary'  => $product_summary,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        foreach ($request->tasks as $task) {
        ProductionTask::where('id', $task['id'])
            ->update([
                'position' => $task['position'],
                'production_date' => $request->date
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * 
     */
    public function addProductionDate(Request $request) {
        // Validasi input
        $validated = $request->validate([
            'production_date' => ['required', 'date'],
        ]);

        $isProductionDateExist = ProductionTask::where('production_date', $validated['production_date'])->first();
        if ($isProductionDateExist) {
            return redirect()->back()->with('error', 'Production date is already exist!');
        }
        /**
         * Sebenarnya di database, tasks dengan production_date yang sama diperbolehkan.
         * Syarat ini hanya berlaku pada fungsi ini saja,
         * karena fungsi ini digunakan untuk membuat kolom daily_tasks pada Board.vue
         */

        ProductionTask::create([
            'production_date' => $validated['production_date']
        ]);

        if (!$validated) {
            dd('Validation failed!');
        }
        
        // dd($validated);

        // Jika validasi lolos, lanjut proses
        // Misal simpan ke database
        // ProductionDate::create($validated);

        // return response()->json([
        //     'message' => 'Production date added successfully.',
        //     'data' => $post,
        // ]);

        return redirect()->route('production.index')->with('success', 'Production date added successfully');
    }
}
