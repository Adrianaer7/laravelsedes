@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registros</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Te has registrado!
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">DNI</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Establecimiento</th>
                            <th scope="col">Categoria</th>
                        </tr>   
                    </thead>
                                
                             @foreach ($per as $Personas)
                            <tr>
                                <td>{{$Personas->nombre}}</td>
                                <td>{{$Personas->apellido}}</td>
                                <td>{{$Personas->dni}}</td>
                                <td>{{$Personas->email}}</td>
                                <td>{{$Personas->establecimiento}}</td>
                                <td>{{$Personas->descripcion}}</td>

                            </tr>
                            @endforeach
                        
                    </thead>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
