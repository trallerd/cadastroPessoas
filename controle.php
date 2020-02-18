<?php
	include_once ("modelo.php");

	function cadastrarPessoa($arr) {
		$pessoa=pessoaArray($arr);
		cadastraPessoa($pessoa);

	}
	function alterarCadastro($arr){
		$pessoa = pessoaArray($arr);
		alteraPessoa($pessoa);
		
	}
	function deletaPessoa($arr){
		$pessoa = pessoaArray($arr);
		deletPessoa($pessoa);
	}

	function pessoaArray($post) {

		$array=array(
			$post['cpf']=>array(
				'nome'=> $post['nome'],
				'telefone'=> $post['telefone'],
				'endereco'=> $post['endereco'],
			)
	);

	return $array;
	}

	function obterDadosMontarArray($post) {

		// Monta o array
		$dados = array(
			$post['cpf'] => array(
				"nome" => $post['nome'],
				"telefone" => $post['telefone']
			)
		);

		print_r($dados);
	}

	function loadTabela() {

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
		
		foreach ($pessoas as $cpf => $dados) {
			
			if(!empty($dados)) {
				echo "<tr>";
					echo "<td>".$cpf."</td>";

					foreach ($dados as $valor) {
						echo "<td>".$valor."</td>";
					}

					echo "<td>";
						echo "<button  type='submit' name='acao' onClick='JavaScript: location.href='viewAlterar.php';' class='btn btn-warning col-sm-3'>";
							echo "<span class='glyphicon glyphicon-pencil'></span>";
						echo "</button>";
						echo "&nbsp";echo "&nbsp";echo "&nbsp";
						echo "<button type='submit' name='acao' value='remover/$cpf'class='btn btn-danger col-sm-3'>";
							echo "<span class='glyphicon glyphicon-remove'></span>";
						echo "</button>";
					echo "</td>";
				echo "</tr>";
			}
		
		}
	}
	
?>