<?php include "config.php";
include "config.php";
$del=mysqli_query($con,"DELETE FROM mahasiswa WHERE id_mhs = '".$_GET['id_mhs']."'") or die(mysqli_error($con));
if ($del) {
    // code...
    echo "<script>alert('Data telah berhasil di hapus !');location.href='datamhs.php';</script>";
} else {
    echo "<script>alert('Maaf ! Terjadi kegagalan saat menghapus data !');location.href='editmhs.php';</script>";
}
?>