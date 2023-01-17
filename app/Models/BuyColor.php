<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BuyColor
 * 
 * @property int $id
 * @property string|null $color
 * @property string|null $status
 * @property string|null $color_code
 *
 * @package App\Models
 */
class BuyColor extends Model
{
	protected $table = 'buy_colors';
	public $timestamps = false;

	protected $fillable = [
		'color',
		'status',
		'color_code'
	];
}
