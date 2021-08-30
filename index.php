<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php' ?>

    <h2>Título carregado do index.php</h2>

    <h4>Form com GET</h4>
    <form action="request.php">
        <label>Nome: </label>
        <input type="text" name="nome">
        <input type="submit">
    </form>

    <h4>Form com POST</h4>
    <form action="request.php" method="POST">
        <label>Nome: </label>
        <input type="text" name="nome">
        <input type="submit">
    </form>

    <h4>DESAFIO</h4>
    <form action="request.php" method="POST">
        <label>Nome: </label>
        <input type="text" name="nome">
        <br>
        <label>Idade: </label>
        <input type="text" name="idade">
        <br>
        <input type="submit">
    </form>

    <?php 
        $arr_nomes = [
            'nome0' => 'Gabriel Novais',
            'nome1' => 'Joaquina Bentina',
            'nome2' => 'Juca Uzumaki',
        ];

        foreach($arr_nomes as $nome) {
            echo '<p>' . $nome . '</p>';
        }
    ?>
</body>
</html>