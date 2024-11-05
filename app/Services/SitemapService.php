<?php

namespace App\Services;

use App\Models\News;
use Illuminate\Support\Facades\Storage;

class SitemapService
{
    public static function generateSitemap()
    {
        $articles = News::all();
        $sitemap = new \SimpleXMLElement('<urlset/>');
        $sitemap->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

        foreach ($articles as $article) {
            $url = $sitemap->addChild('url');
            $url->addChild('loc', htmlspecialchars(url("/articles/{$article->article_category->url_title}/{$article->url_title}")));
            $url->addChild('lastmod', htmlspecialchars($article->updated_at->toAtomString()));
            $url->addChild('changefreq', 'weekly');
            $url->addChild('priority', '0.8');
        }
        
        Storage::disk('public')->put('sitemap.xml', $sitemap->asXML());
    }
}
