<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Models\Spending;


class SpendingController extends Controller
{
    public function index()
    {
        // $tableData = [
        //     'heading' => [
        //         'date','category','amount'
        //     ],
        //     'data' => [
        //         ['12/12/2012','salary','2500'],
        //         ['12/01/2013','salary','2500'],
        //         ['12/02/2013','salary','2550']
        //     ]
        // ]; 

        //$tableData = DB::table("spending")->select('date', 'amount', 'category')->get()->toArray();
        $tableData = Spending::select('date', 'amount', 'category')->get()->toArray();
        
        //Aquí la lógica de negocio para el index
        return view('spending.index',['title' => 'My spendings', 'tableData' => $tableData, 'anyadirSpending' => ['type' => 'a', 'enlace' =>'https://laravel.com/']]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //return '<p>Esta es la página del create de spendings</p>';
        return view('spending.create', ['title' => 'My spendings']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric',
            'category' => 'required|in:impuestos,compras',
        ]);
        
        Spending::create([
            'date' => now(),
            'amount' => $request->amount,
            'category' => $request->category,
        ]);

        return redirect('spending');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return '<p>Esta es la página del show de spendings</p>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return '<p>Esta es la página del edit de spendings</p>';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
