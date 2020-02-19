<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JUAN's AUTO PAINT - Paint Job</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php include 'header.php'?>
  <!-- PAINT JOBS -->
    <section class="paint-job">
      <h2>Paint Jobs</h2>
      <h3>Paint Jobs in progress</h3>
      <div class="flex-container bottom32">
        <table cellspacing="0" cellpadding="0" class="grow-4">
          <tr>
            <td>Plate No.</td>
            <td>Current Color</td>
            <td>Target Color</td>
            <td>Action</td>
          </tr>
          <tr>
            <td>test</td>
            <td>blue</td>
            <td>green</td>
            <td><a href="#">Mark as Completed</a></td>
          </tr>          
        </table>
        <!-- shop performance -->
        <section class="grow-4">
          <div>SHOP PERFORMANCE</div>
          <p>Total Cars Painted: 48</p>
          <p>Breakdown</p>
          <p>Blue: -</p>
          <p>Red: -</p>
          <p>Green: -</p>
        </section>
      </div>

      <h3>Paint Queue</h3>
      <table cellspacing="10" cellpadding="0">
          <tr>
            <td>Plate No.</td>
            <td>Current Color</td>
            <td>Target Color</td>
          </tr>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </table>      
    </section>
</body>
</html>