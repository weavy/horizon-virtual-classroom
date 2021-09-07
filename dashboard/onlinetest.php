<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Online Class Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/Horizon.svg">

    <!-- inline style to handle loading of various element-->
    <style>
        body.loading {
            visibility: hidden;
        }
        #feed-container {
                            width: 100%;
                            height: 600px;
                         }  
    </style>

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="main-style-container" />
    <link href="assets/css/weavy.css" rel="stylesheet" type="text/css" />
    <script src="https://horizond.azurewebsites.net/javascript/weavy.jquery.js"></script>
    <script>var weavy = new Weavy();</script>
</head>

<body class="loading">
    <div id="detached-topbar-placeholder"></div>
    <!-- Begin page -->
    <div class="wrapper">

        <div id="vertical-sidebar-placeholder">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu" id="left-side-menu-container">

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav pt-4">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item mm-open">
                            <a href="assignment.php" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span> Dashboards </span>
                            </a>
                            <ul class="side-nav-second-level mm-show" aria-expanded="false">
                                <li>
                                    <a href="../index.php"><i class="dripicons-exit"></i> &nbsp;Exit to Home</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="assignment.php" class="side-nav-link mm-active">
                                <i class="dripicons-clipboard"></i>
                                <span> Assignment </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="onlinetest.php" class="side-nav-link mm-active">
                                <i class="dripicons-document-edit"></i>
                                <span> Class Tests </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="calender.php" class="side-nav-link mm-active">
                                <i class="dripicons-calendar"></i>
                                <span> Calender </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="./Digilibrary.php" class="side-nav-link mm-active">
                                <i class="dripicons-archive"></i>
                                <span> Digi-Library </span>
                            </a>
                        </li>

                    </ul>

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
        </div>
        <div id="detached-sidebar-placeholder"></div>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                
                


                    
                    
                        
                            <div class="card section-customer" data-customer-id="acme">

                            <iframe src="https://www.classmarker.com/online-test/start/?quiz=fmj61361d9d8f9ca&iframe=1" frameborder="0" style="width:100%;" height="800"></iframe>
                            
                            </div>   
                    
                    


                            

            </div>                  

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->


    <!-- Right Sidebar -->
    <div class="right-bar">
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /Right-bar -->

    <!-- Containter for Weavy Messenger -->
    <div id="weavy-messenger-container"></div>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <!-- TASK: add weavy javascript library here -->
    <scrpit src="https://horizond.azurewebsites.net/javascript/weavy.jquery.js"></scrpit>

    <!-- weavy client script -->
    <script src="assets/js/weavy.js"></script>

    <!-- third party js -->
    <script src="assets/js/vendor/jsrsasign-all-min.js"></script>
    <script src="assets/js/vendor/Chart.bundle.min.js"></script>
    <!-- third party js ends -->

</body>

</html>