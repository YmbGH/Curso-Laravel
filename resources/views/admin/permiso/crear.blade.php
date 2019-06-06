@extends("theme.$theme.layout")
@section('titulo')
    Sistema - Permisos
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Permisos</h3>
            </div>
            <form  action="{{route('guardar_permiso')}}" id="form-general" class="form-horizontal" method="POST">
                @csrf
                <div class="box-body table-responsive no-padding">
                    @include("admin.permiso.form")
                </div>
                <div class="box-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-crear')
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection