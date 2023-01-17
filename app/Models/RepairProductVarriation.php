<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RepairProductVarriation
 * 
 * @property int $id
 * @property int $model_id
 * @property string $repair_option
 * @property string $cost
 *
 * @package App\Models
 */
class RepairProductVarriation extends Model
{
	protected $table = 'repair_product_varriations';
	public $timestamps = false;

	protected $casts = [
		'model_id' => 'int'
	];

	protected $fillable = [
		'model_id',
		'repair_option',
		'cost'
	];
}
