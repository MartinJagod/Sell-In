@extends('layouts.app')

@section('content')

<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">

		  	<p> SELECCIONAR PRODUCTOS </p>
                  <div class="card-group">
                  <div class="row justify-content-center">
                      @foreach ($productos as $producto)
                           <div class="card col-3"  height="150px">
                           <img src="\storage\{{$producto['photo']}}" class="card-img-top" alt="{{$producto['name']}}">
                           <div class="card-body">
                             <a class="card-title font-weight-bold font-italic"  href="#">{{$producto['name']}}</a>
                             <p class="card-text text-capitalize">{{$producto['description']}}</div>
                           <div class="card-footer">
                             <small class="text-muted font-weight-bold">PVP $ {{$producto['PVP']}}</small>
                           </div>
                         </div>
                      @endforeach
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