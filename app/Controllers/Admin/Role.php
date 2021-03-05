<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\RoleModel;
use App\Models\ArtisteModel;
use App\Models\FilmModel;

class Role extends BaseController
{
	
	public $rolesModel = null;

    public $artistesModel = null;

    public $filmsModel = null;
	
	public function __construct() {

		$this->rolesModel = new RoleModel();

        $this->artistesModel = new ArtisteModel();

        $this->filmModel = new FilmModel();

	}

	public function index(){

			//$artistesModel = new ArtisteModel();

			$listArtistes = $this->rolesModel->findAll();
			$listArtistes = $this->rolesModel->orderBy('nom_role','ASC');									
			//dd($listArtistes);

			/** exemple de passage de variable a une vue */ 
			$data = [
				'page_title' => 'Accueil Admin' ,
				'aff_menu'  => true ,
				'tabRoles' => $this->rolesModel->paginate(10),
				'pager' => $this->rolesModel->pager,
                'artistesModel' => $this->artistesModel,
                'filmModel' => $this->filmModel
			];
	

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Role/Liste', $data);
		echo view('common/FooterSite');

		

	}

	public function delete($id=0,$page=0) {


	}

	public function edit($idFilm=null , $idActeur) {

		$data = [
			'page_title' => 'Edit role' ,
			'aff_menu'  => true
		];

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Role/Edit');
		echo view('common/FooterSite');

	}

}
