<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArtikelUser
 * 
 * @property int $id_artikel_user
 * @property int $id_artikel
 * @property int $id_user
 * 
 * @property Artikel $artikel
 * @property User $user
 *
 * @package App\Models
 */
class ArtikelUser extends Model
{
	protected $table = 'artikel_users';
	protected $primaryKey = 'id_artikel_user';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_artikel_user' => 'int',
		'id_artikel' => 'int',
		'id_user' => 'int'
	];

	protected $fillable = [
		'id_artikel',
		'id_user'
	];

	public function artikel()
	{
		return $this->belongsTo(Artikel::class, 'id_artikel');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
