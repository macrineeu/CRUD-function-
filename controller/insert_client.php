<?php

    include_once "../model/conexao.class.php";
    require_once "../model/manager.class.php";

    $manager = new Manager();

    $data = $_POST;

    if (isset($data) && !empty($data)) {
        $manager->insertClient("registros", $data);
        header("Location: ../index.php?client_add_success");
    }
?>