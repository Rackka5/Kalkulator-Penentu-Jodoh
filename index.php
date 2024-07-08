<?php
$akurasi = rand(0,100);
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
             
<form action="hasil.php" method="GET">
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
                <tr>
                    <input type="hidden" name="akurasi" value="<?php echo $akurasi ?>">
                  <td style="font-size: 30px;padding-left: 20px; color: white;">Si Cowok
                  <br>
                  <input type="text" style="
                background-color: white; border : 5px solid #B22222; width: 450px; height: 50px; 
                font-size : 20px;" name="cowok" required="required">
                  </td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td style="font-size: 30px;padding-left: 20px; color: white;">Si Cewek
                  <br>
                  <input style="
                background-color: white; border : 5px solid #B22222; width: 450px; height: 50px; 
                font-size : 20px;" type="text" name="cewek" required="required">
                  </td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br><br><br></td>
                </tr>
                <tr>
                  <td align="center">
                      <input class="btn btn-primary" style="height: 200px; background-color: #8B0000; border: 1px solid #DE3163;
                      height: 60px; width: 250px;font-size: 20px;" type="submit" value="Jodoh ?">
                  </td>
                </tr>
            </table>
</form>
    </section>
</body>
</html>