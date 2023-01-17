<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SellCondition
 * 
 * @property int $id
 * @property string|null $sellcondition
 *
 * @package App\Models
 */
class SellCondition extends Model
{
	protected $table = 'sell_condition';
	public $timestamps = false;

	protected $fillable = [
		'sellcondition'
	];
}
