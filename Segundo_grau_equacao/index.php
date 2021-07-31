<!DOCTYPE html>
<html>

<head>
    <title> Equação do Segundo Grau </title>
    <meta charset="UTF-8">
    <style>
        body {
            background: #7cb342;
            color: white;
            font-family: 'Roboto', 'Arial';
        }
        
        fieldset {
            background: #9ccc65;
            width: 50%;
            margin: 0 auto;
            padding: 10px 40px;
            text-align: center;
            border: 2px dashed white;
        }
        
        legend {
            font-size: 45px;
        }
        
        label {
            font-size: 25px;
        }
        
        input {
            width: 100%;
            margin: 5px auto;
            height: 25px;
            border: none;
            padding: 0;
        }
        
        input:focus {
            border: 2px dotted black;
            box-shadow: none;
            outline: 0;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Encontre as raízes</legend>
        <form method="POST" action="resultado.php">
            <label>ax² + bx + c = 0</label>
            <input type="text" placeholder="Insira o valor do A aqui..." name="txta">
            <input type="text" placeholder="Insira o valor do B aqui..." name="txtb">
            <input type="text" placeholder="Insira o valor do C aqui..." name="txtc">
            <input type="reset" value="Limpar">
            <input type="submit" value="Enviar">
        </form>
    </fieldset>
</body>

</html>