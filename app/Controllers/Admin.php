<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GejalaModel;

class Admin extends BaseController
{
    public function index() {
        $gejalaModel = new GejalaModel();
        $data['gejala'] = $gejalaModel->findAll();

        return view('admin/index', $data);
    }

    public function create_gejala()
    {
        return view('admin/create_gejala');
    }

    public function tambahgejala()
    {
        $gejalaModel = new GejalaModel();
        $data = [
            'G1' => $this->request->getPost('G1'),
            'G2' => $this->request->getPost('G2'),
            'G3' => $this->request->getPost('G3'),
            'G4' => $this->request->getPost('G4'),
            'G5' => $this->request->getPost('G5'),
            'G6' => $this->request->getPost('G6'),
            'G7' => $this->request->getPost('G7'),
            'G8' => $this->request->getPost('G8'),
            'G9' => $this->request->getPost('G9'),
            'G10' => $this->request->getPost('G10'),
            'G11' => $this->request->getPost('G11'),
            'G12' => $this->request->getPost('G12'),
            'G13' => $this->request->getPost('G13'),
            'G14' => $this->request->getPost('G14'),
            'G15' => $this->request->getPost('G15'),
            'G16' => $this->request->getPost('G16'),
            'G17' => $this->request->getPost('G17'),
            'G18' => $this->request->getPost('G18'),
            'G19' => $this->request->getPost('G19'),
            'G20' => $this->request->getPost('G20'),
            'G21' => $this->request->getPost('G21'),
            'G22' => $this->request->getPost('G22'),
            'G23' => $this->request->getPost('G23'),
        ];

        $gejalaModel->insert($data);

        return redirect()->to('/admin/index');
    }

    public function penyakit() {
        return view('admin/penyakit');
    }
}
