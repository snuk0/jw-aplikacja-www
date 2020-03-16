<html>
<head>
<title>Nauczyciel</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<form action="insert.php" method="POST">
    Klasa: <select name="klasa">
    <option value="2PI">2PI</option>
    <option value="2TP1">2TP1</option>
    <option value="2TP2">2TP2</option>
    <option value="1TP1">1TP1</option>
    <option value="1TP2">1TP2</option>
    <option value="3TI">3TI</option>
    <option value="4TI">4TI</option>
    </select><br>
    Temat: <input type="text" name="temat"><br>
    Treść: <br><textarea name="tresc" cols="80" rows="10"></textarea><br>
    Data i godzina: <input type="datetime-local" name="data_i_godzina" value="<?php echo Date('Y-m-d\TH:i',time()) ?>" disabled><br>
    Data i godzina oddania: <input type="datetime-local" name="data_i_godzina_oddania"><br>
    <button type="submit" width=>OK</button>
</form>
</body>
</html>