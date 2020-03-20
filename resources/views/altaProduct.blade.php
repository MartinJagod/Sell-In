@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Alta Producto') }}</div>

                  <div class="card-body">
                      <form method="POST" action="{{ route('altaProduct') }}" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="id_brand">Empresa</label>
                            <div class="col-md-6">
                            <select class="form-control" id="id_brand" name="id_brand">
                            @foreach ($empresas as $empresa)
                              <option value="{{$empresa->id}}">{{$empresa['name']}}</option>
                            @endforeach
                            </select>
                          </div>
                        </div>
                          <div class="form-group row">
                              <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('code') }}</label>

                              <div class="col-md-6">
                                  <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>

                                  @error('code')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                              <div class="col-md-6">
                                  <input id="description" type="textarea" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                  @error('description')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="PVP" class="col-md-4 col-form-label text-md-right">{{ __('PVP') }}</label>

                              <div class="col-md-6">
                                  <input id="PVP" type="text" class="form-control @error('PVP') is-invalid @enderror" name="PVP" value="{{ old('PVP') }}" required autocomplete="PVP" autofocus>

                                  @error('PVP')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('photo') }}</label>

                              <div class="col-md-6">
                                  <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus>

                                  @error('photo')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>


                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Cargar') }}
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
