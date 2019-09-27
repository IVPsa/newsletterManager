@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-xs-12">
            <div class="card">
                <div class="card-header">Modulo Noticias </div>
                <h3 class="text-center display-4">LISTADO DE NOTICIAS</h3>
                <div class="form-group row">

                    <label  for="first_name" class="col-3 col-form-label text-right" >Buscar Por Nombre:</label>
                    <div class="col-8">
                      <input type="text" class="form-control"  name="datoAbuscar"  >
                    </div>
                    <div class="col-1">
                      <button type="submit" class="btn btn-lg  btn-success"> <i class="fa fa-search"></i></button>
                    </div>
                </div>

                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th>ID</th>
                          <th>TITULO</th>
                          <th>FECHA</th>
                          <th>ESTADO</th>
                          <th>ACCION</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>John</td>
                          <td>Doe</td>
                          <td>john@example.com</td>
                          <td>john@example.com</td>
                          <td>

                            <a href="#" ><button type="button" name="button" class="btn btn-primary"></button></a>
                            <a href="#" ><button type="button" name="button" class="btn btn-danger"></button></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Mary</td>
                          <td>Moe</td>
                          <td>mary@example.com</td>
                          <td>john@example.com</td>
                          <td>
                            <a href="#" ><button type="button" name="button" class="btn btn-primary"></button></a>
                            <a href="#" ><button type="button" name="button" class="btn btn-danger"></button></a>
                          </td>
                        </tr>
                        <tr>
                          <td>July</td>
                          <td>Dooley</td>
                          <td>july@example.com</td>
                          <td>john@example.com</td>
                          <td>
                            <a href="#" ><button type="button" name="button" class="btn btn-primary"></button></a>
                            <a href="#" ><button type="button" name="button" class="btn btn-danger"></button></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
            </div>

          </div>
        </div>
    </div>
</div>
@endsection
