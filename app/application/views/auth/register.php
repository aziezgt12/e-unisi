
<!DOCTYPE html>
<html lang="en">
<head>
    <title>How To Create</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
<style>
a {
    text-decoration: none;
}
.login-page {
    width: 100%;
    height: 100vh;
    display: inline-block;
    display: flex;
    align-items: center;
}
.form-right i {
    font-size: 100px;
}
</style>
</head>
<body>

    <div class="login-page bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                  <h3 class="mb-3">Register</h3>
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <form action="<?php echo base_url('Auth/registerAction'); ?>" method="post" class="row g-4">

                                            <div class="col-12">
                                                <label>Full Name<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                    <input type="text" name="fullname" class="form-control" placeholder="Enter Username">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label>NIM<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                    <input type="number" name="nim" class="form-control" placeholder="Enter Username">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label>Username<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                    <input type="text" name="username" class="form-control" placeholder="Enter Username">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label>Password<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <a href="<?php echo base_url() ?>" class="btn btn-warning px-4 float-end mt-4 pr-2">Kembali</a> 
                                                <button type="submit" class="btn btn-primary px-4 pr-2 float-end mt-4">Daftar</button>

                                            </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 ps-0 d-none d-md-block">
                                <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                    <i class="">
                                    	<img src="https://wisuda.unitri.ac.id/wp-content/uploads/2019/04/toga-660x420.jpg" width="400" style="border-radius: 20px;">
                                    </i>
                                    <h6 class="fs-4 pt-2">Sistem Infromasi Wisuda dan Alumni UNISI</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <p class="text-end text-secondary mt-3">Bootstrap 5 Login Page Design</p> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>
</html>
