<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar</title>
</head>
<body>
    <center>
        <h1>Agende seu horário</h1>
        <form method="POST" action="cadastrarChamados.php">
                    <label for="name">Nome</label>
                    <input type="text" name="name" required><br><br>
                    <label for="Telefone">Telefone</label>
                    <input type="text" name="Telefone" required><br><br>
                    <?php
                        require("config.php");

                        $dados_select = mysqli_query($conn, "SELECT id, corte FROM corte");

                        echo "<label for='corte'>Qual corte deseja fazer? </label> <select name='corte'>";
                        while($dado = mysqli_fetch_array($dados_select)) {
                            echo '<option   value='.$dado[0].'>'.$dado[1].'</option>';
                        }
                        echo "</select>";
                    ?>
                    <br><br>
                    <label for="Mensagem">Observação:</label>
                    <textarea name="Mensagem" required></textarea><br>
                    <br>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
            <a href="index.html"><input type="button" value="Voltar"></a> 
        </form>
    </center>
</body>
</html>