<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário - POST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>


        #Container {
            padding: 2%;
            text-align: left;
            background-color: lightblue;
            border: 3px solid black;
            width: 100%;
            height: 2000px;
        }

        button{

            border: 2px solid black;
            padding: 10px;
            margin-left: 1.5%;

        }

        .cad{

            margin: 1.5%;
            padding: 1%;
            border: 2px solid black;

        }

        img{

            margin: 1.5%;
            border: 2px solid black;

        }
        

    </style>

</head>
<body>


<div id="Container">

<div style="background-color: whitesmoke;" class="cad">
<?php   
   
 $senha =  $_POST['senh'];
 $login =  $_POST['log'];
 

 if ($login == "etecia" && $senha == "etecia238") {
     
    echo "<h1>Autenticação  realizada  com  sucesso</h1>";

 }else {
    echo "<h1>Você não tem permissão de visualizar essa página</h1>";
 }






?></div>

    


</div> 
</body>
</html>