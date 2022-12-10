<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!--Estilo CSS-->
    <link rel="stylesheet" href="./css/new-note.css">
    <!--Icone da página-->
    <link rel="shortcut icon" href="image/Favicon.ico" type="image/x-icon">
    <title>Productivity</title>
</head>

<html>
<body>

    <h1>Editar nota</h1>
    <?php
    $sql = "SELECT * FROM notes WHERE idnotes=" . $_REQUEST["idnotes"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>

    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="idnotes" value="<?php print $row->idnotes; ?>">
        <div class="mb-3">
            <label>Título</label>
            <input type="text" name="titulo" value="<?php print $row->titulo; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Conteúdo</label>
            <input type="text" name="conteudo" value="<?php print $row->conteudo; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-danger">Gravar</button>
        </div>
    </form>
</body>
</html>