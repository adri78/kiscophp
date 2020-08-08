<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Sistema para Kioscos online" />
    <meta name="author" content="Roberto adrian gil/ Miniapps " />
    <meta name="keyword" content="Ventas, kiosco" />
    <title>Rapi Kiosco</title>
    <link href="img/favicon.png" rel="icon" />
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style-responsive.css" rel="stylesheet" />
</head>

<body>
<section id="container">

<?php

if (isset($_SESSION['ID_user'])) {
   // require_once ('vistas/login.php'); 
}else {
   /*  require_once ('vistas/login.php');  */
    require_once ('vistas/principal.php'); 
}
   


?>

{/* <script>
   const DeA =( de, a )=>{
        
       const EnDe = document.getElementById("'"+de +"'");
       const EnA = document.getElementById(a);

       const enter = EnDe.addEventListener("keyup",function (e) {
            
            if(e.keyCode === 13){
                e.preventDefault();
                EnA.focus();
            }
         

       });




   }
</script> */}
</body>
</html>