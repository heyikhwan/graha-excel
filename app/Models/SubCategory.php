<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use SoftDeletes;
	
	protected $table = 'sub_categories';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

    public function get_parent() {
	    return $this->belongsTo(Category::class, 'parent');
	}
}
