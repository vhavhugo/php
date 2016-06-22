<?php
    function linha(){
        echo "
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        ";
    }

    function calendario(){
        $dia = 1;
        $semana = array();
        while($dia <= 31){
            array_push($semana,$dia);

            if(count($semana) == 7){
                linha($semana);
                $semana = array();
            }
            $dia++;
        }
      }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <h1><?php echo "Calendário"; ?></h1>
    <table border="1">
        <tr>
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sab</th>
        </tr>
        <?php linha();?>
        <?php linha();?>
        <?php linha();?>
        <?php linha();?>
        <?php linha();?>
    </table>        
    </body>
</html>
