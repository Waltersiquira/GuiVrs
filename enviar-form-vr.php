<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiVRS</title>
</head>
<body>
    <?php 
    require_once 'includes/lojas.php';
    $n = $_GET['nome'];
    $e = $_GET['especificacoes'];
    $p = $_GET['preco'];
    $i = $_GET['imagem'];
    if ($l->query("INSERT INTO `vr` (`id`, `nome`, `especificações`, `preço`, `imagem`) VALUES (DEFAULT, '$n', '$e', '$p', '$i')") == true){
        echo "vr adcionado com sucesso";
    } else {
        echo 'error';
    }
    ?>
</body>
</html>