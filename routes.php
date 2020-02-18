<?php

     include_once ("controle.php");

     function rotas($url) {
         
         $dados = explode("/", $url);
         if(strcmp($dados[0], "cadastar") == 0) {            
             
            if(( $dados['cpf']!="" && $dados['nome']!="" &&  $dados['telefone'] !=""&& $dados['endereco'] != "" ) ){
               cadastraPessoa($url);
            } else{
                echo "<script>href='viewCadastrar.php'</script>";	
            }
                                     
         }
 
         else if(strcmp($dados[0], "alterar") == 0) {
            alterarCadastro($dados[1]);
         }
         else if(strcmp($dados[0], "remover") == 0){
            deletaPessoa($dados[1]);
         }
         else if(strcmp($dados[0], "voltar") == 0) {
             
            echo "<script>location.href='viewMain.php'</script>";
        }
     }
