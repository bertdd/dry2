<?php
/**
 * Creates an input field
 * @param string $label
 * @param string $name
 * @param string $type
 * @param string $placeholder
 */
function inputField(string $label, string $name, string $type, string $placeholder = "") : void
{
  echo "<div>";
  echo "<label for='$name'>$label :</label>";
  echo "<input type='$type' name='$name' placeholder='$placeholder'/>";
  echo "</div>";
}

/**
 * Create a form
 * @param array $fields
 * @return void
 */
function form(array $fields) : void
{
  echo "<form method='post'>";
  foreach ($fields as $field) {
    inputField($field[0], $field[1], $field[2], $field[3]);
  }
  echo "<input type='submit' value='OK' />";
  echo "</form>";
}


function SaveData(array $data) : void
{
  $columns = implode(', ', array_keys($data));
  $sql = " insert into users ($columns) values (";
  $i = 0;
  foreach (array_keys($data) as $column)
  {
    if ($i > 0)
    {
      $sql .= ", ";
    }
    $i++;
    $sql .= ":$column";
  }
  $sql .= ")";
  echo $sql;
}
?>