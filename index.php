<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>TABUADA</title>
</head>
<body>
    <div
        class="main-form"
    >
        <form class="form1" action="./" method="post">
            <h1 class="title-form1">TABUADA</h1>
            <input class="caixaTexto1"
                type="number"
                name="name"
                placeholder="Digite 1 nº inteiro"
                require
            >
            <input
                class="botao1"
                type="submit"
                value="CONFIRMAR"
            >
        </form>
    </div>
</body>
</html>

<?php
echo "
    <style>
        body{
            background-color: #181818;
            color: #ccc;
        }
    </style>
";

$num1 = intval(htmlspecialchars($_POST["name"]));

echo"<div
style='
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
'
>";
echo "<p
    style='
        text-align: center;
    '
>SOMA";
for($i = 1; $i <= 10; $i++){
    $total = $num1 + $i;
    echo "<font style='border: solid 2px lightgreen;
        padding: 5px;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
    '>$num1 + $i = $total</font><br>";
}
echo "</p>";

echo "<p
    style='
        text-align: center;
    '
>SUBTRAÇÃO";
for($i = 1; $i <= 10; $i++){
    $total = $num1 - $i;
    echo "<font style='border: solid 2px lightgreen;
    padding: 5px;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
'>$num1 - $i = $total</font><br>";
}
echo "</p>";

echo "<p
    style='
        text-align: center;
    '
>MULTIPLICAÇÃO";
for($i = 1; $i <= 10; $i++){
    $total = $num1 * $i;
    echo "<font style='border: solid 2px lightgreen;
    padding: 5px;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
'>$num1 x $i = $total</font><br>";
}
echo "</p>";

echo "<p
    style='
        text-align: center;
    '
>DIVISÃO";
for($i = 1; $i <= 10; $i++){
    $total = $num1 / $i;
    echo "<font style='border: solid 2px lightgreen;
    padding: 5px;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
'>$num1 / $i = ".number_format($total, 2, ',', ' ')."</font><br>";
}
echo "<p>";
echo"</div>";
