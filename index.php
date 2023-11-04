<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CriptoCalc</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Open+Sans&display=swap" rel="stylesheet">
<script
  src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
  integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
  crossorigin="anonymous"></script>
</head>
<body>
    <section class="main-content">
  <center><img class="logo" src="./assets/img/logo.svg" alt="logo"></center>

    <form  method="post">
        <div class="moedasleft"> 
        <p>selecione a moeda 1</p>
            <select class="cbmoedasleft"  name="moedaA">
                <option>BTC</option>
                <option>USD</option>
                <option>BRL</option>
                <option>EUR</option>
            </select>
            <input type="text"  id="moeda2" value="1">

        </div>

        <div class="moedasright"> 
        <p>selecione a moeda 2</p>
            <input type="text" value="<?php include('cotacao.php') ?> " >  
            <select class="cbmoedasright" name="moedaB" >
                <option>USD</option>
                <option>BTC</option>
                <option>BRL</option>
                <option>EUR</option>
            </select>
        </div>
        <input type="submit">
        </form>

        <script>
    $("$moeda2").change(function(){
        var id_categoria = $(this).val();
        $("#retorno").load("cotacao.php");
    });
</script>

    </section>
</body>
</html>