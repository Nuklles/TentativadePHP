<!DOCTYPE html>
<html>
<head>
    <title>Soma e Valores</title>
</head>
<body>
    <h1>Calculadora de Soma e Valores</h1>
    <form method="post" action="">
        <label for="var1">Variável 1:</label>
        <input type="number" name="var1" id="var1" required><br>
        <label for="var2">Variável 2:</label>
        <input type="number" name="var2" id="var2" required><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $var1 = $_POST['var1'];
        $var2 = $_POST['var2'];
        $soma = $var1 + $var2;

        echo "<h2>Resultado:</h2>";

        if ($soma >= 10) {
            echo "Valores pares anteriores a $soma:<br>";
            for ($i = 2; $i < $soma; $i += 2) {
                echo $i . "<br>";
            }
        } else {
            echo "Números de 1 até $soma:<br>";
            $i = 1;
            while ($i <= $soma) {
                echo $i . "<br>";
                $i++;
            }
        }

        echo "Soma por extenso:<br>";
        switch ($soma) {
            case 1:
                echo "Um";
                break;
            case 2:
                echo "Dois";
                break;
            case 3:
                echo "Três";
                break;
            case 4:
                echo "Quatro";
                break;
            case 5:
                echo "Cinco";
                break;
            case 6:
                echo "Seis";
                break;
            case 7:
                echo "Sete";
                break;
            case 8:
                echo "Oito";
                break;
            case 9:
                echo "Nove";
                break;
            case 10:
                echo "Dez ou mais";
                break;
            default:
                echo "Soma muito grande";
        }
    }
    ?>
</body>
</html>
