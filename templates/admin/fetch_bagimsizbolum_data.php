<?php
   
         session_start();
include("db/connection.php");  


   if(isset($_POST['get_option']))
   {

      

     $gm_id = $_POST['get_option'];
     $sql="select kapino from tb_bagimsizbolum where gayrimenkulid='$gm_id'";
      $result = $db->query($sql);
                          
                            while($row = $result->fetch_assoc()) {
                             echo "<option>".$row['kapino']."</option>";
                              
                            }

    
     exit;
   }

?>