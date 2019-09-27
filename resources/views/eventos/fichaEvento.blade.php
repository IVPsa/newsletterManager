@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-xs-12">
            <div class="card">
                <div class="card-header">Modulo Eventos</div>
                <h3 class="text-center display-4">FICHA EVENTO</h3>
                <div class="container">

                    <div class="form-group row">
                      <label for="last_name" class=" col-3 col-form-label text-right">NOMBRE:</label>
                      <div class="col-9">
                        <input type="text"   class="form-control" id="nombrePaciente" name="nombrePaciente"   required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="last_name" class=" col-3 col-form-label text-right">COMUNA:</label>
                      <div class="col-9">
                        <select class="" name="">
                          <option value=""></option>
                          <option value=""></option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label  for="lote" class="col-3 col-form-label text-right">DESCRIPCION  :</label>
                      <div class="col-9 " >
                        <textarea name="descripcionCirugia" class="form-control"></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="last_name" class=" col-3 col-form-label text-right">FECHA INICIO:</label>
                      <div class="col-9">
                        <input type="datetime"   class="form-control" id="nombrePaciente" name="nombrePaciente"   required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="last_name" class=" col-3 col-form-label text-right">FECHA TERMINO:</label>
                      <div class="col-9">
                        <input type="datetime"   class="form-control" id="" name=""   required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label  for="lote" class="col-3 col-form-label text-right">LATITUD LONGITUD:</label>
                      <div class="col-9 " >
                        <textarea name="descripcionCirugia" class="form-control"></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label  for="lote" class="col-3 col-form-label text-right">LONGITUD LONGITUD:</label>
                      <div class="col-9 " >
                        <textarea name="" class="form-control"></textarea>
                      </div>
                    </div>


                    <div class="form-group row">
                      <label  for="lote" class="col-3 col-form-label text-right">UBICACION:</label>
                      <div class="col-9 " >
                        <textarea name="" class="form-control"></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="last_name" class=" col-3 col-form-label text-right">COMUNA:</label>
                      <div class="col-9">
                        <select class="" name="">
                          <option value=""></option>
                          <option value=""></option>
                        </select>
                      </div>
                    </div>



                    <div class="form-group row">
                      <div class="offset-6 col-6">
                        <button type="submit" class="btn btn-success btn-lg">MODIFICAR</button>
                      </div>

                    </div>

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
