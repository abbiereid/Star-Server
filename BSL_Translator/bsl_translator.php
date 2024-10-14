<?php

class BSL_translation_server {

    public function __construct() {
        
    }

    public function handle_request() {
        $method = $_SERVER['REQUEST_METHOD'];
            switch($method) {
                case 'POST':
                    $this->handlePost();
                    break;
                default:
                    http_response_code(405);
                    break;
            }
    }

    private function handlePost() {
        if(!isset($_FILES['images'])) {
            http_response_code(400);
            return;
        }

        http_response_code(200);
        echo json_encode(['success' => True]);
    }

}

$server = new BSL_translation_server();
$server->handle_request();

?>