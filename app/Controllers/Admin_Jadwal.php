<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use App\Models\JadwalRegulerModel;

class Admin_Jadwal extends BaseController
{
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->jadwal   = new JadwalModel();
        $this->reguler  = new JadwalRegulerModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Jadwal',
            'jadwal'    => $this->jadwal->getJadwal(),
        ];
        
        return view('admin/jadwal/index', $data);
    }

    public function create()
    {
        $data = [
            'title'     => 'jadwal/create',
            'reguler'   => $this->reguler->getReguler(),
        ];

        return view('admin/jadwal/create', $data);
    }

    public function save()
    {
        $image = $this->request->getFile('img_jadwal');
        // random nama gbr
        $name = $image->getRandomName();

        $data = [
            'id_jadwal_reguler'     => $this->request->getPost('id_reguler'),
            'img_jadwal'            => $name
        ];

        $image->move(ROOTPATH . 'public/image/jadwal', $name);

        $simpan = $this->jadwal->insertJadwal($data);

        if ($simpan) {
            session()->setFlashdata('success', 'Data jadwal berhasil ditambahkan');
            return redirect()->to(base_url('admin_jadwal'));
        }
    }

    public function show($id)
    {
        $data = [
            'title'     => 'jadwal/show',
            'jadwal'    => $this->jadwal->getJadwal($id)
        ];

        return view('admin/jadwal/show', $data);
    }

    public function edit($id)
    {
        $data = [
            'title'     => 'jadwal/edit',
            'team'      => $this->team->getTeam($id)
        ];

        return view('admin/jadwal/edit', $data);
    }

    public function update($id)
    {

        $image = $this->request->getFile('img_jadwal');

        if ($image->getError()==4) {
            $namaSampul = $this->request->getPost('img_lama');
        } else {
            $namaSampul = $image->getRandomName();
            $image->move('image/jadwal', $namaSampul);
            unlink('image/jadwal/' . $this->request->getPost('img_lama'));
        }

        $data = [
            'img_jadwal'    => $namaSampul
        ];

        $ubah = $this->jadwal->updateJadwal($data, $id);
        if ($ubah) {
            session()->setFlashdata('info', 'Data jadwal berhasil terupdate');
            return redirect()->to(base_url('admin_jadwal'));
        }
        
    }

    public function delete($id)
    {
        $data = $this->jadwal->getJadwal($id);

        $hapus = $this->jadwal->deleteJadwal($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Data Jadwal berhasil dihapus');
            return redirect()->to(base_url('admin_jadwal'));
        }
    }
}
