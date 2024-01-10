<?php
require_once './Common.php';

$fields =
  [
    ["Naam", "name", "text", "Voer uw naam in"],
    ["Email", "email", "email", "Voer uw email in"],
    ["Password", "password", "password", "Voer uw password in"],
    ["Mailen", "mail", "checkbox", ""]
  ];

  if (isset($_POST) && count($_POST) > 0)
  {
    SaveData($_POST);
  }
?>

<html>
<head>
  <title>Mijn pagina</title>
  <link href="./Style.css" rel="stylesheet" type="text/css"/>
</head>
<body> 
  <?php form($fields) ?>
</body>

</html>
