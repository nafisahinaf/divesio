<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FasilitasCenter
 * 
 * @property int $id_fasilitas_center
 * @property int $id_dive_center
 * @property int $id_fasilitas_divecenter
 * 
 * @property DiveCenter $dive_center
 * @property FasilitasDivecenter $fasilitas_divecenter
 *
 * @package App\Models
 */
class FasilitasCenter extends Model
{
	protected $table = 'fasilitas_centers';
	protected $primaryKey = 'id_fasilitas_center';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_fasilitas_center' => 'int',
		'id_dive_center' => 'int',
		'id_fasilitas_divecenter' => 'int'
	];

	protected $fillable = [
		'id_dive_center',
		'id_fasilitas_divecenter'
	];

	public function dive_center()
	{
		return $this->belongsTo(DiveCenter::class, 'id_dive_center');
	}

	public function fasilitas_divecenter()
	{
		return $this->belongsTo(FasilitasDivecenter::class, 'id_fasilitas_divecenter');
	}
}
