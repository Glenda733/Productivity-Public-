<?php
    switch($_REQUEST["acao"]){
        case "cadastrar":
            $titulo = $_POST["titulo"];
            $conteudo = $_POST["conteudo"];

            $sql = "INSERT INTO notes(titulo,conteudo) VALUES ('$titulo', '$conteudo')";

            $res = $conn->query($sql);
             
            if($res==true){
                print "<script>alert('Nota gravada com sucesso!')</script>";
                print "<script>location.href='?page=listar';</script>";

            }
            else
            {
                print "<script>alert('Opsss... Não foi possível realizar a gravação da nota!')</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case "editar":
            $titulo = $_POST["titulo"];
            $conteudo = $_POST["conteudo"];

            $sql = "UPDATE notes SET titulo= '{$titulo}', conteudo= '{$conteudo}' WHERE idnotes=" .$_REQUEST['idnotes'];

            $res = $conn->query($sql);
             
            if($res==true){
                print "<script>alert('Editado com sucesso!')</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            else
            {
                print "<script>alert('Opsss... Não foi possível editar esta nota!')</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        
            case "excluir":
                $idnotes = $_POST["idnotes"];
                $titulo = $_POST["titulo"];
                $conteudo = $_POST["conteudo"];

                $sql = "DELETE FROM notes WHERE idnotes=".$_REQUEST["idnotes"];

                $res = $conn->query($sql);

                if($ress==true){
                    print "<script>alert('Excluido com sucesso!')</script>";
                    print "<script>location.href='?page=listar';</script>";
                }
                else
                {
                    print "<script>alert('Opsss... Não foi possível exluir esta nota!')</script>";
                    print "<script>location.href='?page=listar';</script>";
                }
            break;
    }



?>