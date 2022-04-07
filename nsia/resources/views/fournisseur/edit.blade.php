@extends('layouts.design')


@section('content')


                    <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Fournisseurs</h1>
                            </div>
                            </div>
                        </div>
                        </div>

                     <div class="card card-secondary" style="height:50%;width:600px; ">
                        <div class="card-header">
                          <h3 class="card-title">Modifier le fournisseur </h3>

                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('fournisseur.update', $fournisseur->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                          <div class="form-group">
                            <label for="">Nom du fournisseur</label> </br>
                            @if (session()->has('message'))
                            <span class="text-success">{{ session('message') }}</span>
                            @endif
                            <input type="text"  class="form-control" value="{{$fournisseur->nomFournisseur}}" name="fournisseur" placeholder="Entrer le nom du fournisseur" >
                            @error('fournisseur')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="">Adresse du fournisseur</label> </br>
                            @if (session()->has('message'))
                            <span class="text-success">{{ session('message') }}</span>
                            @endif
                            <input type="text"  class="form-control" value="{{$fournisseur->adresseFournisseur}}" name="adresse" placeholder="Entrer l'adresse du fournisseur" >
                            @error('adresse')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <input type="submit" value="Modifier" class="btn btn-outline-primary">
                          <a href="{{ route('fournisseur.index') }}" class="btn btn-outline-danger">Annuler</a>
                         </div>
                          </form>


                    </div>





@endsection
