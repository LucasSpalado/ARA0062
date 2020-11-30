<?php
session_start();

$login = $_POST["login"];
$senha = $_POST["senha"];

if ($login=="admin" && $senha=="1234") {
    $_SESSION["autenticado"]=true;

    $html ="
    <!doctype>
    <html>
        <head><title> Página de verificação </title></head>
        <body>
    
           <script>
    window.location.replace('https://ttecweb.000webhostapp.com/menu.php');
           </script>
      
        </body>
    </html>
    
    ";
    
}else {
    session_destroy();
    $html ="
<!doctype>
<html>
    <head> <title> Página de verificação </title></head>
    <body>
        <script>
            window.location.replace('https://ttecweb.000webhostapp.com/login.html');
        </script>
        <h1>Seu login e sua senha SÃO INVÁLIDOS</h1>
    </body>
</html>

";


}

echo $html;

?>