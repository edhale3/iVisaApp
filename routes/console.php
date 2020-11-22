<?php

use Illuminate\Support\Facades\Artisan;
use App\Models\User;
use App\Models\Order;

Artisan::command('users', function (){
    $results = User::
                join('orders','orders.owner_id','users.user_id')
                ->select('user_id','first_name AS fn','last_name AS ln')
                ->distinct()
                ->orderBy('user_id','ASC')
                ->get();
    $count = $results->count();
    $this->comment("There are $count users that have active orders");
    $answer = strtolower(readline('Would you like to view all users with active orders? [y/n]: '));
    $yes = $answer == 'y' || $answer == 'yes' ? 1 : 0;
    if($yes){
        $this->comment(json_encode($results,JSON_PRETTY_PRINT));
    };
    $this->comment("Type 'php artisan orders' to determine how many active orders there are");
});

Artisan::command('orders', function (){
    $results = Order::get();
    $count = $results->count();
    $this->comment("There are $count active orders");
    $answer = strtolower(readline('Would you like to view all active orders? [y/n]: '));
    $yes = $answer == 'y' || $answer == 'yes' ? 1 : 0;
    if($yes){
        $this->comment(json_encode($results,JSON_PRETTY_PRINT));
    };
    $this->comment("Type 'php artisan update' to update the orders");
});


Artisan::command('update', function (){
    $a = strtolower(readline('Would you like to update the orders with even ID numbers or odd ID numbers? [E/O]: '));
    $even = $a == 'e' || $a == 'even' ? 0 : 1;
    $results = Order::
                whereRaw("order_id MOD 2 = $even")
                ->update(['updated_at' => now()]);
    $evenOrOdd = $even ? 'odd' : 'even';
    $this->comment("$results active orders with $evenOrOdd ID numbers have been updated");
});



