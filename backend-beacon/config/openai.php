<?php

return [
    'api_key' => env('OPENAI_API_KEY'),
    'model' => env('OPENAI_MODEL', 'gpt-5.5'),
    'timeout' => env('OPENAI_TIMEOUT', 90),
    'max_output_tokens' => env('OPENAI_MAX_OUTPUT_TOKENS', 4500),
    'max_input_characters' => env('OPENAI_MAX_INPUT_CHARACTERS', 12000),
];
