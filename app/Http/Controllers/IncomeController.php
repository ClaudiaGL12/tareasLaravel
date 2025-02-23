<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Models\Income;
use Illuminate\Http\RedirectResponse;


class IncomeController extends Controller
{
    public array $links= [
        "My Incomes" => "incomes",
        "My Spending" => "spending",
        "Categories" => "categories"
    ];
    //para compartir con todas las vistas
    public function __construct()
    {
        view()->share('links', $this->links);
    }

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
        $tableData = Income::select('id','date', 'amount', 'category')->get()->toArray();
        //$tableData = Income::all();
        //Aquí la lógica de negocio para el index
        return view('income.index',['title' => 'My incomes', 'tableData' => $tableData, 'pagina' => 'incomes', 'anyadirIncome' => ['type' => 'a', 'enlace' =>'https://laravel.com/']]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('income.create', ['title' => 'New income']);
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
        $income = Income::find($id)->get()->toArray();
        return view('income.show', ['title' => 'My incomes', 'title2' => 'income: '.$id , 'income' => $income]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $income = Income::find($id)->get()->toArray();
        return view('income.edit', ['title' => 'My incomes', 'title2' => 'income: '.$id , 'income' => $income]);
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
        
        $income = Income::find([
            //'date' => now(),
            'date' => $request->date,
            'amount' => $request->amount,
            'category' => $request->category,
        ]);

        return redirect('incomes');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
