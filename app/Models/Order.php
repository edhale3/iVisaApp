<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

use DB;

//define relation between order and user
class Order extends Model
{
    public function orders()
    {
        return $this->belongsTo(User::class);
    }
}
