<?php

namespace App\Models;

use CodeIgniter\Model;

class LocationModel extends Model {

    protected $table = 'location';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id','prix_total','utilisateur_id', 'produit_id'];

    protected $useTimestamps = true;
    protected $createdField = 'date_debut';
    protected $updatedField = 'date_retour_prevue';
    protected $deletedField = 'date_retour_effective';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}