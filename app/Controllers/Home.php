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
	
		public function index($type=null,$elementSearched=null) {
		
			$maRecherche = $this->filmModel->orderBy('id','DESC')->paginate(9);

				if (!empty($type) && !empty($elementSearched)) {

						$maRecherche = $this->filmModel->where('id_realisateur',$elementSearched)->orderBy('id','DESC')->paginate(9);

						//$maRecherche = $this->filmModel->where('genre',$elementSearched)->orderBy('id','DESC')->paginate(9);

				}

			$listFilm = $this->filmModel->findAll();
			

			//dd($listFilm);

			$data = [
				'page_title' => 'Accueil Admin' ,
				'aff_menu'  => true ,
				'tabFilm' => $maRecherche,
				'pager' => $this->filmModel->pager,
                'artistesModel' => $this->artistesModel,
                
			];
		
			echo view('common/Headersite',$data);
			echo view('site/index',$data);
			echo view('common/Footersite');
	
		}

}
