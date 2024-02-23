<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static select()
 * @method static first()
 * @method static selectAll()
 */
class Test extends Model
{
    use HasFactory;

    protected $table = 'tests';

    protected $guarded = [];
}
