<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurProductModel extends Model
{
    use HasFactory;
    protected $table = 'our_product';
    protected $primaryKey = 'id';
    protected $fillable = ['title','description', 'image'];
}
