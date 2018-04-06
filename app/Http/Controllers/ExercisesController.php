<?php
namespace App\Http\Controllers;
use App\Exercise ;
use App\Category ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ExercisesController extends Controller
{
  
     public function index()
     {
       
        $exercises = Exercise::all();

        
       return view('exercises.index', ['exercises'=> $exercises]);  


        
    }
     
 
     
     public function create( $category_id = null )
     {
         
         $categories = null;
         if(!$category_id){
            $categories = Category::where('user_id', Auth::user()->id)->get();
         }
 
         return view('exercises.create',['category_id'=>$category_id, 'categries'=>$categories]);
     }
 
     
     public function store(Request $request)
     {
         
 
         if(Auth::check()){
             $exercise = Exercise::create([
                 'name' => $request->input('name'),
                 'description' => $request->input('description'),
                 'category_id' => $request->input('category_id'),
                 'user_id' => Auth::user()->id
             ]);
 
 
             if($exercise){
                 return redirect()->route('exercises.show', ['exercises'=> $exercise->id])
                 ->with('success' , 'You have an other one');
             }
 
         }
         
             return back()->withInput()->with('errors', 'Error creating new pet');
 
     }
    
 
     
 public function show(Exercise $exercise, Request $req)
{
    

    if (isset($req->detalle)) {
        return view('exercises.go', compact('exercise'));
    } else {
        return view('exercises.show', compact('exercise'));
    }
}
 
     
     public function edit(Exercise $exercise)
     {
         
         $exercise = Exercise::find($exercise->id);
         
         return view('exercises.edit', ['exercise'=>$exercise]);
     }
 
     
     public function update(Request $request, exercise $exercise)
     {
        
       
 
       $exerciseUpdate = Exercise::where('id', $exercise->id)
                                 ->update([
                                         'name'=> $request->input('name'),
                                         'description'=> $request->input('description')
                                 ]);
 
       if($exerciseUpdate){
           return redirect()->route('exercises.show', ['exercise'=> $exercise->id])
           ->with('success' , 'An other exercise');
       }
       
       return back()->withInput();
 
 
       
     }
 
     
     public function destroy(Exercise $exercise)
     {
         
 
         $findexercise = Exercise::find( $exercise->id);
         if($findexercise->delete()){
             
             
             return redirect()->route('exercises.index')
             ->with('success' , 'It is gone');
         }
 
         return back()->withInput()->with('error' , 'something happend');
         
 
     }

     public function search(Request $req)
    {
        $exercises= Exercise::all();
        return view ('exercises.index', compact ('exercises'));
    }


    public function getSearch (Request $req)
    {
        if($req->ajax())
        {
            $find= Exercise::where('name', 'LIKE','%' .$req->search. '%' )->get();
            return response()->json($find);

        }
    }

    public function favoriteExercise(Exercise $exercise)
    {
        Auth::user()->favorites()->attach($exercise->id);

        return back();
    }

        public function unFavoriteExercise(Exercise $exercise)
    {
        Auth::user()->favorites()->detach($exercise->id);

        return back();
    }

    public function getRandomExercises() {
        $exercise = Exercise::inRandomOrder()->first();
        return redirect()->route('exercises.show', ["id" => $exercise->id]);
    }



   
}