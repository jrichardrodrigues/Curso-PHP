<?php
include 'conexao.php';
//inicializando o filtro
$filtro_sql = "";

//clicou em filtrar?
if ($_POST != NULL) {
    //obtem filtro digitado pelo usuário
    $filtro = $_POST['filtro'];
    //criar filtro em sql
    $filtro_sql = "WHERE nome LIKE '%$filtro%' OR email LIKE '%$filtro%'";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!--<meta charset="UTF-8">
        <title>USUÁRIO</title>
        <link rel="stylesheet" type="text/css" href="../css/cadastro.css">-->
        <title>Usuário</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Cadastro">
        <meta name="author" content="Richard Rodrigues">
        <link rel="icon" href="/favicon/favicon.ico">
        <link href="bootstrap/css2/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css2/imagem.css" rel="stylesheet">
        <link href="bootstrap/css2/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="/bootstrap/css2/signin.css" rel="stylesheet">
        <script src="bootstrap/js2/ie-emulation-modes-warning.js"></script>
        <script src="bootstrap/js2/textarea.js"></script>
    </head>

    <body>
        <div class="container table-responsive">
            <h2 class="text-center">Lista de Clientes</h2>            
            <hr>
            <div class="col-xs-6 col-md-4">
                <a class="btn btn-success" href="index2.php">Novo Cadastro</a>
                <br><br>
                <form method="POST" accept-charset="utf-8">
                    <input class="form-control" type="text" name="filtro" placeholder="Pesquisar Nome"><br>
                    <input class="btn btn-danger" type="submit" value="Pesquisar">
                    <br><br>
                </form>
            </div>

            <div class="col-md-12">              
                <table class="table-condensed table-bordered table-hover table-striped">
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Email</td>
                        <td>Telefone</td>
                        <td>Estado</td>
                        <td align="center">Mensagens</td>
                        <td align="center">Ação</td>
                    </tr>

                    <?php
                    $sql = "SELECT * FROM `cadastro` $filtro_sql";
                    $query = mysqli_query($link, $sql);
                    //obtendo os dados por meio do loop while
                    echo 'Registro Encontrados Agora: ' . $query->num_rows . '<br>' . '<br>';
                    while ($dados = mysqli_fetch_array($query)) {
                        ?>
                        <tr class = "lista">
                            <td><?php echo $dados['id']; ?></td>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['email']; ?></td>
                            <td><?php echo $dados['telefone']; ?></td>
                            <td><?php echo $dados['estado']; ?></td>
                            <td><?php echo $dados['mensagem']; ?></td>
                            <td>
                                <a title="Editar" href="formAlteracao.php?id=<?php echo $dados['id'] ?>"<span class="glyphicon glyphicon-pencil text-success" aria-hidden="true"></span></a> |
                                <a title="Excluir" onclick="return confirm('Tem certeza que deseja EXLUIR este registro ?')" href="apagar.php?id=<?php echo $dados['id'] ?>"<span class="glyphicon glyphicon-remove-circle text-danger" aria-hidden="true"></span></a>                                  
                            </td>      
                        </tr>
                    <?php } ?> 
                </table>
            </div>
        </div>
        <br>
        <footer class="footer text-center">                                    
            &copy; 2017 Autor: Richard Rodrigues PHP S/A.
        </footer>  
    </body>
</html>
