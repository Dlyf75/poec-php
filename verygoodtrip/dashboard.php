<?php
include('config.php');
include(TEMPLATES_PATH . '\header.php');

if (!$isUserAdmin) {
  header('location: index.php');
  // autre possibilité: rediriger l'utilisateur
  // vers une page spécifique (exemple: forbidden_access.html)
}
?>

<h2>Administration du site</h2>
<ul>
  <li><a href="manager/country/list.php">Pays</a></li>
  <li><a href="manager/trip/list.php">Voyages</a></li>
  <li><a href="manager/user/list.php">Utilisateurs</a></li>
</ul>


<?php include('templates/footer.php'); ?>
