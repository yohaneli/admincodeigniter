<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Controllers\BaseController;
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
			
                foreach($users as $user) {

                    if(password_verify($this->request->getVar('password'),$user['userPassword'])) {

                        var_dump($users);

                        echo "Je suis dans le password verify";

                        $this->session->set(["id"=>[$user["userId"]]]);                      
            
                        //dd($this->session->get("id"));

                        return redirect()->to('/admin/accueil');

                    }

                }       
        
                $this->afficheFormLogin("Se connecter sur ce site",false,$this->validator);
            
        }  
            
               
         
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
