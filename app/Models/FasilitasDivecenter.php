<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FasilitasDivecenter
 * 
 * @property int $id_fasilitas_divecenter
 * @property int $id_dive_center
 * @property string $nama
 * 
 * @property DiveCenter $dive_center
 * @property Collection|FasilitasCenter[] $fasilitas_centers
 *
 * @package App\Models
 */
class FasilitasDivecenter extends Model
{
	protected $table = 'fasilitas_divecenters';
	protected $primaryKey = 'id_fasilitas_divecenter';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_fasilitas_divecenter' => 'int',
		'id_dive_center' => 'int'
	];

	protected $fillable = [
		'id_dive_center',
		'nama'
	];

	public function dive_center()
	{
		return $this->belongsTo(DiveCenter::class, 'id_dive_center');
	}

	public function fasilitas_centers()
	{
		return $this->hasMany(FasilitasCenter::class, 'id_fasilitas_divecenter');
	}
}
