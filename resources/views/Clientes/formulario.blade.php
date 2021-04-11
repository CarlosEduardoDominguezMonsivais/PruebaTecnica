<div class="container">
    <div class="form-group">
        <label for="Nombres" for="exampleFormControlInput1"><i class="far fa-user"></i> {{'Nombres'}}</label>
        <input type="text" name="Nombres" id="Nombres" class="form-control" id="exampleFormControlInput1" placeholder="Introduzca sus nombres" value="{{ isset($cliente->Nombres)?$cliente->Nombres:'' }}" required>
    </div>
    <div class="form-group">
        <label for="ApellidoPaterno" for="exampleFormControlInput1"><i class="fas fa-male"></i> {{'Apellido Paterno'}}</label>
        <input type="text" name="Apellido_Paterno" id="Apellido_Paterno" class="form-control" id="exampleFormControlInput1" placeholder="Introduzca su apellido paterno" value="{{ isset($cliente->Apellido_Paterno)?$cliente->Apellido_Paterno:'' }}" required>
    </div>
    <div class="form-group">
        <label for="ApellidoMaterno" for="exampleFormControlInput1"><i class="fas fa-female"></i> {{'Apellido Materno'}}</label>
        <input type="text" name="Apellido_Materno" id="Apellido_Materno" class="form-control" id="exampleFormControlInput1" placeholder="Introduzca su apellido materno" value="{{ isset($cliente->Apellido_Materno)?$cliente->Apellido_Materno:'' }}" required>
    </div>
    <div class="form-group">
        <label for="Correo" for="exampleFormControlInput1"><i class="fas fa-envelope"></i> {{'Correo'}}</label>
        <input type="email" name="Correo" id="Correo" class="form-control" id="exampleFormControlInput1" placeholder="nombre@gmail.com" value="{{ isset($cliente->Correo)?$cliente->Correo:'' }}" required>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="FechaNacimiento" for="validationCustom03"><i class="far fa-calendar-alt"></i> {{'Fecha de Nacimiento'}}</label>
            <input type="date" name="Fecha_de_Nacimiento" id="Fecha_de_Nacimiento" class="form-control" id="validationCustom03" value="{{ isset($cliente->Fecha_de_Nacimiento)?$cliente->Fecha_de_Nacimiento:'' }}" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="Telefono" for="validationCustom04"><i class="fas fa-phone"></i> {{'Télefono'}}</label>
            <input type="number" name="Telefono" id="Telefono" class="form-control" id="validationCustom04" placeholder="Teléfono de contacto" value="{{ isset($cliente->Telefono)?$cliente->Telefono:'' }}" required>
            <div class="invalid-feedback">
                Please provide a valid state.
            </div>
        </div>
    </div>
    <br>
    <div class="form-group" id="botones">
        <input type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}" class="btn btn-primary btn-lg" id="right"></input>
        <a class="btn btn-danger btn-lg" href="{{ url('Clientes/') }}"> Cancelar </a>

    </div>