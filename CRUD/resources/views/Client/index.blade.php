@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Clients</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('client.create') }}" class="btn btn-info" >Añadir Cliente</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>DUI</th>
               <th>NIT</th>
               <th>Direccion</th>
               <th>Telefono</th>
               <th>Celular</th>
               <th>Notas</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($client->count())  
              @foreach($clients as $client)  
              <tr>
                <td>{{$client->nombre}}</td>
                <td>{{$client->apellido}}</td>
                <td>{{$client->dui}}</td>
                <td>{{$client->nit}}</td>
                <td>{{$client->direccion}}</td>
                <td>{{$client->telefono}}</td>
                <td>{{$client->celular}}</td>
                <td>{{$client->notas}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('ClientController@edit', $client->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('clientController@destroy', $client->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $clients->links() }}
    </div>
  </div>
</section>

@endsection