<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'user_id';
    protected $fillable = [
    'title',
    'slug',
    'excerpt',
    'prince',
    'category_id',
    'user_id'
    ];
   
    public function Category()
    {
        return $this->belongsTo( Category::class, 'category_id' );
    }

    public function User()
    {
        return $this->belongsTo( User::class, 'user_id' );
    }    

}
