<?php
	include_once ("controle.php");

	function cadastrarPessoa($arr) {

		$pessoa=pessoaArray($arr);


		cadastraPessoa($pessoa);

	}

	function pessoaArray($post) {

		$dados = $post['cpf']." - ".$post['nome']." - ".$post['telefone']." - ".$post['endereco'];
		echo "<script> alert('".$dados."') </script>";

		return $dados;
	}

	function obterDadosMontarArray($post) {

		// Monta o array
		$dados = array(
			$post['cpf'] => array(
				"nome" => $post['nome'],
				"endereco" => $post['Endereço'],
				"telefone" => $post['telefone']
			)
		);

		print_r($dados);
	}
	
?>