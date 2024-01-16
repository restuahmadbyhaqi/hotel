<?php namespace Config;
class Validation
{
public $ruleSets = [
\CodeIgniter\Validation\Rules::class,
\CodeIgniter\Validation\FormatRules::class,
\CodeIgniter\Validation\FileRules::class,
\CodeIgniter\Validation\CreditCardRules::class, ];

public $templates = [
    'list' => 'CodeIgniter\Validation\Views\list',
    'single' => 'CodeIgniter\Validation\Views\single', ];
public $fakultas = [
    'fak_nama'=> 'required', 'fak_jmlprodi'=> 'required'];
public $fakultas_errors = [
    'fak_nama' => [
    'required' => 'Nama fakultas wajib diisi.', ],
    'fak_jmlprodi' => ['required' => 'Jumlah prodi fakultas wajib diisi.']
];
public $prodi = [
    'prodi_nama' => 'required', 'prodi_akre' => 'required',
    'prodi_jenj' => 'required', 'prodi_status' => 'required',
    'fak_id' => 'required'
    ];
public $prodi_errors = [
    'prodi_nama' => ['required' => 'Nama prodi wajib diisi.'],
    'prodi_akre' => ['required' => 'Prodi akreditasi wajib diisi.'],
    'prodi_jenj' => ['required' => 'Prodi jenjang wajib diisi.'],
    'prodi_status'=> ['required' => 'Status prodi wajib diisi.'],
    'fak_id' => ['required' => 'Fakultas wajib diisi.']
    ];
}

