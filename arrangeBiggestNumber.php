 <?php 
    // 1, 34, 3, 98, 9, 76, 45, 4
    function arrangeBiggestNumber(array $array){
      function morett($a){
          while ($a>=10){
            $a = intdiv($a,10);
          }
          return $a;
        }
      function maxlen($max,$min){
        $help = str_repeat(1,strlen($max)-strlen($min)+1);
        $min = $min*$help;
        for($i = strlen($max)-1; $i >= 0; $i--){
            if (intdiv($max,10**$i)%10<intdiv($min,10**$i)%10){
                return 1;
              }
        }
        return 0;
      }

      function cmp($a, $b) {
        if (morett($a) == morett($b)) {
            if (strlen($a)>strlen($b)){
              return maxlen($a,$b);
            }    
            elseif(strlen($a)<strlen($b)) {return maxlen($b,$a);}
            else{return (($a) < ($b)) ? 1 : -1;}
            }
        return (morett($a) < morett($b)) ? 1 : -1;
      }
      usort($array,'cmp');
      $fix = implode ($array);
      echo $fix;
    }
    ?> 
