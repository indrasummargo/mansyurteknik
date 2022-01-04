<!-- cara connect ke API Postman dengan curl
kondisi masih erorr karena postman belum mendapatkan hasil dari method request Get -->
<?php
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, 'GET https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCkXmLjEr95LVtGuIm3l2dPg&key=AIzaSyAaNgy4qc1KaeUo90xp41F9uz69w_kSE24');
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// $result = curl_exec($curl);
// curl_close();

// $result = json_decode($result, true);
// var_dump($result);

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google maps -->
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">


  <title>My Portfolio</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#home"><img src="img/dralogos.jpg" width="80" height="40"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron" id="home">
    <div class="container ">
      <div class="text-center">
        <img src="img/boss2.jpg" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Achmad Mansyur</h1>
        <h3 class="lead">Kontraktor | Las Listrik | Argon Stainliss</h3>
      </div>
    </div>
  </div>

  <section class="about" id="about">
    <div class="container">
      <div class="row mb-2">
        <div class="col text-center">
          <h2>About</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5" id="deskripsi">
          <p>
            <strong>
              Pandai besi merupakan sebuah seni untuk membentuk visualisasi serta estetika yang memadukan disain interior dan exterior tahan abrasi dalam tenggang waktu yang panjang terhadap ke ekstriman cuaca yang silih berganti.

          </p>
        </div>
        <div class="col-md-5" id="deskripsi">
          <p>
            Kami Cahaya Baru Teknik Berkomitmen besar untuk kepuasan pelanggan dalam mewujudkan Jasa Instalasi, Servis dan Pembuatan pandai besi Meliputi Kanopi, Pagar, Tralis, Relling Tangga, tangga putar, folding gate dengan bahan baku Besi atau Stainliss.
            </strong>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- content-->
  <section class="social bg-light" id="social">
    <div class="row pt-6 mb-4">
      <div class="col text-center">
        <h2>Work Shop</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="row mt-3 mb-3">
          <div class="col">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="img/vidio1.mp4" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-5">
        <div class="row">
          <div class="col mt-3 pb-3">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="img/workshop.mp4" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="row mt-3 mb-3">
          <div class="col">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="img/vidio3.mp4" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-5">
        <div class="row">
          <div class="col mt-3 pb-3">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="img/vidio4.mp4" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Portfolio -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Portfolio</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/gerbang.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"></p>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/gerbang2.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"></p>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/gerbang4.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/pagarumah.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/pagerdorong.png" alt="Card image cap" height="160">
            <div class="card-body">
              <p class="card-text"></p>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/tempa.png" alt="Card image cap" height="159">
            <div class="card-body">
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Contact -->
  <section class="contact  bg-light" id="contact">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="cardAni bg-dark text-white mb-4 text-center">
            <div class="card-body">
              <h5 class="card-title">Hubungi Kami</h5>
              <p class="card-text">
                <a href="https://api.whatsapp.com/send?phone=6281288731177&text=Terimakasih%20Anda%20Telah%20Menghubungi%20Kami%2C%20Bengkel%20Las%20Listrik%20dan%20Stainliss...Ada%20yang%20bisa%20kami%20bantu%3F" target="_blank">

                  <button type="submit" class="btn btn-success"><i class="fa fa-whatsapp" style="font-size:60px;color:white"></i></button>
                </a>
              </p>
            </div>
          </div>

          <ul class="list-group mb-4">
            <li class="list-group-item">
              <h3>Location</h3>
            </li>
            <li class="list-group-item">My WorkShop</li>
            <li class="list-group-item">Jl. Kp Jembatan No.17 Penggilingan Cakung</li>
            <li class="list-group-item">Jakarta Timur, Indonesia</li>
          </ul>
        </div>

        <div class="col-lg-4">
          <div id="ml_855c1b0f">
            <div style="padding:0;margin:0;" id="ml_855c1b0f_i" v='1.1' a='{"t":"v","lang":"id","ids":["2371"],"a_dt_bg":"#7CB342","a_dt_c":"#000000","a_wn_bg":"#558B2F","a_wn_c":"#FFFFFF","a_wi_bg":"#7CB342","a_wi_c":"#000000","p_cr":4,"p_w":218,"a_fn":"Arial"}'></div>
            <div id="ml_855c1b0f_c" style="padding:0;margin:0;padding:7px 5px;"><img src="https://cuacalab.id/assets/img/logo_z_b.svg" style="width:15px;opacity:0.7;margin-right:5px;position:relative;top:1px;display:inline-block;"><a href="https://cuacalab.id/cuaca_daerah_khusus_ibukota_jakarta/hari_ini/" style="color:grey;font-size:12px;text-decoration:none;" target="_blank" id="ml_855c1b0f_u">Cuaca Hari ini</a></div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  <!-- footer -->
  <footer class="bg-dark text-white mt-5">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <p>Copyright Dra|Sys. &copy; 2021.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script async src="https://app.cuacalab.id/js/?id=ml_855c1b0f"></script>


</body>

</html>