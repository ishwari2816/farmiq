<?php
// application/controllers/Chatbot.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chatbot extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        // Load the chatbot view
        $this->load->view('frontend/chatboat');
    }  

    public function send_message() {
        // Get the incoming message
        $input = json_decode(file_get_contents('php://input'), true);
        $userMessage = $input['message'];

        // Get the bot response
        $botReply = $this->getBotResponse($userMessage);

        // Return a JSON response
        echo json_encode(['reply' => $botReply]);
    }

    private function getBotResponse($message) {
        // Here, you can add AI, predefined responses, or an external API for your bot
        // For now, let's return a simple predefined response
        $responses = [
            'hello' => 'Hi! How can I help you today?',
            'how are you' => 'I am doing well, thank you!',
            'bye' => 'Goodbye! Have a great day!'
        ];

        // If the message matches a known response, return it
        $message = strtolower(trim($message));
        if (array_key_exists($message, $responses)) {
            return $responses[$message];
        } else {
            return "Sorry, I don't understand that.";
        }
    }
}
