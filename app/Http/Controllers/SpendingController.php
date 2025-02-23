<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Models\Spending;


class SpendingController extends Controller
{
    public function index()
    {
        $tableData = Spending::select('id','date', 'amount', 'category')->get()->toArray();
        //Aquí la lógica de negocio para el index
        return view('spending.index',['title' => 'My spendings', 'tableData' => $tableData, 'pagina'=>'spending' ,'anyadirSpending' => ['type' => 'a', 'enlace' =>'https://laravel.com/']]);
        
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
        $validator = $request->validate([
            'date' => 'required',
            'amount' => 'required|min:1|decimal:2',
            'category' => 'required|in:impuestos,compras',
        ]);
        
        Spending::create([
            //'date' => now(),
            'date' => $request->date,
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
        $spending = Spending::find($id)->get()->toArray();
        return view('spending.show', ['title' => 'My spendings', 'title2'=>'spending: '.$id, 'spending' => $spending]);    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $spending = Spending::find($id)->get()->toArray();
        return view('spending.edit', ['title' => 'My spendings', 'title2'=>'spending: '.$id, 'spending' => $spending]);    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'date' => 'required',
            'amount' => 'required|min:1|decimal:2',
            'category' => 'required|in:ingresos,pagas',
        ]);
        
        $spending = Spending::find([
            //'date' => now(),
            'date' => $request->date,
            'amount' => $request->amount,
            'category' => $request->category,
        ]);

        return redirect('spending');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
