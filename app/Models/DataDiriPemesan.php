<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DataDiriPemesan
 * 
 * @property int $id_data_diri
 * @property int $id_order
 * @property string $nama_lengkap
 * @property string $jenis_tanda_pengenal
 * @property string $nomor_tanda_pengenal
 * @property string $alamat
 * 
 * @property Order $order
 *
 * @package App\Models
 */
class DataDiriPemesan extends Model
{
	protected $table = 'data_diri_pemesans';
	protected $primaryKey = 'id_data_diri';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_data_diri' => 'int',
		'id_order' => 'int'
	];

	protected $fillable = [
		'id_order',
		'nama_lengkap',
		'jenis_tanda_pengenal',
		'nomor_tanda_pengenal',
		'alamat'
	];

	public function order()
	{
		return $this->belongsTo(Order::class, 'id_order');
	}
}
