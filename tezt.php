<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
    
        <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <script type="text/javascript" src="tampil.js"></script>



            <!-- buat file data.php -->
            <?php

    // melakukan koneksi 
    include '../../koneksi/koneksi.php';
    
    //menghitung jumlah pesan dari tabel pesan
    $query= mysqli_query($koneksi, "Select Count(id_pendapatan) as jumlah From pendapatan_desa");
    
    //menampilkan data
    $hasil = mysqli_fetch_array($query);
    
    //membuat data json
    echo json_encode(array('jumlah' => $hasil['jumlah']));
    
    ?>

    <!-- buat file data_pesan.php -->


    
    <?php

    // melakukan koneksi 
    include '../../koneksi/koneksi.php';
    

    //mengambil data 5 pesan terbaru 
    $sql = mysqli_query($koneksi, "SELECT * FROM pendapatan_desa ORDER BY id_pendapatan DESC limit 5");
    $result = array();
    
    while ($row = mysqli_fetch_assoc($sql)) {
        $data[] = $row;
    }

    echo json_encode(array("result" => $data));
?>

<!-- buat js tampil.js -->
$(document).ready(function() {
    selesai();
});


function selesai() {
    setTimeout(function() {
        jumlah();
        selesai();
        pesan();
    }, 200);
}


function jumlah() {
    $.getJSON("data.php", function(datas) {
        $("#notif").html(datas.jumlah);
    });
}



function pesan() {
    $.getJSON("data_pesan.php", function(data) {
        $("#pesan").empty();
        var no = 1;
        $.each(data.result, function() {
            $("#pesan").append(`<a id="pesan" class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
            </svg>&nbsp;` + this['pesan'].substr(0, 20) + `...</a>`);
        });
    });
}


<!-- isi di index -->

                 
<button type="button" class="btn btn-primary" data-toggle="dropdown">
                    Notifications <span class="badge badge-light" id="notif"></span>
                </button>
                <div id="pesan" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    