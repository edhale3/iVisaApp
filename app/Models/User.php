<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

use DB;

//define relation between user and order
class User extends Model
{
    public function users()
    {
        return $this->hasMany(Order::class);
    }
}
