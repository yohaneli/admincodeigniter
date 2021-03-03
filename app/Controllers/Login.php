<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
//use App\Controllers\Register;

class Login extends BaseController
{
	public function index()
	{	

		/** exemple de passage de variable a une vue */ 

        $this->afficheFormLogin("Se connecter sur ce site",false);

		/*$data = [
			'page_title' => 'Connexion à wwww.site.com' ,
			'aff_menu'  => false
		];

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Site/Login');
		echo view('common/FooterSite');*/
	}

	public function connect() {

		//include helper form
        helper('form');
        //set rules validation form
        $rules = [
            'email'         => 'required|min_length[6]|max_length[50]|valid_email',
            'password'      => 'required|min_length[6]|max_length[200]',
        ];
         
        if($this->validate($rules)){

            $UserModel = new UserModel();
            
            $users = $UserModel->where('userEmail', $this->request->getVar('email'))
                   ->findAll();
			
			dd($users);

        
			
            //return redirect()->to('/login');
        } /* else{
            
            $data = [
                'page_title' => 'Register à wwww.site.com' ,
                'aff_menu'  => false,
                'validation' => $this->validator
            ];
    
            echo view('common/HeaderAdmin' , 	$data);
            echo view('register', $data);
            echo view('common/FooterSite');
        }*/
         
    }

	private function afficheFormLogin($pageTitle="",$afficheMenu=false,$validation=null) {

        $data = [
            'page_title' => $pageTitle ,
            'aff_menu'  => $afficheMenu,
            'validation' => $validation
        ];

        echo view('common/HeaderAdmin' , 	$data);
        echo view('Site/Login', $data);
        echo view('common/FooterSite');

    }

}
