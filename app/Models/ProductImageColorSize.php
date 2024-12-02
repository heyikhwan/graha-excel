<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImageColorSize extends Model
{
    use SoftDeletes;
	
	protected $table = 'product_image_color_size';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	public function color() {
	    return $this->belongsTo(Color::class, 'color_id');
	}
	public function size() {
	    return $this->belongsTo(Size::class, 'size_id');
	}
}
