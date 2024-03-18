@extends('adminlte::page')

@section('title', 'Añadir Producto')

@section('content_header')
@stop

@section('content')

    <div class="container-fluid">
        <div class="row">
            <form action="/productos" method="POST" class="contact-form row" novalidate  enctype="multipart/form-data">
            @csrf
            
            <div class="col-md-6">
                <div class="card" title="Productos">
                    <div class="get-in-touch">
                        <h1 class="title">Productos</h1>
                        <div class="table-responsive scrollable-table">
                            <div class="form-row">
                                <div class="form-field col-md-6">
                                    <label for="" class="input-text js-input" required>Nombre Producto:<FONT COLOR="red"> *</FONT> </label>
                                    <input title="Nombre producto" type="text" id="NombreProducto" name="NombreProducto" class="input-text js-input" @error('NombreProducto') is-invalid @enderror value="{{ old('productos') }}" tabindex="1" placeholder="Ingrese nombre">
            
                                    @error('NombreProducto')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                </div>

                                <div class="form-field col-md-6">
                                    <label for="" class="input-text js-input">Descripción:</label>
                                    <input title="Descripción producto" class="input-text js-input" type="text" id="DescripcionProducto" name="DescripcionProducto" class="form-control @error('DescripcionProducto') is-invalid @enderror" value="{{ old('DescripcionProducto') }}" tabindex="2" placeholder="Ingrese Descripcion">
                                
                                    @error('DescripcionProducto')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-field col-md-6">
                                    <label for="" class="input-text js-input" required>Precio:<FONT COLOR="red"> *</FONT> </label>
                                    <input title="Precio producto" class="input-text js-input" type="number" id="PrecioP" name="PrecioP" class="form-control @error('PrecioP') is-invalid @enderror" value="{{ old('PrecioP') }}" tabindex="3" placeholder="Ingrese precio">
                                
                                    @error('PrecioP')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                </div>

                                <div class="form-field col-md-6">
                                    <label class="">Subir Imagen</label>
                                    <input title="Imagen producto" class="input-text js-input" type="file" id="imagen" name="imagen" tabindex="10" value="{{ old('imagen') }}">
                                    @if ($errors->has('imagen'))
                                        <span class="error text-danger" for="input-imagen">{{$errors->first('imagen') }}</span>
                                    @endif
                                </div>
                                
                                
                            </div>
                            

                            <div class="form-row">
                                <div class="form-field col-md-6">
                                    <label class="input-text js-input" for="id_insumos">Insumos<FONT COLOR="red"> *</FONT></label>
                                    <select title="Nombre insumos" id="id_insumos" class="input-text js-input" type="text" required autocomplete="off" name="id_insumos" class="input-text js-input @error('id_insumos' )is-invalid @enderror">
                                        <option  value="" id="id_insumos">Seleccione un insumo</option>
                                        @foreach ($insumos as $insu)
                                            <option value="{{$insu->id}}" data-precio="{{$insu->PrecioU}}">{{$insu->Nombre_Insumo}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-field col-md-6">
                                    <label for="" class="input-text js-input">Cantidad:<FONT COLOR="red"> *</FONT> </label>
                                    <input title="Cantidad insumos" class="input-text js-input" type="number" id="Cantidad" name="Cantidad" tabindex="5" placeholder="Ingrese Cantidad">
                                </div>

                                <div class="form-field col-md-6">
                                    <button type="button" id="agregar" title="Agregar insumo" name="agregar" class="btn btn-primary">Agregar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="col-md-6">
                <div class="card" title="Productos">
                    <div class="get-in-touch">
                        <div class="" title="Tabla de insumos">
                            <h4 class="card-title">Detalles del producto</h4>
                            <div class="table-responsive">
                                <form action="/productos" method="POST" class="contact-form row" novalidate>
                                    @csrf
                                    <div class="table-responsive scrollable-tablee">
                                        <table class="table" id="detalles">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th title="Eliminar insumo" >Eliminar</th>
                                                    <th title="Nombre insumos" >Insumo</th>
                                                    <th title="Cantidad insumos" >Cantidad</th>
                                                    <th title="Precio insumos" >Precio</th>
                                                    <th title="Suma cantidad insumos" >Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="4">Total</th>
                                                    <th title="Total precio producto" ><span id="total"></span></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <div class="form-field col-lg-12">
                    <button type="submit" id="guardar" title="Guardar el producto" name="guardar" class="btn btn-primary">Guardar</button>
                    <a href="/productos" title="Cancelar registro" class="btn btn-warning">Cancelar</a>
                </div>
                </div>
            </div>
        </form>
        </div>
    </div>

    
    @section('css')
    <link rel="stylesheet" href="{{asset('vendor/adminlte/dist/css/form.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        .scrollable-table{
            max-height: 450px;
            overflow-y: auto;
        }
        .scrollable-tablee{
            max-height: 300px;
            overflow-y: auto;
        }
        .form-field.col-md-6,
        .form-field.col-md-12 {
            margin-bottom: 30px;
        }
        .form-row::after {
            content: "";
            display: table;
            clear: both;
        }
        .inp{
            width: 40px;
        }
    </style>
    @endsection
    
    @section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function(){
            $('#agregar').click(function(){
                agregar();
            });
    
            $('#id_insumos').change(function(){
                var precio = $(this).find('option:selected').data('precio');
                $('#PrecioU').val(precio);
            });
        });
    
        var productos_insumos = {}; // Objeto para almacenar los insumos por producto
    
        var cont = 1;
        total = 0;
        $("#guardar").hide();
    
        // Función para agregar insumos a la lista de un producto
        function agregar(){
            id_insumos = $("#id_insumos").val();
            insumos = $("#id_insumos option:selected").text();
            cantidad = $("#Cantidad").val();
            // Modificación: Obtener el precio del insumo seleccionado
            precio = parseFloat($("#id_insumos option:selected").data('precio'));
            subtotal = parseFloat(cantidad) * precio;

            if (id_insumos != "" && parseInt(cantidad) != "" && parseInt(cantidad) > 0) {
                // Verificar si el insumo ya ha sido agregado al producto
                if (productos_insumos.hasOwnProperty(id_insumos)) {
                    // Actualizar la cantidad del insumo existente
                    productos_insumos[id_insumos].cantidad += parseInt(cantidad);
                    productos_insumos[id_insumos].subtotal += subtotal;
                    var filaExistente = productos_insumos[id_insumos].fila;
                    filaExistente.find("input[name='Cantidad[]']").val(productos_insumos[id_insumos].cantidad);
                    filaExistente.find("td:eq(4)").text(productos_insumos[id_insumos].subtotal.toFixed(2));
                } else {
                    // Agregar el nuevo insumo al objeto de productos_insumos
                    var fila = '<tr class="selected" id="fila' + cont + '"><td><button type="button" class="btn btn-danger btn-sm btn-remove" onclick="eliminar(' + cont + ');">X</button></td><td><input class="form-control" type="hidden" name="id_insumos[]" value="' + id_insumos + '">' + insumos + '</td><td><input type="number" class="inp" name="Cantidad[]" value="' + cantidad + '"></td><td>' + precio.toFixed(2) + '</td><td>' + subtotal.toFixed(2) + '</td></tr>';
                    var nuevaFila = $(fila);
                    productos_insumos[id_insumos] = {
                        fila: nuevaFila,
                        cantidad: parseInt(cantidad),
                        subtotal: subtotal
                    };
                    $('#detalles tbody').append(nuevaFila);
                    cont++;
                }
    
                calcularTotal();
                limpiar();
                evaluar();
            } else {
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'Error al ingresar el detalle del producto, revise los datos del producto',
                    showConfirmButton: false,
                    timer: 2000
                });
            }
        }
    
        function limpiar(){
            $("#Cantidad").val("");
            $("#id_insumos").val("");
        }
    
        function evaluar(){
            if(cont > 0){
                $("#guardar").show();
            } else {
                $("#guardar").hide();
            }
        }
    
        // Función para eliminar insumos de la lista de un producto
        function eliminar(index){
            var fila = $("#fila" + index);
            var id_insumos = fila.find("input[name='id_insumos[]']").val();
            fila.remove();
    
            delete productos_insumos[id_insumos];
    
            calcularTotal();
            evaluar();
        }
    
        function calcularTotal() {
            total = 0;
    
            $.each(productos_insumos, function(key, producto) {
                total += producto.subtotal;
            });
    
            $("#total").text(total.toFixed(2));
        }
    </script>
    @endsection
    
@endsection