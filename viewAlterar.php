<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include_once ("controle.php");

    if( !empty($_POST['form_submit']) ) {
        obterDadosMontarArray($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cadastrar Pessoa Fisica</title>

        <!-- Bootstrap URL - CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Ajax Script -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>

    <body role="document">
    <div class="container theme-showcase" role="main">
    <h1> Cadastradar Pessoa Física</h1>
        <form class="form" method="post" action="viewCadastrar.php">
        <input TYPE="hidden" NAME="form_submit" VALUE="OK">
            <br><br>
                <button  type="submit" class="btn btn-success  col-sm-6">
                    <b> Confirmar Alteração</b>                
                </button>
                <button  type="acao" value="voltar" class="btn btn-warning col-sm-6">
                <b>Voltar - Não Alterar</b>
                </button>
            <br><br>
            <div class='row'>
            <br>
        		<div class='col-sm-3'>
                    <label class="sr-only">CPF</label>
                    <input type="text" class="form-control" name="cpf" maxlength="15" placeholder="CPF" required autofocus>
                </div>
                <div class='col-sm-9'>
                    <label class="sr-only">Nome</label>
                    <input type="text" class="form-control" name="nome" maxlength="40"  placeholder="Nome" required autofocus>
                <br>
                </div>
                <div class='col-sm-3'>
                    <label class="sr-only">Telefone</label>
                    <input type="text" class="form-control" name="telefone" maxlength="15" placeholder="Telefone" required autofocus>
                </div>
                <div class='col-sm-9'>
                    <label class="sr-only">Endereco</label>
                    <input type="text" class="form-control" name="endereco" maxlength="18" placeholder="Endereco" required autofocus>
                </div>
            </div>
        </form>
        </div>
    </body>
</html>