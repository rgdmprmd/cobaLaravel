<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $primaryKey = 'wallet_id';
    public $timestamps = false;
    const CREATED_AT = 'dt_input';
    const UPDATED_AT = 'updated_date';
}
