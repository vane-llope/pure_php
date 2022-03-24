<?php
//----------------- methods ------------------ 
function prime($min,$max){
     for($i=$min;$i<=$max;$i++){
         primenumber($i);
     }
}


function primenumber($MyNum) {
     $flag = false;
    for($i = 2; $i < sqrt($MyNum)+1; $i++) {
      if($MyNum % $i == 0){
        $flag=true;
        break;
      }
    }
  
    if ($flag == false){
      echo $MyNum." ";
    } 
  }
//-------------------------------------------------- 
?>

<?php
require('./components/header.php')
?>
<div class="container">
<h1 class="text-center">prime</h1>
<form action="prime.php" method="POST">
<input style="width:100%; height:50px;" type="text" name="min" placeholder="min">
<br>
<input style="width:100%; height:50px;" class="mt-3" type="text" name="max" placeholder="max">
<br>
<input  style="width:100%; height:50px;" class="btn bg-dark text-light mt-2" type="submit" name="submit">
</form>
<br>
<?php
  if(isset($_POST['submit'])){
    ?>
     <h2>result : </h2>
    <?php
    $min=htmlspecialchars($_POST['min']) ;
    $max=htmlspecialchars($_POST['max']);
    prime( intval($min), intval($max));
}
?>
</div>
<?php
require('./components/footer.php')
?>