<?php namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\Prodi_model;
    use App\Models\Fakultas_model;
    class Prodi extends Controller
    {
        protected $helpers = [];
        protected $FakultasModel;
        protected $ProdiModel;
        public function __construct()
        {
        helper(['form']);
            $this->Fakultas_model = new Fakultas_model();
            $this->Prodi_model = new Prodi_model();
        }
        public function index()
        {
            $paginate = 2;
            $data['dataprodi'] = $this->Prodi_model->getProdi();
            echo view('Prodi/index', $data);
    }
}