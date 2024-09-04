<?php

    use Controller\UsuarioController;

    require_once 'shared/header.php';
    require_once 'vendor/autoload.php';

?>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Operações</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
                $usuarios = new UsuarioController;

                $result = $usuarios->loadAll();
                foreach($result as $key => $value){
                    echo '<tr class="">';
                        echo '<td class="">'.$value['id'].'</td>';
                        echo '<td class="">'.$value['name'].'</td>';
                        echo '<td class="">'.$value['email'].'</td>';
                        echo '<td><a href="manterUsuarios.php?cod='.$value['id'].'&&cod=editar" class="btn btn-primary"> Editar </a> ';
                        echo ' <a href="manterUsuarios.php?cod='.$value['id'].'&&cod=excluir" class="btn btn-danger"> Excluir </a></td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>



<?php 
    require_once './shared/footer.php';

?>
