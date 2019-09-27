@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-xs-12">
            <div class="card">
                <div class="card-header">Modulo Noticias</div>
                <h3 class="text-center display-4">CREAR NUEVA NOTICIA</h3>
                <div class="container">

                  <div class="form-group row">
                    <label for="last_name" class=" col-3 col-form-label text-right">TITULO:</label>
                    <div class="col-9">
                      <input type="text"   class="form-control" id="nombrePaciente" name="nombrePaciente"   required>
                    </div>
                    <!-- <div class="col-6">
                    <input type="text"   maxlength="16" class="form-control" id="udi01" name="udi01">
                  </div> -->
                  </div>

                  <div class="form-group row">
                    <label for="last_name" class=" col-3 col-form-label text-right">FECHA:</label>
                    <div class="col-9">
                      <input type="date"   class="form-control" id="nombrePaciente" name="nombrePaciente"   required>
                    </div>
                    <!-- <div class="col-6">
                    <input type="text"   maxlength="16" class="form-control" id="udi01" name="udi01">
                  </div> -->
                  </div>

                  <div class="form-group row">
                    <label  for="lote" class="col-3 col-form-label text-right">CUERPO  :</label>
                    <div class="col-9 " >
                      <textarea name="descripcionCirugia" class="form-control"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                      <label  for="lote" class="col-3 col-form-label text-right">FOTO:</label>
                      <div class="col-9">
                        <input type="file" class="form-control-file border">
                      </div>
                  </div>

                  <div class="form-group row">
                      <label  for="lote" class="col-3 col-form-label text-right">VIDEO:</label>
                      <div class="col-9">
                        <input type="file" class="form-control-file border">
                      </div>
                  </div>

                  <div class="form-group row">
                      <label  for="lote" class="col-3 col-form-label text-right">TIPO NOTICIA:</label>
                      <div class="col-9">
                        <select class="form-control" id="sel1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group row">
                    <div class="offset-6 col-6">
                      <button type="submit" class="btn btn-success btn-lg">CREAR</button>
                    </div>

                  </div>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
