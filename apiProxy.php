<?php

$userInput = json_decode(file_get_contents('php://input'), true);

$apiKey = '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';

function makeAIRequest($apiKey, $userInput) {
    $apiEndpoint = 'https://api.openai.com/v1/completions';

    if (isset($userInput['message'])) {
        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey,
        ];

        $data = [
            'model' => 'gpt-3.5-turbo-instruct',
            'prompt' => $userInput['message'],
            'temperature' => 0.7, // Adjust temperature according to your needs
            'max_tokens' => 256,
            'top_p' => 1,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
        ];

        // Initialize curl
        $ch = curl_init($apiEndpoint);
        // Set curl options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        // Execute curl request
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            echo json_encode(['error' => 'Curl error: ' . curl_error($ch)]);
        } else {
            // Decode response
            $aiResponse = json_decode($response, true);

            // Check for JSON decoding errors
            if (json_last_error() != JSON_ERROR_NONE) {
                echo json_encode(['error' => 'Error decoding AI response: ' . json_last_error_msg()]);
            } else {
                // Get completion text from AI response
                $completionText = isset($aiResponse['choices'][0]['text']) ? $aiResponse['choices'][0]['text'] : 'No response';
                echo json_encode(['response' => $completionText]);
            }
        }

        // Close curl
        curl_close($ch);
    } else {
        echo json_encode(['error' => 'Invalid input.']);
    }
}

// Example usage:
makeAIRequest($apiKey, $userInput);

?>
