<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $product
 * @property string|null $problem
 * @property int $status
 * @property int $view_status
 * @property string|null $date
 * @property string|null $label
 *
 * @package App\Models
 */
class Customer extends Model
{
	protected $table = 'customers';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'view_status' => 'int'
	];

	protected $fillable = [
		'name',
		'phone',
		'email',
		'product',
		'problem',
		'status',
		'view_status',
		'date',
		'label'
	];
}
