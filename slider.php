<?php session_start();?>
<?php
  if (isset($_GET['galeria']) == "") 
  {
    echo "<h1>no se selecciono una galeria</h1>";
  }
  else
  {
    $clase=" active ";
    $completo ="";
    $indicadores="
                  <div id='galeriasproyectos' class='carousel slide' data-ride='carousel'>
                    <!-- Indicators -->
                    <ol class='carousel-indicators'>";
    $items="<div class='carousel-inner'>";

    if ($_GET['galeria'] !=""){
      for ($i = 1; $i <= $_GET['cantidad']; $i++) {
        $indicadores=$indicadores. "<li data-target='#galeriasproyectos' class= '".$clase."' data-slide-to='".$i."'></li>
        ";
        $items=$items."
                      <div class='carousel-item ".$clase."'>
                        <center>
                          <img src='img/galerias/".$_GET['galeria']."/".$i.".jpg' alt='...'>
                        </center>
                        <div class='carousel-caption'>
                          
                        </div>
                      </div>";
        $clase="";
      }  
      $indicadores=$indicadores. "</ol>";
      $items=$items."</div>";
      $completo= $indicadores. $items . "
                    <!-- Controls -->
                     <a class='carousel-control-prev' href='#galeriasproyectos' role='button' data-slide='prev'>
                      <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                      <span class='sr-only'>Previous</span>
                    </a>
                    <a class='carousel-control-next' href='#galeriasproyectos' role='button' data-slide='next'>
                      <span class='carousel-control-next-icon' aria-hidden='true'></span>
                      <span class='sr-only'>Next</span>
                    </a>


                  </div> <!-- Carousel -->
              ";
      echo $completo;
    }                   
  }
?>