<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <center>
    <br>
    <br>
        <h1>CREAR</h1>

    <br>
    <br>

   
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">

        @csrf {{--  token o seguridad --}}
        <label class="form-label">
            Codigo
            <br>
            <input class="form-control" type="text" name="codigo" class="form-control" required>
        </label>
        
        <br>
        
        <label class="form-label">
            Existencia
            <br>
            <input class="form-control" type="text" name="existencia" required>
        </label>

        <br>
        
        <label class="form-label">
            Descripcion
            <br>
            <input class="form-control" type="text" name="descripcion" required>
        </label>

        <br>

        <label class="form-label">
            Precio $
            <br>
            <input class="form-control" type="integer" name="precio" required>
        </label>
        <br>
        <br>
        <button class="btn btn-primary" type="submit">Crear</button>

    </form>
    </center>



</body>
</html>