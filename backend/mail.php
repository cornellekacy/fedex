
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<!-- End Left Sidebar  -->
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>


        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-3">
                 
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-title">

                        </div>
                        <div class="basic-form">
                            <div class="basic-form">
                                <form  method="post" >
                                    <label><b>Jk Name</b></label>
                                    <input type="text" name="jkname" class="form-control" placeholder="Jk Name" required="">
                                </div>
                                <div class="form-group">
                                    <label><b>Jk Email</b></label>
                                    <input type="email" name="email" class="form-control" placeholder="Jk Email" required="">
                                </div>
                                <div class="form-group">
                                    <label><b>Quantity</b></label>
                                    <input type="text" name="gram" class="form-control" placeholder="Quantity" required="">
                                </div>
                                <div class="form-group">
                                    <label><b>Tracking Number</b></label>
                                    <input type="text" name="tracking" class="form-control" placeholder="Tracking Number" required="">
                                </div>
                                <button type="submit"class="btn btn-primary">Mail Tracking</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3">
         
        </div>
    </div>







    <!-- End PAge Content -->
    <?php include 'footer.php'; ?>