@extends('layouts.design')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Models des consommables</h1>
         </div>
       </div>
     </div>
    </div>

    <section class="content" style="height:50%;width:700px; " >
       <div class="card" class="m-auto">
           <div class="card-header">
             <h3 class="card-title">Ajouter un model de consommables</h3> <br/>
               @if (session()->has('message'))
               <span class="text-success">{{ session('message') }}</span>
               @endif
           </div>
             <!-- /.card-header -->
           <div class="card-body">
               <form action="{{ route('modelle.store') }}" method="POST">
                   @csrf
                   @method('POST')

                       <div class="form-group">
                         <label for="consommable">Selectionner le consommable</label>
                         <select class="form-control" name="consommable" id="consommable">
                             @foreach($consommables as $consommable)
                                    <option value="{{ $consommable->id }}">{{ $consommable->nomConsommable }}</option>
                             @endforeach
                         </select>
                       </div>
                       @error('consommable')
                       <span class="text-danger">{{ $message }}</span>
                       @enderror

                      <div class="form-group">
                        <label for="">Reference</label>
                        <input type="number" class="form-control" value="{{ old('reference') }}" name="reference">
                        @error('reference')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror

                        <div class="form-group">
                            <label for="">Details</label>
                            <textarea name="detail" id="detail"  class="form-control" value="{{ old('detail') }}"  cols="90" rows="5" placeholder="Ajouter un detail..."></textarea>
                            @error('detail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                     </div>
                     <input type="submit" value="Ajouter" class="btn btn-outline-primary">
                     <a href="{{ route('modelle.index') }}" class="btn btn-outline-danger">Annuler</a>

             </form>
           </div>
       </div>
    </section>

   </div>





 @endsection
