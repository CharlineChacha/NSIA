@extends('layouts.design')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Employes</h1>
         </div>
       </div>
     </div>
    </div>

    <section class="content" style="height:50%;width:700px; " >
       <div class="card" class="m-auto">
           <div class="card-header">
             <h3 class="card-title">Ajouter un employe</h3> <br/>
               @if (session()->has('message'))
               <span class="text-success">{{ session('message') }}</span>
               @endif
           </div>
             <!-- /.card-header -->
           <div class="card-body">
               <form action="{{ route('employe.store') }}" method="POST" enctype="multipart/form-data">
                   @csrf
                   @method('POST')

                     <div class="form-group">
                       <label for="">Nom </label>
                       <input type="text" class="form-control" value="{{ old('nom') }}" name="nom" placeholder="Entrer le nom ">
                       @error('nom')
                       <span class="text-danger">{{ $message }}</span>
                       @enderror

                       <div class="form-group">
                        <label for="">Prenom </label>
                        <input type="text" class="form-control" value="{{ old('prenom') }}" name="prenom" placeholder="Entrer le prenom">
                        @error('prenom')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="">Email </label>
                            <input type="email" class="form-control" value="{{ old('mail') }}" name="mail" placeholder="Entrer l'email">
                            @error('mail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="">Mot de passe </label>
                            <input type="password" class="form-control" value="{{ old('pass') }}" name="pass">
                            @error('pass')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="">Numero de telephone </label>
                            <input type="tel" class="form-control" value="{{ old('num') }}" name="num" >
                            @error('num')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="mb-3">
                            <label for="">Photo </label>
                            <input type="file" accept=".png, .jpg, .jpeg" aria-label="file example" class="form-control" value="{{ old('image') }}" name="image" placeholder="Joindre une photo" required>
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                     </div>

                     <div class="form-group">
                        <label for="poste">Selectionner un poste</label>
                        <select class="form-control" name="poste" id="poste">
                            @foreach($postes as $poste)
                                   <option value="{{ $poste->id }}">{{ $poste->nomposte }}</option>
                            @endforeach
                        </select>
                      </div>
                      @error('poste')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror

                     <input type="submit" value="Ajouter" class="btn btn-outline-primary">
                       <a href="{{ route('employe.index') }}" class="btn btn-outline-danger">Annuler</a>

             </form>
           </div>
       </div>
    </section>

   </div>





 @endsection
