<?php include("includes/header.php") ?>
<?php include("includes/navbar.php") ?>
<div class="container-fluid px-0">
    <div class="container mt-5 pt-5">
    </div>
    <div class="container pt-2">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb float-start mt-4 mb-0 bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
            <h1 class="rus_head">
                REACH US
            </h1>
        </div>
    </div>
    <div class="container p-5">
        <form>
            <div class="form-floating mb-3 border-bottom">
                <input type="text" class="form-control border-0 shadow-none" id="floatingInput" placeholder="Full Name">
                <label for="floatingInput">Your Name</label>
            </div>
            <div class="form-floating mb-3 border-bottom">
                <input type="Numver" class="form-control border-0 shadow-none" id="floatingPassword" placeholder="Mobile Number">
                <label for="floatingPassword">Mobile Number</label>
            </div>
            <div class="form-floating mb-3 border-bottom">
                <textarea class="form-control border-0 shadow-none" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Describe yor requirement</label>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-info mb-3 float-end rounded-0 rus_submit">Submit Details</button>
            </div>
        </form>
    </div>
</div>
<?php include("includes/footer.php") ?>