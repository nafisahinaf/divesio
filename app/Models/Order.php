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
 * @property int $id_transaksi
 * @property int $id_user
 * @property int $id_paket
 * @property int $jumlah_paket
 * @property string $status
 * 
 * @property PaketSelam $paket_selam
 * @property TransaksiPembayaran $transaksi_pembayaran
 * @property User $user
 * @property Collection|DataDiriPemesan[] $data_diri_pemesans
 * @property Collection|Feedback[] $feedback
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';
	protected $primaryKey = 'id_order';
	public $timestamps = false;

	protected $casts = [
		'id_transaksi' => 'int',
		'id_user' => 'int',
		'id_paket' => 'int',
		'jumlah_paket' => 'int'
	];

	protected $fillable = [
		'id_transaksi',
		'id_user',
		'id_paket',
		'jumlah_paket',
		'status'
	];

	public function paket_selams()
	{
		return $this->belongsTo(PaketSelam::class, 'id_paket');
	}

	public function transaksi_pembayarans()
	{
		return $this->belongsTo(TransaksiPembayaran::class, 'id_transaksi');
	}

	public function users()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
	public function orders()
	{
		return $this->belongsTo(Order::class, 'id_order');
	}
	public function data_diri_pemesans()
	{
		return $this->hasMany(DataDiriPemesan::class, 'id_order');
	}

	public function feedbacks()
	{
		return $this->hasMany(Feedback::class, 'id_order');
	}
}
