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
        $start = today();
        $end = today()->addDays(6);

        // ambil semua task dalam range 7 hari
        $tasks = ProductionTask::whereBetween('production_date', [$start, $end])
            ->orderBy('production_date')
            ->orderBy('position')
            ->get();

        // group by date untuk kenyamanan
        $grouped = $tasks->groupBy('production_date->format("Y-m-d")');

        // ambil semua product variants
        $product_variants = ProductVariant::all();

        return Inertia::render('Production/Board', [
            'start_date' => $start->format('Y-m-d'),
            'days' => collect(range(0,6))->map(function($i) use ($start, $grouped){
                $date = $start->copy()->addDays($i)->format('Y-m-d');
                return [
                    'date' => $date,
                    'tasks' => $grouped->get($date, []),
                ];
            }),
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
        $post = $request->post();
        // dd($post);

        return response()->json([
            'message' => 'Date saved successfully',
            'data' => $post
        ]);
    }
}
