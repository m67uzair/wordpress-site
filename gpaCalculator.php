<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="gpaCalculator.css">
  <title>Document</title>
</head>

<body>

<?php
   $sp = $_GET['SP'];
   $abis = $_GET['ABIS'];
   $cps = $_GET['CPS'];
   $hci = $_GET['HCI'];
   $is = $_GET['IS'];
   $scdth = $_GET['SCDth'];
   $scdpr = $_GET['SCDpr'];

   $total = 0.0;

   if($sp=="A+"){
    $spG = 4 * 3;
   }elseif($sp=="A"){
    $spG = 3.5 * 3;
   }elseif($sp=="B+"){
    $spG = 3 * 3;
   }elseif($sp=="B"){
    $spG = 2.5 * 3;
   }elseif($sp=="C+"){
    $spG = 2 * 3;
   }elseif($sp=="C"){
    $spG = 1 * 3;
   }elseif($sp=="F"){
    $spG = 0 * 3;
   }

   if($abis=="A+"){
    $abisG = 4 * 3;
   }elseif($abis=="A"){
    $abisG = 3.5 * 2;
   }elseif($abis=="B+"){
    $abisG = 3 * 3;
   }elseif($abis=="B"){
    $abisG = 2.5 * 3;
   }elseif($abis=="C+"){
    $abisG = 2 * 3;
   }elseif($abis=="C"){
    $abisG = 1 * 3;
   }elseif($abis=="F"){
    $abisG = 0 * 3;
   }

   if($hci=="A+"){
    $hciG = 4 * 3;
   }elseif($hci=="A"){
    $hciG = 3.5 * 3;
   }elseif($hci=="B+"){
    $hciG = 3 * 3;
   }elseif($hci=="B"){
    $hciG = 2.5 * 3;
   }elseif($hci=="C+"){
    $hciG = 2 * 3;
   }elseif($hci=="C"){
    $hciG = 1 * 3;
   }elseif($hci=="F"){
    $hciG = 0 * 3;
   }

    if($cps=="A+"){
    $cpsG = 4 * 3;
   }elseif($cps=="A"){
    $cpsG = 3.5 * 3;
   }elseif($cps=="B+"){
    $cpsG = 3 * 3;
   }elseif($cps=="B"){
    $cpsG = 2.5 * 3;
   }elseif($cps=="C+"){
    $cpsG = 2 * 3;
   }elseif($cps=="C"){
    $cpsG = 1 * 3;
   }elseif($cps=="F"){
    $cpsG = 0 * 3;
   }

   if($is=="A+"){
    $isG = 4 * 3;
   }elseif($is=="A"){
    $isG = 3.5 * 3;
   }elseif($is=="B+"){
    $isG = 3 * 3;
   }elseif($is=="B"){
    $isG = 2.5 * 3;
   }elseif($is=="C+"){
    $isG = 2 * 3;
   }elseif($is=="C"){
    $isG = 1 * 3;
   }elseif($is=="F"){
    $isG = 0 * 3;
   }

   if($scdth=="A+"){
    $scdthG = 4 * 2;
   }elseif($scdth=="A"){
    $scdthG = 3.5 * 2;
   }elseif($scdth=="B+"){
    $scdthG = 3 * 2;
   }elseif($scdth=="B"){
    $scdthG = 2.5 * 2;
   }elseif($scdth=="C+"){
    $scdthG = 2 * 2;
   }elseif($scdth=="C"){
    $scdthG = 1 * 2;
   }elseif($scdth=="F"){
    $scdthG = 0 * 2;
   }


   if($scdpr=="A+"){
    $scdprG = 4 * 1;
   }elseif($scdpr=="A"){
    $scdprG = 3.5 * 1;
   }elseif($scdpr=="B+"){
    $scdprG = 3 * 1;
   }elseif($scdpr=="B"){
    $scdprG = 2.5 * 1;
   }elseif($scdpr=="C+"){
    $scdprG = 2 * 1;
   }elseif($scdpr=="C"){
    $scdprG = 1 * 1;
   }elseif($scdpr=="F"){
    $scdprG = 0 * 1;
   }

   $total = ($spG + $abisG + $cpsG + $hciG + $isG + $scdthG + $scdprG)/18

?>


  <div class="table-responsive">
    <form action="" method="get">
    <table class="table">
      <tr>
        <th>SP</th>
        <td>
          <select name="SP">
            <option value="A+">A+</option>
            <option value="A">A</option>
            <option value="B+">B+</option>
            <option value="B">B</option>
            <option value="C+">C+</option>
            <option value="C">C</option>
            <option value="F">F</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>ABIS</th>
        <td> <select name="ABIS">
            <option value="A+">A+</option>
            <option value="A">A</option>
            <option value="B+">B+</option>
            <option value="B">B</option>
            <option value="C+">C+</option>
            <option value="C">C</option>
            <option value="F">F</option>
          </select> </td>
      </tr>
      <tr>
        <th>CPS</th>
        <td> <select name="CPS">
            <option value="A+">A+</option>
            <option value="A">A</option>
            <option value="B+">B+</option>
            <option value="B">B</option>
            <option value="C+">C+</option>
            <option value="C">C</option>
            <option value="F">F</option>
          </select> </td>
      </tr>
      <tr>
        <th>HCI</th>
        <td> <select name="HCI"  >
            <option value="A+">A+</option>
            <option value="A">A</option>
            <option value="B+">B+</option>
            <option value="B">B</option>
            <option value="C+">C+</option>
            <option value="C">C</option>
            <option value="F">F</option>
          </select> </td>
      </tr>
      <tr>
        <th>IS</th>
        <td> <select name="IS"  >
            <option value="A+">A+</option>
            <option value="A">A</option>
            <option value="B+">B+</option>
            <option value="B">B</option>
            <option value="C+">C+</option>
            <option value="C">C</option>
            <option value="F">F</option>
          </select> </td>
      </tr>
      <tr>
        <th>SCD (th)</th>
        <td> <select name="SCDth"  >
            <option value="A+">A+</option>
            <option value="A">A</option>
            <option value="B+">B+</option>
            <option value="B">B</option>
            <option value="C+">C+</option>
            <option value="C">C</option>
            <option value="F">F</option>
          </select> </td>
      </tr>
      <tr>
        <th>SCD (pr)</th>
        <td>
          <select name="SCDpr">
            <option value="A+">A+</option>
            <option value="A">A</option>
            <option value="B+">B+</option>
            <option value="B">B</option>
            <option value="C+">C+</option>
            <option value="C">C</option>
            <option value="F">F</option>
          </select> </td>
      </tr>

      <tr>
        <th>Total CGPA</th>
        <td> <?php echo $total; ?></td>
      </tr>
      
      <tr>
        <td colspan="2" ><input type="submit"></td>
      </tr>
    </table>
  </form>
  </div>
</body>

</html>