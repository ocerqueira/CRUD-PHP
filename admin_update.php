<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Painel de administração</title>
    
</head>
<body>
    <div class="container">
        <div class="cadastro-produto">

            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h3>Adicionar novo produto</h3>
            <input type="text" placeholder="Nome do Produto" name="nome-produto">
            </form>
        </div>
    </div>
</body>
</html>