<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SellBankPayment
 * 
 * @property int $id
 * @property int|null $sell_order_id
 * @property string|null $bank_account_name
 * @property string|null $bank_account_number
 * @property string|null $bank_routing_number
 *
 * @package App\Models
 */
class SellBankPayment extends Model
{
	protected $table = 'sell_bank_payment';
	public $timestamps = false;

	protected $casts = [
		'sell_order_id' => 'int'
	];

	protected $fillable = [
		'sell_order_id',
		'bank_account_name',
		'bank_account_number',
		'bank_routing_number'
	];
}
