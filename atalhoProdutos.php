<!DOCTYPE html>
<html lang="pr-br">
    <head>
        <title>Atalho-Acesso Administrador</title>
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
        $idCategoria= $_GET["idCategoria"];
        $comando3= "SELECT*FROM tbl_categoria WHERE idCategoria= $idCategoria";
        $resgistro3=mysqli_query($conexao, $comando3);
        $linha3= mysqli_fetch_assoc($resgistro3);


            $comando = "SELECT * FROM tbl_produto";
            $resultado = mysqli_query($conexao, $comando);

        ?>
        <div class="conteinerDashboard">
            <div class="dashboardCadastro">
                <div class="atalhosDashboard">
                    <div class="tituloAtalhosDashboard">
                        <h4>Atalho Produtos</h4>
                    </div>
                    <div class="nomeAtalhosDashboard">
                        <ul>
                            <?php
                                $comando2 = "SELECT * FROM tbl_categoria";
                                $resultado2 = mysqli_query($conexao, $comando2);
                                while( $linha2 = mysqli_fetch_assoc($resultado2) ){
                            ?>
                            <a href="atalhoProdutos.php?idCategoria=<?=$linha2['idCategoria']?>"target="_blank">
                                <li><?=$linha2['idCategoria']?> - <?=$linha2['descricao']?></li>
                            </a>
                            <?php     
                            }
                            ?>
                        </ul>
                        <a href="Acesso administrador.php">
                                <spam>Todos os Produtos</spam>
                        </a>                        
                    </div>
                    <div class="tituloAtalhosDashboard">
                        <h4>Relat??rio</h4>
                    </div>
                    <div class="nomeAtalhosDashboard">
                        <ul>
                            <a href="./Pagina_de_Aviso.html">
                                <li>Relat??rio 1</li>
                            </a>
                            <a href="./Pagina_de_Aviso.html">
                                <li>Relat??rio 2</li>
                            </a>
                            <a href="./Pagina_de_Aviso.html">
                                <li>Relat??rio 3</li>
                            </a>
                        </ul>
                    </div>
                    <div class="btnAdicionarProdutoAtalhosDashboard">
                        <a href="CadastrarNovoProduto.php">
                            <button type="submit">
                                Adicionar Produto
                            </button>
                        </a>
                    </div>
                </div>
                <div class="produtosCadastrados">
                    <div class="tituloProdutosCadastrados">
                        <h1>Categoria <?=$linha3['descricao']?> Cadastrado</h1>
                    </div>
                    <div class="conteudoProdutosCadastrados">
                        <div class="tituloConteudoProdutosCadastrados">
                            <span class="tituloConteudoProdutosCadastrados_Produtos styleTitulosConteudoProdutosCadastrados">Produtos</span>
                            <span class="tituloConteudoProdutosCadastrados_Estoque styleTitulosConteudoProdutosCadastrados">Estoque</span>
                            <span class="tituloConteudoProdutosCadastrados_Pre??o styleTitulosConteudoProdutosCadastrados">Pre&ccedilo</span>
                            <span class="tituloConteudoProdutosCadastrados_Pre??o styleTitulosConteudoProdutosCadastrados">Peso</span>
                            <span class="tituloConteudoProdutosCadastrados_Pre??o styleTitulosConteudoProdutosCadastrados">Categoria</span>
                        </div>
                        <div id="produtosCadastrados">
                            <?php
                                while( $linha = mysqli_fetch_assoc($resultado) ){
                                    if($idCategoria== $linha['idCategoria']){
                            ?>
                                <div class="conteiner_Caixa_Produtos_Cadastrados">
                                    <div class="caixa_Produtos_Cadastrados">
                                        <a class="caixa_Produtos_Cadastrados"href="Detalhe_Produto.php?nomeProduto=<?=$linha['descProduto']?>&precoProduto=<?=$linha['preco']?>">
                                            <img class="tamanhaImgProdutoCad"src="./imagens/Modelos/Modelo_Produto1_1.png">
                                            <spam class="formatacaoTituloProdutoCad"> 
                                                <?=$linha['descProduto']?>
                                            </spam>
                                        </a>
                                        <div class="estoqueProdutoCadastrado">
                                            <input class="Medium500"type="number" value="10" min="1">
                                        </div>
                                        <spam class="formatacaoPrecoProdutoCad"> 
                                            <?=$linha['preco']?>
                                        </spam>
                                        <spam class="formatacaoPesoProdutoCad"> 
                                            <?=$linha['peso']?>
                                        </spam>
                                        <spam class="formatacaoDescricao"> 
                                            <?php
                                            $descricao= $linha['idCategoria'];
                                            $comando3= "SELECT*FROM tbl_categoria WHERE idCategoria= $descricao";
                                            $resgistro3=mysqli_query($conexao, $comando3);
                                            $linha3= mysqli_fetch_assoc($resgistro3);
                                            echo$linha3['descricao']
                                            ?>
                                        </spam>
                                        <a href="Editar Produto.php?idProduto=<?=$linha['idProduto']?>">
                                            <button class="formatacaoBotao">Editar</button>
                                        </a>

                                        <a href="Deletar Registro.php?idProduto=<?=$linha['idProduto']?>">
                                            <button class="formatacaoBotao">Excluir</button>
                                        </a>
                                    </div>
                                </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
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