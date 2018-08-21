<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


?>



<?php  $ftp_server = "ftp.cluster003.hosting.ovh.net";
$ftp_user_name = "galeriaoou-puraenv";
$ftp_user_pass = "20Pura0ca17";
$remote_dir = "/upload";

if ( isset( $_POST['torneo'] ) ) {
  $torneo = $_POST['torneo'];
echo '<h3>Form POST Method</h3>'; echo 'TORNEO ES ' . $torneo; exit; }


// set up basic connection
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = @ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

//default values
$file_url = "";

if($login_result) {
//set passive mode enabled
ftp_pasv($conn_id, true);

//check if directory exists and if not then create it
if(!@ftp_chdir($conn_id, $remote_dir)) {
//create diectory
ftp_mkdir($conn_id, $remote_dir);
//change directory
ftp_chdir($conn_id, $remote_dir);
}

$file = $_FILES["file"]["tmp_name"];
$remote_file = $_FILES["file"]["name"];

$ret = ftp_nb_put($conn_id, $remote_file, $file, FTP_BINARY, FTP_AUTORESUME);
while(FTP_MOREDATA == $ret) {
$ret = ftp_nb_continue($conn_id);
}

if($ret == FTP_FINISHED) {
echo "File '" . $remote_file . "' uploaded successfully.";
} else {
echo "Failed uploading file '" . $remote_file . "'.";
}
} else {
echo "Cannot connect to FTP server at " . $ftp_server;
}

?>
