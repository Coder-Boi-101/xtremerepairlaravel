<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BuyCondition
 * 
 * @property int $id
 * @property string|null $sellcondition
 *
 * @package App\Models
 */
class BuyCondition extends Model
{
	protected $table = 'buy_condition';
	public $timestamps = false;

	protected $fillable = [
		'sellcondition'
	];
}
