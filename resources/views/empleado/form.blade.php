formulario que tendra datos en comun con create y edit

<br><br>
<label for="Nombre">Nombre:</label>
<input type="text" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" id="Nombre"><br><br>

<label for="ApellidoPaterno">Apellido Paterno:</label>
<input type="text" name="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}" id="ApellidoPaterno"><br><br>

<label for="ApellidoMaterno">Apellido Materno:</label>
<input type="text" name="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}" id="ApellidoMaterno"><br><br>

<label for="Correo">Correo:</label>
<input type="text" name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:''}}" id="Correo"><br><br>
{{$empleado->Foto}}
@if(isset())
<label for="Foto">Foto:</label>
<input type="file" name="Foto" value="  " id="Foto"><br><br>

<input type="submit" value="Guardar datos"><br><br> 
<a href="{{url('/empleado')}}">Tabla</a>