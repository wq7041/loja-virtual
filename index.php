<?php
include("conexao.php");
$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CWB Motors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="banner">
        <img src="https://files.catbox.moe/or9fwz.png" alt="Banner CWB Motors">
    </div>
    <nav>
        <a href="#">Início</a>
        <a href="#carros">Carros</a>
        <a href="#contato">Contato</a>
    </nav>
</header>

<section class="carros" id="carros">
    <div class="vitrine">
        <?php while($produto = mysqli_fetch_assoc($resultado)){ ?>
        <div class="carro">
            <img src="<?php echo $produto['imagem']; ?>" alt="Foto do <?php echo $produto['nome']; ?>">
            <div class="nome"><?php echo $produto['nome']; ?></div>
            <div class="preco">
                R$ <?php echo number_format($produto['preco'], 2, ",", "."); ?>
            </div>
            <a href="produto.php?id=<?php echo $produto['id']; ?>" class="btn">Ver mais detalhes &raquo;</a>
        </div>
        <?php } ?>
    </div>
</section>

<footer id="contato">
    <h3>CWB Motors</h3>
    <p>contato@cwbmotors.com | (41) 92372-9359 | Curitiba - PR</p>
</footer>

</body>
</html>