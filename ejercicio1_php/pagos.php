<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
<?php
// ===========================
// VARIABLES EN PHP
// ===========================
// En PHP, todas las variables comienzan con el símbolo "$".
// Se crean en el momento en el que se les asigna un valor.
// No es necesario declarar el tipo (PHP es un lenguaje débilmente tipado).
// Ejemplo: $nombre = "Laura";  $edad = 25;

// 1. Definir los datos en formato JSON (varios usuarios)
$usuariosJSON = '[
    {
        "id": 1,    
        "nombre": "Laura",
        "apellidos": "García Pérez",
        "dni": "12345678A",
        "email": "laura.garcia@example.com",
        "telefono": "666123456",
        "pagos":[
            {   "mes":"Enero",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            },
             
            {   "mes":"Febrero",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            },
             
            {   "mes":"Marzo",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            },
             
            {   "mes":"Abril",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            },
             
            {   "mes":"Mayo",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            },
             
            {   "mes":"Junio",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            }

                
        ]
    },
    {
        "id": 2, 
        "nombre": "Carlos",
        "apellidos": "López Díaz",
        "dni": "87654321B",
        "email": "carlos.lopez@example.com",
        "telefono": "686123456",
        "pagos":[
            {   "mes":"Enero",
                "importe":20,
                "estado":"Pendiente",
                "fecha":""
            },
             
            {   "mes":"Febrero",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            },
             
            {   "mes":"Marzo",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            },
             
            {   "mes":"Abril",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            },
             
            {   "mes":"Mayo",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            },
             
            {   "mes":"Junio",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            }

                
        ]
    },
    {
        "id": "3",
        "nombre": "Ana",
        "apellidos": "Martínez Ruiz",
        "dni": "11223344C",
        "email": "ana.martinez@example.com",
        "telefono": "676123456",
        "pagos":[
            {   "mes":"Enero",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            },
             
            {   "mes":"Febrero",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            },
             
            {   "mes":"Marzo",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            },
             
            {   "mes":"Abril",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            },
             
            {   "mes":"Mayo",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-01"
            },
             
            {   "mes":"Junio",
                "importe":20,
                "estado":"Pendiente",
                "fecha":""
            }

                
        ]
    }
]';

// 2. Convertir el JSON a un array de PHP
// json_decode transforma un JSON en un array asociativo o en un objeto PHP.
// El segundo parámetro "true" indica que queremos un array asociativo.
$usuarios = json_decode($usuariosJSON, true);


echo "<h1>Listado de usuarios</h1>";
// ===========================
// BUCLE FOR EN PHP
// ===========================
// La sintaxis del bucle for es:
// for (valor_inicial; condición; incremento) { ... }
// - valor_inicial: normalmente un contador ($i = 0)
// - condición: mientras se cumpla, el bucle se repite ($i < total)
// - incremento: cómo avanza el contador ($i++)
//
// En este caso, recorremos el array de usuarios desde el primero hasta el último.
// Comenzando por el primer usuario
for ($i = 0; $i < count($usuarios); $i++) {
    $usuario = $usuarios[$i];
      
    //  Mostrar datos Usuario
    echo "<h2>Usuario " . $usuario['id'] . "</h2>";
    echo "<p>id: " . $usuario['id'] . "</p>";
    echo "<p>Nombre: " . $usuario['nombre'] . "</p>";
    echo "<p>Apellidos: " . $usuario['apellidos'] . "</p>";
    echo "<p>DNI: " . $usuario['dni'] . "</p>";
    echo "<p>email: " . $usuario['email'] . "</p>";
    echo "<p>Teléfono: " . $usuario['telefono'] . "</p>";

    // Mostramos el encabazado de la tabla
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr>
         <th>Mes</th>
         <th>Importe cuota</th>
         <th>Estado pago</th>
         <th>Fecha pago</th>
         </tr>";
    // Recorremos el array de pagos
   for($j = 0;$j<count($usuario['pagos']);$j++){
        $pago=$usuario['pagos'][$j];
        
        // ===========================
        // CONDICIONAL IF EN PHP
        // ===========================
        // La sintaxis es:
        // if (condición) {
        //     código si se cumple
        // } else {
        //     código si NO se cumple
        // }
        //
        // En este caso, comprobamos si el atributo estado es "Pendiente" y si la fecha de pago está vacía.
        
        if ($pago['estado'] === "Pendiente" || empty($pago['fecha'])){
            $color = "background-color: red;";
        } else {
           $color = "background-color: white;";
        }

        // Mostrar fila de la tabla
        echo "<tr>";
        echo "<td>" . $pago['mes']. "</td>";
        echo "<td>" . $pago['importe'] . "</td>";
        echo "<td style='$color'>" . $pago['estado'] . "</td>";
        echo "<td>" . $pago['fecha'] . "</td>";
        echo "</tr>";    
    }// Volvemos al for de pagos para continuar mostrando los datos de pago

  echo "</table>";
}


?>
 </body>
</html>