<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TransaksiPembayaran
 * 
 * @property int $id_transaksi
 * @property int $id_order
 * @property int $id_user
 * @property float $nominal
 * @property int $batas_wkt_pembayaran
 * @property string $status
 * 
 * @property Order $order
 * @property User $user
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
		'id_order' => 'int',
		'id_user' => 'int',
		'nominal' => 'float',
		'batas_wkt_pembayaran' => 'int'
	];

	protected $fillable = [
		'id_order',
		'id_user',
		'nominal',
		'batas_wkt_pembayaran',
		'status'
	];

	public function order()
	{
		return $this->belongsTo(Order::class, 'id_order');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
