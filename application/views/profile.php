<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- start css link -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/profile/css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!--end css-->
    <!-- start js link -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sweetalert.min.js"></script>
    <!-- end js link -->
    <title>Profile</title>
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-light">
        <div class="container-fluid">
            <img src="../assets/css/pngwing.com (1).png" width="40px" alt="" class="rounded-circle">
            <a href="#" class=" mx-4 text-white fw-bolder navbar-brand">
                HMS
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="myMenu">
                <ul class="navbar-nav w-100 justify-content-end">
                    <div class="input-group mx-5 w-50">
                        <input type="search" class="form-control" placeholder="Search by Name, Email Room No....">
                        <span class="input-group-text text-white btn fw-bold">Search</span>
                    </div>
                    <button class="btn logout-btn text-white fw-bold px-4">Logout</button>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <!--navtab-->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#booking" class="nav-link active fw-bold" data-bs-toggle="tab">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a href="#inHouse" class="nav-link  fw-bold" data-bs-toggle="tab">InHouse</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link  fw-bold" data-bs-toggle="tab">Casher</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link  fw-bold" data-bs-toggle="tab">Archive</a>
                    </li>
                </ul>
                <br>
                <!--nav panes-->
                <div class="tab-content">
                    <div class="tab-pane active  container mt-3" id="booking">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <button class="btn action-btn text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Register</button>
                            </div>

                            <div class="col-md-4 text-center">
                                <button class="btn action-btn text-white">Print</button>
                            </div>

                            <div class="col-md-4 text-center">
                                <button class="btn action-btn text-white">Tootal Booking</button>
                            </div>
                        </div>
                        <div>
                            <h1>All Booking Data</h1>
                            <table class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Location</th>
                                        <th>Room No</th>
                                        <th>Full Name</th>
                                        <th>Check In </th>
                                        <th>Check out</th>
                                        <th>Total Person</th>
                                        <th>Notice</th>
                                        <th>Registerd At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mumbai</td>
                                        <td>15</td>
                                        <td>Alok Kumar</td>
                                        <td>12/08/2024</td>
                                        <td>12/08/2024</td>
                                        <td>5</td>
                                        <td>All Includes</td>
                                        <td>12/05/2024</td>
                                        <td>
                                            <button class="btn p-1 px-2 btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button class="btn p-1 px-2 btn-info">
                                                <i class="fa fa-check"></i>
                                            </button>
                                            <button class="btn p-1 px-2 btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <div class="tab-pane container mt-3" id="inHouse">
                        <p class="h2">Login</p>
                        <form class="login-form">
                            <input type="email" name="email" placeholder="Email" class="mb-3 form-control">
                            <input type="password" name="password" placeholder="Password" class="mb-3 form-control">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <div class="d-flex justify-content-center align-items-center  col-md-6 mt-5 ">
                <img src="assets/css/pexels.jpg" class="w-100 h-100" alt="">
            </div> -->

        </div>
    </div>
    </div>

    <!-- start model-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog model-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Registraion Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="reg-from">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" class="mb-3 form-control" placeholder="Full Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="mb-3 form-control" placeholder="Location">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" class="mb-3 form-control" placeholder="Room No">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="mb-3 form-control" placeholder="Total Person">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label>Check in date </label>
                                <input type="date" class="mb-3 form-control" >
                            </div>
                            <div class="col-md-6">
                            <label>Check out date </label>
                                <input type="date" class="mb-3 form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="number" class="mb-3 form-control" placeholder="Price">
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="mb-3 form-control" placeholder="Phone No.">
                            </div>
                        </div>

                        <div class="row mb-3">
                                <textarea class="mb-3 form-control" placeholder="Message...."></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!--end model-->

    <!--start js -->
    <script src="../assets/profile/js/profile.js"></script>
    <!--end js-->
</body>

</html>