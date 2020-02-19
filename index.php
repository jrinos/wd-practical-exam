<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JUAN's AUTO PAINT</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
      let carColorMap = {
          ""      : "images/gray.png",
          "blue"  : "images/blue.png",
          "green" : "images/green.png",
          "red"   : "images/red.png",
      };
    </script>
</head>
<body>
 <?php include 'header.php'?>
 <!-- NEW PAINT JOB -->
 <section class="new-paint-job">
   <h2>New Paint Job</h2>
   <table cellpadding="10" cellspacing="0" class="offset-mid">
    <tr class="nobackground">
      <td>
        <img src="images/gray.png" id="currentCarColor">
      </td>
      <td>
        <img src="images/arrow.png">
      </td>
      <td>
        <img src="images/gray.png" id="targetCarColor">
      </td>
    </tr>
   </table>
  <h3>Car Details</h3>
  <form name="frmCarDetails" action="paintjobs.php?list=0" method="post" class="form-car-details">
    <div>
      <label for="plateno">Plate No.</label>
      <input type="text" name="plateno">
    </div>
    <div>
      <label for="currentcolor">Current Color.</label>
      <select id="currentcolor" name="currentcolor" onchange="document.getElementById('currentCarColor').src = carColorMap[this.value];">
      <option value=""></option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>
        <option value="red">Red</option>
      </select>
    </div>
    <div>
      <label for="targetcolor">Target Color.</label>
      <select id="targetcolor" name="targetcolor" onchange="document.getElementById('targetCarColor').src = carColorMap[this.value];">
      <option value=""></option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>
        <option value="red">Red</option>
      </select>
    </div>
    <input type="submit" value="submit"/>
  </form>
 </section>
</body>
</html>


