<?php
if($_POST){
    require_once '../model/usuarios.php';
    $usuario = new Usuario();
    $usuario->setId($_POST['id']);
    $usuario->setNome($_POST['nome']);
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);
    $usuario->setDataNascimento($_POST['data_nascimento']);
    
    if(!empty($_POST['nome'])){
        $usuario->insert();
        header('location:../index.php');
    }else{
        header('location:..cadastro.php?cod=11');
    }
}