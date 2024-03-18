@extends('adminlte::page')

@section('title', 'Editar Usuario')


@section('content')

<div class="card">
    <section class="get-in-touch">
    <center><h2 class="title">Editar Usuario</h2></center>
        <form action="{{ route('users.update', $user->id) }}" method="POST" class="contact-form row" novalidate>
            @csrf
            @method('PUT')
            
            <div class="form-field col-lg-6">
            <label for="name" class="">Nombre</label>
                    <input autocomplete="off" type="text" id="name" class="input-text js-input" name="name"  tabindex="1" value="{{ $user->name }}" autofocus autocomplete="name">
                @if ($errors->has('name'))
                    <span class="error text-danger" for="input-name">{{$errors->first('name') }}</span>
                @endif
            </div>
            
            <div class="form-field col-lg-6">
            <label for="email" class="">Email</label>
                    <input autocomplete="off" type="email" id="email" class="input-text js-input"  name="email" tabindex="2" value="{{ old('email', $user->email) }}"  autocomplete="username">
                @if ($errors->has('email'))
                    <span class="error text-danger" for="input-email">{{$errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-field col-lg-6">
            <label for="password" class="">Contraseña</label>
                    <input autocomplete="off" type="password" id="password" class="input-text js-input" name="password" tabindex="3" placeholder="Ingrese la contraseña solo en caso de modificarla">
                @if ($errors->has('password'))
                    <span class="error text-danger" for="input-password">{{$errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-field col-lg-6">
            <label for="password_confirmation" class="">Confirmar Contraseña</label>
                    <input autocomplete="off" type="password" id="password_confirmation" class="input-text js-input" name="password_confirmation" tabindex="4" placeholder="Confirme la contraseña que desea modificar" >
                @if ($errors->has('password_confirmation'))
                    <span class="error text-danger" for="input-password_confirmation">{{$errors->first('password_confirmation') }}</span>
                @endif
            </div>

            <div class="form-group form-field col-lg-10">
            <label class="label">Listado de Roles</label>
            <br>    
            @foreach($roles as $role)
                <input type="radio" name="roles[]" value="{{ $role->id }}" {{ $user->roles->contains($role->id) ? 'checked' : '' }}>
                {{ $role->name }}
            @endforeach
                <br/>
            </div>
            
            <div class="form-field col-lg-9">
                <button type="submit" class="btn btn-primary btn-sm submit-btn" tabindex="5" title="Guardar cambios">Guardar</button>
                <a href="/users" class="btn btn-secondary btn-sm submit-btn2" tabindex="6" title="Volver atras">Cancelar</a>
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
