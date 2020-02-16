<?php
	
    
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