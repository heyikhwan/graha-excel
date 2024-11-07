<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImageColor extends Model
{
    use SoftDeletes;
	
	protected $table = 'product_image_color';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	public function color() {
	    return $this->belongsTo(Color::class, 'color_id');
	}
}
