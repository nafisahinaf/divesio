<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id_order
 * @property int $id_user
 * @property int $id_paket
 * @property int $id_jadwal
 * @property int $jumlah_paket
 * @property string|null $status
 * 
 * @property PaketSelam $paket_selam
 * @property User $user
 * @property Collection|DataDiriPemesan[] $data_diri_pemesans
 * @property Collection|TransaksiPembayaran[] $transaksi_pembayarans
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';
	protected $primaryKey = 'id_order';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'id_paket' => 'int',
		'id_jadwal' => 'int',
		'jumlah_paket' => 'int'
	];

	protected $fillable = [
		'id_user',
		'id_paket',
		'id_jadwal',
		'jumlah_paket',
		'status'
	];

	public function paket_selam()
	{
		return $this->belongsTo(PaketSelam::class, 'id_paket');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}

	public function data_diri_pemesans()
	{
		return $this->hasMany(DataDiriPemesan::class, 'id_order');
	}

	public function transaksi_pembayarans()
	{
		return $this->hasMany(TransaksiPembayaran::class, 'id_order');
	}
}
