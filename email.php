<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
  $email = $_POST['email'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sub = $_POST["sub"];
  $message = $_POST['message'];
  $error = '';
  if(!$name) {$error .= 'Укажите свое имя. ';}
  if(!$email) {$error .= 'Укажите электронную почту. ';}
  if(!$sub) {$error .= 'Укажите тему обращения. ';}
  if(!$message || strlen($message) < 1) {$error .= 'Введите сообщение. ';}
  if(!$error) {
    $address = "alex300785@tut.by";
    $mes = "Имя: ".$name."\n\nТема: " .$sub."\n\nСообщение: ".$message."\n\n";
    $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
    header('Content-type: text/html; charset=utf-8');  
    if($send) {echo "  <h2>Сообщение отправлено успешно!</h2>
                    
      <a href='http://by3d.by/main.html'>На главную</a>
      <a href='http://by3d.by/catalog1.html'>К магазину</a> 
        
        
    <style>
h2 {
color: green;
text-align:center;
}  
  
a {
display: block;
text-align:center;
}

  </style> ";      
               
              
              }
  }
  else {echo '<div class="err">'.$error.'</div>';}
}






?>
