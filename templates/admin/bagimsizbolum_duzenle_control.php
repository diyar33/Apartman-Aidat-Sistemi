<?php
session_start();
include("db/connection.php");






if (isset($_POST["bb_id"])) {
    
    $bb_id=$_POST["bb_id"];
          

    $bagimsizbolumcinsi          =      $_POST["bagimsizbolumcinsi"];
    $arsapayi                 =   $_POST["arsapayi"];
     $kapino                    = $_POST["kapino"];

    $tapusahibitcno               = $_POST["tapusahibitcno"];
    $tapusahibiad               = $_POST["tapusahibiad"];
    $tapusahibisoyad               = $_POST["tapusahibisoyad"];
    $tapusahibitelno               = $_POST["tapusahibitelno"];
    $tapusahibiemail               = $_POST["tapusahibiemail"];

    $tapusahibivekiliad               = $_POST["tapusahibivekiliad"];
    $tapusahibivekilisoyad            = $_POST["tapusahibivekilisoyad"];

    $kiracitcno                  =      $_POST["kiracitcno"];
    $kiraciad                 =    $_POST["kiraciad"];
    $kiracisoyad              =      $_POST["kiracisoyad"];
    $kiracitelno              =      $_POST["kiracitelno"];
    $kiraciemail              =      $_POST["kiraciemail"];








    
    if (empty($bb_id)) {
        $_SESSION["bagimsizbolum_duzenleme"] = "degerlerbos";
         header("Location:bagimsizbolum_duzenle.php?bb_id=".$bb_id);
        exit;
    }
  
    
    
   

   
      
        $sql= "update tb_bagimsizbolum set cinsi='$bagimsizbolumcinsi',pay='$arsapayi',kapino='$kapino',
        tapusahibitcno='$tapusahibitcno',tapusahibiad='$tapusahibiad',
         tapusahibisoyad='$tapusahibisoyad',tapusahibitelno='$tapusahibitelno',tapusahibivekiliad='$tapusahibivekiliad',tapusahibivekilisoyad='$tapusahibivekilisoyad',
         kiracitcno='$kiracitcno',kiraciad='$kiraciad',kiracisoyad='$kiracisoyad',kiracitelno='$kiracitelno',tapusahibiemail='$tapusahibiemail',kiraciemail='$kiraciemail'
        where id='$bb_id'";
          $result_query = mysqli_query($db, $sql);

          if (!$result_query) {
            $_SESSION["bagimsizbolum_duzenleme"] = "hatali";
         header("Location:bagimsizbolum_duzenle.php?bb_id=".$bb_id);
          }
          else
          {
      
             $_SESSION["bagimsizbolum_duzenleme"] = "basarili";
       header("Location:bagimsizbolum_duzenle.php?bb_id=".$bb_id);
          }
            
    

    
              
     

        }


        
    
else
{
header("Location:extra_404_option1.html.php");
}


?>




