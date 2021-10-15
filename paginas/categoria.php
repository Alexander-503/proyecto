<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{text-decoration:none;color:#FFF}
.rainbow-button{width:calc(20vw + 6px);height:calc(8vw + 6px);background-image:linear-gradient(90deg,#00C0FF 0,#FFCF00 49%,#FC4F4F 80%,#00C0FF 100%);border-radius:5px;display:flex;align-items:center;justify-content:center;text-transform:uppercase;font-size:3vw;font-weight:700}
.rainbow-button:after{content:attr(alt);width:20vw;height:8vw;background-color:#191919;display:flex;align-items:center;justify-content:center}
.rainbow-button:hover{animation:slidebg 2s linear infinite}
@keyframes slidebg{to{background-position:20vw}}

h1{
    color: white;
}
    </style>
</head>
<body>
<?php 

$mysql = new mysqli("localhost", "root", "", "proyecto");


if ($mysql->connect_error) {
    die('Problemas a la conexión a la base de datos');
}

$mysql-> query("INSERT INTO categ (`id`, `categoria`) VALUES (NULL, '$_REQUEST[cate]')") or die($mysql->error);

$mysql->close();

echo "<center><h1>La nueva categoria se almaceno</h1></center>";

?>

<br>
<table align="center">
    <tr align="center">
        <td>
           <a href="agregar.html" class="rainbow-button" target="blank_" alt="Regresar" aling="center"></a>
        </td>
    </tr>
</table>
</body>
</html>