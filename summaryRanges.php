<?php 
      function summaryRanges(array $array){
          $stop = 0;
          $pr = $array[0];
          $start = 0;
          $answ = array();
          for($i=1,$size = count($array);$i<$size;$i++){
            if ($array[$i]-1==$pr){
              $stop++;
              $pr = $array[$i];
              if($i+1 == $size){
                $help = $array[$start]."->".$array[$stop];
                array_push($answ,$help);
              }
            }
            elseif($stop-$start>=1){
              $help = $array[$start]."->".$array[$stop];
              array_push($answ,$help);
              $start = $i;
              $stop = $i;
              $pr = $array[$i];
            }
            else{
              $pr = $array[$i];
              $start = $i;
              $stop++;
            }
          }
          print_r($answ);
      }
    ?> 
