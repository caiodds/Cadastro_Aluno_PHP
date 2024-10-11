<?php
include("config.php");
if (isset($_POST["acao"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data_nas = $_POST["data_nascimento"];
    $matricula = $_POST["matricula"];

    if ($nome == "" && $email == "" && $data_nas == "" && $matricula == "") {
        echo "Alguns campo se encontram vazios";
    }

    $sql = "INSERT INTO aluno(nome,email,data_nass,matricula) VALUES ('{$nome}','{$email}','{$data_nas}','{$matricula}')";
    $res = $con->query($sql);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Aluno</h1>
        <form method="POST">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" id="data_nascimento" name="data_nascimento" required>
            </div>
            <div class="form-group">
                <label for="matricula">Número de Matrícula</label>
                <input type="text" id="matricula" name="matricula" required>
            </div>
            <div class="form-group">
                <label for="curso">Curso</label>
                <select id="curso" name="curso" required>
                    <option value="">Selecione o curso</option>
                    <option value="informatica">Informática</option>
                    <option value="administracao">Administração</option>
                    <option value="engenharia">Engenharia</option>
                </select>
            </div>
            <div class="form-group">
                <button name="acao" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>