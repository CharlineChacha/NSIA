@extends('layouts.design')


@section('content')


                    <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Departements</h1>
                            </div>
                            </div>
                        </div>
                        </div>

                     <div class="card card-secondary" style="height:50%;width:600px; ">
                        <div class="card-header">
                          <h3 class="card-title">Modifier le departement </h3>
                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('departement.update', $departement->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                          <div class="form-group">
                            <label for="">Nom du departement</label> </br>
                            @if (session()->has('message'))
                            <span class="text-success">{{ session('message') }}</span>
                            @endif
                            <input type="text"  class="form-control" value="{{$departement->nomdep}}" name="nom" placeholder="Entrer le nom du departement" >
                            @error('nom')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="">Nom du chef de departement</label> </br>
                            @if (session()->has('message'))
                            <span class="text-success">{{ session('message') }}</span>
                            @endif
                            <input type="text"  class="form-control" value="{{$departement->nomchefdep}}" name="nomchef" placeholder="Entrer le nom du chef de departement" >
                            @error('nomchef')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <input type="submit" value="Modifier" class="btn btn-outline-primary">
                       <a href="{{ route('departement.index') }}" class="btn btn-outline-danger">Annuler</a>
                         </div>
                          </form>
                          </div>
                     </div>

@endsection
