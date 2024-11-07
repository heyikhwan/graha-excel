<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImageSize extends Model
{
    use SoftDeletes;
	
	protected $table = 'product_image_size';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	public function size() {
	    return $this->belongsTo(Size::class, 'size_id');
	}
}
