<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $validate)
 * @method static latest()
 */
class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $guarded = [];
}
