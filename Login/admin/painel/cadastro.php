

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--LINK DO ARQUIVO Estilo.CSS-->
	<link rel="stylesheet" type="text/css" href="../../css/Estilo.css">
 	<!--TITULO DA PAGINA-->
	<title>Cadastro</title>

</head>


<body>
	
<!--CORPO DA PAGINA-->
<body>
 <!--MENU DA PAGINA-->
    <nav id="menu-h">
        <ul>
			<!--PAINEL COM LINK PARA OUTRAS PAGINAS-->
			<li>
                <a href="http://localhost/Login/admin/topo_admin.php">
                    Home
                </a>
            </li>

            <li>
                <a href="http://localhost/Login/admin/painel/atualizar.php">
                    Atualizar
                </a>
            </li>

            <li><a href="http://localhost/Login/admin/painel/remover.php">Remover</a></li>
            
            <li><a href="http://localhost/Login/admin/painel/consultar.php"> Consultar</a></li>
            
            <li><a href="http://localhost/Login/">Sair</a></li>
            
            <li><a href="#"></a></li>
        </ul>
    </nav>
	
	
	<div class="Pagina_fundo">

		<!-- FORMULARIO DA PAGINA -->
	<form id="form_cadastro" name="form_cadastro" class="form_veiculos" method="POST" action="salvar.php">
		<div>
			<h1>Cadastrar Veiculo</h1>
		</div>

		<div class="agrupamento_cadastro">
			<!-- LABEL E ENTRADAS DE DADOS -->
			<div>
				<label>Descricao do Veiculo</label>
			</div>
			<div>
				<input type="text" id="descricao_veiculo" name="descricao_veiculo" required autofocus>
			</div>

			<div>
				<label>Codigo do Veiculo</label>
			</div>
			<div>
				<input type="text" id="codigo_veiculo" name="codigo_veiculo" required autofocus>
			</div>

			<div>
				<label>Ano do Veiculo</label>
			</div>
			<div>
				<input type="text" id="ano_veiculo" name="ano_veiculo" required autofocus>
			</div>

			<div>
				<label>Modelo do Veiculo</label>
			</div>
			<div>
				<input type="text" id="modelo_veiculo" name="modelo_veiculo" required autofocus>
			</div>

			<div>
				<label>Categoria do Veiculo</label>
			</div>
			<div>
				<input type="text" id="categoria_veiculo" name="categoria_veiculo" required autofocus>
			</div>

			<div>
				<label>Cor do Veiculo</label>
			</div>
			<div>
				<input type="text" id="cor_veiculo" name="cor_veiculo" required autofocus>
			</div>

			<div>
				<input type="submit" id="btn_cadastrar" name="btn_cadastrar" value="Cadastrar" action="Cadastro.php">
			</div>
		</div>
	</form>
</div>


</body>

</html>