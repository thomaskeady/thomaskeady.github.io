if(!empty($_POST['uip'])){
  $data = $_POST['uip'];

  $file = fopen("scraps/boring.nothing", 'a'); // append to file
  fwrite($file, $data);
  fwrite($file, "\n");
  fclose($file);
}
