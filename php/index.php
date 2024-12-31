<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

require_once 'Member.php';


$membre = new Member(1, "Jean Dupont", "jean.dupont@example.com", "password123");

echo "<h1>Informations du membre</h1>";
echo "<p><strong>ID:</strong> " . $membre->getId() . "</p>";
echo "<p><strong>Nom:</strong> " . $membre->getNom() . "</p>";
echo "<p><strong>Email:</strong> " . $membre->getEmail() . "</p>";
echo "<p><strong>Mot de passe:</strong> " . $membre->getMotDePasse() . "</p>";

$membre->setNom("Jean Martin");
$membre->setEmail("jean.martin@example.com");

echo "<h1>Informations mises à jour</h1>";
echo "<p><strong>ID:</strong> " . $membre->getId() . "</p>";
echo "<p><strong>Nom:</strong> " . $membre->getNom() . "</p>";
echo "<p><strong>Email:</strong> " . $membre->getEmail() . "</p>";
echo "<p><strong>Mot de passe:</strong> " . $membre->getMotDePasse() . "</p>";
?>

</body>
</html>