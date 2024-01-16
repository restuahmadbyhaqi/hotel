<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

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
        public $kontrakan_pelanggan = [
            'KontrakanPelanggan_nama'=> 'required', 'KontrakanPelanggan_alamat'=> 'required', 'KontrakanPelanggan_tgl' => 'required'];
        public $kontrakan_pelanggan_errors = [
            'KontrakanPelanggan_nama' => ['required' => 'Nama Pelanggan wajib diisi.', ],
            'KontrakanPelanggan_alamat' => ['required' => 'Alamat Pelanggan wajib diisi.'],
            'KontrakanPelanggan_tgl' => ['required' => 'Tanggal Sewa wajib diisi.'],
        ];
        public $authlogin = [
            'email' => 'required|valid_email',
            'password' => 'required' 
        ];
        public $authlogin_errors = [
            'email'=> [
            'required' => 'Email wajib diisi.',
            'valid_email' => 'Email tidak valid'
            ],
            'password'=> [
            'required' => 'Password wajib diisi.'
            ]
        ];
        public $authregister = [
            'email' => 'required|valid_email|is_unique[users.email]',
            'username' =>'required|alpha_numeric|is_unique[users.username]|min_length[3]|max_length[35]',
            'name' =>'required|alpha_numeric_space|min_length[3]|max_length[35]',
            'password' =>'required|string|min_length[8]|max_length[35]',
            'confirm_password' =>'required|string|matches[password]|min_length[8]|max_length[35]',
        ];
        public $authregister_errors = [
            'email'=> [
            'required' => 'Email wajib diisi',
            'valid_email' => 'Email tidak valid',
            'is_unique' => 'Email sudah terdaftar'
            ],
            'username'=> [
            'required' => 'Username wajib diisi',
            'alpha_numeric' => 'Username hanya boleh berisi huruf dan angka',
            'is_unique' => 'Username sudah terdaftar',
            'min_length' => 'Username minimal 3 karakter',
            'max_length' => 'Username maksimal 35 karakter'
            ],
            'name'=> [
            'required' => 'Name wajib diisi',
            'alpha_numeric_spaces' => 'Name hanya boleh berisi huruf, angka dan spasi',
            'min_length' => 'Name minimal 3 karakter',
            'max_length' => 'Name maksimal 35 karakter'
            ],
            'password'=> [
            'required' => 'Password wajib diisi',
            'string'=>'Password hanya boleh berisi huruf, angka, spasi, karakter lain',
            'min_length' => 'Password minimal 8 karakter',
            'max_length' => 'Password maksimal 35 karakter'
            ],
            'confirm_password'=> [
            'required' => 'Konfirmasi password wajib diisi',
            'string'=>'Konfirmasi password huruf, angka, spasi, karakter lain',
            'matches' => 'Konfirmasi password tidak sama dengan password',
            'min_length' => 'Konfirmasi password minimal 8 karakter',
            'max_length' => 'Konfirmasi password maksimal 35 karakter'
            ]
        ];
}
