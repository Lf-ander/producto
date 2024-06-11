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
        <h1>ASOCIAR</h1>
    <br>
    <br>
    <form action="{{ route('customer_product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <br>
                    
        <h3>Cliente:</h3>
        
        <select class="container-sm col-6" name="user_id">
            @foreach ($customers as $cust)
            <option  value="{{ $cust->id }}">{{ $cust->id }} - {{ $cust-> nombre }}</option>
            @endforeach
        </select>

        <br>
        <br>
        <br>
    
        <h3>Producto:</h3>
        <select class="container-sm col-6" name="role_id">
            @foreach ($products as $prod)
            <option  value="{{ $prod->id }}">{{ $prod->id }} - {{ $prod->existencia }}</option>
            @endforeach
        </select>
                    
        <br> <br>
                    
        <button class="btn btn-primary" type="submit">Asociar</button>
    </form>

    </center>
</body>
</html>