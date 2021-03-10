<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\ArtisteModel;
use App\Models\FilmModel;
use App\Models\GenreModel;
use App\Models\RoleModel;
use App\Models\PaysModel;


class Home extends BaseController
{
	public $artistesModel = null;

    public $filmModel = null;

	public $genresModel = null ;

	public $paysModel = null ;


	
		public function __construct() {

        	$this->artistesModel = new ArtisteModel();

        	$this->filmModel = new FilmModel();

			$this->genresModel = new GenreModel();

			$this->paysModel = new PaysModel();

		}
	
		public function index($type=null,$elementSearched=null) {
		
			$maRecherche = $this->filmModel->orderBy('id','DESC')->paginate(9);

				if (!empty($type) && !empty($elementSearched)) {

					switch ($type) {

						case "realisateur" :

							$maRecherche = $this->filmModel->where('id_realisateur',$elementSearched)->orderBy('id','DESC')->paginate(9);

							break ;

						case "genre" : 

							//utiliser fonction lower ou upper cas pour convertir en majuscule la chaine de caractères reçue

							$maRecherche = $this->filmModel->where('genre',$elementSearched)->paginate(9);

							break ;

						case "pays" :

							$maRecherche = $this->filmModel->where('code_pays',$elementSearched)->paginate(9);

							break ;

						case "recherche":

							$maRecherche = $this->filmModel->like('titre',$elementSearched,'both',null,true)->paginate(9);
							$maRecherche = $this->filmModel->orLike('resume',$elementSearched,'both',null,true)->paginate(9);
							$maRecherche = $this->filmModel->orLike('genre',$elementSearched,'both',null,true)->paginate(9);
							$maRecherche = $this->filmModel->orLike('code_pays',$elementSearched,'both',null,true)->paginate(9);


							
							break ;

					}
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
