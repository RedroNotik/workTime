 <?php 
      $a = "qweqrty";
      longestLength($a);
      function longestLength($string){
        $maxl = 0;
        $maxb = 0;
        $help = ""; 
        for ($i = 0, $size = strlen($string);$i<$size;$i++){
          $lastin = strripos($help,$string[$i]);
          if ($lastin === false){
            $maxl++;
            $help .= $string[$i];
            if ($maxb <= $maxl){
              $maxb = $maxl;
            }
            echo $maxl."+";
          }
          else{
            $maxl = strlen($help)-$lastin;
            $help .= $string[$i];
          }  
        }
      echo $help."+".$maxb;
      }
    ?> 
