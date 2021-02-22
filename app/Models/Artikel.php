<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

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
 * @package App\Models
 */
class Artikel extends Model
{
	protected $table = 'artikels';
	protected $primaryKey = 'id_artikel';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_artikel' => 'int',
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
	
}
