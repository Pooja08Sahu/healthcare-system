<!DOCTYPE html>
<html>
<head>
    <title>Healthcare Management System</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>

        body {
    background: #f5f8ff;
}

.service-card {
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    transition: 0.3s;
}

.service-card:hover {
    transform: translateY(-8px);
}

.service-card p {
    font-size: 14px;
    color: #555;
}
        </style>
</head>
<body>
    

<?php
include'header.php';
?>


<div class="container my-5">
    <h2 class="text-center fw-bold mb-4">Our Healthcare Services</h2>

    <div class="row g-4">

        <!-- Patient -->
        <div class="col-md-3">
            <div class="card service-card text-center">
                <img src="image/patient.jpg" class="mx-auto mt-3" width="70">
                <div class="card-body">
                    <h5>Patient</h5>
                    <p>Manage records & appointments</p>
                    <a href="#" class="btn btn-success">Book Appointment</a>
                </div>
            </div>
        </div>

        <!-- Doctor -->
        <div class="col-md-3">
            <div class="card service-card text-center">
                <img src="image/doctor.jpg" class="mx-auto mt-3" width="70">
                <div class="card-body">
                    <h5>Doctor</h5>
                    <p>View patients & appointments</p>
                    <a href="#" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>

        <!-- Appointment -->
        <div class="col-md-3">
            <div class="card service-card text-center">
                <img src="image/pic.jpg" class="mx-auto mt-3" width="70">
                <div class="card-body">
                    <h5>Appointment</h5>
                    <p>Schedule consultations</p>
                    <a href="#" class="btn btn-info">Book</a>
                </div>
            </div>
        </div>

        <!-- Pharmacy -->
        <div class="col-md-3">
            <div class="card service-card text-center">
                <img src="image/madicine.png" class="mx-auto mt-3" width="70">
                <div class="card-body">
                    <h5>Pharmacy</h5>
                    <p>Order medicines</p>
                    <a href="#" class="btn btn-warning">Manage</a>
                </div>
            </div>
        </div>

    </div>
</div>





<div class="container my-5">
    
    <div class="row g-4">

        <!-- laboratory -->
        <div class="col-md-3">
            <div class="card service-card text-center">
                <img src="image/laboratory.png" class="mx-auto mt-3" width="70">
                <div class="card-body">
                    <h5>Laboratory</h5>
                    <p>Book test and View lab result</p>
                    <a href="#" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>

        <!-- billing -->
        <div class="col-md-3">
            <div class="card service-card text-center">
                <img src="image/billing.png" class="mx-auto mt-3" width="70">
                <div class="card-body">
                    <h5>Billing</h5>
                    <p>View bill and manage payment</p>
                    <a href="#" class="btn btn-secondary">Manage</a>
                </div>
            </div>
        </div>

        <!-- Emergency -->
        <div class="col-md-3">
            <div class="card service-card text-center">
                <img src="image/emergency.png" class="mx-auto mt-3" width="70">
                <div class="card-body">
                    <h5>Emergency</h5>
                    <p>Get Immedate madical assistance</p>
                    <a href="#" class="btn btn-info">Manage</a>
                </div>
            </div>
        </div>

        <!-- Admin -->
        <div class="col-md-3">
            <div class="card service-card text-center">
                <img src="image/admin.jpg" class="mx-auto mt-3" width="70">
                <div class="card-body">
                    <h5>Admin</h5>
                    <p>Administe doctors, patients, and staff</p>
                    <a href="#" class="btn btn-danger">Request Ambulance</a>
                </div>
            </div>
        </div>

    </div>
</div>

<div >
<?php
include 'footer.php';
?>

</div>
