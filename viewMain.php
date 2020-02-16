<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include_once ("modelo.php");
    
    if( !empty($_POST['form_submit']) ) {
        rotas($_POST['acao']);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Bootstrap URL - CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Ajax Script -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title > Cadastro </title>

    </head>

    <body role="document">
    
        <div class="container theme-showcase" role="main">
        <h1> Pessoas Físicas Cadastradas</h1>
            <table class='table table-striped'>
            <br>
            <button type="submit" name="acao" value="cadastrar/0" class="btn btn-primary btn-block">
            <b>Cadastrar Nova Pessoa Fisica</b>
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
    </body>
</html>