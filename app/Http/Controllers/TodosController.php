<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Description;

class TodosController extends Controller
{
    public function index(){

        $todos=Todo::all();

        return view('todos.index',compact('todos'));
    }

    public function showCreateForm(){

        return view('todos.createform');
    }

    public function store(Request $request){
          
      $validate=$request->validate([
            'titre'=>"required",
            'description'=>"required"
      ]);

        

        if( $validate){

        $todo = new Todo();
        $todo->titre=$request->titre;
        $todo->save();

        $description = new Description();
        $description->todo_id=$todo->id;
        $description->text=$request->description;
        $description->save();

        $request->session()->flash("message","Ajout éffectué avec succès");
        
        return redirect()->back();

        }

        else {

            return redirect()->back()->with('error','Erreur, veuillez réessayer');            
        }
        
    }

    public function destroy($id){

        Description::where('todo_id',$id)->delete();
        Todo::where('id',$id)->delete();
        $todos=Todo::all();
        return view('todos.index',compact('todos'));
    }

    public function show($id){

        $todo=Todo::where('id',$id)->first();
        $descriptions=Description::where('todo_id',$id)->get();

        return view('todos.show',compact('todo','descriptions'));

    }

    public function edit($id){

        $todo=Todo::where('id',$id)->first();
        $description=Description::where('todo_id',$id)->first();

        return view('todos.edit',compact('todo','description'));

    }

    public function update(Request $request,$id){
          
        $validate=$request->validate([
              'titre'=>"required",
              'description'=>"required"
        ]);
  
          
  
          if( $validate){
  
          $todo = Todo::where('id',$id)->first();
          $todo->titre=$request->titre;
          $todo->save();
  
         if($description = Description::where('todo_id',$id)->first()){
          $description->text=$request->description;
          $description->save();}

          else {
            $description = new Description; 
            $description->todo_id=$request->$id;
            $description->text=$request->description;
            $description->save();

          }
  
          $request->session()->flash("message","Modification éffectuée avec succès");
          
          return redirect()->back();
  
          }
  
          else {
  
              return redirect()->back()->with('error','Erreur, veuillez réessayer');            
          }
          
      }

      public function do(Request $request,$id){
          
  
      $todo = Todo::where('id',$request->id)->first();

          if($todo->effectue==false){
          $todo->effectue=true;
          $todo->save();
          }

          else{

            $todo->effectue=false;
            $todo->save();

          }
          
          return redirect()->back();
  
          }
  


  
}
