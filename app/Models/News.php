<?php

namespace App\Models;

use App\Services\SitemapService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;
	
	protected $table = 'news';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	protected static function booted()
    {
        static::created(function ($news) {
            SitemapService::generateSitemap();
        });

        static::updated(function ($news) {
            SitemapService::generateSitemap();
        });

        static::deleted(function ($news) {
            SitemapService::generateSitemap();
        });
    }
	
	public function news_category() {
	    return $this->belongsTo(NewsCategory::class, 'news_category_id');
	}
	public function article_category() {
	    return $this->belongsTo(NewsCategory::class, 'category');
	}
}
