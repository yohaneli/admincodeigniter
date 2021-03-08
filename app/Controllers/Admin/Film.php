<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\ArtisteModel;
use App\Models\FilmModel;

class Film extends BaseController
{

    public $artistesModel = null;

    public $filmModel = null;
	
	public function __construct() {

        $this->artistesModel = new ArtisteModel();

        $this->filmModel = new FilmModel();

	}

	public function index(){

			//$artistesModel = new ArtisteModel();

			$listFilm = $this->filmModel->findAll();
			$listFilm = $this->filmModel->orderBy('titre','ASC');									
			//dd($listArtistes);

			/** exemple de passage de variable a une vue */ 
			$data = [
				'page_title' => 'Accueil Admin' ,
				'aff_menu'  => true ,
				'tabFilm' => $this->filmModel->paginate(10),
				'pager' => $this->filmModel->pager,
                'artistesModel' => $this->artistesModel,
                
			];
	

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Film/Liste', $data);
		echo view('common/FooterSite');

		

	}

	public function delete($id=0,$page=0) {


	}

	public function edit($id=null) {

		$data = [
			'page_title' => 'Edit role' ,
			'aff_menu'  => true
		];

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Film/Edit');
		echo view('common/FooterSite');

	}

}
