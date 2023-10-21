<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Países, Departamentos y Municipios</title>
</head>

<body>
    <div class="container">
        <h1>Listado de Países, Departamentos y Municipios</h1>
        <a href="{{ route('paises.create') }}" class="btn btn-success">Agregar País</a>
        <table class="table">
            <thead>
                <tr>
          
                    <th scope="col">Nombre País</th>
                   
                    <th scope="col">Nombre Departamento</th>
                
                    <th scope="col">Nombre Municipio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paises as $pais)
                    <tr>
                        
                        
                        <td>{{ $pais->pais_nomb }}</td>
                     
                        <td>{{ $pais->depa_nomb }}</td>
                    
                        <td>{{ $pais->muni_nomb }}</td>
                        
                       
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
