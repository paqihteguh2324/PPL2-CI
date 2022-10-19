<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class C_home extends Controller
{
    public function display()
    {
        if(! session()->get('logged_in')){
            // maka redirct ke halaman login
            return redirect()->to('/login'); 
        }else{
        $data['content_view'] = "V_home.php";
        return view('V_template',$data );
        }
    }
}