<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BuySellQuery
 * 
 * @property int $id
 * @property string|null $fname
 * @property string|null $lname
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $model
 * @property string|null $buy_sell
 * @property Carbon|null $date
 * @property int|null $status
 *
 * @package App\Models
 */
class BuySellQuery extends Model
{
	protected $table = 'buy_sell_queries';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'fname',
		'lname',
		'email',
		'phone',
		'model',
		'buy_sell',
		'date',
		'status'
	];
}
