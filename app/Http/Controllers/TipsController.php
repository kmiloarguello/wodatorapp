<?php
namespace App\Http\Controllers;
use App\Tip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TipsController extends Controller
{
    
    public function index()
    {
        
       
        $tips = Tip::all();        
       return view('tips.index', ['tips'=> $tips]);  
    }
    
   
    public function busqueda(Request $req)
    {
        $tips= Tip::all();
        return view ('tips.index', compact ('tips'));
    }


    public function getBusqueda (Request $req)
    {
        if($req->ajax())
        {
            $find= Tip::where('name', 'LIKE','%' .$req->busqueda. '%' )->get();
            return response()->json($find);

        }
    }
   
    
    
   
}