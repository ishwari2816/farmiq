<!-- chatbot_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <style>
        /* Chatbot Styles */
        #chatbox {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            height: 400px;
            border: 1px solid #ccc;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1); 
        }
        #chatbox-header {
            background: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }
        #chatbox-body {
            height: 300px;
            padding: 10px;
            overflow-y: auto;
        }
        #chatbox-footer {
            padding: 10px;
        }
        #chatbox-input {
            width: 100%;
            padding: 5px;
        }
    </style>
</head>
<body>

    <div id="chatbox">
        <div id="chatbox-header">
            Chatbot
        </div>
        <div id="chatbox-body">
            <!-- Chat messages will be displayed here -->
        </div>
        <div id="chatbox-footer">
            <input type="text" id="chatbox-input" placeholder="Type a message..." onkeydown="sendMessage(event)">
        </div>
    </div>

    <script>
        // Function to send a message
        function sendMessage(event) {
            if (event.key === 'Enter') {
                let message = document.getElementById('chatbox-input').value;
                if (message.trim() === '') return;

                // Append user's message to chat
                document.getElementById('chatbox-body').innerHTML += `<div>User: ${message}</div>`;
                
                // Send message to CI3 backend for response
                fetch('<?= site_url("chatbot/send_message") ?>', {
                    method: 'POST',
                    body: JSON.stringify({ message: message }),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Append chatbot's response
                    document.getElementById('chatbox-body').innerHTML += `<div>Bot: ${data.reply}</div>`;
                })
                .catch(error => console.error('Error:', error));

                // Clear the input field
                document.getElementById('chatbox-input').value = '';
            }
        }
    </script>

</body>
</html>
