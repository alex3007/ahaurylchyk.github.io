<?php
$post = (!empty($_POST)) ? true : false;
if($post) {

  $name = $_POST['name'];
  $sub = $_POST["sub"];
  $error = '';
  if(!$name) {$error .= 'Укажите свое имя. ';}
  if(!$sub) {$error .= 'Укажите номер телефона. ';}
  if(!$error) {
    $address = "alex300785@tut.by";
    $mes = "Имя: ".$name."\n\nТема: " .$sub."\n\nСообщение: ";
     $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
     header('Content-type: text/html; charset=utf-8'); 
    if($send) {echo "<h2>Сообщение отправлено успешно!</h2>
                    
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