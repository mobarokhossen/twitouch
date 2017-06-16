<?php
if (isset($_POST['submit'])) {
    $catagory = $_POST['catagory'];
    $payment = $_POST['payment'];
    $status = "Active";

    $add2 = $con->query("SELECT * FROM job_catagory WHERE catagory='$catagory'");
    $add = $add2->num_rows;
    if ($add > 0) {
        echo "<script>alert('Catagory already exits')</script>";
    } else {
        $sql = "INSERT INTO job_catagory(catagory,payment,status)VALUES('$catagory','$payment','$status')";
        if ($con->query($sql) === TRUE) {
            echo "<script type= 'text/javascript'>alert('New Catagory Added successfully');</script>";
        } else {
            echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $con->error . "');</script>";
        }
    }
}
?>