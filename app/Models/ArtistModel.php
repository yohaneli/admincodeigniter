<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ArtistModel extends Model{
    protected $table = 'artiste';
    protected $allowedFields = ['nom','prenom','annee_naisssance'];
}