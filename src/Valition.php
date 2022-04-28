<?php 
    namespace WoasValidation; 
    class Validation {
        public function require(array $data, string $field): bool {
            return isset($data[$field]); 
        }
    }
?>