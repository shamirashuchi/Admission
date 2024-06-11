<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    private static $customer;
    protected $fillable = [
        'email',
        'name',
        'mobile',
        'password',
    ];

    public static function newCustomer($request)
    {
        self::$customer = new Customer();
        self::$customer->name       = $request->name;
        self::$customer->email      = $request->email;
        self::$customer->mobile     = $request->mobile;
        self::$customer->password     = $request->password;
        self::$customer->save();
        return self::$customer;
    }
}
