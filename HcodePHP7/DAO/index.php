<?php 
    require_once('config.php');

    # Inicia um novo Usuario:
    $root = new Usuario();

    # Carrega dados um usuario:
    // $root->loadById(1);
    // echo $root;

    # Carrega uma lista com os dados de usuários:
    //$lista = $root::getList();
    //echo json_encode($lista);

    # Carrega uma lista de usuários buscando pelo login:
    //$search = $root::search("ad");
    //echo json_encode($search);

    # Carrega dados de um usuario autenticando:
    $login = $root->login('ADMIN', 'ADMIN');
    echo $root;
?>