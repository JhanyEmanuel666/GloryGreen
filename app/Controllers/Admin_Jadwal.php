<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use App\Models\JadwalRegulerModel;
use App\Models\TeamModel;

class Admin_Jadwal extends BaseController
{
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->jadwal   = new JadwalModel();
        $this->reguler  = new JadwalRegulerModel();
        $this->team     = new TeamModel();
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
            'team'      => $this->team->getTeam()
        ];

        return view('admin/jadwal/create', $data);
    }

    public function save()
    {
        $data = [
            'id_jadwal_reguler'    => $this->request->getPost('id_reguler'),
            'team_1'        => $this->request->getPost('team_1'),
            'team_2'        => $this->request->getPost('team_2'),
            'waktu'         => $this->request->getPost('waktu'),
        ];

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

        if ($image->getError()==4) {
            $namaSampul = $this->request->getPost('img_lama');
        } else {
            $namaSampul = $image->getRandomName();
            $image->move('image/team', $namaSampul);
            unlink('image/team/' . $this->request->getPost('img_lama'));
        }
            $data = [
                'nama_team'         => $this->request->getPost('nm_team'),
                'jumlah_player'     => $this->request->getPost('jlh_player'),
                'about_team'        => $this->request->getPost('about_team'),
                'achievements'      => $this->request->getPost('achiev'),
                'img_team'          => $namaSampul
            ];

            $ubah = $this->team->updateTeam($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Data team berhasil terupdate');
                return redirect()->to(base_url('admin_team'));
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
