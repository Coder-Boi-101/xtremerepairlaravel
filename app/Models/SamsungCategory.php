<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SamsungCategory
 * 
 * @property int $id
 * @property string|null $category
 * @property string|null $images
 * @property int|null $possitions
 * @property int|null $status
 *
 * @package App\Models
 */
class SamsungCategory extends Model
{
	protected $table = 'samsung_category';
	public $timestamps = false;

	protected $casts = [
		'possitions' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'category',
		'images',
		'possitions',
		'status'
	];
}
