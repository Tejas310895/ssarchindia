<?php include("includes/header.php") ?>
<?php include("includes/navbar.php") ?>
<div class="container-fluid px-0">
    <div class="container pt-2">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb float-start mt-4 mb-0 bg-transparent">
                    <li class="breadcrumb-item"><a href=".">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
            <h1 class="rus_head">
                REACH US
            </h1>
        </div>
    </div>
    <div class="container p-5">
        <form method="post" action="">
            <div class="form-floating mb-3 border-bottom">
                <input type="text" class="form-control border-0 shadow-none" name="customer_name" id="floatingInput" placeholder="Full Name" required>
                <label for="floatingInput">Your Name</label>
            </div>
            <div class="form-floating mb-3 border-bottom">
                <input type="tel" pattern="^\d{10}" class="form-control border-0 shadow-none" name="customer_contact" id="floatingPassword" placeholder="Mobile Number" required>
                <label for="floatingPassword">Mobile Number</label>
            </div>
            <div class="form-floating mb-3 border-bottom">
                <input type="email" class="form-control border-0 shadow-none" name="customer_email" id="floatingPassword" placeholder="Email Id" required>
                <label for="floatingPassword">Email Id</label>
            </div>
            <div class="form-floating mb-3 border-bottom">
                <textarea class="form-control border-0 shadow-none" placeholder="Leave a comment here" name="customer_desc" id="floatingTextarea2" style="height: 100px" required></textarea>
                <label for="floatingTextarea2">Describe yor requirement</label>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-info mb-3 float-end rounded-0 rus_submit" name="form_submit">Submit Details</button>
            </div>
        </form>
    </div>
</div>

<?php

require_once("includes/db.php");

$sql1 = "SELECT enquiry_id FROM project_enquiries ORDER BY enquiry_id DESC LIMIT 1";
$results = $con->query($sql1);
if ($results->num_rows > 0) {
    $application_no =  "SSAR" . random_int(10000000, 99999999) . $results->fetch_assoc()['enquiry_id'];
}

if (isset($_POST['form_submit'])) {
    $c_name = $_POST['customer_name'];
    $c_contact = $_POST['customer_contact'];
    $c_email = $_POST['customer_email'];
    $c_desc = $_POST['customer_desc'];

    $sql = "INSERT INTO project_enquiries VALUES ('default','$application_no','$c_name','$c_email','$c_contact','$c_desc','initiated',NOW(),NOW())";
    if ($con->query($sql)) {
        echo "<script>alert('Your enquiry is submitted successfully')</script>";
        echo "<script>window.open('.','_self')</script>";
    } else {
        echo "<script>alert('Failed to submit enquiry! Try again'))</script>";
        echo "<script>window.open('contact_us','_self')</script>";
    }
}


?>
<?php include("includes/footer.php") ?>