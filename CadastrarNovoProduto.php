<!DOCTYPE html>
<html lang="pr-br">
    <head>
    <title>Acesso Administrador</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/CS.css">
        <link rel = "shortcut icon" type = "imagem/x-icon" href ="./imagens/icones/build.svg"/>
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
        <div class="conteinerCabecalho">
            <div class="cabecalho">
                <div class="logo">
                    <a href="./index.html">
                        <img id="logoSit"src="./imagens/Logo Best Style 4.png"alt="logo Best Style">
                    </a>
                </div>
                <div class="busca">
                    <form method="" action="">
                        <input id="busca"placeholder="Buscar" type="search">
                        <button id="botaoBusca"type="submit"><ion-icon name="search-outline"></ion-icon></button>
                    </form>
                </div>
                <div class="loginOuCadastro">
                    <a id="login" href="./Pagina_do_Login.html">
                        <ion-icon class="iconiLogin"name="person-circle"></ion-icon>
                        <span>Entre ou cadastre-se</span>
                    </a>
                    <a id="sacola" href="./Pagina_Sacola_de_Compras.html">
                        <ion-icon class="iconiSacola" name="bag-handle"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
        <div class="conteinerAbas">    
            <div class="abasMenu">
                    <ul class="abas">
                        <li>
                            <a class="estiloAbas" href="./index.html">home</a>
                        </li>
                        <li>
                            <a class="estiloAbas"href="./Pagina_Sobre.html">sobre</a>
                        </li>
                        <li>
                            <a class="estiloAbas"href="./Pagina_Produtos_Masculinos.html">masculino</a>
                        </li>
                        <li>
                            <a class="estiloAbas"href="./Pagina_Produtos_Feminino.html">feminino</a>
                        </li>
                        <li>
                            <a class="estiloAbas"href="#">contato</a>
                        </li>
                    </ul>
            </div>
        </div>
        <div class="conteinerDashboard">
            <div class="cadastrarNovoProduto">
                <div class="atalhosDashboard">
                    <div class="tituloAtalhosDashboard">
                        <h4>Atalho Produtos</h4>
                    </div>
                    <div class="categoriaProduto">
                        <?php
                            require_once "conexao.php";
                            $comando2 = "SELECT * FROM tbl_categoria";
                            $resultado2 = mysqli_query($conexao, $comando2);
                            while( $linha2 = mysqli_fetch_assoc($resultado2) ){
                                
                                echo "<p>".$linha2['descricao']. "</p>"; 
                                
                            }
                        ?>
                        
                    </div>
                    <div class="tituloAtalhosDashboard">
                        <h4>Relatório</h4>
                    </div>
                    <div class="nomeAtalhosDashboard">
                        <ul>
                            <a href="./Pagina_de_Aviso.html">
                                <li>Relatório 1</li>
                            </a>
                            <a href="./Pagina_de_Aviso.html">
                                <li>Relatório 2</li>
                            </a>
                            <a href="./Pagina_de_Aviso.html">
                                <li>Relatório 3</li>
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
                        <h1>Cadastrar Novo Produto</h1>
                    </div>
                    <div class="formularioNovoProduto">
                        
                        <form action="CadastroProduto.php" method="post" enctype="multipart/form-data">
                            <div class="styleFormularioCadastroProduto">
                                <label for="idNomeProduto">Nome do Produto:</label>
                                <input id="idNomeProduto" type="text" name="nomeProduto"placeholder="Ex: Camiseta manga...">
                            </div>
                            <div class="styleFormularioCadastroProduto">
                                <label for="idPrecoProduto">Preço do Produto:</label>
                                <input id="idPrecoProduto"type="number" name="precoProduto"num="1" step=".01">
                            </div>
                            <div class="styleFormularioCadastroProduto">
                                <label for="idPeso">Peso do Produto:</label>
                                <input id="idPeso"type="number" name="pesoProduto"num="1" step=".01">
                            </div>
                            <div class="styleFormularioCadastroProduto">
                                <label for="idProdutoAtivo">Produto Ativo?:</label>
                                <input id="idProdutoAtivo" type="text" name="produtoAtivo"placeholder="Sim/Não">
                            </div>
                            <div class="styleFormularioCadastroProduto">
                                <label for="idFichaTecnicaProduto">Ficha Técnica do Produto:</label>
                                <textarea id="idFichaTecnicaProduto"name="fichaTecnicaProduto"type="text"></textarea>
                            </div>
                            <div class="styleFormularioCadastroProduto">
                                <label>Categoria do Produto:</label>
                                <select name="categoriaProduto">
                                <?php
                                    $comando = "SELECT * FROM tbl_categoria";
                                    $resultado = mysqli_query($conexao, $comando);
                                    while( $linha = mysqli_fetch_assoc($resultado) ){
                                ?>
                                    <option value="<?=$linha['idCategoria']?>">
                                        <?=$linha['descricao']?>
                                    </option>
                                <?php
                                }
                                ?>
                                </select>
                            </div>
                            <div class="styleFormularioCadastroProduto_ImagemProduto">
                                <label for="idImagemProduto">Upload de imagem do Produto:</label>
                                    <br><input name="imagemProduto"type="file">
                            </div>
                            <div class="btnCadastrarProdutoDashboard">
                                <a href="./Pagina_de_Aviso.html">
                                    <button type="submit">
                                        Cadastrar
                                    </button>
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="conteinerRodape">
            <div class="rodape">
                <div class="rodapeLogoC">
                    <a href="./index.html">
                        <img class="logorodape"src="./imagens/Logo Best Style 4.png">
                    </a>
                </div>
                <div class="conteinerRodapeRedes">
                    <a href="#" class="redesRodape">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#" class="redesRodape">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#" class="redesRodape">
                        <ion-icon name="logo-pinterest"></ion-icon>
                    </a>
                </div>
                <div class="conteinerAtalhosRodape"> 
                    <ul class="atalhosRodape">
                        <li>
                            <a class="estiloAtalhosRodape"href="#">sobre</a>
                        </li>
                        <li>
                            <a class="estiloAtalhosRodape"href="#">contato</a>
                        </li>
                        <li>
                            <a class="estiloAtalhosRodape"href="./index.html">home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    </body>
    
</html>