<?php

	function deletPessoa($cpf){
		echo "<script> alert('entrando no deletar') </script>";
	}

	function alteraPessoa($arrayPessoa){
		echo "<script> alert('alterando vc..') </script>";
		/*		$arr = fopen('pessoas.txt','r+');
			if ($arr) { 
				while(true) { 
				$linha = fgets($arr); 
				if ($linha==null){ break;} 
				if(preg_match(".$arrayPessoa.", $linha)) { 
					foreach($arrayPessoa as $cpf => $dados) {
						if(empty($dados)) {
							$linha = $cpf."\n".$dados['nome']."#".$dados['endereco']."#".$dados['telefone']."\n";
							fputs($arr, $linha);
						}
					}
				} 
			} 
			
			 echo 'Arquivo atualizado com sucesso'; 
			 fclose($arr);  
	
		}*/
	}
	
	
	function cadastraPessoa($arrayPessoa) {

		$fp = fopen('pessoas.txt', 'a+');
		if ($fp) {
			foreach($arrayPessoa as $cpf => $dados) {
				if(!empty($dados)) {
					$linha = $cpf."\n".$dados['nome']."#".$dados['endereco']."#".$dados['telefone']."\n";
					fputs($fp, $linha);
				}
			}
			fclose($fp);
		}
		echo "[OK] Dados escritos com Sucesso!";
	}


	function buscaPessoa() {

		$pessoas = array();
		$fp = fopen('pessoas.txt', 'r');

		if ($fp) {

			while(!feof($fp)) {
				$arr = array();
				$cpf = fgets($fp);
				$dados = fgets($fp);
				if(!empty($dados)) {
					$arr = explode("#", $dados);
					$pessoas[$cpf] = $arr;
				}
			}

			fclose($fp);
		}
	}
	
?>