<?php include 'heder.php';?>
<?php include 'nav.php';?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<h2>Store</h2>
<div class="store">
<div class="img1">
    <img src="image/do.png" alt="click me !">
    <p>Click here !</p>
    </div>
    <div class="img2">
    <img src="image/you.png" alt="click me !">
    <p>Click here !</p>
    </div>
    <div class="img3">
    <img src="image/want.png" alt="click me !">
    <p>Click here !</p>
    </div>
    <div class="img4">
    <img src="image/this.png" alt="click me !">
    <p>Click here !</p>
</div>
</div>
<div class="backimg" >
<h3>find everything you lost !</h3>
</div>
<button  onclick="topFunction()" id="last" title="Go to top">&#11014;</button>
<script>

let mybutton = document.getElementById("last");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<?php include 'footer.php';?>

