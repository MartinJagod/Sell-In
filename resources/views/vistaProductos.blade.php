@extends('layouts.app')

@section('content')

<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">

		  	<p> SELECCIONAR PRODUCTOS </p>

             <!-- <div class="card">
                  <div class="card-header">{{ __('Seleccionar Empresa') }}</div>

                  <div class="card-body">
                  <ul class="list-unstyled">-->
                  <div class="card-group">
                      @foreach ($productos as $producto)
                           <div class="card col-md-4" height="150px">
                           <img src="\storage\{{$producto['photo']}}" class="card-img-top" alt="{{$producto['name']}}">
                           <div class="card-body">
                             <a class="card-title font-weight-bold font-italic"  href="#">{{$producto['name']}}</a>
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
    @endsection