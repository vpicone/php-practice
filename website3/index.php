<?php
// Message Vars
$alertMessage = '';
$alertMessageClass = '';

// Check for form submit
if (filter_has_var(INPUT_POST, 'submit')) {
    // Get Form Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        // Check Email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            //Failed validation
            $alertMessage = 'Invalid email.';
            $alertMessageClass = 'alert-danger';
        } else {
            $toEmail = 'vpicone+phpcontact@gmail.com';
            $subject = 'Contact Request From ' . $name;
            $body = '<h2>Contact Request</h2>
                <p><strong>Name: </strong>' . $name . '</p>' .
                '<p><strong>Email: </strong>' . $email . '</p>' .
                '<p>' . $message . '</p>';

            //email headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

            //additional headers
            $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

            if (mail($toEmail, $subject, $body, $headers)) {
                $alertMessage = 'E-mail has been sent.';
                $alertMessageClass = 'alert-success';
            } else {
                $alertMessage = 'E-mail was not successful.';
                $alertMessageClass = 'alert-danger';
            }
        }

    } else {
        // Failed
        $alertMessage = 'Please fill in all fields';
        $alertMessageClass = 'alert-danger';
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    <title>Contact Form</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if ($alertMessage != '') : ?>
            <div class="alert <? echo $alertMessageClass; ?>">
                <?php echo $alertMessage ?>
            </div>
        <?php endif; ?>
        <form method="post" >
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : '' ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '' ?>">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea type="text" name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : '' ?></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>