<?php
function getMoneySpent($keyboards, $drives, $b) {
     $total_price =-1;
     $n_drives = count($drives);
     $n_keyboards = count($keyboards);
     
     for ($i=0; $i<$n_keyboards; $i++){
         for($j=0; $j<$n_drives; $j++){
             $curr_price = $keyboards[$i]+$drives[$j];
             if($curr_price > $total_price && $curr_price <= $b ){
                 $total_price = $curr_price;
             }
         }
     }
     return $total_price;

}
