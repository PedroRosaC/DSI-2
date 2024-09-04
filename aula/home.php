<?php 
    require_once './shared/header.php'
?>


            <h2>Bem vindo(a). <?php session_start(); echo $_SESSION['nome'];?></h2>
       
        <?php 
    require_once './shared/footer.php'
?>