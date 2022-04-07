@extends('layouts.design')


@section('content')


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div  class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contacts</h1>
          </div>
        </div>
      </div>
    </div>


            <div class="col-md-6">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Modifier un contact</h3>
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
                    <form action="{{ route('contact.update', $contact->id) }}" method="POST">
                          @csrf
                          @method('PUT')

                          <div class="form-group">
                            <label for="fournisseur">Selectionner un fournisseur</label>
                            <select class="form-control" name="fournisseur" id="fournisseur">
                                @foreach($fournisseurs as $fournisseur)
                                       <option value="{{ $fournisseur->id }}">{{ $fournisseur->nomFournisseur }}</option>
                                @endforeach
                            </select>
                          </div>
                          @error('fournisseur')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror

                        <div class="form-group">
                            <label for="">Contact</label>
                            <input type="text" class="form-control" value="{{$contact->numeroTel}}"  name="contact">
                            @error('contact')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <input type="submit" value="Modifier" class="btn btn-outline-primary">
                          <a href="{{ route('contact.index') }}" class="btn btn-outline-danger">Annuler</a>
                    </form>

                  </div>

                </div>






@endsection
