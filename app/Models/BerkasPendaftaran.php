<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BerkasPendaftaran
 * 
 * @property int $id_berkas
 * @property int $id_pendaftaran
 * @property string $nama_berkas
 * @property boolean $file_berkas
 * 
 * @property PendaftaranDivecenter $pendaftaran_divecenter
 *
 * @package App\Models
 */
class BerkasPendaftaran extends Model
{
	protected $table = 'berkas_pendaftarans';
	protected $primaryKey = 'id_berkas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_berkas' => 'int',
		'id_pendaftaran' => 'int',
		'file_berkas' => 'boolean'
	];

	protected $fillable = [
		'id_pendaftaran',
		'nama_berkas',
		'file_berkas'
	];

	public function pendaftaran_divecenter()
	{
		return $this->belongsTo(PendaftaranDivecenter::class, 'id_pendaftaran');
	}
}
