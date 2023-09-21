<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- My Css -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Online Icons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    
    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="script.js"></script>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-center mt-3">Book A New Meeting</h3>
                                <hr>
                            </div>
                            <div class="col-12">
                                <p class="text-secondary">To book a new meeting click on the booking form. you will be on 
                                    booking form page. Fill the form and submit it. You will get a
                                    confirmation mail on your email address if your booking is confirmed.
                                    <br> 
                                    <br>
                                    To see the calender click on the show calender button. You will be
                                    on calender page. You can see the booking calender of the current month.
                                </p>
                            </div>
                            <div class="d-grid gap-2 mt-3 mb-3">
                                <button class="btn btn-secondary" type="button">View Calender</button>
                                <button class="btn btn-success" type="button">Book a New Meeting</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="mt-3">Application Status</h3>
                                <hr>
                            </div>

                            <div class="col-12">
                                <div class="card-2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p>Date : 29-8-2023</p>
                                                <p>Time : 02:30 PM</p>
                                                <p><span class="badge bg-success">Approved</span></p>
                                            </div>
                                            <div class="col-md-4 mt-md-0 mt-3 d-flex justify-content-center align-items-center">
                                                <a href="#" class="btn btn-secondary">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="card-2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p>Date : 03-9-2023</p>
                                                <p>Time : 10:00 AM</p>
                                                <p><span class="badge bg-warning">Pending</span></p>
                                            </div>
                                            <div class="col-md-4 mt-md-0 mt-3 d-flex justify-content-center align-items-center">
                                                <a href="#" class="btn btn-secondary">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card mt-5">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-12">
                        <h3 class="text-center mt-3">Meeting History</h3>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <table id="stable" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Agenda</th>
                                    <th>Host</th>
                                </tr>
                            </thead>
                            <tbody>
                        <!-- Automatic Code injected by PHP -->
                            <?php //echo $rows; ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- script for table -->
    <script>
        new DataTable('#stable');
    </script>
</body>
</html>