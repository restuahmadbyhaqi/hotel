<?php namespace App\Models;

use CodeIgniter\Model;

class Dashboard_model extends Model
{
    protected $table = 'users';

    public function getCountPelanggan()
    {
        return $this->db->table("kontrakan_pelanggan")->countAll();
    }
}