<?php

namespace App\Controllers;
use \App\Models\M_mahasiswa;

class C_mahasiswa extends BaseController
{
    protected $mahasiswaModel;
    public function __construct()
    {
        $this->mahasiswaModel = new M_mahasiswa();
    }

    public function display()
    {
        if(! session()->get('logged_in')){
            // maka redirct ke halaman login
            return redirect()->to('/login'); 
        }else{
             $data['content_view'] = "V_mahasiswaDisplay.php";
        $data['mahasiswa'] = $this->mahasiswaModel->getMahasiswa();
        return view('V_template', $data);
        }
       
    }

    public function inputDisplay()
    {
        if(! session()->get('logged_in')){
            // maka redirct ke halaman login
            return redirect()->to('/login'); 
        }else{
        $data['content_view'] = "V_mahasiswaInput.php";
        return view('V_template', $data);}
    }

    public function input()
    {
        
        $data = [
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'umur' => $this->request->getVar('umur'),
            'tinggi' => $this->request->getVar('tinggi'),
            'foto' => $this->request->getvar('foto'),
        ];

        $result = $this->mahasiswaModel->insertMahasiswa($data);

        if ($result) {
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
            return redirect()->route('Mahasiswa');
        }
    }

    public function detail($nim)
    {
        if(! session()->get('logged_in')){
            // maka redirct ke halaman login
            return redirect()->to('/login'); 
        }else{
        $data['mahasiswa'] = $this->mahasiswaModel->showMahasiswa($nim);
        $data['content_view'] = "V_mahasiswaDetail.php";
        return view('V_template', $data);
        }
    }

    public function delete($nim)
    {
        $data['mahasiswa'] = $this->mahasiswaModel->deleteMahasiswa($nim);
        return redirect()->route('Mahasiswa');
    }

    public function updateDisplay($nim)
    {
        if(! session()->get('logged_in')){
            // maka redirct ke halaman login
            return redirect()->to('/login'); 
        }else{
        $data['mahasiswa'] = $this->mahasiswaModel->showMahasiswa($nim);
        $data['content_view'] = "V_mahasiswaUpdate.php";
        return view('V_template', $data);
        }
    }

    public function update($nim)
    {
        $data = [
            'nim'  => $nim,
            'nama' => $this->request->getVar('nama'),
            'umur' => $this->request->getVar('umur'),
            'tinggi' => $this->request->getVar('tinggi'),
            'foto' => $this->request->getvar('foto'),
        ];

        $result = $this->mahasiswaModel->updateMahasiswa($data);

        if ($result) {
            session()->setFlashdata('pesan', 'Data berhasil diupdate');
            return redirect()->route('Mahasiswa');
        }
    }

    public function search()
    {
        if(! session()->get('logged_in')){
            // maka redirct ke halaman login
            return redirect()->to('/login'); 
        }else{
        $data['content_view'] = "V_mahasiswaDisplay.php";
        $data['name']= $this->request->getVar('nama');
        $data['mahasiswa'] = $this->mahasiswaModel->searchMahasiswa($data);
        return view('V_template', $data);
        }
    }

    public function dashboard()
    {
        if(! session()->get('logged_in')){
            // maka redirct ke halaman login
            return redirect()->to('/login'); 
        }else{
             $data['content_view'] = "V_dashboard.php";
        return view('V_template', $data);
        }
       
    }

    public function grafik()
    {
        if(! session()->get('logged_in')){
            // maka redirct ke halaman login
            return redirect()->to('/login'); 
        }else{
            $data['jumlah_tinggi_badan'] = $this->mahasiswaModel->getJumlahTinggiBadan() ;
             $data['content_view'] = "V_grafik.php";
        return view('V_template', $data);
        } 
    }
}
