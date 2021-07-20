<!DOCTYPE html>
<html lang="pr-br">
    <head>
        <title>Página Principal</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/CSS.css">
        <link rel = "shortcut icon" type = "imagem/x-icon" href ="./imagens/icones/home.svg"/>
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
        <div class="conteinerSlides">
            <div class="slides">
                <div class="gallery autoplay items-3">

                    <div id="item-1" class="control-operator"></div>
                    <div id="item-2" class="control-operator"></div>
                    <div id="item-3" class="control-operator"></div>

                    <figure class="item">
                        <a href="#"><img id="slideImg1"src="./imagens/Slide_4.jpg"></a>
                    </figure>

                    <figure class="item">
                        <a href="#"><img src="./imagens/Slide_5.jpg"></a>
                    </figure>

                    <figure class="item">
                        <a href="#"><img src="./imagens/Slide_3.jpg"></a>
                    </figure>

                    <div class="controls">
                        <a href="#item-1" class="control-button">.</a>
                        <a href="#item-2" class="control-button">.</a>
                        <a href="#item-3" class="control-button">.</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="conteinerAtlhos">
            <div class="atalhos">
                <a href="./Pagina_Produtos_Feminino.html">
                    <img class="tamanhoImgAtalho" src="./imagens/Captura de tela 2021-01-13 195311.png">
                </a>
                <a href="./Pagina_Produtos_Masculinos.html">
                    <img class="tamanhoImgAtalho" src="./imagens/Captura de tela 2021-01-13 195356.png">
                </a>
            </div>
        </div>
        <div id="conteinerProdutos">
            <div id="produto">
                <div class="tituloProdutos">
                    <h2>Produtos em Destaque</h2>
                </div>
                <div id="abaProdutos">
                    <?php
                        while( $linha = mysqli_fetch_assoc($resultado) ){
                    ?>
                        <div class="caixa_Nome_Produtos">
                            <a href="Detalhe_Produto.php?nomeProduto=<?=$linha['descProduto']?>&precoProduto=<?=$linha['preco']?>"target="_blank">
                                <img class="lProduto" src="./imagens/img/img_Roupas.jpg">
                                <h3 class="formatacaoTitulo"> 
                                        <?=$linha['descProduto']?>
                                </h3>
                                    <spam class="formatacaoSubTitulo"> 
                                        <?=$linha['preco']?>
                                    </spam>
                            </a>
                            <a href="">
                                <button class="botaoComprar" type="submit">
                                            <span class="btnBuyItNow Medium500">Comprar</span>
                                </button>
                            </a>
                        </div>
                    <?php
                        }
                    ?>

                </div>
            </div>
        </div>
        <?php
        require_once "./conteinersProntos/Rodape.php";
        ?> 

        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    </body>
    
</html>