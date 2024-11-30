<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recebedados</title>
</head>
<body>
    <?php
    $conexao = mysqli_connect("127.0.0.1","root","RETROsword96","teste");
    //chegar conexão
    if(!$conexao){
        echo"NÃO CONECTADOO";
    }
    echo"CONECTADO AO BANCO>>>>>>";

    //recuperar e verificar

    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conexao,$email);
    $sql = "SELECT email From teste.dados WHERE email='$email'";
    $retorno = mysqli_query($conexao,$sql);
    
    if(mysqli_num_rows($retorno) > 0){
    echo"EMAIL JA CADASTRADO!!<br>";
    echo"<a href='index.html'>VOLTAR</a>";
    }else{
        $email = $_POST['email'];
        $nome = $_POST['nome'];

        $sql = "INSERT INTO teste.dados(nome,email) values('$nome','$email')";
        $resultado = mysqli_query($conexao,$sql);
        echo">>USUARIO CADASTRADO!<BR>";
        echo"<a href='index.html'>VOLTAR</a>";
    }
    
    
    ?>
</body>
</html>