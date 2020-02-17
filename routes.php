<?php
     include_once ("controle.php");

     function rotas($url) {
         
         $dados = explode("/", $url);
         if(strcmp($dados[0], "cadastar") == 0) {
             
             console.log("ok");
             if(( $dados['cpf'] && $dados['nome'] &&  $dados['telefone'] && $dados['endereco'] ) ){
                 cadastraPessoa($url);
             } 
             echo "<script>href='viewCadastrar.php'</script>";				
             
                                     
         }
 
         else if(strcmp($dados[0], "alterar") == 0) {
             
             echo "<script>location.href='viewAlterar.php'</script>";
         }
         else if(strcmp($dados[0], "remover") == 0){
             echo "<script> alert('REMOVER') </script>";
             
         }
     }
?>