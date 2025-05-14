<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'email',
        'room_type',
        'area',
        'style_type',
        'repair_type',
        'comments',
        'estimated_cost',
        'status',
        'notes',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the user that owns the quiz.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * Calculate estimated cost based on inputs.
     *
     * @return float
     */
    public function calculateEstimatedCost()
    {
        // Базовые расценки за м² в зависимости от стиля интерьера
        $baseCosts = [
            'style1' => 8000,  // Стиль 1
            'style2' => 12000, // Стиль 2
            'style3' => 15000, // Стиль 3
            'other' => 18000,  // Другой стиль
        ];
        
        // Коэффициенты в зависимости от типа помещения
        $roomCoefficients = [
            'apartment' => 1.0,  // Квартира
            'house' => 1.2,      // Дом
            'office' => 0.9,     // Офис
        ];
        
        // Средние площади для расчета
        $areas = [
            'small' => 40,  // До 50 м²
            'medium' => 75, // 50-100 м²
            'large' => 150, // Более 100 м²
        ];
        
        // Расчет стоимости
        $baseCost = $baseCosts[$this->style_type] ?? $baseCosts['other']; // Используем style_type вместо repair_type
        $roomCoef = $roomCoefficients[$this->room_type] ?? $roomCoefficients['apartment'];
        $areaSize = $areas[$this->area] ?? $areas['medium'];
        
        return $baseCost * $roomCoef * $areaSize;
    }
}
