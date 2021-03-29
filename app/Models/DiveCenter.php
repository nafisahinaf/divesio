<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DiveCenter
 * 
 * @property int $id_dive_center
 * @property int $id_user
 * @property string $nama
 * @property string $lokasi
 * @property string $about
 * @property string $no_hp
 * @property string $email
 * @property boolean $foto_dive_center
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Collection|FasilitasCenter[] $fasilitas_centers
 * @property Collection|FasilitasDivecenter[] $fasilitas_divecenters
 *
 * @package App\Models
 */
class DiveCenter extends Model
{
	protected $table = 'dive_centers';
	protected $primaryKey = 'id_dive_center';

	protected $casts = [
		'id_user' => 'int',
		'foto_dive_center' => 'boolean'
	];

	protected $fillable = [
		// 'id_user',
		'nama',
		'lokasi',
		'about',
		'no_hp',
		'email',
		'foto_dive_center',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}

	public function fasilitas_centers()
	{
		return $this->hasMany(FasilitasCenter::class, 'id_dive_center');
	}

	public function fasilitas_divecenters()
	{
		return $this->hasMany(FasilitasDivecenter::class, 'id_dive_center');
	}

	public function paket_selams()
	{
		return $this->hasMany(PaketSelam::class, 'id_dive_center');
	}
	
	public function berkas_pendaftarans()
	{
		return $this->hasMany(BerkasPendaftaran::class, 'id_dive_center');
	}
	
}
