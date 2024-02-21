<?php
    require_once "models/Municipio.php";
    $municipios = [];
    if(isset($_GET['id_estado'])) {
        $tabla_minicipio = new Municipio();
        $municipios = $tabla_minicipio->obtener_municipios_select($_GET['id_estado']); // Esto es el array de municipios retornado por la BD en crudo
    }//end if
    echo json_encode(['data' => $municipios]);
