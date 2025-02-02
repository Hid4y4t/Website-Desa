<?php
  //link akses data api
  $req="https://news.google.com/rss/search?q=desa&pendidikan&hl=id&gl=ID&ceid=ID:id&v2prv=1";

  //ambil isi konten
  $temp=file_get_contents($req);

  //menjadikan format xml string
  $xml=simplexml_load_string($temp);

?>