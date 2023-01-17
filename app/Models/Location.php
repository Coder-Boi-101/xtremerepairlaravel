<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Location
 * 
 * @property int $id
 * @property string $name
 * @property string|null $address
 * @property string|null $phone
 * @property int $zipcode
 * @property string $latitude
 * @property string $longitude
 * @property string $maplink
 * @property string|null $direction
 *
 * @package App\Models
 */
class Location extends Model
{
	protected $table = 'location';
	public $timestamps = false;

	protected $casts = [
		'zipcode' => 'int'
	];

	protected $fillable = [
		'name',
		'address',
		'phone',
		'zipcode',
		'latitude',
		'longitude',
		'maplink',
		'direction'
	];
}
