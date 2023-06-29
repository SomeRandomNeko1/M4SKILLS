function isValidNumeric(string $data): bool {
    return is_numeric($data);
}

if (isValidNumeric($_POST['number']) == true) {
    $inputs['number'] = $_POST['number'];
} else {
    array_push($errors, 'Alleen cijfers zijn toegestaan');
    $inputs['number'] = $_POST['number'];
}