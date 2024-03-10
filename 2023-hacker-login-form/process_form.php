<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $interested_sports = $_POST['interested_sports'];
    // Collect other form data as needed

    // Store data into a PHP file
    $data = "<?php\n";
    $data .= "// User Data\n";
    $data .= "\$username = \"$username\";\n";
    $data .= "\$email = \"$email\";\n";
    // Add more variables as needed

    // File path to store the data
    $file = 'userdata.php';

    // Write data to the file
    file_put_contents($file, $data);

    // Redirect to a thank you page or display a message
    header("Location: thank_you.html");
    exit;
}
?>