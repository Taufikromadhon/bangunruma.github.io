<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bangunruma</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="img/fav-icon.png" type="image/png" />
  </head>
  <body style="background: #fff">

    <!-- Mulai Kepala -->
    <section>

      <div class="row" style="width: 90%; margin-top: 40px;">
        <div class="col-xs-6 wow bounce hover14" data-wow-duration="2s" style="width: 630px; margin-bottom: 20px;"><figure><img style="margin-left: 185px;" src="img/logo2.png" width="250px" height="50px"></figure></div>
        <div class="col-xs-2" style="width: 250px; border-right: 1px solid #dfdfdf;"><span style="font-size: 14px; color: #263238; font-weight: bold;"><i class="fa fa-clock-o" aria-hidden="true"></i> Jam Layanan : 08.00 - 21.00</span><br><span style="color: #ff5722; font-size: 11px; font-weight: bold; margin-left: 15px;">Sabtu, Minggu &amp; Hari Besar Libur <i class="fa fa-question-circle" aria-hidden="true"></i></span></div>
        <div class="col-xs-2" style="width: 155px; border-right: 1px solid #dfdfdf;"><span style="font-size: 14px; color: #263238; font-weight: bold;"><i class="fa fa-phone" aria-hidden="true"></i> (021) 3000 7777<br><span style="margin-left: 15px;">(021) 4040 7777</span></span></div>
        <div class="col-xs-2" style="margin-top: 10px;"><span style="font-size: 14px; color: #263238; font-weight: bold;"><i class="fa fa-envelope" aria-hidden="true"></i> cs@bangunruma.com</span></div>
      </div>

    </section>
<br>
<br>
    <!-- Akhir Kepala -->

    <!-- Mulai Menu -->
    <div class="menuHeaderAtas">
      <div class="row" style="width: 100%">
          <div class="col-md-4" style=" margin-top: 12px; ">
     <span style="font-size: 17px;font-weight: bold; margin-left: 20px;"><i class="fa fa-home" aria-hidden="true"></i> <a href="./pencarian.html">Home</a></span><span style="font-size: 17px;font-weight: bold; margin-left: 15px;"><i class="fa fa-user" aria-hidden="true"></i> <a href="profil.php">Profil</a></span><span style="font-size: 17px;font-weight: bold; margin-left: 15px;"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> <a href="pekerjaanberjalan.php">Pekerjaan</a></span><span style="font-size: 17px;font-weight: bold; margin-left: 15px;"><i class="fa fa-building" aria-hidden="true"></i> <a href="bangun.php">Bangun</a></span>

     </div>
    <div class="col-md-4" style=" margin-top: 12px; ">
    </div>
      <div class="col-md-4" style="margin-top: 12px;"><span style="font-size: 17px;font-weight: bold; margin-left: 15px;"><a href="" data-toggle="modal" data-target="#CSModal">Bantuan CS</a></span><span style="font-size: 17px;font-weight: bold; margin-left: 15px;"><a data-toggle="modal" data-target="#LogoutModal">Logout</a></span>
      </div>
        <!-- Popup Login -->
          


          
        <!-- -->
        </div>
      </div>
    </div>
    <!-- Akhir Menu -->


  <section id="">
      
      <div class="container" >
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="">Profil User</h1>
            <br>
            <br>
            <div class="row">

                <div class="col-md-5">
                    
                    <img class="img-responsive" src="gambar/foto-wilda.png">
                </div>
                  <div class="col-md-5">
                  <form method="post">
                    <table>
                      <tr>
                        <td>Id</td>
                        <td> : </td>
                        <td><input type="text" name="id-user" value="90012" readonly=""></td>

                      </tr>
                      <tr>
                        <td>Nama</td>
                        <td> : </td>
                        <td><input type="text" name="nama-user" value="Mauli" ></td>
                      </tr>
                      <tr>
                        <td>Status</td>
                        <td> : </td>
                        <td><input type="text" name="konfirm" value="Terkonfirmasi" ></td>
                      </tr>
                      <tr>
                        <td>KTP</td>
                        <td> : </td>
                        <td><input type="file" name=""></td>
                         </tr>

                      <br>
                      <tr>
                      <td> </td>
                      <td> </td>
                       
                      </tr>
                    </table>
                    <br><br>
                    <div style="margin-left: 200px;">
                      
                    </div>
                     <button type="button" class="btn btn-success">Kirim</button>
                 
                  </form>
                </div>
                 <div class="col-md-5">
           
                </div>
                 
                  
                    
                
              
            </div>

          </div>

        </div>
      </div>

          </section>

 

     <!-- Logout Modal-->
    <div class="modal fade" id="LogoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          
            <h5 class="modal-title" id="exampleModalLabel"><br>
          <br>Apakah Anda Yakin?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih "Ya" untuk Logout.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="index.php">Ya</a>
          </div>
        </div>
      </div>
    </div>



     <!-- CS Modal-->
    <div class="modal fade" id="CSModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          
            <h5 class="modal-title" id="exampleModalLabel"><br>
          <br>Butuh Bantuan?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
         
          <div class="form-group">
          <label for="comment">Isikan Form Berikut Dan Laporkan Ke Kami!</label>
          <textarea class="form-control" rows="5" id="comment">Format: ID <?php echo "\n"; ?>Nama: <?php echo "\n"; ?>Isi: <?php echo "\n"; ?>
        </textarea>
          </div><br>
        

          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="">Kirim</a>
          </div>
        </div>
      </div>
    </div>

    <div id="footer" style="padding-top: 45px; padding-bottom: 45px; background: #000; color: #555;">
     <center>
      <ol>
        <li>Copyright &copy; 2017 Bangunruma, Inc.</li>
      </ol>
      </center>

    </div>
    
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
    <!-- WOW JS -->
    <script src="WOW-master/dist/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>