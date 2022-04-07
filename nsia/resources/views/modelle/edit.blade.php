@extends('layouts.design')


@section('content')


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div  class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Models des consommables</h1>
          </div>
        </div>
      </div>
    </div>


            <div class="col-md-6">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Modifier un model</h3>
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
                    <form action="{{ route('modelle.update', $modelle->id) }}" method="POST">
                          @csrf
                          @method('PUT')


                       <div class="form-group">
                        <label for="consommable">Selectionner un consommable</label>
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
                            <label for="">Reference du model</label>
                            <input type="number" class="form-control" value="{{$modelle->reference}}"  name="reference" placeholder="Entrer la reference du model">
                            @error('reference')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>


                          <div class="form-group">
                            <label for="">Details</label>
                            <textarea name="detail" id="detail" class="form-control" value="{{$modelle->detailModel}}"  cols="90" rows="5" placeholder="Entrer les details..."></textarea>
                            @error('detail')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <input type="submit" value="Modifier" class="btn btn-outline-primary">
                           <a href="{{ route('modelle.index') }}" class="btn btn-outline-Danger">Annuler</a>
                    </form>

                  </div>

                </div>






@endsection
