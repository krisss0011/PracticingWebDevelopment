<?php

include_once('../logic/menu.php');

?>
<footer class="footer">
      <ul class="list-group">
        <h5>Povezave:</h5>
        <?php
             //Looping through two dimensional array and getting the links
                array_map(function ($row){
                echo '<li class = "list-group-item"><a href="'.$row["link"].'">'.$row["title"].'</a></li>';  
            }, $links)
        ?>
      </ul>
      <?php

// checking to see if validation went through

if (isset($_SESSION["check"])) {
  if (isset($_SESSION["redirect"])) {
    $redirect = $_SESSION["redirect"];
    if ($redirect == "true") {
    $result = $_SESSION["check"];
    switch ($result) {
      case "data is missing":
        $html_element='<div class="alert alert-warning" role="alert" id="alert">
        Some data is missing <a href="#" class="alert-link"></a>.
        </div>';
        echo $html_element;
        break;
      case "data is okay":
        $html_element='<div class="alert alert-warning" role="alert" id="alert">
        Your message was successfully sent <a href="#" class="alert-link"></a>.
        </div>';
        echo $html_element;
        break;
      case "email is not valid":
        $html_element='<div class="alert alert-warning" role="alert" id="alert">
        Email is invalid in that case <a href="#" class="alert-link"></a>.
        </div>';
        echo $html_element;
        break;
      case "phone is not okay":
        $html_element='<div class="alert alert-warning" role="alert" id="alert">
        Phone number is invalid <a href="#" class="alert-link"></a>.
        </div>';
        echo $html_element;
        break;
      } 
  } 
 }
}
?>
    </footer>