@extends("theme.$theme.layout")
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Menús</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>URL</th>
                            <th>Icono</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menus as $menu)
                        <tr>
                            <td>{{$menu->id}}</td>
                            <td>{{$menu->nombre}}</td>
                            <td>{{$menu->url}}</td>
                            <td></td>
                        </tr>
                        @endforeach 
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
@endsection