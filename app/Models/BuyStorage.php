<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BuyStorage
 * 
 * @property int $id
 * @property string|null $storage
 *
 * @package App\Models
 */
class BuyStorage extends Model
{
	protected $table = 'buy_storage';
	public $timestamps = false;

	protected $fillable = [
		'storage'
	];
}
