<?php
	$servername = "localhost"; // ou endereço IP do servidor MySQL
	$username = "root";
	$password = "";
	$dbname = "db_concessionaria";
	$charset = "utf8mb4";
	
	// Cria a conexão com o banco de dados
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Verifica se ocorreu algum erro na conexão
	if ($conn->connect_error) {
		die("Erro na conexão com o banco de dados: " . $conn->connect_error);
	}
	
	// Define o charset da conexão
	$conn->set_charset($charset);

// Dados da conexão com o banco de dados
// ...

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Coleta os dados do formulário
    $descricao = $_POST["descricao_veiculo"];

    $codigo = $_POST["codigo_veiculo"];

    $ano = $_POST["ano_veiculo"];

    $modelo = $_POST["modelo_veiculo"];

    $categoria = $_POST["categoria_veiculo"];

    $cor = $_POST["cor_veiculo"];

	

    // Insere os dados na tabela de veículos
    $sql = "INSERT INTO veiculo (descricao_veiculo, codigo_veiculo, ano_veiculo, modelo_veiculo, categoria_veiculo, cor_veiculo) 
            VALUES ('$descricao', '$codigo', '$ano', '$modelo', '$categoria', '$cor')";

    if ($conn->query($sql) === TRUE) {
        echo "Veículo cadastrado com sucesso!";
        

    } else {
        echo "Erro ao cadastrar o veículo: " . $conn->error;


    }

    if (mysqli_query($conexao,$insert_veiculo)) {

        mysqli_close($conexao);

        echo "<script> alert ('CURSO CADASTRADO COM SUCESSO!');</script>";

        echo "<script> window.location.href='$url_admin/painel/exibir.php';</script>";
        
    } else {
    
        echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

        echo "<script> window.location.href='$url_admin/painel';</script>";
        
        mysqli_close($conexao);
    }
}


// Fecha a conexão com o banco de dados
$conn->close(); 
?>




