<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JadwalPaket
 * 
 * @property int $id_jadwal
 * @property int $id_paket
 * @property Carbon $tanggal
 * @property Carbon $jam_berangkat
 * @property int $durasi
 * 
 * @property PaketSelam $paket_selam
 *
 * @package App\Models
 */
class JadwalPaket extends Model
{
	protected $table = 'jadwal_pakets';
	protected $primaryKey = 'id_jadwal';
	// public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		// 'id_jadwal' => 'int',
		'id_paket' => 'int',
		'durasi' => 'int'
	];

	protected $dates = [
		'tanggal',
		'jam_berangkat'
	];

	protected $fillable = [
		'id_paket',
		'tanggal',
		'jam_berangkat',
		'durasi'
	];

	public function paket_selam()
	{
		return $this->belongsTo(PaketSelam::class, 'id_paket');
	}
}
