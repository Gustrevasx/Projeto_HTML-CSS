<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/Estilo.css">

	<title>Remover Veiculo</title>

</head>

<body>
    <nav id="menu-h">
        <ul>
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

            <li><a href="http://localhost/Login/admin/painel/atualizar.php">Atualizar</a></li>
            
            <li><a href="http://localhost/Login/admin/painel/consultar.php">Consultar</a></li>
            
            <li><a href="http://localhost/Login/">Sair</a></li>
            
            <li><a href=""></a></li>
        </ul>
    </nav>
	

    <div class="pagina_fundo">
        
            <form id="form_atualizar" name="form_atualizar" class="form_veiculos" method="POST" action="">

                <div><h1>Remover veiculo</h1></div>

                        <div class="agrupamento_atualizar">
                            <div>

                                <div><label>Informe o codigo do veiculo </label></div>
                                <div><input type="text" id="atualizar_veiculo" name="atualizar_veiculo" required autofocus > </div>
                                
                                <div><label>Informe a categoria do veiculo</label></div>  
                                <div><input type="text" id="atualizar_veiculo" name="atualizar_veiculo" required autofocus></div>          
                                
                                <div><label>Informe o modelo do veiculo </label></div>
                                <div><input type="text" id="atualizar_veiculos" name="atualizar_veiculos" required autofocus ></div>
                    
                                <div><input type="submit" id="btn_atualizar" value="Remover"></div>

                           </div>

                    </div>
                </div>    
            </form>
        
    </div>

</body>
</html>