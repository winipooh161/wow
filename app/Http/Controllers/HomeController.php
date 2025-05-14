<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Убираем middleware auth для всех методов
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    /**
     * Show the welcome page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        // Получаем списки изображений для каждого стиля
        $styleImages = [
            'style1' => $this->getStyleImages('img/style/1'),
            'style2' => $this->getStyleImages('img/style/2'),
            'style3' => $this->getStyleImages('img/style/3')
        ];
        
        return view('welcome', compact('styleImages'));
    }
    
    /**
     * Get array of image paths from style directory.
     *
     * @param string $path
     * @return array
     */
    private function getStyleImages($path)
    {
        $fullPath = public_path($path);
        if (!File::exists($fullPath)) {
            return [];
        }
        
        $files = File::files($fullPath);
        $images = [];
        
        foreach ($files as $file) {
            $extension = strtolower($file->getExtension());
            if (in_array($extension, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
                $images[] = $path . '/' . $file->getFilename();
            }
        }
        
        return $images;
    }
}
