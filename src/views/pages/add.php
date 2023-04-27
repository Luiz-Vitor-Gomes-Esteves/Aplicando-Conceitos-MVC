<?php $render('header');?>

<h2> Adicionar Novo Usuario</h2>

<!-- Formulário para inserção de dados via MVC -->
<form method='POST'action="<?php echo $base."/novo" ?>">

    <label>
        Nome:<br/>
        <input type="text" name="name" />
    </label><br/>
    <label>
        Email:<br/>
        <input type="email" name="email" />
    </label><br/><br/>

    <input type="submit" value="Adicionar"/>



</form>



<?php $render('footer'); ?>