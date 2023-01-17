<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SellCartDatum
 * 
 * @property int $cart_id
 * @property string|null $moel_name
 * @property string|null $model_color
 * @property string|null $model_storage
 * @property string|null $model_carrier
 * @property string|null $model_condition
 * @property string|null $model_price
 * @property string|null $user_email
 * @property string|null $user_first_name
 * @property string|null $user_last_name
 * @property string|null $user_address1
 * @property string|null $user_address2
 * @property string|null $user_city
 * @property string|null $user_state
 * @property string|null $user_zipcode
 * @property string|null $user_phone
 * @property string|null $cart_status
 *
 * @package App\Models
 */
class SellCartDatum extends Model
{
	protected $table = 'sell_cart_data';
	protected $primaryKey = 'cart_id';
	public $timestamps = false;

	protected $fillable = [
		'moel_name',
		'model_color',
		'model_storage',
		'model_carrier',
		'model_condition',
		'model_price',
		'user_email',
		'user_first_name',
		'user_last_name',
		'user_address1',
		'user_address2',
		'user_city',
		'user_state',
		'user_zipcode',
		'user_phone',
		'cart_status'
	];
}
