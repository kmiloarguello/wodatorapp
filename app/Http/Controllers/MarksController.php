<?php
namespace App\Http\Controllers;
use App\Mark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarksController extends Controller
{
    
    public function index()
    {
        
        if( Auth::check() ){
            $marks = Mark::where('user_id', Auth::user()->id)->get();
             return view('marks.index', ['marks'=> $marks]);  
        }
        return view('auth.login');
    }
    
    public function create()
    {
        //
        return view('marks.create');
    }
   
    public function store(Request $request)
    {
        //
        if(Auth::check()){
            $mark = Mark::create([
                'name' => $request->input('name'),
                'time' => $request->input('time'),
                'description' => $request->input('description'),
                'user_id' => Auth::user()->id,
            ]);
            if($mark){
                return redirect()->route('marks.show', ['mark'=> $mark->id])
                ->with('success' , 'Welcome Family');
            }
        }
        
            return back()->withInput()->with('errors', 'Error creating new family');
    }
   
    public function show(Mark $mark)
    {
        
       
        $mark = Mark::find($mark->id);
        return view('marks.show', ['mark'=>$mark]);
    }
    
   
    
   
    
    public function destroy(Mark $mark)
    {
      
        $findMark = Mark::find( $Mark->id);
        if($findMark->delete()){
            
            
            return redirect()->route('marks.index')
            ->with('success' , 'Family deleted successfully');
        }
        return back()->withInput()->with('error' , 'Family could not be deleted');
        
    }
}