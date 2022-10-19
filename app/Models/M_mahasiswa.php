<?php

namespace App\Models;

use CodeIgniter\Model;

class m_mahasiswa extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'nim';
    

    function getMahasiswa()
    {
        $db = \Config\Database::connect();
        $data = $db->query('select * from mahasiswa')->getResultArray();
        return $data;
    }

    function showMahasiswa($NIM)
    {
        $db = \Config\Database::connect();
        $data = $db->query("select * from mahasiswa where nim = $NIM")->getResultArray();
        return $data;
    }

    function insertMahasiswa($data)
    {
        $db = \Config\Database::connect();
        $nim = $data['nim'];
        $nama = $data['nama'];
        $umur = $data['umur'];
        $tinggi = $data['tinggi'];
        $filename = $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$filename);
		$file_gambar = $filename;
        $result = $db->query("insert into mahasiswa (nim, nama, umur,tinggi, foto) values('$nim', '$nama', '$umur', '$tinggi' , '$file_gambar')");
        return $result;
    }

    function deleteMahasiswa($NIM)
    {
        $db = \Config\Database::connect();
        $data = $db->query("delete from mahasiswa where nim = $NIM");
        return $data;
    }

    function updateMahasiswa($data)
    {
        $db = \Config\Database::connect();
        $nim = $data['nim'];
        $nama = $data['nama'];
        $umur = $data['umur'];
        $tinggi  = $data['tinggi'];

        $result = $db->query("update mahasiswa set nama='$nama', umur='$umur', tinggi='$tinggi' where nim = '$nim' ");

        return $result;
    }

    function searchMahasiswa($data){
        $name = $data['name'];
        $db = \Config\Database::connect();
        $data = $db->query("select * from mahasiswa where nama like '%$name%'")->getResultArray();
        return $data;
    }

    function getJumlahTinggiBadan()
    {
        $db = \Config\Database::connect();

        $tb = $db->query("SELECT DISTINCT tinggi FROM mahasiswa")->getResultArray();
        $tinggiBadan = array($tb[0]['tinggi']);
        for ($i = 1; $i < count($tb); $i++) {
            array_push($tinggiBadan, $tb[$i]['tinggi']);
        }

        for ($i = 0; $i < count($tinggiBadan); $i++) {
            $tb = $tinggiBadan[$i];
            $data[$tb] = $db->query("SELECT tinggi FROM mahasiswa WHERE tinggi = $tb")->getNumRows();
        }
        return $data;
    }

}
?>
