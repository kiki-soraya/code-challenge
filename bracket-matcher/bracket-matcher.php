<?php 

function BracketMatcher($str) {
  //int to determine if bracket has pair or not
  $match = 0;
  
  //break string to array
  $str_break = str_split($str,1);
  
  //loop through the array
  foreach($str_break as $val){
    //return 0 if match equal -1; this return 0 immediately whenever there's close bracket appear without open bracket
    if($match==-1){
      return 0;
    }else{
      if($val=="("){
        $match++;
      }elseif($val==")"){
        $match--;
      }
    }
  }
  if($match == 0){
    return 1;
  }else return 0;
}

?>
