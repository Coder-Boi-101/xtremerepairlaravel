<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $subject
 * @property string|null $message
 * @property string|null $date
 * @property string|null $timee
 *
 * @package App\Models
 */
class Contact extends Model
{
	protected $table = 'contact';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'email',
		'phone',
		'subject',
		'message',
		'date',
		'timee'
	];
}
