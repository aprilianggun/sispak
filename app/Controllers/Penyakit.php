<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenyakitModel;

class Penyakit extends BaseController
{
    public function index()
    {
        $penyakitModel = new PenyakitModel();
        $data['penyakit'] = $penyakitModel->findAll();

        return view('penyakit/index', $data);
    }

    public function create()
    {
        return view('penyakit/create_penyakit');
    }

    public function store()
    {
        $penyakitModel = new PenyakitModel();
        $data = [
            'penyakit' => $this->request->getPost('penyakit'),
        ];

        $penyakitModel->insert($data);

        return redirect()->to('/penyakit');
    }
}
