<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['status', 'code', 'name', 'description', 'price'])]
class Product extends Model
{
    // ...


    /**
     * @var int|mixed
     */
    public mixed $status;
    public mixed $code;
    public mixed $name;
    public mixed $description;
    public mixed $price;
}
