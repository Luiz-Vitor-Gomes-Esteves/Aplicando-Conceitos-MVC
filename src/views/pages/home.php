<?php $render('header');?>

BASE: <?= $base; ?><br>
<a href="<?= $base ?>/novo">Novo Usuario</a>

<hr/>
    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>AÇÕES</th>
        </tr>

        <?php foreach($usuarios as $usuario): ?>

            <tr>
                <td><?php echo $usuario['id'];?></td>
                <td><?php echo $usuario['nome'];?></td>
                <td><?php echo $usuario['email'];?></td>          
                <td>
                    <a href="<?php echo $base;?>/usuario/<?php echo $usuario['id']?>/editar">editar</a>
                    <a href="<?php echo $base;?>/usuario/<?php echo $usuario['id']?>/excluir">excluir</a>
                </td>
            </tr>


        <?php endforeach;?>
    </table>
<hr/>

<?php $render('footer'); ?>