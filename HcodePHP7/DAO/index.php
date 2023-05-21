<?php 
    require_once('config.php');
    /*
    # Inicia classe do Banco de Dados:
    $sql = new SQL();

    # Seleciona os usurios que estão cadastrados no banco de dados:
    $usuarios = $sql->dbSelect('SELECT * FROM tb_usuarios;');

    # Mostra no formato json os usuarios cadastrados no banco:
    echo json_encode($usuarios);
    */

    # Inicia um novo Usuario:
    $root = new Usuario();

    $root->loadById(1);

    echo $root;
?>