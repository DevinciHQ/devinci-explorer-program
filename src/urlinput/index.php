<?php
if ($_GET["age"] != null){
  echo 'Wow, you are '. htmlspecialchars($_GET["age"]).' years old';
}
if ($_GET["sport"] != null){
  echo ' and you still play '.htmlspecialchars($_GET["sport"]).'!';
}
?>
