<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class PelangganController extends ResourceController
{
    protected $modelName = 'App\Models\KontrakanPelangganModel';
    protected $format = 'json';
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data = [
            'message' => 'success get data',
            'data_pelanggan' => $this->model->findAll(),
        ];

        return $this->respond($data, 200);
    }


    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $data = [
            'pelanggan_byid' => $this->model->find($id),
        ];

        if($data['pelanggan_byid'] == null) {
            return $this->failNotFound('Pelanggan does not exist');
        };

        return $this->respond($data, 200);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    
    public function create()
    {
        $rules = $this->validate([
            "KontrakanPelanggan_nama" => 'required',
            "KontrakanPelanggan_alamat" => 'required',
            "KontrakanPelanggan_tgl" => 'required',
        ]);

        if(!$rules) {
            $response = [
                'messages' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'KontrakanPelanggan_nama' => esc($this->request->getVar('KontrakanPelanggan_nama')),
            'KontrakanPelanggan_alamat' => esc($this->request->getVar('KontrakanPelanggan_alamat')),
            'KontrakanPelanggan_tgl' => esc($this->request->getVar('KontrakanPelanggan_tgl')),
        ]);

        $response = [
            'message' => 'Data has been succesfully created'
        ];

        return $this->respondCreated($response);
    }


    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $rules = $this->validate([
            "KontrakanPelanggan_nama" => 'required',
            "KontrakanPelanggan_alamat" => 'required',
            "KontrakanPelanggan_tgl" => 'required',
        ]);

        if(!$rules) {
            $response = [
                'messages' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id,[
            'KontrakanPelanggan_nama' => esc($this->request->getVar('KontrakanPelanggan_nama')),
            'KontrakanPelanggan_alamat' => esc($this->request->getVar('KontrakanPelanggan_alamat')),
            'KontrakanPelanggan_tgl' => esc($this->request->getVar('KontrakanPelanggan_tgl')),
        ]);

        $response = [
            'message' => 'Data has been succesfully updated.'
        ];

        return $this->respond($response, 200);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->delete($id);

        $response = [
            'message' => 'Data has been succesfully deleted.'
        ];

        return $this->respondDeleted($response);
    }
}
