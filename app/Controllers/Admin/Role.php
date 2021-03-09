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

    public $filmModel = null;
	
	public function __construct() {

		$this->rolesModel = new RoleModel();

        $this->artistesModel = new ArtisteModel();

        $this->filmModel = new FilmModel();

	}

	public function index(){

			//$artistesModel = new ArtisteModel();

			$listRoles = $this->rolesModel->findAll();
			$listRoles = $this->rolesModel->orderBy('nom_role','ASC');									
			//dd($listArtistes);

			/** ****************************************************************************************************
			 * exemple de passage de variable a une vue *
			 * tableau avec les clés pour gérer le nom de l'onglet, la pagination et les éléments qui ne proviennent
			**************************************************************************************************** * */ 
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

	public function edit($idFilm = null , $idActeur = null) {

		
		$listRoles = $this->rolesModel->findAll();

		/*****************************************************************************
		Select * from Model
		******************************************************************************/
		
		$selectNomFilm = $this->filmModel->orderBy('titre','ASC')->findAll();

		/*****************************************************************************
		Select titre from Film order by ASC
		******************************************************************************/

		$selectNomActeur = $this->artistesModel->orderBy('nom','ASC')->findAll();

		/*****************************************************************************
		Select nom from Artiste order by ASC 
		******************************************************************************/
		
		$role = $this->rolesModel->where('id_film',$idFilm)->where('id_acteur',$idActeur)->first();

		/*****************************************************************************
		Select * from Model where ID film correspond et ID Acteur correspond
		******************************************************************************/		

					if(!empty($this->request->getVar('save'))) {
		
					//Controle les données saisies dans le formulaire en établissant les règles de saisie
					//exemple nom :  taille min : 3 caractères taille max : 20 caractères 
					
						$rules = [
							'nomFilm'        => 'required',
							'nomArtiste'     => 'required',
							'nomRole'      => 'required'
						];

					
						
							if($this->validate($rules)) {

								$tabValidated = [
									'id_film'     => $this->request->getVar('nomFilm'),
									'id_acteur'    => $this->request->getVar('nomArtiste'),
									'nom_role'    => $this->request->getVar('nomRole'),
								];
								
								

									if ($this->request->getVar('save') == 'update') {

										$this->rolesModel->where('id_film',$idFilm)->where('id_acteur',$idActeur)->set($tabValidated)->update();

									} else {

										$this->rolesModel->save($tabValidated);

										//return redirect()->to('/admin/role/');

									}

							}

		}

		$data = [
			'page_title' => 'Edit role' ,
			'aff_menu'  => true ,
			'tabRoles' => $this->rolesModel ,
			'films'  => $selectNomFilm ,
			'artistes'  => $selectNomActeur ,
			'roles'		=> $role
		];

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Role/Edit');
		echo view('common/FooterSite');

	}

}
