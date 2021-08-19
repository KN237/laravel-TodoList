@extends('todos.app')  

@section('titre')
    | Liste des taches
@endsection

@section('contenu')

<div class="liste">

 <div class="head" style="display: flex;align-items:center;justify-content:space-around;"><h3 style="font-weight: bold">Liste des choses à faires</h3> <a href="/todos/create"><i class="fas fa-plus-circle" style="color: rgb(51, 177, 235)"></i> </a></div> 
 <hr>
 <div class="body">


    @forelse ($todos as $todo)

    <div class="content" style="display: flex;justify-content:space-between; padding:5%">

        @if($todo->effectue==true) <a href="/todos/do/{{$todo->id}}"><i class="fas fa-check" style="color:rgba(48, 236, 142, 0.842);"></i></a><a href="/todos/show/{{$todo->id}}" style="text-decoration: none; color:inherit">{{$todo->titre}}</a> <a href="/todos/edit/{{$todo->id}}" ><i class="fas fa-pencil-alt" style="color:rgb(24, 135, 240);"></i></a>  <a href="/todos/delete/{{$todo->id}}"><i class="fas fa-times" style="color: rgba(235, 22, 22, 0.555)"></i></a>
    
        @else

        <a href="/todos/do/{{$todo->id}}"><i class="fas fa-check" style="color:rgba(51, 53, 52, 0.644);"></i></a> <a href="/todos/show/{{$todo->id}}" style="text-decoration: none; color:inherit">{{$todo->titre}}</a> <a href="/todos/edit/{{$todo->id}}" ><i class="fas fa-pencil-alt" style="color:rgb(51, 177, 235);"></i></a> <a href="/todos/delete/{{$todo->id}}"><i class="fas fa-times" style="color: rgba(235, 22, 22, 0.555)"></i></a>
    
        @endif
        
    </div>
        
   

 @empty

 <div class="content" style="display: flex;justify-content:center; padding:5%">

    <p>Liste vide, veuillez ajouter des éléments</p>

</div>

 @endforelse
    
 </div>

</div>
    
@endsection