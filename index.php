
<!DOCTYPE html>
<html>
    <head>Calculadora</head>
    <style type="text/css">
        body{
            background: green;
        }
        .auto-style{
            margin-left: 116px;
            margin-top: 20px;
            
        }
        .auto-style2{
            margin-left: 127px;
        }
        
        .auto-style3{
            margin-left: 127px;
        }
    </style>
    <body>
        <div style="background-color: #13D0C7; margin-left: 500px; width: 400px">
            <form action="resultado.php" method="post">
                <select name="operador" class="auto-style1" style="width: 169px">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicacion</option>
                <option value="division">Division</option>
                </select>
                <p style="color:white; text-align:center">Valor 1:</p>
                <input type="text" name="valor1" class="auto-style2"><br>
                <p style="color:white; text-align:center">Valor 2:</p>
                <input type="text" name="valor2" class="auto-style2"><br>
                <br>
                <input type="submit" value="Calcular" class="auto-style3">
                                
            </form>
        </div>
    </body>
</html>