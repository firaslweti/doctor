<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Consulting AI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #chat-container {
            max-width: 600px;
            margin: 20px auto;
            border: 1px solid #ccc;
            padding: 10px;
            overflow-y: scroll;
            height: 300px;
        }
        #user-input {
            width: 100%;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
        include "includes/navuser.php";  
    
    ?>
    <div id="chat-container" ></div>
    <input type="text" id="user-input" placeholder="Type your message...">
    <button onclick="sendMessage()">Send</button>

    <script>
        function sendMessage() {
            var userInput = document.getElementById('user-input').value;
            displayMessage('You', userInput);

            // Make an API call to your PHP script
            var apiUrl = 'apiproxy.php'; // Corrected API proxy file name

            // For simplicity, we'll use the fetch API for making the request
            fetch(apiUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ message: userInput }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    displayMessage('Error', data.error);
                } else {
                    var aiResponse = data.response;
                    displayMessage('AI', aiResponse);
                }
            })
            .catch(error => console.error('Error:', error));
        }

        function displayMessage(sender, message) {
            var chatContainer = document.getElementById('chat-container');
            var messageElement = document.createElement('div');
            messageElement.innerHTML = '<strong>' + sender + ':</strong> ' + message;
            chatContainer.appendChild(messageElement);
        }
    </script>
</body>
</html>
