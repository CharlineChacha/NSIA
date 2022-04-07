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
             <h3 class="card-title">Employe</h3> <br/>
               @if (session()->has('message'))
               <span class="text-success">{{ session('message') }}</span>
               @endif
           </div>
             <!-- /.card-header -->
           <div class="card-body">
               <form action="{{ route('journal.store') }}" method="POST" >
                   @csrf
                   @method('POST')


                        <div class="form-group">
                            <label for="">Nom et prenoms de l'employe</label>
                            <select class="form-control" name="nom" id="nom">
                                @foreach($employes as $employe)
                                    <option value="{{ $employe->id }}">{{ $employe->nomEmploye }} {{ $employe->prenomEmploye }} </option>
                                @endforeach
                            </select>
                        </div>
                        @error('nom')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror


                     <input type="submit" value="Ajouter" class="btn btn-outline-primary">
                     <a href="{{ route('journal.index') }}" class="btn btn-outline-danger">Annuler</a>

             </form>
           </div>
       </div>
    </section>

   </div>





 @endsection
