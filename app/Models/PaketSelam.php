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
 * @property string $ketersediaan
 * @property int $kuota_peserta
 * @property string $foto
 * @property float $harga
 * 
 * @property Collection|FasilitasPaketSelam[] $fasilitas_paket_selams
 * @property Collection|FasilitasPaket[] $fasilitas_pakets
 * @property Collection|Feedback[] $feedback
 * @property Collection|JadwalPaket[] $jadwal_pakets
 * @property Collection|Order[] $orders
 * @property Collection|PersyaratanPaket[] $persyaratan_pakets
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
		'kuota_peserta' => 'int',
		'harga' => 'float'
	];

	protected $fillable = [
		'id_dive_center',
		'nama_paket',
		'deskripsi',
		'ketersediaan',
		'kuota_peserta',
		'foto',
		'harga'
	];

	public function fasilitas_paket_selams()
	{
		return $this->hasMany(FasilitasPaketSelam::class, 'id_paket_selam');
	}

	public function fasilitas_pakets()
	{
		return $this->hasMany(FasilitasPaket::class, 'id_paket');
	}

	public function feedback()
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

	public function persyaratan_pakets()
	{
		return $this->hasMany(PersyaratanPaket::class, 'id_paket');
	}
}
