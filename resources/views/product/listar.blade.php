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

        <h1>LISTA</h1>
    <br>
    <br>

    
    <table class="table">
        <td>
            <h4>Id
        </td>

        <td>
            <h4>codigo
        </td>
                
        <td>
            <h4>existencia
        </td>

        <td>
            <h4>descripcion
        </td>
        
        <td>
            <h4>precio
        </td>
        
        <td></td>
        <td></td>
        <td></td>
                
        @foreach ($datos as $dato)
        {{-- function listar --}}
        
        <tr>
        <td>{{ $dato->id }}</td>
        <td>{{ $dato->codigo }}</td>
        <td>{{ $dato->existencia }}</td>
        <td>{{ $dato->descripcion }}</td>
        <td>{{ $dato->precio }} </td>

        <td>
            <a class="btn btn-primary" href="{{ route('product.show', $dato->id) }}"style="text-decoration: none">Mostrar</a>
        </td>

        <td>
            <a class="btn btn-primary" href="{{ route('product.edit', $dato->id) }}"style="text-decoration: none">Editar</a>
        </td>

        <td>
            <form action="{{ route('product.destroy', $dato->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-primary">Eliminar</button>
            </form>
        </td>
        </tr>
            @endforeach
    </table>
    </center>
</body>
</html>