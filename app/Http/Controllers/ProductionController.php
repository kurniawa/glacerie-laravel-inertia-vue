<?php

namespace App\Http\Controllers;

use App\Models\ProductionTask;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $start = today();
        // $end = today()->addDays(6);

        // ambil semua task dalam range 7 hari
        $tasks = ProductionTask::orderBy('production_date')->orderBy('customer')->orderBy('product')->get();
        // --------------------------------------------------------
        // 1. Group by production_date
        // --------------------------------------------------------

        $daily_tasks_by_date = $tasks->groupBy('production_date');


        // --------------------------------------------------------
        // 2. Group by CUSTOMER per production_date + total quantity
        // --------------------------------------------------------

        $daily_tasks_customer = $daily_tasks_by_date->map(function ($items) {

            return $items
                ->groupBy('customer')
                ->map(function ($customerItems) {

                    return [
                        'total_quantity' => $customerItems->sum('quantity'),
                        'orders'         => $customerItems->values(), // reset index
                    ];
                });
        });


        // --------------------------------------------------------
        // 3. Group by PRODUCT per production_date + total quantity
        // --------------------------------------------------------

        $daily_tasks_product = $daily_tasks_by_date->map(function ($items) {

            return $items
                ->groupBy('product')
                ->map(function ($productItems) {

                    return [
                        'total_quantity' => $productItems->sum('quantity'),
                        'orders'         => $productItems->values(),
                    ];
                });
        });

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
            'tasks' => $tasks,'daily_tasks_by_date'  => $daily_tasks_by_date,
            'daily_tasks_customer' => $daily_tasks_customer,
            'daily_tasks_product'  => $daily_tasks_product,
            'product_variants' => $product_variants,
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
