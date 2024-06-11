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

        <h1>EDITAR</h1>

        <br>
        <br>

   
    <form action="{{ route('product.update', $dato) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf {{--  token o seguridad --}}
                    
        <label class="form-label">
            Dni:
        <br>
            <input class="form-control" type="text" name="codigo" value="{{ old('codigo', $dato->codigo) }}"required>
        </label>
                    
        <br>
                    
        <label class="form-label">
            Nombre:
        <br>
            <input class="form-control" type="text" name="existencia" value="{{ old('existencia', $dato->existencia) }}" required>
        </label>
        
        <br>
                    
        <label class="form-label">
            Direccion:
        <br>
            <input class="form-control" type="text" name="descripcion"value="{{ old('descripcion', $dato->descripcion) }}" required>
        </label>
                    
        <br>
                    
        <label class="form-label">
            Telefono:
        <br>
            <input class="form-control" type="integer" name="precio"value="{{ old('precio', $dato->precio) }}" required>
        </label>
        
        <br>
        <br>
        <button class="btn btn-primary" type="submit">Editar</button>
        <br><br>

    </form>
    </center>
    
</body>
</html>