<?php
    $title = "Contact us";
    include 'components/header.php';
?>

<!-- contact -->
<div class="container" id="contact">
    <h1 class="text-center">CONTACT US</h1>
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fas fa-phone"> Phone</i>
                <h6>+00000000000000000</h6>
            </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fa-solid fa-envelope"> Email</i>
                <h6>FASHION2023@gmail.com</h6>
            </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fa-solid fa-location-dot"> Address</i>
                <h6>Nasr city </h6>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 30px;">
        <div class="col-md-4 py-3 py-md-0">
            <input type="text" class="form-control form-control" placeholder="Name">
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <input type="text" class="form-control form-control" placeholder="Email">
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <input type="number" class="form-control form-control" placeholder="Phone">
        </div>
        <div class="form-group" style="margin-top: 30px;">
        <textarea class="form-control" id=""rows="5" placeholder="Message"></textarea>
    </div>
    <div id="messagebtn" class="text-center"><button>Message</button></div>
    </div>
</div>
<!-- contact -->

<?php include 'components/footer.php'; ?>