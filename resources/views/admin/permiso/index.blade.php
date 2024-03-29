@extends("theme.$theme.layout")
@section('titulo')
    Permisos
@endsection

@section('content')
<section class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Permisos</h3>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Slug</th>
                            <th>Acciones</th>
                            </thead>
                            <tbody>
                                 @foreach ($permisos as $permiso)
                                     <tr>
                                         <td>{{$permiso->id}}</td>
                                         <td>{{$permiso->nombre}}</td>
                                         <td>{{$permiso->slug}}</td>
                                         <td><a href="#" class="btn btn-primary">Editar</a></td>
                                     </tr>
                                     
                                 @endforeach
                            </tbody>
                     </table>       
                </div>
          </div>
        </div>
      </div>
    </div>
    </section>
@endsection
