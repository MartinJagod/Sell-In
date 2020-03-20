@extends('layouts.app')

@section('content')

<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">

		  	<p> SELECCIONAR EMPRESA </p>

             <!-- <div class="card">
                  <div class="card-header">{{ __('Seleccionar Empresa') }}</div>

                  <div class="card-body">
                  <ul class="list-unstyled">-->
                  <div class="card-group">
                  <div class="row">
                      @foreach ($empresas as $empresa)
                       <div class="card col-md-3" height="150px">
                         <img src="\storage\{{$empresa['logo']}}" class="card-img-top" alt="{{$empresa['name']}}">
                         <div class="card-body">
                           <a class="card-title font-weight-bold font-italic"  href="/listadoProductos/{{$empresa['id']}}">{{$empresa['name']}}</a>
                           <p class="card-text">productos de .....</div>
                         <div class="card-footer">
                           <small class="text-muted">Last updated 3 mins ago</small>
                         </div>
                       </div>
                      @endforeach
                      </ul>
                                  @error('logo')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
    @endsection