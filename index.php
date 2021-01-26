<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <textarea style="resize:none;" id="txt" name="txtArea" rows="4" cols="50" readonly>

        <?php

        ?>

    </textarea>
    <?php

    $opers = array("+","-","*","/");

    echo "<div class=\"btn-group\">";
    for ($i = 1; $i < 10; $i++) {
        if ($i % 3 == 0) {
            echo "
            <button type=\"submit\" name=\"submit{$i}\">{$i}</button>
            <button type=\"submit\" name=\"submit{$i}op\">{$opers[$i/3-1]}</button>
            <br>    
            ";
            continue;
        }
        echo " <button type=\"submit\" name=\"submit{$i}\">{$i}</button> ";
    }
    echo " <button type=\"submit\" name=\"submit0\">0</button> ";
    echo " <button type=\"submit\" name=\"submitdiv\">{$opers[3]}</button> ";
    echo"<br>";
    echo " <button type=\"submit\" name=\"equals\">=</button> ";
    echo "</div>";
    ?>

    <?php
    if (isset($_GET['submit'])) {
    }
    ?>

</body>

</html>