<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class Product extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title' ,
        'price',
        'product_code',
        'description'
    ];

}
