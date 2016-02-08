if(!empty($_POST['sent'])){
$data = $_POST['sent'];
$fname = mktime() . ".txt";//generates random name

$file = fopen("scraps/boring.nothing", 'a'); // append to file
fwrite($file, $data);
fwrite($file, "\n");
fclose($file);
}
