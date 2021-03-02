<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FasilitasPaketSelam
 * 
 * @property int $id_fasilitas_paket_selams
 * @property int $id_paket_selam
 * @property string $nama_fasilitas
 * 
 * @property PaketSelam $paket_selam
 * @property Collection|FasilitasPaket[] $fasilitas_pakets
 *
 * @package App\Models
 */
class FasilitasPaketSelam extends Model
{
	protected $table = 'fasilitas_paket_selams';
	protected $primaryKey = 'id_fasilitas_paket_selams';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_fasilitas_paket_selams' => 'int',
		'id_paket_selam' => 'int'
	];

	protected $fillable = [
		'id_paket_selam',
		'nama_fasilitas'
	];

	public function paket_selam()
	{
		return $this->belongsTo(PaketSelam::class, 'id_paket_selam');
	}

	public function fasilitas_pakets()
	{
		return $this->hasMany(FasilitasPaket::class, 'id_fasilitas_paket_selam');
	}
}
