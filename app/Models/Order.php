<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

use DB;


class Order extends Model
{
    public function orders()
    {
        return $this->belongsTo(User::class);
    }
}


    // public static function orders()
    // {
    //     return DB::table('orders')->get();
    // }
