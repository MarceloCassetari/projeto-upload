<?php
// Conecta ao banco de dados (mesmo código usado em upload_process.php)

// Consulta o banco de dados para obter a lista de arquivos
$sql = "SELECT id, nome_arquivo, local_arquivo, data_upload FROM arquivos";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    echo "<h1>Arquivos Disponíveis para Download</h1>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<p>Nome do Arquivo: {$row['nome_arquivo']} - Data de Upload: {$row['data_upload']} - <a href='{$row['local_arquivo']}' download>Download</a></p>";
    }
} else {
    echo "Nenhum arquivo encontrado.";
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>