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
</head>
<body>
    <section class="main-content">
  <center><img class="logo" src="./assets/img/logo.svg" alt="logo"></center>


        <div class="moedasleft"> 
        <p>selecione a moeda 1</p>
            <select class="cbmoedasleft"  name="moedaA">
                <option>BTC</option>
                <option>USD</option>
                <option>BRL</option>
                <option>ERU</option>
            </select>
            <input type="text"/>

        </div>

        <div class="moedasright"> 
        <p>selecione a moeda 2</p>
            <input type="text"  placeholder="<?php include('cotacao.php') ?> " >  
            <select class="cbmoedasright" name="moedaB">
                <option>USD</option>
                <option>BTC</option>
                <option>BRL</option>
                <option>ERU</option>
            </select>
        </div>


    </section>
</body>
</html>