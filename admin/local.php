<?php
session_start();
include_once "../inc/admin.inc.php";
$error = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // CHECK IF ANY OF THE FILDS ARE EMPTY
    if (!empty($_POST['depFrom'] && $_POST['destination'] &&
        $_POST['planeid'] && $_POST['depDate'] && $_POST['returnDate'] && $_POST['tickets'] && $_POST['price'])) {
        $depFrom = htmlspecialchars($_POST['depFrom']);
        $destination = htmlspecialchars($_POST['destination']);
        $planeId = htmlspecialchars($_POST['planeid']);
        $depDate = htmlentities($_POST['depDate']);
        $returnDate = htmlspecialchars($_POST['returnDate']);
        $numofTickets = htmlspecialchars($_POST['tickets']);
        $price = htmlspecialchars($_POST['price']);

        $controllObj = new Controller();
        $controllObj->generateTickets(
            $depFrom,
            $destination,
            $planeId,
            $depDate,
            $returnDate,
            $numofTickets,
            $price,
            "international"
        );
    } else {
        // if any of the filds are empty display this message
        $error = "you must insert all the information needed";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/generate.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include "./sidebar.php";
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include "./topBar.php";
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <h1 class="h3 mb-4 text-gray-800">Generate tickets for local flights</h1>
                    <span id=<?php $error == "successfuly generated" ? print "noerror" : print "error" ?>>
                        <?php echo $error; ?>
                    </span>
                    <form action="./local.php" method="post" id="generate">
                        <input type="text" name="depFrom" id="dep" placeholder="Departure from">
                        <input type="text" name="destination" id="dest" placeholder="destination">
                        <input type="number" name="planeid" id="planeid" placeholder="id of the plane">
                        <input type="date" name="depDate" id="depDate" placeholder="departure Date">
                        <input type="date" name="returnDate" id="return" placeholder="return Date">
                        <input type="number" name="tickets" id="tickets" placeholder="how many tickets">
                        <input type="number" name="price" id="price" placeholder="price per ticket">
                        <button type="submit">generate</button>
                    </form>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include "./footer.php";
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>