if(!empty($_POST['sent'])){
$data = $_POST['sent'];
$fname = mktime() . ".txt";//generates random name

$file = fopen("upload/" .$fname, 'w');//creates new file
fwrite($file, $data);
fclose($file);
}
