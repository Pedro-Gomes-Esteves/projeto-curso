<?php
    
 require_once 'basedados.php';

 if($_SERVER["REQUEST_METHOD"] === "POST"){
     
     $nome = trim($_POST["nome"] ?? '');
     $email = trim($_POST["email"] ?? '');
     $mensagem = trim($_POST["mensagem"] ?? '');

     if(!empty($nome) && !empty($email) && !empty($mensagem)){

        $basedados -> insert("tbcontactos", [
            "nome" => $nome,
            "email" => $email,
            "mensagem" => $mensagem,
            "dataEnvio" => date("Y-m-d H:i:s")
        ]);

        if($basedados->id()){
            echo "<p>Obrigado pela tua mensagem, $nome! Entrarei em contacto em breve.</p>";
        }else{
            echo "<p>Houve um problema ao enviar a mensagem. Tenta novamente mais tarde.</p>";
        }
     }else {
        echo "<p>Por favor preenche todos os campos do formulário.</p>";
     }
 }else {
    echo "<p>O formulário não foi submetido corretamente.</p>";
 }

?>