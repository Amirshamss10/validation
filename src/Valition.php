<?php 
    namespace WoasValidation; 
    class Validation {
        public function validateForm(array $data, string $field): bool {
            return isset($data[$field]); 
        }
    }
?>
