@extends('layouts.design')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Consommables</h1>
         </div>
       </div>
     </div>
    </div>

    <section class="content" style="height:50%;width:700px; " >
       <div class="card" class="m-auto">
           <div class="card-header">
             <h3 class="card-title">Ajouter un consommable</h3> <br/>
               @if (session()->has('message'))
               <span class="text-success">{{ session('message') }}</span>
               @endif
           </div>
             <!-- /.card-header -->
           <div class="card-body">
               <form action="{{ route('consommable.store') }}" method="POST">
                   @csrf
                   @method('POST')

                     <div class="form-group">
                       <label for="">Nom du consommable</label>
                       <input type="text" class="form-control" value="{{ old('nom') }}" name="nom" placeholder="Entrer le nom du consommable">
                       @error('nom')
                       <span class="text-danger">{{ $message }}</span>
                       @enderror

                       <div class="form-group">
                         <label for="categorie">Selectionner votre catégorie</label>
                         <select class="form-control" name="categorie" id="categorie">
                             @foreach($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->nomCategorie }}</option>
                             @endforeach
                         </select>
                       </div>
                       @error('categorie')
                       <span class="text-danger">{{ $message }}</span>
                       @enderror

                     </div>
                     <input type="submit" value="Ajouter" class="btn btn-outline-primary">
                       <a href="{{ route('consommable.index') }}" class="btn btn-outline-danger">Annuler</a>

             </form>
           </div>
       </div>
    </section>

   </div>





 @endsection
