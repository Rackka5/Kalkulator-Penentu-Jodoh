<?php

$cowok = $_GET['cowok'];
$cewek = $_GET['cewek'];
$score = $_GET['akurasi'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets_bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets_sweetalert/css/animate.min.css">
  <link rel="stylesheet" href="assets_sweetalert/css/sweetalert2.min.css">
  <script src="assets_sweetalert/js/sweetalert2.min.js"></script>
</head>
<body>
    <section id="" >
    <div class="container">
      <div class="row justify-content-center mb-3 ms-auto">
        <div class="col-sm-7 mb-3">
          <!-- awal Tentang s&k -->
          <div class="card text-left " style="width: 650px; height: 700px;background-color : #E0115F ;
                        border : 8px solid #B22222; border-radius : 50px; margin-top: 35px; padding-top: 25px;" >
            <div class="card-body text-black">
             
<table align="center" >
                <tr>
                  <td style="font-size: 40px; color: white">
                   <b>Kalkulator Penentu Jodoh</b>
                  </td>
                </tr>
                <tr>
                  <td style="font-size: 30px; color: white;" align="center">
                  Akurasi 99% (Gak) Akurat
                  </td>
                </tr>
                <tr>
                  <td>
                    <br>
                    <br>
                    <br>
                </td>
                </tr>
                <tr align="center">
                  <td style="font-size: 30px; color: white">
                   Peluang Berjodoh :
                  </td>
                </tr>
                <tr align="center">
                  <td style="font-size: 30px; color: white">
                   <?php echo $cowok ?> dan <?= $cewek ?> 
                  </td>
                </tr>

                <tr align="center">
                  <td style="font-size: 70px; color: white">
                   <b><?= $score ?>%</b>
                  </td>
                </tr>
                <tr align="center">
              <?php
            if ($score >= '0' && $score <= '25'){
              ?>
             
                    <td style="font-size: 30px; color: white">
                    NT bro :(
                    </td>
            
              <?php
            }else if ($score >='26' && $score <= '50'){
              ?>
            <td style="font-size: 30px; color: white">
            Kalo Kata Gua Mundur Sih
            </td>

            <?php
            }else if ($score >='51' && $score <= '75'){
              ?>
            <td style="font-size: 30px; color: white">
            Masih Ada Harapan
            </td>

            <?php
            }else if ($score >='76' && $score <= '90'){
              ?>
            <td style="font-size: 30px; color: white">
            Kasih Perhatian dan Kasih Sayang 
            </td>

            <?php
            }else if ($score >='91' && $score <= '99'){
              ?>
            <td style="font-size: 30px; color: white">
            Sedikit Lagi Berjodoh, Semangat
            </td>

            <?php
            }else if ($score == '100'){
              ?>
            <td style="font-size: 30px; color: white">
            Nikahin Cepat
            </td>
              <?php  
            }
              ?>

                </tr>
                <tr>
                  <td><br><br><br></td>
                </tr>
                <tr>
                  <td align="center">
                     <a href="index.php"><input class="btn btn-primary" style="height: 200px; background-color: #8B0000; border: 1px solid #DE3163;
                      height: 60px; width: 300px;font-size: 20px;" type="submit" value="Coba Dengan Yang Lain"></a>
                  </td>
                </tr>
            </table>
    </section>
</body>
</html>