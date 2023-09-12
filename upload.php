<!DOCTYPE html>
<html>
<head>
    <title>Upload de Arquivos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="parent">
<div class="div1"><img class="img-fluid" src="img/logo.png" alt="..." /> </div>

<div class="div2"> <h1 class="mt-4">Upload de XML(.rar)</h1>  </div>

    <div class="div3"> 

    <form action="upload_process.php" method="POST" enctype="multipart/form-data">
      
        <label for="arquivo" class="form-label">Selecione o arquivo .rar:</label>
        <input type="file" class="form-control" name="arquivo" id="arquivo">
      
      <div class="div4">
        <button type="submit" class="myButton">Enviar</button>
      </div>
    </form> 
    </div>
    
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>