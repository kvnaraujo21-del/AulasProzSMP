<style>
    body{
        background-color: chartreuse;
        text-align: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bold;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }

    a{
        color: inherit;
    }
</style>

<?php

ini_set("display_errors", 1);
if (isset($_POST['email']) && isset($_POST['senha'])){
    if ($_SERVER['REQUEST_METHOD']=='POST'){

        $conexao =
        mysqli_connect('127.0.0.1' ,'root','');
        mysqli_select_db($conexao, 'login');

        $email = $_POST['email'];
        $senha = sha1($_POST['senha']);

        $query =
        "select email, senha from usuario where
        email='$email' and senha= '$senha'";

        $result = mysqli_query($conexao, $query);
        $rows = mysqli_fetch_array($result);
    if ($rows) {
        echo  "<br> Logado com sucesso";
        $consulta = mysqli_query 
        ($conexao, "select perfil from usuario where email= '$email' and senha='$senha'");
        while ($exibe = mysqli_fetch_assoc($consulta)) {
            echo  "<br> Perfil de acesso: ". $exibe['perfil'];
        }
        } else {
            echo "<br> Não logou, tente novamente!";
            echo "<a href= 'login.html'>
            <br><br> viltar a página inicial </a>";
        } 
    }  
 } ?>
