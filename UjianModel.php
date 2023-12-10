<?php

namespace App\Models;

use CodeIgniter\Model;

class UjianModel extends Model
{
    protected $table = 'tb_ujian_50421727';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['tanggal_ujian', 'nama_peserta', 'npm', 'kelas', 'jurusan'];
}