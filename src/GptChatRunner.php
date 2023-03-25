<?php

namespace Playground\Openai;

use OpenAI;

class GptChatRunner
{
    public function run(): void
    {
        $client = OpenAI::client('<YOUR_API_KEY>');
        $stream = $client->chat()->createStreamed([
            'model' => 'gpt-4', // Caution gpt-4 model is currently not available to everyone via the openai api.
            'messages' => [
                ['role' => 'user', 'content' => 'Hello!'],
            ],
        ]);

        foreach($stream as $response){
            echo $response->choices[0]->delta->content ?? '';
        }
    }
}
