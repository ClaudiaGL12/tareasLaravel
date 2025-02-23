<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Spending;
use App\Models\Income;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public array $links= [
        "Categories" => "categories",
        "My Incomes" => "incomes",
        "My Spending" => "spending"
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
        $categories = Category::all();

        return view('categories.index', ['title' => 'Categories', 'categories' => $categories]);
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
        $incomes = Income::where('category_id', $id)->with('category')->get()->map(function($incomes) {
            return [
                'date' => $incomes->date,
                'category' => ucfirst($incomes->category->name),
                'amount' => $incomes->amount,
                'id' => $incomes->id
            ];
        });

        $spending = Spending::where('category_id', $id)->with('category')->get()->map(function($spending) {
            return [
                'date' => $spending->date,
                'category' => ucfirst($spending->category->name),
                'amount' => $spending->amount,
                'id' => $spending->id
            ];
        });

        $title = Category::where('id', $id)->get('name')[0]->name;

        return view('categories.show', ['title' => ucfirst($title), 'incomes' => $incomes, 'spending' => $spending, 'paginas' => ['incomes','spending']]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
