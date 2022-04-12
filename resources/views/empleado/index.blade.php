mostrar la lista de empleados
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Correo</th>
            <th>Accion</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->Foto}}</td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->ApellidoPaterno}}</td>
            <td>{{$empleado->ApellidoMaterno}}</td>
            <td>{{$empleado->Correo}}</td>            
            <td>
            
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">
                Editar
            </a>
             | 
                
                <form action="{{url('/empleado/'.$empleado->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres Borrar?')"
                    value="Borrar"> 
                </form>

                <a href="{{url('/empleado')}}">Tabla</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>