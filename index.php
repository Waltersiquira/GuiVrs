<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiVRS</title>
</head>
<body>
    <button><a href="form-vr.php" style="text-decoration: none;">adcionar vr</a></button>
    <?php require_once 'includes/lojas.php' ?>
    <h1>GuiVRS</h1>
    <hr>
    <table>
        <?php 
        $busca = $l->query('select * from vr');
        if (!$busca){
            echo 'error';
        } else {
            if ($busca->num_rows == 0){
                echo 'error';
            } else {
                while ($reg=$busca->fetch_object()){
                    echo "<tr><td><a href='pagina-vr.php?i=$reg->id'><img src='$reg->imagem' width='150'></a></td><td>$reg->nome</td></tr>";
                }
            }
        }
        ?>
    </table>
</body>
</html>