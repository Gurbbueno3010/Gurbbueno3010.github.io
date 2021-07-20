<!DOCTYPE html>
<html lang="pr-br">
    <head>
        <title>Detales do Produto</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/CSS.css">
        <link rel = "shortcut icon" type = "imagem/x-icon" href ="./imagens/Icones/shirt.svg"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="./css/gallery.theme.css">
        <link rel="stylesheet" href="./css/gallery.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
        require_once "./conteinersProntos/Cabecalho_abas.php"; 
        require_once "conexao.php";

            $comando = "SELECT * FROM tbl_produto";
            $resultado = mysqli_query($conexao, $comando);
        ?>
                <div class="contenerDetalhesProduto">
            <div class="detalhesDoPruduto">
                <div class="imagensProduto">
                    <img class="imagemPrincipalDoProduto"src="./imagens/img/img_Roupas.jpg">
                    <div class="imagensSecundariaDoProduto">
                        <img class="tamanhoDasImagensSecundariaDoProduto"src="./imagens/img/img_Roupas2.jpg">
                        <img class="tamanhoDasImagensSecundariaDoProduto"src="./imagens/img/img_Roupas3.jpg">
                        <img class="tamanhoDasImagensSecundariaDoProduto"src="./imagens/img/img_Roupas4.jpg">
                    </div>
                </div>
                <div class="informacoesDoProduto">
                    <div class="tituloProduto">
                        <h1>
                            <span>
                                <?php
                                $nomeProduto = $_GET["nomeProduto"];
                                echo $nomeProduto
                                ?>
                            </span>
                            <small></small>
                        </h1>
                    </div>
                    <div class="precoProduto Medium500">
                            <span>
                                <?php
                                $precoProduto = $_GET["precoProduto"];
                                echo $precoProduto
                                ?>
                            </span>
                    </div>
                    <div class="quantidadeProduto">
                        <label class="tituloQuantidade">Quantidade</label>
                        <input class="Medium500"type="number" value="1" min="1">
                    </div>
                    <div class="botoesDeCompra">
                        <a href="./Pagina_Sacola_de_Compras.html">
                            <button class="styleBtnAddSacola"type="submit">
                                <span class="btnAddSacola Medium500">add to bag</span>
                            </button>
                        </a>
                       <a href="./Pagina_de_Aviso.html">
                            <button class="styleBtnBuyItNow"type="submit">
                                <span class="btnBuyItNow Medium500">buy it now</span>
                            </button>
                        </a>
                    </div>
                    <div class="descriçãoProduto">
                        <p>

                            <br>• Male T-shirt
                            <br>• Short sleeve
                            <br>• Spaceship Print
                            <br>• Detail that glows in the dark
                            <br>• Sustainable Material: Certified cotton
                            <br>• Brand: Blue Steel
                            <br>• Fabric: Half Mesh
                            <br>• Composition: 100% cotton
                            <br>Model measurements:
                            <br>Height: 1.87
                            <br>Chest: 97
                            <br>Waist: 79
                            <br>Hips: 92
                            <br>Model wears size: M
                            <br>SPRING / SUMMER 2020 COLLECTION
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once "./conteinersProntos/Rodape.php";
        ?> 

        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    </body>
    
</html>