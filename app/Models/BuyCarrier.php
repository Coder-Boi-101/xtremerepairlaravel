<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BuyCarrier
 * 
 * @property int $id
 * @property string|null $carrier
 *
 * @package App\Models
 */
class BuyCarrier extends Model
{
	protected $table = 'buy_carrier';
	public $timestamps = false;

	protected $fillable = [
		'carrier'
	];
}
