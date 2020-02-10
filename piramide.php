<style>

table, tr, td{
    padding: 40px;
    border: 2px solid black;
    border-collapse: collapse;
}



.black{
    background-color: black;
}
</style>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
    <table>
    <?php
    $p=1;
    for($y=0; $y<8; $y++) {
        echo("<tr>");
        for($x=0; $x<$p; $x++){
            echo("<td class='black'></td>");
        }
        $p++;
        echo("</tr>");
    }

?>

</table>
</html>
