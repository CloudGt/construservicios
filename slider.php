<?php session_start();?>
<?php
  if (isset($_GET['galeria']) == 0) 
  {
    echo "<h1>no se selecciono una galeria</h1>";
  }
  else
  {
    $clase=" active ";
    $completo ="";
    $indicadores="
                  <div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
                    <!-- Indicators -->
                    <ol class='carousel-indicators'>";
    $items="<div class='carousel-inner'>";

    if ($_GET['galeria'] > 0){
      for ($i = 1; $i <= $_GET['cantidad']; $i++) {
        $indicadores=$indicadores. "<li data-target='#carousel-example-generic' class= '".$clase."' data-slide-to='".$i."'></li>";
        $items=$items."
                      <div class='item ".$clase."'>
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
                    <a class='left carousel-control' href='#carousel-example-generic' role='button' data-slide='prev'>
                      <span class='glyphicon glyphicon-chevron-left'></span>
                    </a>
                    <a class='right carousel-control' href='#carousel-example-generic' role='button' data-slide='next'>
                      <span class='glyphicon glyphicon-chevron-right'></span>
                    </a>
                  </div> <!-- Carousel -->
              </div>";
      echo $completo;
    }                   
  }
?>