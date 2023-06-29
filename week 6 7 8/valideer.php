<?php

function isValidEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isNotValidString(string $data): bool {
    return empty(trim($data));
}

function isValidNumeric(string $number): bool {
    return is_numeric($number);
}