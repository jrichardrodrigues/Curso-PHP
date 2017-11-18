<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Index</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="Richard Rodrigues">
        <link rel="icon" href="../../favicon.ico">

        <link href="bootstrap/css2/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css2/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="jumbotron-narrow.css" rel="stylesheet">
        <script src="bootstrap/js2/ie-emulation-modes-warning.js"></script>

    </head>

    <body>

        <div class="container">
            <div class="col-xs-6 col-md-4"></div>
            <div class="col-xs-6 col-md-4">

                <fieldset>
                    <legend> CADASTRO </legend>
                    <form class="form-signin" name="forCliente" method="POST" action="processa.php" accept-charset="utf-8">

                        <label for="nome">Nome:</label>
                        <br>            
                        <input class="form-control" type="text" name="nome" id="nome" size="30" required="required" autoclass="form-controlfocus=" placeholder="-- Insira seu Nome --" maxlenght="2" />

                        <label for="email">E-mail:</label> 
                        <input class="form-control" type="email" name="email" id="email" size="30"required="required" placeholder="-- Insira seu Email --" />
                        <label for="tel">Telefone:</label>
                        <input class="form-control" type="tel" name="telefone" id="telefone" size="30" required="required" maxlength="13" placeholder = "-- Telefone --"/>

                        <label for="estado">Estado:</label>
                        <br>
                        <select class="form-control" name="estado" id="cdEstado">
                            <br><br>
                            <option value=>  --SELECIONE--  </option>                                        
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espirito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA" selected="">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            </select>
                                <label for="mensagem">Mensagem:</label>
                                <br><br>

                                <textarea name="mensagem" rows="5" cols="30" placeholder="-- Digite uma Mensagem --"></textarea><br>

                                <input class="btn btn-success" type="submit" value="Enviar">
                                <input class="btn btn-warning" type="reset" value="Limpar">
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