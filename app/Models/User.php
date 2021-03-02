<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

/**
 * Class User
 * 
 * @property int $id_user
 * @property int $id_role
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Role $role
 * @property Collection|Artikel[] $artikels
 * @property Collection|DiveCenter[] $dive_centers
 * @property Collection|Feedback[] $feedback
 * @property Collection|Order[] $orders
 * @property Collection|PendaftaranDivecenter[] $pendaftaran_divecenters
 * @property Collection|TransaksiPembayaran[] $transaksi_pembayarans
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	use Notifiable, HasApiTokens;

	protected $table = 'users';
	protected $primaryKey = 'id_user';

	protected $casts = [
		'id_role' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'id_role',
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'id_role');
	}

	public function artikels()
	{
		return $this->belongsToMany(Artikel::class, 'artikel_users', 'id_user', 'id_artikel')
					->withPivot('id_artikel_user');
	}

	public function dive_centers()
	{
		return $this->hasMany(DiveCenter::class, 'id_user');
	}

	public function feedback()
	{
		return $this->hasMany(Feedback::class, 'id_user');
	}

	public function orders()
	{
		return $this->hasMany(Order::class, 'id_user');
	}

	public function pendaftaran_divecenters()
	{
		return $this->hasMany(PendaftaranDivecenter::class, 'id_user');
	}

	public function transaksi_pembayarans()
	{
		return $this->hasMany(TransaksiPembayaran::class, 'id_user');
	}
}
