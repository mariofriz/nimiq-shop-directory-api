<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    const TYPE_ONLINE = 'online';
    const TYPE_BRICK_N_MORTAR = 'bricknmortar';
    const TYPE_HYBRID = self::TYPE_ONLINE . ',' . self::TYPE_BRICK_N_MORTAR;
}
