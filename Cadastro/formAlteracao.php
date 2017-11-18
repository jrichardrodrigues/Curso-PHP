<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Index</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <link href="bootstrap/css2/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css2/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="jumbotron-narrow.css" rel="stylesheet">
        <script src="bootstrap/js2/ie-emulation-modes-warning.js"></script>

    </head>
<?php
include_once 'conexao.php';
$id = $_GET['id'];
$result_usuario = "SELECT * FROM cadastro WHERE ID='$id'";
$resultado_usuario = mysqli_query($link, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
    <body>

        <div class="container">
            <div class="col-xs-6 col-md-4"></div>
            <div class="col-xs-6 col-md-4">

                <fieldset>
                    <legend>ALTERAR CADASTRO </legend>
                    <form class="form-signin" name="forCliente" method="POST" action="processaEdita.php" accept-charset="utf-8">
                        <input type="hidden" name="id" value="<?php echo $row_usuario ['id'] ?>"
                        <label for="nome">Nome:</label>
                        <br>            
                        <input class="form-control" type="text" name="nome" id="nome" size="30" required="required" value="<?php echo $row_usuario ['nome'] ?>" autoclass="form-controlfocus=" placeholder="-- Insira seu Nome --" maxlenght="2" />

                        <label for="email">E-mail:</label> 
                        <input class="form-control" type="email" name="email" id="email" size="30"required="required" value="<?php echo $row_usuario ['email'] ?>" placeholder="-- Insira seu Email --" />
                        <label for="tel">Telefone:</label>
                        <input class="form-control" type="tel" name="telefone" id="telefone" size="30"required="required" value="<?php echo $row_usuario ['telefone'] ?>" placeholder = "-- Telefone --"/>

                        <label for="estado">Estado:</label>
                        <br>
                        <select class="form-control" name="estado" id="cdEstado">
                            <br><br>
                            <option value=>  --SELECIONE--  </option>                                        
                            <option <?php if($row_usuario['estado']=="AC") echo 'selected';?> value="AC">Acre</option>
                            <option <?php if($row_usuario['estado']=="AL") echo 'selected';?> value="AL">Alagoas</option>
                            <option <?php if($row_usuario['estado']=="AP") echo 'selected';?> value="AP">Amapá</option>
                            <option <?php if($row_usuario['estado']=="AM") echo 'selected';?> value="AM">Amazonas</option>
                            <option <?php if($row_usuario['estado']=="BA") echo 'selected';?> value="BA">Bahia</option>
                            <option <?php if($row_usuario['estado']=="CE") echo 'selected';?> value="CE">Ceará</option>
                            <option <?php if($row_usuario['estado']=="DF") echo 'selected';?> value="DF">Distrito Federal</option>
                            <option <?php if($row_usuario['estado']=="ES") echo 'selected';?> value="ES">Espirito Santo</option>
                            <option <?php if($row_usuario['estado']=="GO") echo 'selected';?> value="GO">Goiás</option>
                            <option <?php if($row_usuario['estado']=="MA") echo 'selected';?> value="MA">Maranhão</option>
                            <option <?php if($row_usuario['estado']=="MS") echo 'selected';?> value="MS">Mato Grosso do Sul</option>
                            <option <?php if($row_usuario['estado']=="MT") echo 'selected';?> value="MT">Mato Grosso</option>
                            <option <?php if($row_usuario['estado']=="MG") echo 'selected';?> value="MG">Minas Gerais</option>
                            <option <?php if($row_usuario['estado']=="PA") echo 'selected';?> value="PA">Pará</option>
                            <option <?php if($row_usuario['estado']=="PB") echo 'selected';?> value="PB">Paraíba</option>
                            <option <?php if($row_usuario['estado']=="PR") echo 'selected';?> value="PR">Paraná</option>
                            <option <?php if($row_usuario['estado']=="PE") echo 'selected';?> value="PE">Pernambuco</option>
                            <option <?php if($row_usuario['estado']=="PI") echo 'selected';?> value="PI">Piauí</option>
                            <option <?php if($row_usuario['estado']=="RJ") echo 'selected';?> value="RJ">Rio de Janeiro</option>
                            <option <?php if($row_usuario['estado']=="RN") echo 'selected';?> value="RN">Rio Grande do Norte</option>
                            <option <?php if($row_usuario['estado']=="RS") echo 'selected';?> value="RS">Rio Grande do Sul</option>
                            <option <?php if($row_usuario['estado']=="RO") echo 'selected';?> value="RO">Rondônia</option>
                            <option <?php if($row_usuario['estado']=="RR") echo 'selected';?> value="RR">Roraima</option>
                            <option <?php if($row_usuario['estado']=="SC") echo 'selected';?> value="SC">Santa Catarina</option>
                            <option <?php if($row_usuario['estado']=="SP") echo 'selected';?> value="SP">São Paulo</option>
                            <option <?php if($row_usuario['estado']=="SE") echo 'selected';?> value="SE">Sergipe</option>
                            <option <?php if($row_usuario['estado']=="TO") echo 'selected';?> value="TO">Tocantins</option>
                            </select>
                                <label for="mensagem">Mensagem:</label>
                                <br><br>

                                <textarea name="mensagem" rows="5" cols="30" placeholder="-- Digite uma Mensagem --"><?php echo $row_usuario ['mensagem'] ?></textarea><br>

                                <input class="btn btn-success" type="submit" value="Atualizar">
                                
                                <br>
                                </form>
                                </fieldset>        
                                </div>
                                </div> <!-- /container -->   
                                <br>
                                <footer class="footer text-center">                                    
                                    &copy; 2017 Autor: Richard Rodrigues PHP S/A.
                                </footer>        
                                <div class="col-xs-6 col-md-4"></div>
                                <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                                <script src="bootstrap/js2/ie10-viewport-bug-workaround.js"></script>
                                </body>
                                </html>