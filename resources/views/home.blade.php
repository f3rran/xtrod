@extends('layouts.standard-content')

@section('content')
  <div class="card shadow-sm bg-white rounded">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link" href="#"><img width="22" height="22" src="{{ asset('icons/home.png') }}" alt="casa web icono" title="casa web icono"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Comunidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TOPs</a>
        </li>
      </ul>
    </div>
    <div class="card-body p-3 mb-5">
      <div class="row">
        <div class="col-5">
          <div class="row">
            <h5 class="col-3">Recientes</h5>
            <div class="col-8">
              <select name="category" id="categry" aria-placeholder="Seleccionar categoría" class="form-select ml-4">
                <option value="asd">asd</option>
                <option value="asd">asd</option>
                <option value="asd">asd</option>
                <option value="asd">asd</option>
                <option value="asd">asd</option>
              </select>
            </div>
          </div>
          <table class="table table-striped mt-2">
            <tr>
              <td>Icon</td>
              <td>Título largo no sé qué</td>
            </tr>
            <tr>
              <td>Icon</td>
              <td>Título largo no sé qué</td>
            </tr>
            <tr>
              <td>Icon</td>
              <td>Título largo no sé qué</td>
            </tr>
            <tr>
              <td>Icon</td>
              <td>Título largo no sé qué</td>
            </tr>
          </table>
        </div>
        <div class="col-4">
          <div class="row">
            <h5>Estadísticas</h5>
          </div>
          <table class="mt-2 w-100" style="font-size: 14px">
            <tr>
              <td style="width: 50%"><b>224.470</b> usuarios online</td>
              <td style="width: 50%"><b>224.470</b> miembros</td>
            </tr>
            <tr>
              <td><b>224.470</b> posts</td>
              <td><b>224.470</b> comentarios</td>
            </tr>
          </table>
          <div class="alert alert-primary text-center mt-2" role="alert">
            Bienvenido a XtroD
          </div>
          <div class="row">
            <h5>Comentarios recientes</h5>
          </div>
          <table class="table table-striped mt-2">
            <tr>
              <td>Icon</td>
              <td>Título largo no sé qué</td>
            </tr>
            <tr>
              <td>Icon</td>
              <td>Título largo no sé qué</td>
            </tr>
            <tr>
              <td>Icon</td>
              <td>Título largo no sé qué</td>
            </tr>
            <tr>
              <td>Icon</td>
              <td>Título largo no sé qué</td>
            </tr>
          </table>
          <div class="row">
            <h5>TOP Posts</h5>
          </div>
          <table class="table table-striped mt-2">
            <tr>
              <td>1</td>
              <td>Título largo no sé qué</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Título largo no sé qué</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Título largo no sé qué</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Título largo no sé qué</td>
            </tr>
          </table>
          <div class="row">
            <h5>TOP Usuarios</h5>
          </div>
          <table class="table table-striped mt-2">
            <tr>
              <td>1</td>
              <td>Pepe69</td>
            </tr>
          </table>
        </div>
        <div class="col-3">
          <div class="row">
            <h5>Imágenes</h5>
          </div>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('icons/home.png') }}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
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
          <div class="row">
            <h5>Afiliados</h5>
          </div>
          <div class="row">
            <button class="btn btn-success col-12">Afíliate a XtroD</button>  
          </div>
          <div class="row">
            <h5>Tags Recientes</h5>
          </div>
          <div class="row">
            <a href="#">asd</a> <a href="#">as asd</a>
          </div>
          <div class="row">
            <h5>Patrocinadores</h5>
          </div>
          <div class="row">
            
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-4">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-primary" type="submit">Buscar</button>
          </form>
        </div>
        <div class="col-4 text-center">
          <span>Powered by f3rran</span>
        </div>
        <div class="col-4 text-end">
          <a href="#" class="mr-4">Ir al cielo</a>
        </div>
      </div>
    </div>
  </div>
    
@endsection