<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe</title>
    <style>
        /* Estilos CSS para el informe */
        /* Puedes personalizar los estilos según tus necesidades */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Gobierno de El Salvador</h2>
    <h3>Nombre de su institución</h3>
    <p>Fecha: {{ date('Y-m-d') }}</p>
 
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre del Proyecto</th>
            <th>Fuente de Fondos</th>
            <th>Monto Planificado</th>
            <th>Monto Patrocinado</th>
            <th>Monto Fondos Propios</th>
        </tr>
        @foreach($proyectos as $proyecto)
        <tr>
            <td>{{ $proyecto->id }}</td>
            <td>{{ $proyecto->NombreProyecto }}</td>
            <td>{{ $proyecto->fuenteFondos }}</td>
            <td>{{ $proyecto->MontoPlanificado }}</td>
            <td>{{ $proyecto->MontoPatrocinado }}</td>
            <td>{{ $proyecto->MontoFondosPropios }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
