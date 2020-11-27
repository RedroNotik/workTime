<?php 
      $b ='jabjcde';
      longestLength($b);
      function longestLength($string){
        $maxb = 0;
        $maxl = 0;
        $last = '';
        for($i = 0,$size = strlen($string); $i < $size;$i++){
          if ($string[$i]!= $last){
            $last = $string[$i];
            $maxb++;
          }
          else{
            if ($maxb > $maxl){
              $maxl = $maxb;
              $maxb = 0;
            }
            else {
              $maxb = 0;
            }
          }
          if ($maxb == $size){
            $maxl = $maxb;
          }
        }
        echo $maxl;
      }
    ?> 
