<?php

require_once('../logic/menu.php');

?>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Spletno programiranje</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                
             //Looping through two dimensional array and getting the links

                array_map(function ($row){
                echo '<li class = "nav-item"><a class = "nav-link" href="'.$row["link"].'">'.$row["title"].'</a></li>';  
            }, $links)
            ?>
            </div>
        </div>
        </nav>
</header>