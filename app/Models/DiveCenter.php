<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DiveCenter
 * 
 * @property int $id_dive_center
 * @property int $id_user
 * @property string $nama
 * @property string $lokasi
 * @property string $about
 * @property string $informasi_kontak
 * @property string $foto_dive_center
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class DiveCenter extends Model
{
	protected $table = 'dive_centers';
	protected $primaryKey = 'id_dive_center';

	protected $casts = [
		'id_user' => 'int'
	];

	protected $fillable = [
		'id_user',
		'nama',
		'lokasi',
		'about',
		'informasi_kontak',
		'foto_dive_center'
	];

	public function users()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
	public function paket_selams()
	{
		return $this->hasMany(PaketSelam::class, 'id_dive_center');
	}
	
}
