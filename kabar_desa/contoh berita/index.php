<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <h2 class="alert alert-info mt-4">
             BERITA SEPUTAR PENDIDIKAN
          </h2>
          
          <div class="row mt-5">
              <?php
                  include "data.php";
                  include "preview_image.php";
  
                  // melakukan looping, menggunakan $xml->channel->item
                  // karena isi berita ada di dalam objek item
                  // silahkan lihat kembali tampilan xml yang dibuat dengan mengakses google news
                  foreach($xml->channel->item as $data){
                      
              ?> 
              <div class="col-lg-3 mb-4">
                  <div class="card" style="border: none;">
  
                      <!-- menambahkan css ke card header
                      css ini digunakan untuk membuat background gambar dari artikel yang dibuat  -->
  
                      <div class="card-header" style="
                      background-size: cover;
                      background-position: center;
                      height: 170px;
                      border-radius: 15px;
                      background-image: url('<?php echo getSiteOG($data->link); ?>');">
  
                      </div>
                      <div class="card-body p-0 mt-3">
                          <p>
                              <!-- substr digunakan untuk menyingkat string agar tidak terlalu panjang -->
                              <?php echo substr($data->title, 0, 68)."..."; ?>
                          </p>
                          <a href="<?php echo $data->link; ?>" class="btn btn-sm btn-primary">Detail</a>
                      </div>
                  </div>
              </div>
              <?php
                  }
              ?>
          </div>
  
      </div>
  </body>
  </html>