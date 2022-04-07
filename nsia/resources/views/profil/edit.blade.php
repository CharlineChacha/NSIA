@extends('layouts.design')


@section('content')


                    <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Profils</h1>
                            </div>
                            </div>
                        </div>
                        </div>

                     <div class="card card-secondary" style="height:50%;width:600px; ">
                        <div class="card-header">
                          <h3 class="card-title">Modifier le nom du profil </h3>

                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('profil.update', $profil->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                          <div class="form-group">
                            <label for="">Nom du profil</label> </br>
                            @if (session()->has('message'))
                            <span class="text-success">{{ session('message') }}</span>
                            @endif
                            <input type="text"  class="form-control" value="{{$profil->libProfil}}" name="libProfil" placeholder="Entrer le nom du profil" >
                            @error('libProfil')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <input type="submit" value="Modifier" class="btn btn-primary">
                         </div>
                          </form>

                    </div>





@endsection
