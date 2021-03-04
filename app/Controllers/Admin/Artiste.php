<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\ArtisteModel;

class Artiste extends BaseController
{
	
	public $artistesModel = null;
	
	public function __construct() {

		$this->artistesModel = new ArtisteModel();

	}

	public function index(){

			//$artistesModel = new ArtisteModel();

			$listArtistes = $this->artistesModel->findAll();

			//dd($listArtistes);

			/** exemple de passage de variable a une vue */ 
			$data = [
				'page_title' => 'Connnexion' ,
				'aff_menu'  => true ,
				'tabArtistes' => $listArtistes
			];
	

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Artiste/Liste', $data);
		echo view('common/FooterSite');

	}

	public function delete($id) {

		echo " Delete ".$id;

	}

	public function edit($id=null) {

		//echo " Edit ".$id;

		$artiste = $this->artistesModel->where('id',$id)->first();

		//Contrôle si la personne a bien posté le formulaire

		if(!empty($this->request->getVar('save'))) {
 
				//Controle les données saisies dans le formulaire en établissant les règles de saisie
				//exemple nom :  taille min : 3 caractères taille max : 20 caractères 
				
				$rules = [
					'nom'        => 'required|min_length[3]|max_length[20]',
					'prenom'     => 'required|min_length[3]|max_length[20]',
					'annee'      => 'required'
				];
				 
					if($this->validate($rules)) {

						$tabValidated = [
							'nom'     => $this->request->getVar('nom'),
							'prenom'    => $this->request->getVar('prenom'),
							'annee_naissance'    => $this->request->getVar('annee'),
						];
						
							if ($this->request->getVar('save') == 'update') {

								$this->artistesModel->where('id',$id)->set($tabValidated)->update();

							} else {

								$this->artistesModel->save($tabValidated);

								return redirect()->to('/admin/artiste/');

							}

					}

		}	

		//d($artiste);

		$data = [
			'page_title' => 'Connnexion' ,
			'aff_menu'  => true ,
			'artiste'  => $artiste
		];

		


	echo view('common/HeaderAdmin' , 	$data);
	echo view('Admin/Artiste/Edit', $data);
	echo view('common/FooterSite');


	}

}
