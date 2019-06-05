@extends("theme.$theme.layout")
@section('titulo')
    Sistema Menús
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Menús</h3>
            </div>
            <form class="form-horizontal">
                <div class="box-body table-responsive no-padding">
                    @include("admin.menu.form")
                </div>
                <div class="box-footer">
                </div>
            </form>
        </div>
    </div>
@endsection