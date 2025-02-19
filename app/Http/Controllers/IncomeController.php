<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Models\Income;
use Illuminate\Http\RedirectResponse;


class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

        //$tableData = DB::table("incomes")->select('date', 'amount', 'category')->get()->toArray();
        $tableData = Income::select('date', 'amount', 'category')->get()->toArray();
        //Aquí la lógica de negocio para el index
        return view('income.index',['title' => 'My incomes', 'tableData' => $tableData, 'anyadirIncome' => ['type' => 'a', 'enlace' =>'https://laravel.com/']]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dump($request);
        return view('income.create', ['title' => 'New income', 'title' => 'My incomes']);
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request) //: RedirectResponse
    {
        $validator = $request->validate([
            'date' => 'required',
            'amount' => 'required|min:1|decimal:2',
            'category' => 'required|in:ingresos,pagas',
        ]);
        
        Income::create([
            //'date' => now(),
            'date' => $request->date,
            'amount' => $request->amount,
            'category' => $request->category,
        ]);

        return redirect('incomes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return '<p>Esta es la página del show de incomes</p>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return '<p>Esta es la página del edit de incomes</p>';
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
