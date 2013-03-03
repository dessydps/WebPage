<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formullir CV</title>
</head>

<body>

<?php
$Nama=$_POST['Nama'];
$TTL=$_POST['TTl'];
$Alamat=$_POST['Alamat'];
$Kelamin=$_POST['Kelamin'];
$Agama=$_POST['Agama'];
$Negara=$_POST['Negara'];
$hobi=$_POST['hobi'];
$Pendidikan=$_POST['Pendidikan'];
$Organisasi=$_POST['Organisasi'];

echo 'Nama : ';
echo $Nama;
echo 'TTL : ';
echo $TTL;
echo 'Alamat : ';
echo $Alamat;
echo 'Jenis Kelamin : ';
echo $Kelamin;
echo 'Agama : ';
echo $Agama;
echo 'Kewarganegaraan : ';
echo $Negara;
echo 'Hobi :';
echo $hobi;
echo 'Pendidikan: ';
echo $Pendidikan;
echo 'Organisasi : ';
echo $Organisasi;

?>

</body>
</html>
