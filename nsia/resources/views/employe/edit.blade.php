@extends('layouts.design')


@section('content')


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div  class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Employes</h1>
          </div>
        </div>
      </div>
    </div>


            <div class="col-md-6">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Modifier un employe</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                    @if (session()->has('message'))
                <span class="text-success">{{ session('message') }}</span>
                @endif
                  </div>
                  <div class="card-body">
                    <form action="{{ route('employe.update', $employe->id) }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                        <div class="form-group">
                            <label for="">Nom </label>
                            <input type="text" class="form-control" value="{{$employe->nomEmploye}}"  name="nom" placeholder="Entrer le nom de l'employe">
                            @error('nom')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="">Prenom </label>
                            <input type="text" class="form-control" value="{{$employe->PrenomEmploye}}"  name="prenom" placeholder="Entrer le prenom de l'employe" >
                            @error('prenom')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>


                          <div class="form-group">
                            <label for="">Email </label>
                            <input type="text" class="form-control" value="{{$employe->mailEmploye}}"  name="mail" placeholder="Entrer le mail de l'employe" >
                            @error('mail')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>


                          <div class="form-group">
                            <label for="">Mot de passe </label>
                            <input type="password" class="form-control" value="{{$employe->password}}"  name="pass" placeholder=" mot de passe de l'employe" >
                            @error('pass')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>


                          <div class="form-group">
                            <label for="">Numero de téléphone </label>
                            <input type="tel" class="form-control" value="{{$employe->numeroTelinterne}}"  name="numero" placeholder="" >
                            @error('numero')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>


                          <div class="form-group">
                            <label for="">Photo </label>
                            <input type="file" class="form-control" value="{{$employe->PhotoEmploye}}"  name="photo" placeholder="choisissez une photo " >
                            @error('photo')
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
                      <input type="submit" value="Modifier" class="btn btn-outline-primary">
                      <a href="{{ route('employe.index') }}" class="btn btn-outline-danger">Annuler</a>
                    </form>

                  </div>

                </div>






@endsection
