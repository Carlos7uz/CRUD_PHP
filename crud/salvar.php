<?php
switch($_REQUEST["acao"]){
    case 'cadastrar':
        $nome=$_POST["nome"];
        $setor=$_POST["setor"];
        $valor=$_POST["valor"];

        $sql = "INSERT INTO produto (nome, setor, valor) VALUES ('{$nome}', '{$setor}', '{$valor}')";
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possivel cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;

    case 'editar':
        $nome = $_POST["nome"];
        $setor = $_POST["setor"];
        $valor = $_POST["valor"];

        $sql = "UPDATE produto SET 
                    nome='{$nome}',
                    setor='{$setor}',
                    valor='{$valor}'
                WHERE
                    id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possivel editar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;

    case 'excluir':

        $sql = "DELETE FROM produto WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Excluído com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possivel excluir');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;
}
?>