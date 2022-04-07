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

     <section class="content" style="height:50%;width:700px; " >
        <div class="card" class="m-auto">
            <div class="card-header">
              <h3 class="card-title">Ajouter un departement</h3> <br/>
                @if (session()->has('message'))
                <span class="text-success">{{ session('message') }}</span>
                @endif
            </div>
              <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('departement.store') }}" method="POST">
                    @csrf
                    @method('POST')

                      <div class="form-group">
                        <label for="departement">Nom du departement</label>
                        <input type="text" class="form-control" value="{{ old('departement') }}" name="departement" placeholder="Entrer du departement">
                        @error('departement')
                        <span class="text-danger">{{ $message }}</span> <br> <br>
                        @enderror
                        <label for="departement">Nom du chef departement</label>
                        <input type="text" class="form-control" value="{{ old('chef') }}" name="chef" placeholder="Entrer du chef de departement">
                        @error('chef')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                      </div>
                      <input type="submit" value="Ajouter" class="btn btn-primary">

              </form>
            </div>
        </div>
     </section>

    </div>





 @endsection
