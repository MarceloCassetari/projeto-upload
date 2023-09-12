<!DOCTYPE html>
<html>
<head>
    <title>Processamento de Upload</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
 
</head>

<body>
<div class="parent">
     <!-- Logo -->

    <div class="div1">
        
        <img class="img-fluid" src="img/logo.png" alt="..." />

    </div>


    <!-- Parte 1 -->

        <div class="div5">
            <h1 class="mt-4">Processamento de Upload</h1>
        </div>

      <!-- Parte 2 (inicio PHP) -->

        <div class="div3">
            
        <?php
// Configuração do banco de dados
$host = "localhost";
$usuario = "root";
$senha = "root";
$banco = "upload_site";

// Conecta ao banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verifica a conexão
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// Processa o upload do arquivo
if ($_FILES["arquivo"]["error"] === UPLOAD_ERR_OK) {
    $nomeArquivo = $_FILES["arquivo"]["name"];
    $localArquivo = "uploads/" . uniqid() . ".rar"; // Diretório de upload !!!!
    
    if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $localArquivo)) {
        // Insere os detalhes no banco de dados
        $sql = "INSERT INTO arquivos (nome_arquivo, local_arquivo) VALUES (?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $nomeArquivo, $localArquivo);
        $stmt->execute();
        $stmt->close();
                // Gere o link de download
                $linkDownload = 'http://localhost/projeto-upload/' . $localArquivo; // URL do site (pasta do projeto) !!!!

                echo '<div class="alert alert-success" role="alert">Upload bem-sucedido! Copie o link abaixo para baixar o arquivo:<br>';
                echo '<input type="text" class="form-control" value="' . $linkDownload . '" readonly> <br>' ;
                echo '<button id="copiarBotao" class="myButton">Copiar Link</button>';
                echo '</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Erro ao mover o arquivo para o servidor.</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">Erro no upload do arquivo.</div>';
        }

// Fecha a conexão com o banco de dados
$conexao->close();


?>


        <!-- Fim do PHP -->

        <!-- Parte 4 -->
        <div class="div4">
            <a href="upload.php" class="myButton">Voltar</a>
        </div>

        
    </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>