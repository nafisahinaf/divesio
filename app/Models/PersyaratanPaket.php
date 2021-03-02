<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PersyaratanPaket
 * 
 * @property int $id_persyaratan
 * @property int $id_paket
 * @property string $nama_persyaratan
 * 
 * @property PaketSelam $paket_selam
 *
 * @package App\Models
 */
class PersyaratanPaket extends Model
{
	protected $table = 'persyaratan_paket';
	protected $primaryKey = 'id_persyaratan';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_persyaratan' => 'int',
		'id_paket' => 'int'
	];

	protected $fillable = [
		'id_paket',
		'nama_persyaratan'
	];

	public function paket_selam()
	{
		return $this->belongsTo(PaketSelam::class, 'id_paket');
	}
}
