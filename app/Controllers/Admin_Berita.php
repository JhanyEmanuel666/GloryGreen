<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class Admin_Berita extends BaseController
{
    protected $helpers = ['form', 'url'];

    public function __construct()
    {
        $this->berita = new BeritaModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'berita',
            'berita'      => $this->berita->getBerita()
        ];
        
        return view('admin/berita/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'berita / add new'
        ];

        return view('admin/berita/create', $data);
    }

    public function save()
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = date("Y-m-d H:i:s");

        $img = $this->request->getFile('img_berita');
        // random nama gbr
        $name = $img->getRandomName();

        $data = [
            'judul'         => $this->request->getPost("judul"),
            'isi_berita'    => $this->request->getPost("isi_berita"),
            'tgl_post'      => $date,
            'img_berita'    => $name
        ];

        $img->move(ROOTPATH . 'public/image/berita/', $name);

        $simpan = $this->berita->insertBerita($data);

        if ($simpan) {
            session()->setFlashdata('success', 'Data berhasil ditambahkan');
            return redirect()->to(base_url('admin_berita'));
        }
    }

    public function show($id)
    {
        $data = [
            'title'     => 'berita / show',
            'berita'    => $this->berita->getBerita($id)
        ];

        return view('admin/berita/show', $data);
    }

    public function edit($id)
    {
        $data = [
            'title'     => 'berita / edit',
            'berita'     => $this->berita->getBerita($id)
        ];

        return view('admin/berita/edit', $data);
    }

    public function update($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = date("Y-m-d H:i:s");

        $image = $this->request->getFile('img_berita');

        if ($image->getError()==4) {
            $namaSampul = $this->request->getPost('img_lama');
        } else {
            $namaSampul = $image->getRandomName();
            $image->move('image/berita', $namaSampul);
            unlink('image/berita/' . $this->request->getPost('img_lama'));
        }
            $data = [
                'judul'         => $this->request->getPost("judul"),
                'isi_berita'    => $this->request->getPost("isi_berita"),
                'tgl_post'      => $date,
                'img_berita'    => $namaSampul
            ];

            $ubah = $this->berita->updateBerita($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Data berhasil terupdate');
                return redirect()->to(base_url('admin_berita'));
            }
    }

    public function delete($id)
    {
        $data = $this->berita->getberita($id);

        unlink('image/berita/' . $data['img_berita']);

        $hapus = $this->berita->deleteBerita($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Data berhasil dihapus');
            return redirect()->to(base_url('admin_berita'));
        }
    }
}
