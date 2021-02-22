<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Feedback
 * 
 * @property int $id_feedback
 * @property int $id_order
 * @property int $id_user
 * @property int $id_paket
 * @property string $review
 * @property int $rating
 * 
 * @property Order $order
 * @property PaketSelam $paket_selam
 * @property User $user
 *
 * @package App\Models
 */
class Feedback extends Model
{
	protected $table = 'feedbacks';
	protected $primaryKey = 'id_feedback';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_feedback' => 'int',
		'id_order' => 'int',
		'id_user' => 'int',
		'id_paket' => 'int',
		'rating' => 'int'
	];

	protected $fillable = [
		'id_order',
		'id_user',
		'id_paket',
		'review',
		'rating'
	];

	public function order()
	{
		return $this->belongsTo(Order::class, 'id_order');
	}

	public function paket_selam()
	{
		return $this->belongsTo(PaketSelam::class, 'id_paket');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
