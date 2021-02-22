<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArtikelUser
 * 
 * @property int $id_artikel_users
 * @property int $id_artikel
 * @property int $id_user
 *
 * @package App\Models
 */
class ArtikelUser extends Model
{
	protected $table = 'artikel_users';
	protected $primaryKey = 'id_artikel_users';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_artikel_users' => 'int',
		'id_artikel' => 'int',
		'id_user' => 'int'
	];

	protected $fillable = [
		'id_artikel',
		'id_user'
	];
}
