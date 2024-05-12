
<?php
// signup.php to handle all AJAX requests for field validation

$field = $_POST['field'] ?? '';
$value = $_POST['value'] ?? '';

function validateFirstName($fname) {
    return empty($fname) ? "First name is required. Please try again!" : "";
}

function validateLastName($lname) {
    return empty($lname) ? "Last name is required. Please try again!" : "";
}

function validateUsername($uname) {
    return empty($uname) ? "Username is required. Please try again!" : "";
}

function validatePassword($password) {
    if (empty($password)) {
        return "Password is required. Please try again!";
    }
    if (strlen($password) < 6) {
        return "Password must be at least 6 characters long. Please try again!";
    }
    if (!preg_match('/[A-Z]/', $password)) {
        return "Password must include at least one uppercase letter. Please try again!";
    }
    if (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) {
        return "Password must include at least one special character. Please try again!";
    }
    return "";
}

function validateConfirmPassword($password, $confirmPassword) {
    if ($password !== $confirmPassword) {
        return "Password doesn't match. Please try again!";
    }
    return "";
}

$response = "";
switch ($field) {
    case 'fname':
        $response = validateFirstName($value);
        break;
    case 'lname':
        $response = validateLastName($value);
        break;
    case 'uname':
        $response = validateUsername($value);
        break;
    case 'pcode1':
        $response = validatePassword($value);
        break;
    case 'pcode2':
        $confirmValue = $_POST['confirmValue'] ?? '';
        $response = validateConfirmPassword($value, $confirmValue);
        break;
    default:
        $response = "Invalid request";
}

echo $response;
?>

