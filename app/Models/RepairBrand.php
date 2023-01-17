<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RepairBrand
 * 
 * @property int $brand_id
 * @property string|null $brand_name
 * @property string|null $brand_image
 * @property string|null $status
 *
 * @package App\Models
 */
class RepairBrand extends Model
{
	protected $table = 'repair_brands';
	protected $primaryKey = 'brand_id';
	public $timestamps = false;

	protected $fillable = [
		'brand_name',
		'brand_image',
		'status'
	];
}
