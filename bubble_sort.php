<?php
//----------------- methods ------------------ 
function getNumber($numbers){
   $arrayNumbers=[];
  $temp='';
  for($i=0;$i<strlen($numbers);$i++){
     if( ord($numbers[$i]) >= 48 && ord($numbers[$i]) <= 57 )
       $temp =$temp.$numbers[$i];
       else{
         array_push($arrayNumbers,$temp);
         $temp = '';
       }
       //for last number
       if(strlen($numbers) == $i+1)
       array_push($arrayNumbers,$temp);
}
  return $arrayNumbers;
}
function bubble_sort($numbers){
 // $numbers = [10,90,80,50,40,70,20,11,1,3,8,100];
for($i=1;$i<count($numbers);$i++){
  for($j=0;$j<count($numbers)-$i;$j++){
    if($numbers[$j]>$numbers[$j+1]){
      $temp=$numbers[$j];
      $numbers[$j]=$numbers[$j+1];
      $numbers[$j+1]=$temp;
    }
  }
}

foreach($numbers as $items )
echo $items.'  ';
  }
?>

<?PHP
require('./components/header.php')
?>
<div class="container mt-5">
<h1 class="text-center">bubble sort</h1>
<form action="bubble_sort.php" method="Post">
    <textarea style="width:100%; height:50px;" name="array" placeholder="your numbers to sort"></textarea>
    <br>
    <input style="width:100%; height:50px;" class="btn bg-dark text-light mt-2" type="submit" name="submit" value="sort">
</form>

<?php

if(isset($_POST['submit'])){

  ?>
   <h2 class="mt-3">result : </h2>
  <?php
$numbers = htmlspecialchars(($_POST['array']));
bubble_sort(getNumber($numbers));
}
?>
</div>
<?PHP
require('./components/footer.php')
?>