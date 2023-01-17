<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BuyBrand
 * 
 * @property int $brand_id
 * @property string|null $brand_name
 * @property string|null $brand_image
 * @property string|null $status
 * @property int|null $position
 *
 * @package App\Models
 */
class BuyBrand extends Model
{
	protected $table = 'buy_brands';
	protected $primaryKey = 'brand_id';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int'
	];

	protected $fillable = [
		'brand_name',
		'brand_image',
		'status',
		'position'
	];
}
