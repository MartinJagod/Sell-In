@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
    <div class="col-md-2" style="min-height: 80vh;">
        <div class="card  fondo">

                <ul class="list-unstyled">

                <li class="list-item">

                </li>
                <li class="list-item">
                    <a class="btn btn-link" id="Empresas" href="/listadoEmpresas">
                    <h5  style="font-size:1em; color:black"><i class="fas fa-user-circle"></i>Empresas
                    </h5>
                    </a>
                </li>

                <li class="list-item">
                    <a class="btn btn-link" id="Notificaciones" href="#">
                    <h5  style="font-size:1em; color:black"><i class="fas fa-user-circle"></i>Categorias
                    </h5>
                    </a>
                </li>
                <li class="list-item">
                    <a class="btn btn-link" id="Notificaciones" href="#">
                    <h5  style="font-size:1em; color:red"><i class="fas fa-user-circle"></i>Ofertas y Promos</h5>
                    </a>
                </li>
                    <li class="list-item">
                    <a class="btn btn-link" id="perfil" href="#">
                    <h5  style="font-size:1em ; color:black"><i class="fas fa-user-circle"></i>Perfil</h5>
                    </a>
                </li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="card" style="display:inline-block">
                <div class="card-header"  >
                <p > Bienvenido, más de 5000 productos de 20 categorias disponibles!!!</p>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                         <img src="\storage\Daewoo.jpg" class="d-block w-100" alt="daewoo">
                     </div>
                    <div class="carousel-item">
                      <img src="\storage\Asahi.png" class="d-block w-100" alt="Asahi">
                      </div>
                     <div class="carousel-item">
                  <img src="\storage\Agroytec.png" class="d-block w-100" alt="Agroytec">
                 </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
                </a>
                 <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                 </a>
                </div>
                <div class="card-body"   >

                        <div class="alert alert-success"  role="alert" >

                        </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
