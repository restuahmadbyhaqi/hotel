<?php namespace App\Models;
use CodeIgniter\Model;
class Fakultas_model extends Model
{
protected $table = 'fakultas';

public function getFakultas($id = false)
    {
        if($id === false){
        return $this->findAll();
        } else {
        return $this->getWhere(['fak_id' => $id]);
        }
    }  
    public function insertFakultas($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateFakultas($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['fak_id' => $id]);
    }
    public function deleteFakultas($id)
    {
        return $this->db->table($this->table)->delete(['fak_id' => $id]);
    }
}
?>