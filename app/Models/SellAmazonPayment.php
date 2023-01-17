<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SellAmazonPayment
 * 
 * @property int $id
 * @property int|null $sell_order_id
 * @property string|null $amazon_email
 *
 * @package App\Models
 */
class SellAmazonPayment extends Model
{
	protected $table = 'sell_amazon_payment';
	public $timestamps = false;

	protected $casts = [
		'sell_order_id' => 'int'
	];

	protected $fillable = [
		'sell_order_id',
		'amazon_email'
	];
}
