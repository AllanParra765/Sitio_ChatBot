<?php
  // Recoge los datos del formulario
  $name = $_POST['nombre'];
  $email = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $message = $_POST['comentarios'];
  
  
  // Establece los destinatarios y el asunto del correo electrónico
  $to = "allan.parrae@gmail.com";
  $subject = "Formulario de contacto de MBOT";
  
  // Crea el cuerpo del correo electrónico
  $body = "De: $name\n Correo: $email \nTeléfono: $telefono\n Mensaje:\n $message";
  
  // Utiliza la función mail() de PHP para enviar el correo electrónico
  mail($to, $subject, $body);
  
  // Redirige al usuario a una página de gracias
  //header('Location: thank_you.html');
?>
