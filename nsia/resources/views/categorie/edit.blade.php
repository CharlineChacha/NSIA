@extends('layouts.design')


@section('content')


                    <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Categories</h1>
                            </div>
                            </div>
                        </div>
                        </div>

                     <div class="card card-secondary" style="height:50%;width:600px; ">
                        <div class="card-header">
                          <h3 class="card-title">Modifier la categorie </h3>

                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('categorie.update', $categorie->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                          <div class="form-group">
                            <label for="">Nom de la categorie</label> </br>
                            @if (session()->has('message'))
                            <span class="text-success">{{ session('message') }}</span>
                            @endif
                            <input type="text"  class="form-control" value="{{$categorie->nomCategorie}}" name="nomCategorie" placeholder="Entrer le nom de la categorie" >
                            @error('nomCategorie')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <input type="submit" value="Modifier" class="btn btn-outline-primary">
                       <a href="{{ route('categorie.index') }}" class="btn btn-outline-danger">Annuler</a>
                         </div>
                          </form>

                    </div>





@endsection
