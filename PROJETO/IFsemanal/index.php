<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFsemanal</title>
</head>
<body>
    <h1>IFsemanal</h1>
    <form action="index.php" method="post">
        <fieldset style="border: 15px">
                <label for="turma">TURMA:</label>
                <select name="turma" id="turma">
                    <option value="turma1">TURMA 1</option>
                    <option value="turma2">TURMA 2</option>
                </select>
                <input type="submit" value="ENVIAR">
        </fieldset>
    </form>
<?php 

    
    $turma = $_POST["turma"];   
    switch ($turma) {
        case 'turma1':
            echo "turma 1 escolhida";
            $mes = date('m');
            switch ($mes) {
                case 1:
                    echo "<br>mes ". date("m");
                    echo "[MES NÃO-LETIVO]";
                break;
                case 2:
                    echo "<br>mes ". date("m");
                break;
                case 3:
                    echo "<br>mes ". date("m");
                break;
                case 4:
                    echo "<br>mes ". date("m");
                break;
                case 5:
                    echo "<br>mes ". date("m");
                break;
                case 6:
                    echo "<br>mes ". date("m");
                    echo "[MES NÃO-LETIVO]";
                break;
                case 7:
                    echo "<br>mes ". date("m");
                break;
                case 8:
                    echo "<br>mes ". date("m");
                break;
                case 9:
                    echo "<br>mes ". date("m");
                break;
                case 10:
                    /* DIA DENTRO DA SEMANA, SE SIM, EXIBIR SEMANA */
                    $sem1 = [1,2,3,4,5,6,7];
                    $sem2 = [8,9,10,11,12,13,14];
                    $sem3 = [15,16,17,18,19,20,21];
                    $sem4 = [22,23,24,25,26,27,28];
                    $sem5 = [29,30,31];

                    $dia = date("d");

                    if(in_array($dia, $sem1)){
                        $semana = "semana1";
                    }elseif(in_array($dia, $sem2)){
                        $semana = "semana2";
                    }elseif(in_array($dia, $sem3)){
                        $semana = "semana3";
                    }elseif(in_array($dia, $sem4)){
                        $semana = "semana4";
                    }else{
                        $semana = "semana5";
                    };


                break;
                case 11:
                    echo "<br>mes ". date("m");
                break;
                case 12:
                    echo "<br>mes ". date("m");
                    echo "[DIA NÃO-LETIVO]";
                break;
                default:
                    echo "[ERRO NO MES]";
                break;

            }

            include './turma1.php';
        break;
        case 'turma2':
            echo "turma 2 escolhida";
             # definir semana
                $semana = "semana1";
             # ---------------------
             $mes = date('m');

             switch ($mes) {
                case 1:
                    echo "<br>mes ". date("m");
                break;
                case 2:
                    echo "<br>mes ". date("m");
                break;
                case 3:
                    echo "<br>mes ". date("m");
                break;
                case 4:
                    echo "<br>mes ". date("m");
                break;
                case 5:
                    echo "<br>mes ". date("m");
                break;
                case 6:
                    echo "<br>mes ". date("m");
                break;
                case 7:
                    echo "<br>mes ". date("m");
                break;
                case 8:
                    echo "<br>mes ". date("m");
                break;
                case 9:
                    echo "<br>mes ". date("m");
                break;
                case 10:
                    echo "<br>mes ". date("m");
                break;
                case 11:
                    echo "<br>mes ". date("m");
                break;
                case 12:
                    echo "<br>mes ". date("m");
                break;
                default:
                    echo "[ERRO NO MES]";
                break;

            }
            include './turma2.php';
        break;
    }

?>

    <table>
        <tr> <td> <?php echo $$semana[0][0]; ?></td> <td> <?php echo $$semana[0][1]; ?></td> <td> <?php echo $$semana[0][2]; ?></td> <td> <?php echo $$semana[0][3]; ?></td> <td> <?php echo $$semana[0][4]; ?></td> <td> <?php echo $$semana[0][5]; ?></td> <td> <?php echo $$semana[0][6]; ?></td>  </tr>
        <tr> <td> <?php echo $$semana[1][0]; ?></td> <td> <?php echo $$semana[1][1]; ?></td> <td> <?php echo $$semana[1][2]; ?></td> <td> <?php echo $$semana[1][3]; ?></td> <td> <?php echo $$semana[1][4]; ?></td> <td> <?php echo $$semana[1][5]; ?></td> <td> <?php echo $$semana[1][6]; ?></td>  </tr>
        <tr> <td> <?php echo $$semana[2][0]; ?></td> <td> <?php echo $$semana[2][1]; ?></td> <td> <?php echo $$semana[2][2]; ?></td> <td> <?php echo $$semana[2][3]; ?></td> <td> <?php echo $$semana[2][4]; ?></td> <td> <?php echo $$semana[2][5]; ?></td> <td> <?php echo $$semana[2][6]; ?></td>  </tr>
        <tr> <td> <?php echo $$semana[3][0]; ?></td> <td> <?php echo $$semana[3][1]; ?></td> <td> <?php echo $$semana[3][2]; ?></td> <td> <?php echo $$semana[3][3]; ?></td> <td> <?php echo $$semana[3][4]; ?></td> <td> <?php echo $$semana[3][5]; ?></td> <td> <?php echo $$semana[3][6]; ?></td>  </tr>
        <tr> <td> <?php echo $$semana[4][0]; ?></td> <td> <?php echo $$semana[4][1]; ?></td> <td> <?php echo $$semana[4][2]; ?></td> <td> <?php echo $$semana[4][3]; ?></td> <td> <?php echo $$semana[4][4]; ?></td> <td> <?php echo $$semana[4][5]; ?></td> <td> <?php echo $$semana[4][6]; ?></td>  </tr>
        <tr> <td> <?php echo $$semana[5][0]; ?></td> <td> <?php echo $$semana[5][1]; ?></td> <td> <?php echo $$semana[5][2]; ?></td> <td> <?php echo $$semana[5][3]; ?></td> <td> <?php echo $$semana[5][4]; ?></td> <td> <?php echo $$semana[5][5]; ?></td> <td> <?php echo $$semana[5][6]; ?></td>  </tr>
    </table>


</body>
</html>