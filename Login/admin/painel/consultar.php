<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <!--LINK DO ARQUIVO Estilo.CSS-->
	<link rel="stylesheet" type="text/css" href="../../css/Estilo.css">
 <!--TITULO DA PAGINA-->
	<title>Consultar dados do Veiculo</title>

</head>

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
                <a href="http://localhost/Login/admin/painel/cadastro.php">
                    Cadastrar
                </a>
            </li>

            <li><a href="http://localhost/Login/admin/painel/remover.php">Remover</a></li>
            
            <li><a href="http://localhost/Login/admin/painel/atualizar.php">Atualizar</a></li>
            
            <li><a href="http://localhost/Login/">Sair</a></li>
            
            <li><a href=""></a></li>
        </ul>
    </nav>
	

    <div class="pagina_fundo">

        <!--FORMULARIO DA PAGINA-->
            <form id="form_atualizar" name="form_atualizar" class="form_veiculos" method="POST" action="">

                <div><h1>Consultar Dados</h1></div>

                        <div class="agrupamento_atualizar">
                            <div>
                                <!--LABEL E ENTRADAS DE DADOS-->
                                <div><label>Informe o codigo do veiculo </label></div>
                                <div><input type="text" id="codigo_veiculo" name="codigo_veiculo" required autofocus > </div>
                                
                                <div><label>Informe a categoria do veiculo</label></div>  
                                <div><input type="text" id="categoria_veiculo" name="categoria_veiculo" required autofocus></div>          
                                
                                <div><label>Informe o modelo do veiculo </label></div>
                                <div><input type="text" id="modelo_veiculos" name="modelo_veiculos" required autofocus ></div>
                    
                                <div><input type="submit" id="btn_atualizar" value="Consultar" action="salvar.php"></div>

                           </div>

                    </div>
                </div>    
            </form>
        
    </div>

</body>
</html>