<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $validate)
 */
class Sample extends Model
{
    use HasFactory;

    protected $table = 'samples';

    protected $guarded = [];
}
