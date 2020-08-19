<?php
      if($_POST['tests']){
          
          $file =fopen("./files/urls.txt", "a+");
          
 require_once 'obrab_formi.php'; 
           $tex = $ssilka;
          $con =fwrite($file, $tex);
          if($con){
              echo ("<a href='./files/urls.txt'>Link</a>");
          }else{
              echo ("no");
          }
      }
   
      ?>
<form name="test" method="post" action="myforma.php">
      <input type="text" name="texttest">
      <input type="submit" name="tests" value="Sobitie">
      
</from>      

