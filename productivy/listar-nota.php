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
    <link rel="stylesheet" href="./css/notes-list.css">
    <!--Icone da página-->
    <link rel="shortcut icon" href="image/Favicon.ico" type="image/x-icon">

    <title>Productivity</title>
</head>

<body>
    <h1>Listagem de notas</h1>
    <?php
    $sql = "SELECT * FROM notes";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-dark table-striped'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Título</th>";
        print "<th>Conteúdo</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->idnotes . "</td>";
            print "<td>" . $row->titulo . "</td>";
            print "<td>" . $row->conteudo . "</td>";
            print "<td>
                <button type='button' onclick=\"location.href='?page=editar&idnotes=" . $row->idnotes . "';\" class='btn btn-success'>Editar</button>
                <button type='button'onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='page=salvar&acao=excluir&idnotes=" . $row->idnotes . "';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
            print "</tr>";
        }
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
    ?>

</body>

</html>