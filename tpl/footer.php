<?php

include_once('../logic/menu.php');

?>
<footer class="footer">
      <ul class="list-group">
        <h5>Povezave:</h5>
        <?php
             //Looping through two dimesional array and getting the links
                array_map(function ($row){
                echo '<li class = "list-group-item"><a href="'.$row["link"].'">'.$row["title"].'</a></li>';  
            }, $links)
        ?>
      </ul>
    </footer>