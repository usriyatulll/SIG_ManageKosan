<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLokasi extends Model
{
    public function insertData($data)
    {
        $this->db->table('tbl_lokasi')->insert($data);
    }

    // fungsi mengambil seluruh data
    public function getAllData()
    {
        return  $this->db->table('tbl_lokasi')
            ->get()->getResultArray();
    }

    // mengambil data berdasarkan id
    public function getDataById($id_lokasi)
    {
        return  $this->db->table('tbl_lokasi')
        ->where('id_lokasi',$id_lokasi)    
        ->get()->getRowArray();
    }
    // update
    public function updateData($data)
    {
        $this->db->table('tbl_lokasi')
        ->where('id_lokasi',$data['id_lokasi'])
        ->update($data);
    }
    // delete
    public function deleteData($data)
    {
        $this->db->table('tbl_lokasi')
        ->where('id_lokasi',$data['id_lokasi'])
        ->delete($data);
    }
}
