<?php 
 if (session_status() === PHP_SESSION_NONE) session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Choisir Caisse</h2>

<form method="POST" action="/caisse/choisir">
    <select name="caisse_id">
        <?php foreach ($caisses as $caisse): ?>
<option value="<?= $caisse['id'] ?>">
    <?= htmlspecialchars($caisse['numero']) ?>
</option>           
        <?php endforeach; ?>
    </select>
    <br><br>
    <button type="submit">Valider</button>
</form>
</body>
</html>