<!DOCTYPE html>
<html lang="pr-br">
    <head>
        <title>Cadastro de Produto</title>
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
   
        $idProduto= $_POST ['txtIdProduto'];
        $nomeProduto = $_POST ['nomeProduto'];
        $precoProduto = $_POST ['precoProduto'];
        $pesoProduto = $_POST ['pesoProduto'];
        $produtoAtivo = $_POST ['produtoAtivo'];
        $categoriaProduto= $_POST ['categoriaProduto'];
    
        $comando = "UPDATE tbl_produto SET descProduto='$nomeProduto',
                    preco='$precoProduto',
                    peso='$pesoProduto',
                    ativo='$produtoAtivo',
                    idCategoria='$categoriaProduto'
                    WHERE idProduto=$idProduto";
        $resultado= mysqli_query($conexao,$comando);
        ?>
        <div class="conteinerConfirmacao">
            <div class="confirmacao">
                <?php
                    if($resultado==true){
                ?>
                        <div class="confirmacaoPositiva">
                            <ion-icon name="checkmark-done-circle-outline"></ion-icon>
                            <h1>Produto Editado com Sucesso!</h1>
                            <a href="Acesso administrador.php">
                                <button class="botaoRetornoPositivo" type="submit">
                                    <span>Voltar ao Acesso administrador</span>
                                </button>
                            </a>
                        </div>
                <?php
                    } else{
                ?>        
                        <div class="confirmacaoNegativa">
                            <ion-icon name="close-circle-outline"></ion-icon>
                            <h1>Erro ao Editar Produto</h1>
                            <a href="Acesso administrador.php">
                                <button class="botaoRetornoNegativo" type="submit">
                                    <span>Voltar ao Acesso administrador</span>
                                </button>
                            </a>
                        </div>
                <?php
                    }
                ?> 
            </div>
        </div>
        <?php
            require_once "./conteinersProntos/Rodape.php";
        ?>

        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    </body>
    
</html>