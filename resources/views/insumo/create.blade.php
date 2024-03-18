@extends('adminlte::page')

@section('content')
<div class="card">
  <section class="get-in-touch">

    <h1 class="title">Añadir Insumo</h1>
    <form action="/insumos" method="POST" class="contact-form row" novalidate>
        @csrf
        <div class="form-field col-lg-4">
          <label for="" class=" is-required" >Nombre del Insumo: <FONT COLOR="red"> *</FONT> </label>
              <input type="text" id="Nombre_Insumo" name="Nombre_Insumo"  class="input-text js-input"  tabindex="1" value="{{ old('Nombre_Insumo') }}" >
              @if ($errors->has('Nombre_Insumo'))
                  <span class="error text-danger" for="input-Nombre_Insumo">{{$errors->first('Nombre_Insumo') }}</span>
              @endif
                  
        </div> 
        <div class="form-field col-lg-4">
          <label for="categoria" class=" is-required" tabindex="4">Tipo Categoría <FONT COLOR="red"> *</FONT></label>
              <select  class="input-text js-input"  name="id_categorias" tabindex="2">
                  <option value="">Categorías</option>
                      @foreach($categorias as $Tcategoria)
                          <option value="{{ $Tcategoria->id}}" @if (old('id_categorias') == $Tcategoria->id) selected @endif>{{ $Tcategoria->Nombre}}</option>
                      @endforeach
              </select>
              @if ($errors->has('id_categorias'))
                    <span class="error text-danger" for="input-imagen">{{$errors->first('id_categorias') }}</span>
                @endif
        </div>
        <div class="form-field col-lg-4">
          <label for="" class=" is-required" >Stock mínimo: <FONT COLOR="red"> *</FONT> </label>
              <input type="number" id="Stock" name="Stock"  class="input-text js-input"  tabindex="1" value="{{ old('Stock') }}" >
              @if ($errors->has('Stock'))
                  <span class="error text-danger" for="input-Stock">{{$errors->first('Stock') }}</span>
              @endif                  
        </div>
          <div class="form-field col-lg-12">
              <a href="/insumos" class="submit-btn2" tabindex="4">Cancelar</a>
                {{--<input class="submit-btn" type="submit" value="Guardar"> --}}
              <button class="submit-btn" tabindex="3">Guardar</button>
          </div>

    </form>
  </section>
</div>
@stop
@section('css')
        <link rel="stylesheet" href="{{asset('vendor/adminlte/dist/css/formm.css')}}">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
@endsection

@section('js')
  

@stop