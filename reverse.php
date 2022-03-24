<?PHP
require('./components/header.php')
?>
<div class="container">
<h1 class="text-center">reverse</h1>
<form action="reverse.php" method="POST">
<input style="width:100%; height:50px;" class="mt-3"  type="text" name="str" placeholder="enter something">
<button  style="width:100%; height:50px;" class="btn bg-dark text-light mt-2" name="submit">submit</button>
</form>
<br>
<?php
  $reverseSTR='';
if(isset($_POST['submit'])){
    $reverseSTR=strrev(htmlspecialchars($_POST['str']));
}
?>
<h3><?php echo $reverseSTR ?></h3>
</div>
<?PHP
require('./components/footer.php')
?>