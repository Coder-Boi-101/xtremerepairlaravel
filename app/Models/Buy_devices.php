<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy_devices extends Model
{
    use HasFactory;
    protected $table = "buy_devices";
    protected $fillable = ["device_name","device_image","status","position"];
    protected $primarykey = "device_id";
    public $timestamps = false;
}
