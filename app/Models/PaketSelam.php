<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PaketSelam
 * 
 * @property int $id_paket
 * @property int $id_dive_center
 * @property string $nama_paket
 * @property string $deskripsi
 * @property string $fasilitas
 * @property string $ketersediaan
 * @property int $jumlah_peserta
 * @property string $foto
 * @property float $harga
 * 
 * @property Collection|Feedback[] $feedback
 * @property Collection|JadwalPaket[] $jadwal_pakets
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class PaketSelam extends Model
{
	protected $table = 'paket_selams';
	protected $primaryKey = 'id_paket';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_paket' => 'int',
		'id_dive_center' => 'int',
		'jumlah_peserta' => 'int',
		'harga' => 'float'
	];

	protected $fillable = [
		'id_dive_center',
		'nama_paket',
		'deskripsi',
		'fasilitas',
		'ketersediaan',
		'jumlah_peserta',
		'foto',
		'harga'
	];

	public function feedbacks()
	{
		return $this->hasMany(Feedback::class, 'id_paket');
	}

	public function jadwal_pakets()
	{
		return $this->hasMany(JadwalPaket::class, 'id_paket');
	}

	public function orders()
	{
		return $this->hasMany(Order::class, 'id_paket');
	}
	public function dive_centers()
	{
		return $this->belongsTo(DiveCenter::class, 'id_dive_center');
	}
}
