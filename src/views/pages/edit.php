<?php $render('header');?>

<h2> EDITAR</h2>

<!-- Formulário para Edição de dados via MVC -->
<form method='POST'action="<?php echo $base; ?>/usuario/<?php echo $usuario['id'];?>/Editar">

    <label>
        Nome:<br/>
        <input type="text" name="name" value="<?php echo $usuario['nome']; ?>"/>
    </label><br/>
    <label>
        Email:<br/>
        <input type="email" name="email" value="<?php echo $usuario['email']; ?>"/>
    </label><br/><br/>

    <input type="submit" value="Salvar"/>



</form>



<?php $render('footer'); ?>