<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    use SoftDeletes;
	
	protected $table = 'attributes';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

    public function get_product() {
	    return $this->belongsTo(Product::class, 'product');
	}
}
