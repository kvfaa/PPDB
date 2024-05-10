<?php
include_once ("koneksi.php");
if ($_POST) {

    $id_jurusan = $_POST['id_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];
    $kd_jurusan = $_POST['kd_jurusan'];



    if (empty($id_jurusan)) {
        echo "<script>alert('id jurusan tidak boleh kosong');location.href='tambah_jurusan.php';</script>";
    } elseif (empty($nama_jurusan)) {
        echo "<script>alert('nama jurusan tidak boleh kosong');location.href='tambah_jurusan.php';</script>";
    } elseif (empty($kd_jurusan)) {
        echo "<script>alert('kd jurusan tidak boleh kosong');location.href='tambah_jurusan.php';</script>";
    } else {

        $insert = pg_query($conn, "insert into tambah_jurusan (id_jurusan, nama_jurusan, kd_jurusan) values ('" . $id_jurusan . "','" . $nama_jurusan . "','" . $kd_jurusan . "')");
        if ($insert) {
            echo "<script>alert('Sukses menambahkan jurusan');location.href='tambah_jurusan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan jurusan');location.href='tambah_jurusan.php';</script>";
        }




    }
}

?>