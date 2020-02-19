<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include_once ("controle.php");
    include_once ("routes.php");
    
    if( !empty($_POST['form_submit']) ) {
        rotas($_POST['acao']);
    }
?>

<!DOCTYPE html> 
<html lang="en">
    <head>
    <nav class="navbar navbar-inverse navbar-fixed"></nav>
        
        <!-- Bootstrap URL - CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Ajax Script -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title > Cadastro </title>

    </head>

    <body role="document">
    <form class="form" method="post" action="viewMain.php">
        <input TYPE="hidden" NAME="form_submit" VALUE="OK">
            <div class="container theme-showcase" role="main">
                <h1> Pessoas Físicas Cadastradas</h1>
                <table class='table table-striped'>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block" name="acao" value="cadastar/">
                            <b>Cadastrar Nova Pessoa Física</b>
                        </button>
                    <br>
                        <thead>
                            <tr>
                                <th>CPF</th>
                                <th>NOME</th>
                                <th>ENDEREÇO</th>
                                <th>TELEFONE</th>
                                <th>AÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php loadTabela(); ?>
                        </tbody>
                </table>
            </div>
        </form>
    </body>
</html>