<?php
    function linha(){
        echo "
        <tr>
            <td>{$semana[0]}</td>
            <td>{$semana[1]}</td>
            <td>{$semana[2]}</td>
            <td>{$semana[3]}</td>
            <td>{$semana[4]}</td>
            <td>{$semana[5]}</td>
            <td>{$semana[6]}</td>
        </tr>
        ";
    }

    function calendario(){
        $dia = 1;
        $semana = array();
        while($dia <= 31){
            array_push($semana,$dia);

            if(count($semana) == 7){ //conta qt de itens do array
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
