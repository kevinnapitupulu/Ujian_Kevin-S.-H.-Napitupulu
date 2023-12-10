<?php

namespace App\Controllers;

use App\Models\UjianModel;

class Ujian extends BaseController
{
    public function index() {
        $ujian_model = new UjianModel();
        $all_data_ujian = $ujian_model->findall();
        return view('ujian', ['all_data_ujian' => $all_data_ujian]);
    }

    public function add_data_ujian() {
        return view('add_data_ujian');
    }

    public function proses_add_ujian() {
        $ujian_model = new ujianModel();
        $ujian_model->insert($this->request->getPost());
        return redirect()->to(base_url('ujian'));
    }

    public function edit_data_ujian($id=false) {
        $ujian_model = new UjianModel();
        $data_ujian = $ujian_model->find($id);
        return view('edit_data_ujian', ['data_ujian' => $data_ujian]);
    }

    public function proses_edit_ujian() {
        $ujian_model = new UjianModel();
        $ujian_model->update($this->request->getPost('id_ujian'), $this->request->getPost());
        return redirect()->to(base_url('ujian'));
    }

    public function delete_data_ujian($id=false) {
        $ujian_model = new UjianModel();
        $ujian_model->delete($id);
        return redirect()->to(base_url('ujian'));
    }
}