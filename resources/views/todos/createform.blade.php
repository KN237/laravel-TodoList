@extends('todos.app')  

@section('titre')
    | Ajouter un tache
@endsection

@section('contenu')

<div class="liste">

 <div class="head" style="display: flex;align-items:center;justify-content:center;"><h3 style="font-weight: bold; margin-right:5%">Ajouter une tache</h3> <a href="/todos/index" style="color:rgb(51, 177, 235) "><i class="fas fa-undo-alt"></i></a></div> 
 <hr>
 <div class="body">

    @if( session()->has('message'))
<center>
    <div class="alert" style="background: rgba(129, 248, 145, 0.596); width:70%; height:60px; margin-bottom:5%;margin-top:10%; padding:5%;box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.329);">
        
        {{ session()->get('message')}}

    </div></center>

    @endif


    @if( session()->has('error'))

    <center><div class="alert" style="background: rgba(247, 71, 80, 0.596); width:70%; height:60px; margin-bottom:5%;margin-top:10%; padding:5%;box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.329);">

        {{ session()->get('message')}}

    </div></center>

    @endif

    @if ($errors->any())

    <center><div class="alert" style="background: rgba(243, 28, 39, 0.274); width:70%; height:60px; margin-bottom:5%;margin-top:10% ;padding:5%;box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.329);">

        @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach

    </div> </center>

    @endif

    

<div class="form">

    <form action="/todos/create" method="post">
@csrf
        <input type="text" name="titre" placeholder="entrez le libellé de la tache" style="grid-area:ti; margin-bottom:2%;height:40px;">

        <textarea name="description" placeholder="entrez une description de la tache" maxlength="100" style="grid-area:des;margin-bottom:2%;resize:none;height:120px;"></textarea>

        <i class="fas fa-plus-circle" style="color: rgb(51, 177, 235);grid-area:pl; margin:5%;display:none;"></i>

        <button style="grid-area:btn;height:40px;"> Enregistrer </button>

    </form>
    

</div>
    
 </div>

</div>
    
@endsection