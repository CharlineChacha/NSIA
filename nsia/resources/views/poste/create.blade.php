@extends('layouts.design')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Postes</h1>
         </div>
       </div>
     </div>
    </div>

    <section class="content" style="height:50%;width:700px; " >
       <div class="card" class="m-auto">
           <div class="card-header">
             <h3 class="card-title">Ajouter un poste</h3> <br/>
               @if (session()->has('message'))
               <span class="text-success">{{ session('message') }}</span>
               @endif
           </div>
             <!-- /.card-header -->
           <div class="card-body">
               <form action="{{ route('poste.store') }}" method="POST">
                   @csrf
                   @method('POST')

                   <div class="form-group">
                    <label for="service">Selectionner le service</label>
                    <select class="form-control" name="nomsev" id="nomsev">
                        @foreach($services as $service)
                               <option value="{{ $service->id }}">{{ $service->nomservice }}</option>
                        @endforeach
                    </select>
                  </div>
                  @error('nomsev')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror

                     <div class="form-group">
                       <label for="">Nom du poste</label>
                       <input type="text" class="form-control" value="{{ old('nom') }}" name="nom" placeholder="Entrer le nom du poste">
                       @error('nom')
                       <span class="text-danger">{{ $message }}</span>
                       @enderror


                       <div class="form-group">
                        <label for="">Nom de l'occupant </label>
                        <input type="text" class="form-control" value="{{ old('nomuser') }}" name="nomuser" placeholder="Entrer le nom de l'occupant du poste">
                        @error('nomuser')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="">Date de debut de l'occupation du poste</label>
                            <input type="date" class="form-control" value="{{ old('debut') }}" name="debut">
                            @error('debut')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                                <label for="">Date de fin de l'occupation du poste</label>
                                <input type="date" class="form-control" value="{{ old('fin') }}" name="fin">
                                @error('fin')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror

                     </div>
                     <input type="submit" value="Ajouter" class="btn btn-outline-primary">
                     <a href="{{ route('poste.index') }}" class="btn btn-outline-danger">Annuler</a>

             </form>
           </div>
       </div>
    </section>

   </div>





 @endsection
