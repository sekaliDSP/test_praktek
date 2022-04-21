<?php defined('BASEPATH') OR exit('No direct script access allowed');

class buku_model extends CI_Model
{
    private $_table = "buku";

    public $Nama_buku;
    public $Nama_penulis;

    public function rules()
    {
        return[
            [],[],[]
        ];
    }
}