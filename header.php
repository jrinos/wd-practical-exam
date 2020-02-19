<?php
$RU = parse_url($_SERVER["REQUEST_URI"]);
?>
<header>
  <h1>JUAN'S AUTO PAINT</h1>
  <nav>
  <ul>
    <?php 
     if(isset($RU["query"]))
     {
    ?>
    <li><a href="index.php">NEW PAINT JOB</a></li>
    <li class="on"><a href="paintjobs.php?list=0">PAINT JOBS</a></li>
    <?php 
     } else {
    ?>
    <li class="on"><a href="index.php">NEW PAINT JOB</a></li>
    <li><a href="paintjobs.php?list=0">PAINT JOBS</a></li>    
    <?php  }?>
  </ul>
  </nav>
</header>