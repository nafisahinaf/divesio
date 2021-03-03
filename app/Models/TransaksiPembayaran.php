<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransaksiPembayaran
 * 
 * @property int $id_transaksi
 * @property int $id_user
 * @property float $nominal
 * @property int $batas_wkt_pembayaran
 * @property string $status
 * 
 * @property User $user
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class TransaksiPembayaran extends Model
{
	protected $table = 'transaksi_pembayarans';
	protected $primaryKey = 'id_transaksi';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_transaksi' => 'int',
		'id_user' => 'int',
		'nominal' => 'float',
		'batas_wkt_pembayaran' => 'int'
	];

	protected $fillable = [
		'id_user',
		'nominal',
		'batas_wkt_pembayaran',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}

	public function orders()
	{
		return $this->hasMany(Order::class, 'id_transaksi');
	}
}
