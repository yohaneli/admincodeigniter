<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class FilmModel extends Model{
    protected $table = 'film';
    protected $allowedFields = ['titre','annee','id_realisateur','genre','genre','resume','code_pays'];
}