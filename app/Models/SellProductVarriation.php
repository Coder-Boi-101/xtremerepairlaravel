<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SellProductVarriation
 * 
 * @property int $id
 * @property int|null $model_id
 * @property int|null $sell_storage_id
 * @property string|null $sell_storage_name
 * @property int|null $status
 *
 * @package App\Models
 */
class SellProductVarriation extends Model
{
	protected $table = 'sell_product_varriations';
	public $timestamps = false;

	protected $casts = [
		'model_id' => 'int',
		'sell_storage_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'model_id',
		'sell_storage_id',
		'sell_storage_name',
		'status'
	];
}
