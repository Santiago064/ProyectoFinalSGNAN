@extends('adminlte::page')

@section('content')
<div class="container">
  <div class="col-md-12">
    <div class="card">
        <section class="get-in-touch">

        <h1 class="title">Añadir proveedor</h1>
        <form action="/proveedores" method="POST" class="contact-form row" novalidate>
            @csrf
      
          <div class="form-group col-md-5">
            <label for="" class=" is-required">Nombre de la empresa:<FONT COLOR="red"> *</FONT></label>
                <input type="text" id="Nombre" name="Nombre" class="input-text js-input"  tabindex="1" value="{{ old('Nombre') }}">
                
                @if ($errors->has('Nombre'))
                        <span class="error text-danger" for="input-Nombre">{{$errors->first('Nombre') }}</span>
                    @endif
          </div>
          <div class="form-group col-md-5">
            <label for="" class=" is-required">Nombre del asesor:<FONT COLOR="red"> *</FONT></label>
                <input type="text" id="asesor" name="asesor" class="input-text js-input"  tabindex="2" value="{{ old('asesor') }}">
              
                @if ($errors->has('asesor'))
                        <span class="error text-danger" for="input-asesor">{{$errors->first('asesor') }}</span>
                    @endif
          </div>
          <div class="form-group col-md-5">
            <label for="" class=" is-required">Correo:<FONT COLOR="red"> *</FONT></label>
                <input type="email" id="Correo" name="Correo" class="input-text js-input"  tabindex="3" value="{{ old('Correo') }}">
            
                @if ($errors->has('Correo'))
                        <span class="error text-danger" for="input-Correo">{{$errors->first('Correo') }}</span>
                    @endif
          </div>
          <div class="form-group col-md-5">
            <label for="" class=" is-required">Dirección:<FONT COLOR="red"> *</FONT></label>
                <input type="text" id="Direccion" name="Direccion" class="input-text js-input"  tabindex="4" value="{{ old('Direccion') }}">
                
                @if ($errors->has('Direccion'))
                        <span class="error text-danger" for="input-Direccion">{{$errors->first('Direccion') }}</span>
                    @endif
          </div>
          <div class="form-group col-md-5">
            <label for="" class=" is-required">Teléfono:<FONT COLOR="red"> *</FONT></label> 
                <input type="number" id="Telefono" name="Telefono" class="input-text js-input"  tabindex="5" value="{{ old('Telefono') }}">
                @if ($errors->has('Telefono'))
                        <span class="error text-danger" for="input-Telefonó">{{$errors->first('Telefono') }}</span>
                    @endif
          </div>
          <div class="form-field col-lg-12">
                <a href="/proveedores" class="submit-btn2" tabindex="7">Cancelar</a>
                  {{--<input class="submit-btn" type="submit" value="Guardar"> --}}
                <button class="submit-btn" tabindex="6">Guardar</button>
              </div>

              </form>
        </section>
    </div>
  </div>
</div>
@stop
@section('css')

<link rel="stylesheet" href="{{asset('vendor/adminlte/dist/css/formm.css')}}">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
@endsection

@section('js')

@stop