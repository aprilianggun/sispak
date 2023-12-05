<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Diagnosis extends Controller
{
    public function index()
    {
        return view('diagnosis/diagnosis_form');
    }

    public function diagnose()
    {
        $gejala = $this->request->getPost();

        // Terapkan algoritma forward chaining berdasarkan aturan
        if (isset($gejala['G1']) && isset($gejala['G3']) && isset($gejala['G5']) && isset($gejala['G6']) && isset($gejala['G7']) && isset($gejala['G8'])) {
            $penyakit = 'P1' ; 
        } elseif (isset($gejala['G2']) && isset($gejala['G8']) && isset($gejala['G18']) && isset($gejala['G22']) && isset($gejala['G23'])) {
            $penyakit = 'P2' ; 
        } elseif (isset($gejala['G2']) && isset($gejala['G3']) && isset($gejala['G8']) && isset($gejala['G17']) && isset($gejala['G18']) && isset($gejala['G21'])) {
            $penyakit = 'P3'; // Tinea Pedis
        } else {
            $penyakit = 'Tidak diketahui'; // Tidak ada penyakit yang cocok
        }

        // Load view hasil diagnosis
        $viewPath = APPPATH . 'Views/diagnosis_result.php';
        if (file_exists($viewPath)) {
            include($viewPath);
        } else {
            echo "File view tidak ditemukan";
        }
    }
}
