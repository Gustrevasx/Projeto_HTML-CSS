
<?php session_start();

	if (!isset($_SESSION['nome_login'])) {	
	    
	    session_destroy();
	 
	    unset ($_SESSION['nome_login']);
	    unset ($_SESSION['tipo_login']);

		echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
		
		echo "<script> window.location.href='http://localhost/Login';</script>";

	}	

	if ($_SESSION['tipo_login'] <> 0) {

		echo "<script> alert('ERRO: VOCÊ NÃO TEM PERMISSÃO PARA ACESSAR ESTA PÁGINA!');</script>";					
		session_destroy();
	 
		unset ($_SESSION['nome_completo_login']);
		unset ($_SESSION['nome_login']);
		unset ($_SESSION['tipo_login']);

		unset ($_SESSION['url']);
		unset ($_SESSION['url_admin']);
		unset ($_SESSION['url_cliente']);

		echo "<script> window.location.href='http://localhost/Login';</script>";				

	} 


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <!--TITULO DA PAGINA-->
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!--LINK DO ARQUIVO Estilo.CSS-->
    <link rel='stylesheet' type='text/css' media='screen' href='../css/Estilo.css'>
    
    
</head>

<style> 
*{
    margin: 0;
    padding: 0;
    box-sizing: 0;
}

body{
    width: 100vw;
    height: 100vh;
    background-image: url("../img/D0F.gif")  ;
    background-size: 110%;

}

h1{ 
    width: 445px;
	margin: 1 auto;
    background-color: rgb(10, 10, 10) ; 
}
</style>

<!--CORPO DA PAGINA-->
<body>
    <!--MENU DA PAGINA-->
    <nav id="menu-h">
        <ul>
			<!--PAINEL COM LINK PARA OUTRAS PAGINAS-->
            <li>
                <a href="http://localhost/Login/admin/painel/atualizar.php">
                    Atualizar
                </a>
            </li>

            <li><a href="http://localhost/Login/admin/painel/remover.php">Remover</a></li>
            
            <li><a href="http://localhost/Login/admin/painel/consultar.php"> Consultar</a></li>

            <li><a href="http://localhost/Login/admin/painel/cadastro.php">Cadastrar</a></li>
            
            <li><a href="http://localhost/Login/sair.php">Sair</a></li>
            
            <li><a href=""></a></li>
        </ul>
    </nav>

    <div class="home_page">

        <div></div></div>
           <div class="h1"></div>
            <div><h1>Bem vindo a pagina do administrador</h1></div>











    </div>


</body>
</html>





<!--AMO MINHA NAMORADA FLORENCE <3 -->
    <!--FELIZ ESTOU POR CRIAR MEU PRIMEIRO PROJETO HTML E CSS-->
    <!--GUSTAVO BRAZ / MATRICULA: 202203101986 TURNO: NOTURNO-->

