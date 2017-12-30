<?php
    // Check for posted data
// if (filter_has_var(INPUT_POST, 'data')) {
//     echo 'Data found';
// } else {
//     echo 'No Data';
// }

if (filter_has_var(INPUT_POST, 'data')) {
    $email = $_POST['data'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);


    if (filter_input(INPUT_POST, $email, FILTER_VALIDATE_EMAIL)) {
        echo 'EMAIL IS VALID';
    } else {
        echo 'EMAIL IS INVALID';
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SLEF']; ?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>