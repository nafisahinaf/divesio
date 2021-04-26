<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FasilitasPaket
 * 
 * @property int $id_fasilitas_paket
 * @property int $id_paket
 * @property int $id_fasilitas_paket_selam
 * 
 * @property FasilitasPaketSelam $fasilitas_paket_selam
 * @property PaketSelam $paket_selam
 *
 * @package App\Models
 */
class FasilitasPaket extends Model
{
	protected $table = 'fasilitas_pakets';
	protected $primaryKey = 'id_fasilitas_paket';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_fasilitas_paket' => 'int',
		'id_paket' => 'int',
		'id_fasilitas_paket_selam' => 'int'
	];

	protected $fillable = [
		'id_paket',
		'id_fasilitas_paket_selam'
	];

	public function fasilitas_paket_selam()
	{
		return $this->belongsTo(FasilitasPaketSelam::class, 'id_fasilitas_paket_selam');
	}

	public function paket_selam()
	{
		return $this->belongsTo(PaketSelam::class, 'id_paket');
	}
}
