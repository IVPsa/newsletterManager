@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-xs-12">
            <div class="card">

                <div class="col-md-12">
                  <div class="row">
                      <div class="col-md-6 col-sm-12" align="center">
                        <a href="{{route('listadoDeNoticias')}}">
                          <button type="button" class="btn btn-success btn-lg">

                            Lista de noticas
                          </button>
                        </a>
                        <br>
                      </div>

                      <div class="col-md-6 col-sm-12" align="center">
                        <a href="{{route('formularioCrearNoticia')}}">
                          <button type="button" class="btn btn-success btn-lg ">
                            Registrar noticia
                          </button>
                        </a>
                        <br>
                      </div>

                  </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
