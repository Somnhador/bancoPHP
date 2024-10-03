<?php
    require 'conexao.php';

    $lista = [];
    $sql = $pdo->query('SELECT*FROM usuario');
    $lista = [];
    if($sql->rowCount()>0){
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>
<body>
    <h1> Sistema XPTO</h1>
    <table border="1px">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
<?php foreach($lista as $a): ?>
        <tr>
            <td> <?php echo $a['id']; ?> </td>
            <td> <?=$a['nome']; ?> </td>
            <td> <?php echo $a['email']; ?> </td>
            <td> <a href="editar.php?id= <?=$a['id'];?>">[EDITAR]</a>
            <a href="excluir.php?id= <?=$a['id'];?>">[EXCLUIR]</a></td>
        </tr>
        <?php endforeach; ?>
</table>

</body>
</html>