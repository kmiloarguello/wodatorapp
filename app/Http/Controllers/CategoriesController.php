<?php
namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    
    public function index()
    {
       

        $categories = Category::all();        
       return view('categories.index', ['categories'=> $categories]);  
       
    }
    
   
     
    public function show(Category $category)
    {
        //
       
        $category = Category::find($category->id);
        return view('categories.show', ['category'=>$category]);
    }
    
    
    
}

