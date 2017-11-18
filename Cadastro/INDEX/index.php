<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>SISTEMA DE CADASTRO</title>
        <link rel="stylesheet" type="text/css" href="../css/cadastro.css" >
    </head>

    <body>
        <div id="cadastro">
            <fieldset>
                <legend> CADASTRO </legend>

                <form name="forCliente" method="POST" action="processa.php" accept-charset="utf-8">

                    <label for="nome">Nome:</label>
                    <br>            
                    <input type="text" name="nome" id="nome" size="30" required="required" autofocus="Nome" placeholder="-- Insira seu Nome --" maxlenght="2" />
                    <br><br>

                    <label for="email">E-mail:</label> 
                    <br>
                    <input type="email" name="email" id="email" size="30"required="required" placeholder="-- Insira seu Email --" />
                    <br><br>

                    <label for="tel">Telefone:</label>
                    <br>
                    <input type="tel" name="telefone" id="telefone" size="30"required="required" placeholder = "-- Telefone --"/>
                    <br><br>

                    <label for="estado">Estado:</label>
                    <br>
                    <select name="estado" id="cdEstado">
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
                    <select>
                    <br><br>

                    <label for="mensagem">Mensagem:</label>
                    <br><br>

                    <textarea name="mensagem" rows="5" cols="30" placeholder="-- Digite uma Mensagem --"></textarea><br>

                    <button type="submit">Enviar</button>
                    <button type="reset">Limpar</button>
                </form>
            </fieldset>
        </div>
        <footer>
            &copy; 2017 Autor: Richard Rodrigues PHP S/A.
        </footer>
    </body>
</html>