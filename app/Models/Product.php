<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
	
	protected $table = 'products';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	public function image_color() {
	    return $this->hasMany(ProductImageColor::class, 'product_id');
	}
	public function image_size() {
	    return $this->hasMany(ProductImageSize::class, 'product_id');
	}
}
