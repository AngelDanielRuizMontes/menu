<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="shortcut icon" href="../../../img/favicon.png" type="image/png" />
    <link href="../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>
                Ejercicios de PHP - Relación I
            </h1>
            <h2>Desarrollo WEB en entorno servidor</h2>
        </div>
        <div id="content" class="caja-destacada">
            <?php
            $hamburguesa = $_POST["hamburguesa"];
            $pasta = $_POST["pasta"];
            $pizza = $_POST["pizza"];
            $quinoa = $_POST["quinoa"];
            $agua = $_POST["agua"];
            $cerveza = $_POST["cerveza"];
            $refresco = $_POST["refresco"];
            $total = 0;
            echo "<table>";
            echo "<tr>
                <th>Comida/bebida</th>
                <th>PVP</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                </tr>";
            if ($hamburguesa > 0) {
                $hamburguesaTotal = $hamburguesa * 6.95;
                $total = $total + $hamburguesaTotal;
                echo "<tr><td>Hamburguesa vegetariana</td><td>6.95</td><td>", $hamburguesa, "</td><td>$hamburguesaTotal</td></tr>";
                };
            if ($pasta > 0) {
                $pastaTotal = $pasta * 8.50;
                $total = $total + $pastaTotal;
                echo "<tr><td>Pasta al Pesto</td><td>8.50</td><td>", $pasta, "</td><td>$pastaTotal</td></tr>";
                };
            if ($pizza > 0) {
                $pizzaTotal = $pizza * 7.90;
                $total = $total + $pizzaTotal;
                echo "<tr><td>Pizza caprese</td><td>7.90</td><td>", $pizza, "</td><td>$pizzaTotal</td></tr>";
            };
            if ($quinoa > 0) {
                $quinoaTotal = $quinoa * 9.20;
                $total = $total + $quinoaTotal;
                echo "<tr><td>Quinoa con verdura</td><td>9.20</td><td>", $quinoa, "</td><td>$quinoaTotal</td></tr>";
            };
            if ($agua > 0) {
                $aguaTotal = $agua * 1.20;
                $total = $total + $aguaTotal;
                echo "<tr><td>Agua</td><td>1.20</td><td>", $agua, "</td><td>$aguaTotal</td></tr>";
            };
            if ($cerveza > 0) {
                $cervezaTotal = $cerveza * 1.80;
                $total = $total + $cervezaTotal;
                echo "<tr><td>Cerveza</td><td>1.80</td><td>", $cerveza, "</td><td>$cervezaTotal</td></tr>";
            };
            if ($refresco > 0) {
                $refrescoTotal = $refresco * 1.80;
                $total = $total + $refrescoTotal;
                echo "<tr><td>Refresco</td><td>1.80</td><td>", $refresco, "</td><td>$refrescoTotal</td></tr>";
            };
            echo "<tr>
            <td><br><b>Total: ", $total,"€</b></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            echo "</table>";
            ?>
            </br>
            <a href="../index.html">Página principal</a>
        </div>
        <div id="footer">
            ANGEL DANIEL RUIZ MONTES
        </div>
    </div>
</body>

</html>