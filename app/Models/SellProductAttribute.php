<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SellProductAttribute
 * 
 * @property int $id
 * @property int|null $sell_product_id
 * @property string|null $sell_color
 * @property string|null $sell_storage
 * @property string|null $sell_carrier
 * @property string|null $sell_condition
 *
 * @package App\Models
 */
class SellProductAttribute extends Model
{
	protected $table = 'sell_product_attributes';
	public $timestamps = false;

	protected $casts = [
		'sell_product_id' => 'int'
	];

	protected $fillable = [
		'sell_product_id',
		'sell_color',
		'sell_storage',
		'sell_carrier',
		'sell_condition'
	];
}
