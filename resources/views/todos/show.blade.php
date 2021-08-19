@extends('todos.app')  

@section('titre')
    | {{$todo->titre}}
@endsection

@section('contenu')

<div class="liste">

 <div class="head" style="display: flex;align-items:center;justify-content:space-around;"><h3 style="font-weight: bold">{{$todo->titre}}</h3> <a href="/todos/index" style="color:rgb(51, 177, 235) "><i class="fas fa-undo-alt"></i></a></div> 
 <hr>
 <div class="body">

    @forelse($descriptions as $item)

    <p>
        {{$item['text']}} 
    </p>

    @empty

    <p>

        Liste Vide
        
    </p>
        
    @endforelse
    
 </div>

</div>
    
@endsection