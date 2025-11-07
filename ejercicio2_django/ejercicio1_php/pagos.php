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

// ======================================================================
//  ARRAYS EN PHP – DOCUMENTACIÓN Y EJEMPLOS
// ======================================================================

// ============================================================
// 1 ARRAYS INDEXADOS
//    - Son arrays donde los índices son numéricos (0, 1, 2, …).
//    - PHP los crea automáticamente si no los indicamos.
//    - Manual oficial: https://www.php.net/manual/es/language.types.array.php
// ============================================================

//$frutas = ["Manzana", "Pera", "Naranja"]; 
// Equivalente a:
// $frutas = array("Manzana", "Pera", "Naranja");

// Acceso:
//echo $frutas[0]; // Muestra "Manzana"


// ============================================================
// 2 ARRAYS ASOCIATIVOS
//    - Los índices no son números, sino cadenas (claves).
//    - Se parecen a un diccionario u objeto simple.
//    - Manual oficial: https://www.php.net/manual/es/language.types.array.php
// ============================================================

//$persona = [
//    "nombre"   => "Laura",
//    "edad"     => 25,
//    "email"    => "laura@example.com"
//];

// Acceso:
//echo $persona["nombre"]; // Muestra "Laura"


// ============================================================
// 3 ARRAYS MULTIDIMENSIONALES
//    - Son arrays que contienen otros arrays dentro.
//    - Pueden combinarlos: indexados, asociativos o ambos.
//    - Muy usados para representar tablas, JSON, datos de BD…
// ============================================================

//$usuarios = [
  //  [
    //    "id" => 1,
    //    "nombre" => "Laura",
    //    "pagos" => [
    //        ["mes" => "Enero",   "importe" => 20, "estado" => "Pagado"],
    //        ["mes" => "Febrero", "importe" => 20, "estado" => "Pendiente"]
    //    ]
    //],
    //[
    //    "id" => 2,
    //    "nombre" => "Carlos",
    //    "pagos" => [
    //        ["mes" => "Enero",   "importe" => 20, "estado" => "Pagado"],
    //        ["mes" => "Marzo",   "importe" => 20, "estado" => "Pagado"]
    //    ]
    //]
//];

// Acceder al importe del segundo pago del primer usuario:
//echo $usuarios[0]["pagos"][1]["importe"]; // Resultado: 20

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
            },
               {   "mes":"Julio",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-07"
            },
              {   "mes":"Agosto",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-08"
            },
              {   "mes":"Septiembre",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-09"
            },
              {   "mes":"Octubre",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-10"
            },
              {   "mes":"Noviembre",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-11"
            },
              {   "mes":"Diciembre",
                "importe":20,
                "estado":"Pendiente",
                "fecha":""
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
            },
               {   "mes":"Julio",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-07"
            },
              {   "mes":"Agosto",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-08"
            },
              {   "mes":"Septiembre",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-09"
            },
              {   "mes":"Octubre",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-10"
            },
              {   "mes":"Noviembre",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-11"
            },
              {   "mes":"Diciembre",
                "importe":20,
                "estado":"Pendiente",
                "fecha":""
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
                "fecha":"2025-02"
            },
             
            {   "mes":"Marzo",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-03"
            },
             
            {   "mes":"Abril",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-04"
            },
             
            {   "mes":"Mayo",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-05"
            },
             
            {   "mes":"Junio",
                "importe":20,
                "estado":"Pendiente",
                "fecha":""
            },
              {   "mes":"Julio",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-07"
            },
              {   "mes":"Agosto",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-08"
            },
              {   "mes":"Septiembre",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-09"
            },
              {   "mes":"Octubre",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-10"
            },
              {   "mes":"Noviembre",
                "importe":20,
                "estado":"Pagado",
                "fecha":"2025-11"
            },
              {   "mes":"Diciembre",
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
    // declaramos la variable para almacenar el total
    $totalAbonado = 0;
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
            $color = "background-color: red;"; // si se cumlpe cambia el fondo de color a rojo
        } else {
           $color = "background-color: white;"; // sino se queda con fondo blanco
        }
          // si está pagado (y con fecha), suma al total
        if ($pago['estado'] === "Pagado" && !empty($pago['fecha'])) {
            $totalAbonado += (float)$pago['importe'];
        }

        // Mostrar fila de la tabla
        echo "<tr>";
        echo "<td>" . $pago['mes']. "</td>";
        echo "<td>" . $pago['importe'] . "</td>";
        echo "<td style='$color'>" . $pago['estado'] . "</td>";
        echo "<td>" . $pago['fecha'] . "</td>";
        echo "</tr>";    
    }// Volvemos al for de pagos para continuar mostrando los datos de 
        
    // fila de TOTAL al final de la tabla
    
    $totalFormateado = number_format($totalAbonado, 2, ',', '.');

    echo "<tr style='font-weight:bold; background:#f3f3f3;'>
            <td>Total abonado</td>
            <td>{$totalFormateado} €</td>
            <td colspan='2'></td>
          </tr>";

  echo "</table>";
}


?>
 </body>
</html>