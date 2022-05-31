</head>
    <body>
        <form method="post" action="crud.php?acao=inserir" name="dados" onSubmit="return enviardados();">
            <table width="588" border="0" align="center">
                <tr>
                    <td width="118">
                        <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome completo:</font>
                    </td>
                    <td width="460">
                        <input name="nome" type="text" class="formbutton" id="nome" size="52" maxlength="150">
                    </td>
                </tr>
                <tr>
                    <td>
                        <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Data:</font>
                    </td>
                <td>
                    <font size="2">
                        <input name="data" type="date" id="data" class="formbutton">
                    </font>
                </td>
                </tr>
                <tr>
                    <td>
                        <font size="1" face="Verdana, Arial, Helvetica, sans-serif">E-mail:</font>
                    </td>
                    <td>
                        <font size="2">
                        <input name="email" type="text" id="email" size="52" maxlength="150" class="formbutton">
                    </font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font face="Verdana, Arial, Helvetica, sans-serif">
                        <font size="1">Mensagem<strong>:</strong></font>
                        </font>
                    </td>
                    <td rowspan="2">
                        <font size="2">
                        <textarea name="mensagem" cols="50" rows="8" class="formbutton" id="mensagem" input></textarea>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="85">
                        <p><strong>
                            <font face="Verdana, Arial, Helvetica, sans-serif">
                            <font size="1">
                            </font>
                            </font>
                    </strong></p>
                    </td>
                </tr>
                <tr>
                    <td height="22"></td>
                    <td>
                        <input name="Submit" type="submit" class="formobjects" value="Cadastrar">
                        <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>