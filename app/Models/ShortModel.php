<?php

namespace App\Models;

use CodeIgniter\Model;

class ShortModel extends Model
{
    protected $table = 'short';
    protected $allowedFields = ['url', 'slug', 'counter', 'is_active'];
}
