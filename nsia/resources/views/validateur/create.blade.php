@extends('layouts.design')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Validateurs</h1>
         </div>
       </div>
     </div>
    </div>

    <section class="content" style="height:50%;width:700px; " >
       <div class="card" class="m-auto">
           <div class="card-header">
             <h3 class="card-title">Ajouter un validateur</h3> <br/>

             <!-- /.card-header -->
           <div class="card-body">
               <form action="{{ route('validation.store') }}" method="POST" >
                   @csrf
                   @method('POST')

                   @if (session()->has('message'))
                   <span class="text-success">{{ session('message') }}</span>
                   @endif
                  </div>
                        <div class="form-group">
                            <label for="nom">Nom et prenoms du validateur</label>
                            <select class="form-control" name="nom" id="nom">
                                @foreach($employes as $employe)
                                    <option value="{{ $employe->id }}">{{ $employe->nomEmploye }} {{ $employe->prenomEmploye }} </option>
                                @endforeach
                            </select>
                        </div>
                        @error('nom')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror


                        <div class="form-group">
                            <label for="">Niveau de validation</label>
                           <select name="niveau" id="niveau">
                                 <option value="1 : Comptable">1 : Comptable</option>
                                 <option value="2 : Secretaire">2 : Secretaire</option>
                                 <option value="3 : Directeur">3 : Directeur</option>
                           </select>
                            @error('niveau')
                            <span class="text-danger">{{ $message }}</span> <br> <br>
                            @enderror
                        </div>

                     <input type="submit" value="Ajouter" class="btn btn-outline-primary">
                     <a href="{{ route('validation.index') }}" class="btn btn-outline-danger">Annuler</a>

             </form>
           </div>
       </div>
    </section>

   </div>





 @endsection
