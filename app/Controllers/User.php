<?php

namespace App\Controllers;

use App\Database\Migrations\KontrakanPelanggan;

use App\Models\KontrakanPelangganModel; 

use App\Models\Dashboard_model; 

class User extends BaseController
{
    protected $Dashboardmodel;

    public function __construct()
    {
        $this->Dashboardmodel = new Dashboard_model();
    }
    public function index()
    {
        return view('auth/login');
    }


    public function dashboard()
    {
        $data['total_pelanggan'] = $this->Dashboardmodel->getCountPelanggan();
        return view('dashboard', $data);
    }

    public function pelanggan()
    {
        $model = new KontrakanPelangganModel();
        $data['kontrakan_pelanggan'] = $model->getPelanggan();
        echo view('pelanggan/pelanggan_list', $data);
    }

    public function pelanggan_create()
    {
        return view('pelanggan/pelanggan_create');
    }
    
    public function pelanggan_create_action() 
    {
        $validation = \Config\Services::validation();
        $request = service('request');
        
        $data = array(
            'KontrakanPelanggan_nama' => $request->getPost('KontrakanPelanggan_nama'),
            'KontrakanPelanggan_alamat' => $request->getPost('KontrakanPelanggan_alamat'),
            'KontrakanPelanggan_tgl' => $request->getPost('KontrakanPelanggan_tgl')
        );
        
        if ($validation->run($data, 'kontrakan_pelanggan') == FALSE) {
            session()->setFlashdata('inputs', $request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user/pelanggan_create'));
        } else {
            $model = new KontrakanPelangganModel();
            $save = $model->insertPelanggan($data);
            if ($save) {
                session()->setFlashdata('success', 'Created Pelanggan successfully');
                return redirect()->to(base_url('user/pelanggan'));
            }
        }
    }
    
    public function pelanggan_edit($id)
    {
        $model = new KontrakanPelangganModel();
        $data['kontrakan_pelanggan'] = $model->getPelanggan($id)->getRowArray();
        echo view('pelanggan/pelanggan_edit', $data);
    }

    public function pelanggan_edit_action()
    {
        $id = $this->request->getPost('KontrakanPelanggan_id');
        $validation = \Config\Services::validation();
        $request = service('request');
        
        $data = array(
            'KontrakanPelanggan_nama' => $request->getPost('KontrakanPelanggan_nama'),
            'KontrakanPelanggan_alamat' => $request->getPost('KontrakanPelanggan_alamat'),
            'KontrakanPelanggan_tgl' => $request->getPost('KontrakanPelanggan_tgl'),
        );
        
        if ($validation->run($data, 'kontrakan_pelanggan') == FALSE) {
            session()->setFlashdata('inputs', $request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user/pelanggan_edit/'.$id));
        } else {
            $model = new KontrakanPelangganModel();
            $ubah = $model->updatePelanggan($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated Pelanggan successfully');
                return redirect()->to(base_url('user/pelanggan'));
            }
        }
    }

    public function delete($id) {
        $model = new KontrakanPelangganModel();
        $hapus = $model->deletePelanggan($id);
        if($hapus)
        {
        session()->setFlashdata('warning', 'Deleted Pelanggan successfully');
        return redirect()->to(base_url('user/pelanggan'));
        }
    }
}

?>
