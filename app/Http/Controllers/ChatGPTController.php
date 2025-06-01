<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use Illuminate\Support\Arr; 
use OpenAI\Laravel\Facades\OpenAI; 
class ChatGPTController extends Controller 
{ 
/** 
* Write code on Method 
* 
* @return response() 
*/ 
// public function index(Request $request) 
// { 
// $result = ''; 
// if ($request->filled('title')) { 
// $messages = [ 
// ['role' => 'user', 'content' => $request->title], 
// ]; 
// $result = OpenAI::chat()->create([ 
// 'model' => 'gpt-4.1-nano', 
// 'messages' => $messages, 
// ]); 
// $result = Arr::get($result, 'choices.0.message')['content'] ?? ''; 
// } 
// return view('chatGPT', compact('result')); 
// } 
// }
public function index()
{
    \Log::info('ENTRO A CHAT-GPT');
   
    return response()->json(['ok' => true]);
}
}