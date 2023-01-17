<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RepairProduct
 * 
 * @property int $id
 * @property string|null $product_name
 * @property string|null $product_description
 * @property string|null $product_image
 * @property string|null $brand
 * @property string|null $device_type
 * @property string|null $status
 * @property int|null $position
 * @property int|null $category
 *
 * @package App\Models
 */
class RepairProduct extends Model
{
	protected $table = 'repair_product';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int',
		'category' => 'int'
	];

	protected $fillable = [
		'product_name',
		'product_description',
		'product_image',
		'brand',
		'device_type',
		'status',
		'position',
		'category'
	];
}
