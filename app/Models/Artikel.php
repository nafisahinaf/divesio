<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Artikel
 * 
 * @property int $id_artikel
 * @property string $judul
 * @property string $penulis
 * @property string $kategori
 * @property string $isi
 * @property string $foto
 * @property int $durasi_baca
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Artikel extends Model
{
	protected $table = 'artikels';
	protected $primaryKey = 'id_artikel';
	public $timestamps = false;

	protected $casts = [
		'durasi_baca' => 'int'
	];

	protected $fillable = [
		'judul',
		'penulis',
		'kategori',
		'isi',
		'foto',
		'durasi_baca'
	];

	public function users()
	{
		return $this->belongsToMany(User::class, 'artikel_users', 'id_artikel', 'id_user')
					->withPivot('id_artikel_user');
	}
}
