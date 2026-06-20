<?php
include("conexao.php");

$id = (int)$_GET['id'];
$sql = "SELECT * FROM produtos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
$produto = mysqli_fetch_assoc($resultado);

if (!$produto) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $produto['nome']; ?> - CWB Motors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header-detalhe">
    <div class="logo-mini">
        <img src="https://files.catbox.moe/hx2ppf.png" alt="CWB Motors">
    </div>
</header>

<section class="detalhes">
    <div class="foto-carro">
        <img src="<?php echo $produto['imagem']; ?>" alt="Foto do <?php echo $produto['nome']; ?>">
    </div>
    <div class="info-carro">
        <h2><?php echo $produto['nome']; ?></h2>
        
        <div class="descricao">
            <?php echo $produto['descricao']; ?>
        </div>
        
        <div class="precao">
            R$ <?php echo number_format($produto['preco'], 2, ",", "."); ?>
        </div>
        
        <a href="#" class="btn-interesse" onclick="alert('Um vendedor vai entrar em contato!'); return false;">
            Tenho interesse!
        </a>
    </div>
</section>

<div class="voltar-container">
    <a href="index.php" class="btn-voltar">Voltar para o início</a>
</div>

<footer>
    <h3>CWB Motors</h3>
    <p>Curitiba - PR | (41) 92372-9359 | contato@cwbmotors.com</p>
</footer>

</body>
</html>