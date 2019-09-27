@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-xs-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">


                  <h3 class="text-center">Bienvenido {{ Auth::user()->name }} a newsLetter Manager</h3>

                  <center>

                      <a href=""><button type="button" class="btn btn-success"> <i class="fa fa-address-card-o" style="font-size:150px; width:202px;"></i> <br>PERFIL</button></a>
                      <a href="{{route('indexNoticias')}}"><button type="button" class="btn btn-info"><i class="fa fa-commenting" style="font-size:150px; width:202px;"></i> <br> NOTICIAS</button></a>
                      <a href=""><button type="button" class="btn btn-warning"> <i class="fa fa-archive" style="font-size:150px; width:202px;"></i> <br> EVENTOS</button></a>
                      <a href=""><button type="button" class="btn btn-dark"> <i class="fa fa-user-md" style="font-size:150px; width:202px;"></i> <br> ENCUESTAS</button></a>

                  </center>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
