<?php

namespace App\Models;

use CodeIgniter\Model;

class KontrakanPelangganModel extends Model
{
    protected $table            = 'kontrakan_pelanggan';
    protected $primaryKey       = 'KontrakanPelanggan_id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['KontrakanPelanggan_nama', 'KontrakanPelanggan_alamat', 'KontrakanPelanggan_tgl'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getPelanggan($id = false)
    {
        if($id === false){
        return $this->findAll();
        } else {
        return $this->getWhere(['KontrakanPelanggan_id' => $id]);
        }
    }  
    public function insertPelanggan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updatePelanggan($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['KontrakanPelanggan_id' => $id]);
    }
    public function deletePelanggan($id)
    {
        return $this->db->table($this->table)->delete(['KontrakanPelanggan_id' => $id]);
    }
}



?>