<?php require('../topo_admin.php');

	require('../../conexao.php');


	$select_veiculo = mysqli_query($conexao, "SELECT * FROM veiculo ORDER BY codigo_curso ASC");
				
	
		if (mysqli_num_rows($select_veiculo) > 0) {
			
			$dados_veiculo = mysqli_fetch_assoc($select_veiculo);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM VEICULOS	 CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/painel';</script>";
			
			
		}


?>



		<div class="estila_tabela">

			<div><h1>CURSOS CADASTRADOS</h1></div>

				<table>
					
					<tr class="tabela_cabecalho">

						<td>CÓDIGO</td>
						<td>NOME</td>
						<td colspan="2">Ação</td>

					</tr>



				<?php do{


					?>
					
					<tr>

						<td><?php echo $dados_veiculo['codigo_veiculo'];?></td>
						<td><?php echo $dados_veiculo['descricao_veiculo'];?></td>
						<td>

							<a href="editar.php?codigo_curso=<?php echo $dados_curso['codigo_veiculo'];?>">
								<img src="../../img/editar.png" class="botao_acao" title="Editar">
							</a>
						</td>

						<td>

							<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_veiculo['codigo_veiculo'];?>')">
								<img src="../../img/excluir.png" class="botao_acao" title="Excluir">
							</a>
						</td>
						
					</tr>

				<?php }while ($dados_veiculo = mysqli_fetch_assoc($select_veiculo));?>

				</table>

		</div>

</body>

</html>