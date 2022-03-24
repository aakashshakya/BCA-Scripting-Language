<?php 
class CustomException extends Exception {
    public function __construct($message) {
        parent::__construct("From custom exception " . $message);
    }
}