<?php

require_once("models/Conexion.php");

class modUsuarios
{

    // public static function mdlMostrarRegistros($tabla, $campo, $valor)
    // {
    //     if ($campo == null or $valor == null) {
    //         $sentenciaMYSQL = "SELECT * FROM $tabla ";
    //     } else {
    //         $sentenciaMYSQL = "SELECT * FROM $tabla where $campo like '$valor' ";
    //     }
    //     try {
    //         $sentencia = Conexion::conectarMySQL()->prepare($sentenciaMYSQL);
    //         $sentencia->execute();
    //         $registros = $sentencia->fetchall(PDO::FETCH_ASSOC);
    //         return $registros;
    //     } catch (PDOException $e) {
    //         $error = $e->getMessage(); // Obtenemos el mensaje del error
    //         // Luego, puedes hacer lo que necesites con el error, como guardar el log o mostrar un mensaje al usuario.
    //         // Por ejemplo, puedes llamar a la función logError($error) que definimos anteriormente:
    //         FuncionesController::ctrLogError($error);
    //         return $registros = array();
    //     }
    // }

    // public static function mdlMostrarRegistro($tabla, $campo_filtrar, $valor)
    // {

    //     $sentenciaMYSQL = "SELECT * FROM $tabla where $campo_filtrar like '$valor'";
    //     try {
    //         $sentenciaMYSQL = Conexion::conectarMySQL()->prepare($sentenciaMYSQL);
    //         $sentenciaMYSQL->execute();
    //         $registro = $sentenciaMYSQL->fetch();

    //         return $registro;
    //     } catch (PDOException $e) {
    //         $error = $e->getMessage(); // Obtenemos el mensaje del error
    //         // Luego, puedes hacer lo que necesites con el error, como guardar el log o mostrar un mensaje al usuario.
    //         // Por ejemplo, puedes llamar a la función logError($error) que definimos anteriormente:
    //         FuncionesController::ctrLogError($error);
    //         return $registro = array();
    //     }
    // }

    // public static function mdlMostrarCampo($tabla, $campo_devolver, $campo_filtrar, $valor)
    // {

    //     $sentenciaMYSQL = "SELECT * FROM $tabla where $campo_filtrar like '$valor'";
    //     try {
    //         $sentenciaMYSQL = Conexion::conectarMySQL()->prepare($sentenciaMYSQL);
    //         $sentenciaMYSQL->execute();
    //         $registro = $sentenciaMYSQL->fetch();

    //         return $registro[$campo_devolver];
    //     } catch (PDOException $e) {
    //         $error = $e->getMessage(); // Obtenemos el mensaje del error
    //         // Luego, puedes hacer lo que necesites con el error, como guardar el log o mostrar un mensaje al usuario.
    //         // Por ejemplo, puedes llamar a la función logError($error) que definimos anteriormente:
    //         FuncionesController::ctrLogError($error);
    //         return $registro = null;
    //     }
    // }

    // public static function mdlMostrarRegistrosPaginados($tabla, $pagina_actual, $registros_por_pagina, $campo, $valor)
    // {
    //     if ($campo == null or $valor == null) {
    //         $sentenciaMYSQL = "SELECT * FROM $tabla ";
    //     } else {
    //         $sentenciaMYSQL = "SELECT * FROM $tabla where $campo like '$valor' ";
    //     }
    //     $sentenciaMYSQL .= " LIMIT ";
    //     $sentenciaMYSQL .= $pagina_actual * $registros_por_pagina;
    //     $sentenciaMYSQL .= "," . $registros_por_pagina;
    //     //echo $sentenciaMYSQL;
    //     $sentenciaMYSQL = Conexion::conectarMySQL()->prepare($sentenciaMYSQL);
    //     $sentenciaMYSQL->execute();
    //     $registros = $sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);


    //     return $registros;
    // }

    // public static function mdlInsertarRegistros($tabla, $datos)
    // {

    //     $sentenciaMYSQL = "INSERT INTO " . $tabla . " ";
    //     $sentenciaMYSQL .= "(" . implode(",", array_keys($datos)) . ")";
    //     $sentenciaMYSQL .= " VALUES ";
    //     $sentenciaMYSQL .= "('" . implode("','", $datos) . "')";
    //     //var_dump($sentenciaMYSQL);   
    //     try {
    //         $sentenciaMYSQL = Conexion::conectarMySQL()->prepare($sentenciaMYSQL);
    //         $sentenciaMYSQL->execute();
    //     } catch (PDOException $e) {
    //         $error = $e->getMessage(); // Obtenemos el mensaje del error
    //         // Luego, puedes hacer lo que necesites con el error, como guardar el log o mostrar un mensaje al usuario.
    //         // Por ejemplo, puedes llamar a la función logError($error) que definimos anteriormente:
    //         FuncionesController::ctrLogError($error);
    //     }
    // }

    // public static function mdlInsertarConImagen($tabla, $datos)
    // {
    //     // I M P O R T A N T E el formulario debe ser asi <form method="POST" enctype="multipart/form-data"> , porque sin la linea de enctype no sube las imagenes //
    //     $error = "";
    //     if ($_FILES["foto"]["size"] > 0) {
    //         if (!getimagesize($_FILES['foto']['tmp_name'])) {
    //             $error .= "No has subido una imagen";
    //         } else if (!str_contains($_FILES['foto']['name'], "png") && !str_contains($_FILES['foto']['name'], "jpg") && !str_contains($_FILES['foto']['name'], "jpeg")) {
    //             $error .= "No has subido una imagen jpg o png";
    //         } else if ($_FILES["foto"]["size"] > 2097152) {
    //             $error .= "La foto es demasiado grande, maximo 2MB";
    //         } else {
    //             //Parte para imagenes ---------------------------------
    //             $rand = rand(1000, 9999);
    //             $origen = $_FILES["foto"]["tmp_name"];
    //             $destino = 'img/' . $rand . "_" . $_FILES["foto"]["name"];
    //             //var_dump($_FILES);
    //             move_uploaded_file($origen, $destino);
    //             //----------------------------------------------------
    //             $datos["foto"] = $rand . "_" . $_FILES["foto"]["name"];
    //             modUsuarios::mdlInsertarRegistros($tabla, $datos);
    //         }
    //     } else {
    //         //Parte para imagenes ---------------------------------
    //         $rand = rand(1000, 9999);
    //         //----------------------------------------------------
    //         $datos["foto"] = "default.jpg";
    //         modUsuarios::mdlInsertarRegistros($tabla, $datos);
    //     }

    //     return $error;
    // }

    // public static function mdlEditarRegistros($tabla, $datos, $campo, $valor)
    // {

    //     $sentencia = "UPDATE $tabla SET ";
    //     foreach ($datos as $clave => $contenido) {
    //         $sentencia .= $clave . "='" . $contenido . "' ,";
    //     }
    //     $sentencia = rtrim($sentencia, ",");
    //     $sentencia .= " WHERE $campo like '$valor'";
    //     // var_dump($sentencia);

    //     try {
    //         $sentencia = Conexion::conectarMySQL()->prepare($sentencia);
    //         $sentencia->execute();
    //         $resultado = "Update exitosa";

    //         return $resultado;
    //     } catch (PDOException $e) {
    //         $error = $e->getMessage(); // Obtenemos el mensaje del error
    //         // Luego, puedes hacer lo que necesites con el error, como guardar el log o mostrar un mensaje al usuario.
    //         // Por ejemplo, puedes llamar a la función logError($error) que definimos anteriormente:
    //         FuncionesController::ctrLogError($error);
    //         return $resultado = null;
    //     }
    // }

    // public static function mdlBorrarRegistros($tabla, $campo_filtrar, $valores_eliminar)
    // {

    //     $sentencia = "DELETE FROM $tabla WHERE $campo_filtrar in (" . str_repeat("?,", count($valores_eliminar) - 1) . "?)";
    //     //var_dump($sentencia);
    //     try {
    //         $stmt = Conexion::conectarMySQL()->prepare($sentencia);
    //         $stmt->execute($valores_eliminar);
    //     } catch (PDOException $e) {
    //         $error = $e->getMessage(); // Obtenemos el mensaje del error
    //         // Luego, puedes hacer lo que necesites con el error, como guardar el log o mostrar un mensaje al usuario.
    //         // Por ejemplo, puedes llamar a la función logError($error) que definimos anteriormente:
    //         FuncionesController::ctrLogError($error);
    //     }
    // }

    // public static function mdlBorrarRegistrosConImagen($tabla, $campo_filtrar, $valores_eliminar)
    // {

    //     //---- ELIMINAR IMAGENES----------------------------------
    //     $registros = modUsuarios::mdlMostrarRegistros($tabla, null, null);
    //     foreach ($valores_eliminar as $id) // $valores_eliminar es un array escalar con los ids de las fotos a eliminar
    //     {
    //         foreach ($registros as $registro) {
    //             if ($registro["id"] == $id) {
    //                 if ($registro["foto"] != "default.jpg") {
    //                     unlink("img/" . $registro["foto"] . "");
    //                 }
    //             }
    //         }
    //     }

    //     $sentencia = "DELETE FROM $tabla WHERE $campo_filtrar in (" . str_repeat("?,", count($valores_eliminar) - 1) . "?)";
    //     //var_dump($sentencia);
    //     try {
    //         $stmt = Conexion::conectarMySQL()->prepare($sentencia);
    //         $stmt->execute($valores_eliminar);
    //     } catch (PDOException $e) {
    //         $error = $e->getMessage(); // Obtenemos el mensaje del error
    //         // Luego, puedes hacer lo que necesites con el error, como guardar el log o mostrar un mensaje al usuario.
    //         // Por ejemplo, puedes llamar a la función logError($error) que definimos anteriormente:
    //         FuncionesController::ctrLogError($error);
    //     }
    // }


    // public static function mdlConsulta($consulta)
    // {
    //     try {
    //         $sentencia = Conexion::conectarMySQL()->prepare($consulta);
    //         $sentencia->execute();
    //         $registros = $sentencia->fetchall(PDO::FETCH_ASSOC);

    //         return $registros;
    //     } catch (PDOException $e) {
    //         $error = $e->getMessage(); // Obtenemos el mensaje del error
    //         // Luego, puedes hacer lo que necesites con el error, como guardar el log o mostrar un mensaje al usuario.
    //         // Por ejemplo, puedes llamar a la función logError($error) que definimos anteriormente:
    //         FuncionesController::ctrLogError($error);
    //         return $registros = array();
    //     }
    // }

    // public static function mdlComprobarLogin($tabla, $valor)
    // {

    //     $sentenciaMYSQL = "
    //     SELECT u.id_usuario,u.nombre, u.correo,u.user,u.fecha,ud.tipousuario as tipo,u.numero_matricula as matricula, u.codigo_recodat as codigorecodat,u.estado,u.visor_basemensual,
    //     (SELECT fecha_registro 
    //     FROM logs_sessions ls 
    //     LEFT JOIN usuarios u ON u.id_usuario = ls.usuario 
    //     WHERE u.user = '$valor' ORDER by ls.fecha_registro DESC LIMIT 1) as ultimasesion
    //     FROM usuarios u 
    //     INNER JOIN usuarios_departamento ud ON u.tipo = ud.codigo 
    //     WHERE user = '$valor'";
    //     try {
    //         $sentenciaMYSQL = Conexion::conectarMySQL()->prepare($sentenciaMYSQL);
    //         $sentenciaMYSQL->execute();
    //         $registro = $sentenciaMYSQL->fetch();

    //         return $registro;
    //     } catch (PDOException $e) {
    //         $error = $e->getMessage(); // Obtenemos el mensaje del error
    //         // Luego, puedes hacer lo que necesites con el error, como guardar el log o mostrar un mensaje al usuario.
    //         // Por ejemplo, puedes llamar a la función logError($error) que definimos anteriormente:
    //         FuncionesController::ctrLogError($error);
    //         return $registro = array();
    //     }
    // }

    // public static function mdlGetTrabajadoresHorarioGeneral()
    // {

    //     $sentenciaMYSQL = "SELECT *
    //         FROM usuarios u
    //         INNER JOIN usuarios_departamento ud on u.tipo = ud.codigo
    //         WHERE numero_matricula is not null AND visible_control_horas = 1";

    //     try {
    //         $sentencia = Conexion::conectarMySQL()->prepare($sentenciaMYSQL);
    //         $sentencia->execute();
    //         $registros = $sentencia->fetchall(PDO::FETCH_ASSOC);
    //         return $registros;
    //     } catch (PDOException $e) {
    //         $error = $e->getMessage(); // Obtenemos el mensaje del error
    //         // Luego, puedes hacer lo que necesites con el error, como guardar el log o mostrar un mensaje al usuario.
    //         // Por ejemplo, puedes llamar a la función logError($error) que definimos anteriormente:
    //         FuncionesController::ctrLogError($error);
    //         return $registros = array();
    //     }
    // }

    // public static function mdlGetTrabajadoresParaVacaciones($anio)
    // {

    //     $sentenciaMYSQL = "SELECT u.id_usuario,u.nombre , ud.descripcion as departamento, uvo.observaciones as observaciones_anual, uvo.tipo_vacaciones
    //         FROM intranet_test.usuarios u
    //         INNER JOIN intranet_test.usuarios_departamento ud on u.tipo = ud.codigo
    //         LEFT JOIN intranet_test.usuarios_vacaciones_observaciones uvo ON uvo.id_user = u.id_usuario AND anio = $anio
    //         WHERE visor_basemensual = 1
    //         ORDER BY ud.descripcion, u.nombre;";

    //     try {
    //         $sentencia = Conexion::conectarMySQL()->prepare($sentenciaMYSQL);
    //         $sentencia->execute();
    //         $registros = $sentencia->fetchall(PDO::FETCH_ASSOC);
    //         return $registros;
    //     } catch (PDOException $e) {
    //         $error = $e->getMessage(); // Obtenemos el mensaje del error
    //         // Luego, puedes hacer lo que necesites con el error, como guardar el log o mostrar un mensaje al usuario.
    //         // Por ejemplo, puedes llamar a la función logError($error) que definimos anteriormente:
    //         FuncionesController::ctrLogError($error);
    //         return $registros = array();
    //     }
    // }
}
