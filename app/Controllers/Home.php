<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\ArtisteModel;
use App\Models\FilmModel;
use App\Models\GenreModel;
use App\Models\RoleModel;


class Home extends BaseController
{
	public $artistesModel = null;

    public $filmModel = null;
	
		public function __construct() {

        	$this->artistesModel = new ArtisteModel();

        	$this->filmModel = new FilmModel();

		}
	
		public function index() {
		
			$listFilm = $this->filmModel->findAll();
			$listFilm = $this->filmModel->orderBy('id','DESC');

			//dd($listFilm);

			$data = [
				'page_title' => 'Accueil Admin' ,
				'aff_menu'  => true ,
				'tabFilm' => $this->filmModel->paginate(9),
				'pager' => $this->filmModel->pager,
                'artistesModel' => $this->artistesModel,
                
			];
		
			echo view('common/Headersite',$data);
			echo view('site/index',$data);
			echo view('common/Footersite');
	
		}

}
