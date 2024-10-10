<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border-collapse: collapse">
        <tr>
            <th style="border: 1px solid black">Indirizzo</th>
            <th style="border: 1px solid black">Metri quadri</th>
            <th style="border: 1px solid black">Prezzo metro quadro</th>
            <th style="border: 1px solid black">Prezzo tot</th>
        </tr>
        <tr>
    <?php
        $casa = array("indirizzo" => "Via Ciarda 63", "metri_quadri" => 104.63, "prezzoMQ" => 2663);
        $prezzo_tot = $casa["metri_quadri"] * $casa["prezzoMQ"];
        $casa["prezzoTOT"] = $prezzo_tot;
        
        foreach ($casa as $value) {
            echo "<td style='border: 1px solid black'> $value </td>";
        }
        
    ?>
    </tr>
    </table>
</body>
</html>