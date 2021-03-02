<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PendaftaranDivecenter
 * 
 * @property int $id_pendaftaran
 * @property int $id_user
 * 
 * @property User $user
 * @property Collection|BerkasPendaftaran[] $berkas_pendaftarans
 *
 * @package App\Models
 */
class PendaftaranDivecenter extends Model
{
	protected $table = 'pendaftaran_divecenters';
	protected $primaryKey = 'id_pendaftaran';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_pendaftaran' => 'int',
		'id_user' => 'int'
	];

	protected $fillable = [
		'id_user'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}

	public function berkas_pendaftarans()
	{
		return $this->hasMany(BerkasPendaftaran::class, 'id_pendaftaran');
	}
}
