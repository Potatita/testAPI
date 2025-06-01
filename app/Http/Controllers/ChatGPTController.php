<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use Illuminate\Support\Arr; 
use OpenAI\Laravel\Facades\OpenAI; 
class ChatGPTController extends Controller 
{ 

public function index()
{
    \Log::info('ENTRO A CHAT-GPT');
   
    return response()->json(['ok' => true]);
}
}