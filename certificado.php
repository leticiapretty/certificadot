<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];

    $to = "leticiaparque@gmail.com";  // Substitua pelo seu endereço de email
    $subject = "Solicitação de Certificado";
    $message = "Nome: $nome\nEmail: $email\nWhatsApp: $whatsapp";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
?>
