<?php if(isset($_GET['nome'])) : ?>
<p>Olá com GET <?= $_GET['nome'] ?> </p>
<!-- <p>Olá <php echo $_GET['nome'] ?> </p> -->
<?php endif; ?>

<?php if(isset($_POST['nome'])) : ?>
<p>Olá com POST <?= $_POST['nome'] ?> </p>
<?php endif; ?>

<p>Olá com REQUEST <?php echo $_REQUEST['nome'] ?> </p>

<p>
    Olá <?= $_POST['nome'] ?> 
    sua idade é <?= $_POST['idade'] > 18 ? 'maior' : 'menor' ?> que 18
</p>

<p>
    Olá <?= $_POST['nome'] ?> 
    sua idade é 
    <?php if($_POST['idade'] > 18)  : ?>
        maior
    <?php else: ?>
    menor
    <?php endif; ?>
    que 18
</p>