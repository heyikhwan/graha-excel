<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsCategory extends Model
{
    use SoftDeletes;
	
	protected $table = 'newscategories';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];
}
