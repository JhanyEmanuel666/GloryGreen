<?php 

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
	protected $table = 'tb_user';
	protected $allowedFields = [
		'id_user','nama_lengkap', 'username', 'password', 'img_user', 'no_telp'
	];

	public function getUser($id = false)
	{
		if($id === false)
		{
			return $this->table('tb_user')
				->select('*')
				->get()
				->getResultArray();
		} else {
			return $this->table('tb_user')
				->select('*')
				->where('id_user', $id)
				->get()
				->getRowArray();
		}
	}

	public function insertUser($data)
	{
		return $this->table('tb_user')->insert($data);
	}

	public function updateUser($data, $id)
	{
  		return $this->db->table('tb_user')->update($data, ['id_user' => $id]);
	}
}