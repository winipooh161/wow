<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class QuizController extends Controller
{
    /**
     * Обработка отправленных данных квиза
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'room_type' => 'required|string',
            'area' => 'required|string',
            'style_type' => 'required|string',
            'repair_type' => 'nullable|string',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'comments' => 'nullable|string',
        ]);

        try {
            // Сохранение ответов на квиз
            $quiz = Quiz::create([
                'room_type' => $validatedData['room_type'],
                'area' => $validatedData['area'],
                'style_type' => $validatedData['style_type'],
                'repair_type' => $validatedData['repair_type'] ?? 'standard', // Устанавливаем значение по умолчанию
                'name' => $validatedData['name'],
                'phone' => $validatedData['phone'],
                'email' => $validatedData['email'] ?? null,
                'comments' => $validatedData['comments'] ?? null,
            ]);

            // Отправка данных в Telegram бот
            $this->sendToTelegram($validatedData);

            // Логируем данные формы
            Log::info('Новая заявка с квиза', $validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Ваша заявка успешно отправлена!',
                'redirect' => route('thank-you')
            ]);
        } catch (\Exception $e) {
            Log::error('Ошибка при сохранении данных квиза: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Произошла ошибка при отправке данных. Пожалуйста, попробуйте позже.'
            ], 500);
        }
    }
    
    /**
     * Отправка данных в Telegram бот
     *
     * @param  array  $data
     * @return void
     */
    private function sendToTelegram($data)
    {
        $botToken = env('TELEGRAM_BOT_TOKEN', '7991914300:AAFiw_NF_EtjyEC-EX4FSx5vOAn-TFKHV7c');
        $chatId = env('TELEGRAM_CHAT_ID', '-4667626325');
        
        if (empty($botToken) || empty($chatId)) {
            Log::warning('Не настроены параметры для отправки в Telegram');
            return;
        }
        
        // Формирование текста сообщения
        $roomTypes = [
            'apartment' => 'Квартира',
            'house' => 'Частный дом',
            'office' => 'Офис/Коммерческое'
        ];
        
        $areas = [
            'small' => 'До 50 м²',
            'medium' => '50-100 м²',
            'large' => 'Более 100 м²'
        ];
        
        $styleTypes = [
            'style1' => 'Стиль 1',
            'style2' => 'Стиль 2',
            'style3' => 'Стиль 3',
            'other' => 'Другой стиль'
        ];
        
        $message = "🔔 *Новая заявка с сайта*\n\n";
        $message .= "👤 *Имя*: " . $data['name'] . "\n";
        $message .= "📞 *Телефон*: " . $data['phone'] . "\n";
        
        if (!empty($data['email'])) {
            $message .= "✉️ *Email*: " . $data['email'] . "\n";
        }
        
        $message .= "🏠 *Тип помещения*: " . ($roomTypes[$data['room_type']] ?? $data['room_type']) . "\n";
        $message .= "📏 *Площадь*: " . ($areas[$data['area']] ?? $data['area']) . "\n";
        $message .= "🎨 *Стиль интерьера*: " . ($styleTypes[$data['style_type']] ?? $data['style_type']) . "\n";
        
        if (!empty($data['comments'])) {
            $message .= "💬 *Комментарий*: " . $data['comments'] . "\n";
        }
        
        $message .= "\n📅 *Дата заявки*: " . now()->format('d.m.Y H:i');
        
        try {
            // Отправка сообщения через Telegram Bot API
            $response = Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $message,
                'parse_mode' => 'Markdown'
            ]);
            
            if (!$response->successful()) {
                Log::error('Ошибка отправки в Telegram: ' . $response->body());
            }
        } catch (\Exception $e) {
            Log::error('Исключение при отправке в Telegram: ' . $e->getMessage());
        }
    }
    
    /**
     * Отображение страницы "Спасибо"
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function thankYou()
    {
        return view('thank-you');
    }
}
