<?php

    use Controller\UsuarioController;

    require_once 'shared/header.php';
    require_once 'vendor/autoload.php';
    $usuarios = new UsuarioController;
?>

<form method="post" action="<?php // $usuarios->save(); ?>">

<input type="hidden" name="id" value="<?php // echo(empty($usuarios)?'':$usuarios->getId()); ?>">
<div class="mb-3">

    <label for="" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" placeholder="Insira seu nome"/>

    <label for="" class="form-label">E-mail</label>
    <input type="email" class="form-control" name="nome" placeholder="Insira seu nome"/>

    <label for="" class="form-label">Senha</label>
    <input type="text" class="form-control" name="nome" placeholder="Insira seu nome"/>
</div>

<input type="submit" value="Salvar" class="btn btn-success">


</form> 


<?php 
    require_once './shared/footer.php';

?>
