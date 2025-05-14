<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        
        // Домашняя страница
        $sitemap .= $this->addUrl(url('/'), '1.0', 'daily', date('Y-m-d'));
        
        // Страницы услуг
        $sitemap .= $this->addUrl(url('/uslugi-remonta-kvartir-v-batayske'), '0.8', 'weekly', date('Y-m-d'));
        $sitemap .= $this->addUrl(url('/otdelochnye-raboty-bataysk'), '0.8', 'weekly', date('Y-m-d'));
        
        // Страница политики конфиденциальности
        $sitemap .= $this->addUrl(url('/privacy-policy'), '0.3', 'monthly', date('Y-m-d'));
        
        // Страница "Спасибо"
        $sitemap .= $this->addUrl(url('/thank-you'), '0.3', 'monthly', date('Y-m-d'));
        
        $sitemap .= '</urlset>';
        
        return response($sitemap, 200)
            ->header('Content-Type', 'text/xml');
    }
    
    private function addUrl($url, $priority, $changefreq, $lastmod)
    {
        return 
            "  <url>\n" .
            "    <loc>" . $url . "</loc>\n" .
            "    <lastmod>" . $lastmod . "</lastmod>\n" .
            "    <changefreq>" . $changefreq . "</changefreq>\n" .
            "    <priority>" . $priority . "</priority>\n" .
            "  </url>\n";
    }
}
