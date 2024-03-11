<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des pays</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Liste des pays</h1>
    <table>
        <!-- Première rangée : titres des colonnes -->
        <tr>
            <th>Nom</th>
            <th>Code ISO</th>
            <th>Population</th>
            <th>Superficie</th>
            <th>Continent</th>
            <th>Capitale</th>
            <th>Population de la capitale</th>
            <th>Altitude de la capitale</th>
        </tr>
    <?php
    foreach($countries as $country) {
    ?>
      <tr>
        <td class="nomPays"><?php echo $country['nom']; ?></td>
        <td class="codeISO"><?php echo $country['iso']; ?></td>
        <td class="population"><?php echo $country['population']; ?></td>
        <td class="superficie"><?php echo $country['superficie']; ?></td>
        <td class="continent"><?php echo $country['continent']; ?></td>
        <td class="capitale"><?php echo $country['capitale']; ?></td>
        <td class="popu_cap"><?php echo $country['popu_cap']; ?></td>
        <td class="altitude"><?php echo $country['altitude']; ?></td>
      </tr>
    <?php 
    }
    ?>
</body>
</html>
