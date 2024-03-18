@extends('adminlte::page')

@section('title', 'Editar Insumo')



@section('content')
        <div class="card">
            <section class="get-in-touch">
        
           <h1 class="title">Editar Insumo</h1>
           <form action="/insumos/{{$insumo->id}}" method="POST" class="contact-form row" novalidate>
                @csrf
        
                @method('PUT')
        
           
              <div class="form-field col-lg-4">
              
                     <label for="" class=" is-required">Nombre del Insumo: <FONT COLOR="red"> *</FONT></label>
                    <input type="text" id="Nombre_Insumo" name="Nombre_Insumo"  class="input-text js-input tabindex=6" tabindex="1" value="{{$insumo->Nombre_Insumo}}" >
        
                    @if ($errors->has('Nombre_Insumo'))
                            <span class="error text-danger" for="input-Nombre_Insumo">{{$errors->first('Nombre_Insumo') }}</span>
                        @endif
                        
              </div>
              <div class="form-field col-lg-4">
                 
                    <label for="" class=" is-required">Cantidad:<FONT COLOR="red"> *</FONT></label>
                    <input type="number" id="Cantidad" name="Cantidad"  class="input-text js-input tabindex=6"
                    tabindex="2" value="{{$insumo->Cantidad}}" readonly>
                
                    @if ($errors->has('Cantidad'))
                            <span class="error text-danger" for="input-Cantidad">{{$errors->first('Cantidad') }}</span>
                        @endif
              </div>
              <div class="form-field col-lg-4">
                <label for="" class="">Stock mínimo:<FONT COLOR="red"> *</FONT></label>
                <input type="number" id="Stock" name="Stock"  class="input-text js-input tabindex=6" tabindex="3" value="{{$insumo->Stock}}" >
                @if ($errors->has('Stock'))
                        <span class="error text-danger" for="input-Stock">{{$errors->first('Stock') }}</span>
                    @endif
                </div> 
                <div class="form-field col-lg-4">
                <label for="Categorias" class="is-required" tabindex="4">Tipo categoria<FONT COLOR="red"> *</FONT></label>
                <select class="input-text js-input" name="id_categorias" >
                <option value="">Tipos de categoria</option>
                    @foreach($categorias as $Tcategoria)
                        @if ($Tcategoria->id == $insumo->id_categorias ) 
                            <option selected value="{{ $Tcategoria->id}}">{{ $Tcategoria->Nombre}}</option>
                        @else
                            <option value="{{ $Tcategoria->id}}">{{ $Tcategoria->Nombre}}</option>
                        @endif
                    @endforeach
                </select>
                </div>

                <div class="form-field col-lg-12">
                    <a href="/insumos" class="submit-btn2" tabindex="6">Cancelar</a>
                      {{--<input class="submit-btn" type="submit" value="Guardar"> --}}
                    <button class="submit-btn" tabindex="5">Guardar</button>
                   </div>
        
            </form>
             </section>
        </div>

@stop

@section('css')
    <link rel="stylesheet" href="{{asset('vendor/adminlte/dist/css/formm.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>

@stop