<?php

namespace App\Models;

use CodeIgniter\Model;

class ShortModel extends Model
{
    protected $table = 'short';
    protected $allowedFields = ['url', 'user_id', 'slug', 'counter', 'is_active', 'created_at'];
}
