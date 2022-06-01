<!--
=========================================================
* Argon Design System - v1.2.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>/assets/img/favicon.png">
    <title>
        Argon Design System by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="<?= base_url(); ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="<?= base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?= base_url(); ?>/assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
</head>

<body class="index-page">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-dark bg-dark py-2">
        <div class="container">
            <a class="navbar-brand" href="#">Information Technology Journal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">User Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Current</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Archives</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                            <i class="ni ni-collection d-lg-none"></i>
                            <span class="nav-link-inner--text">Account</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="<?= base_url(); ?>/examples/login.html" class="dropdown-item">Login</a>
                            <a href="<?= base_url(); ?>/examples/register.html" class="dropdown-item">Register</a>
                            <a href="<?= base_url(); ?>/examples/register.html" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="section section-hero section-shaped">
            <div class="page-header">
                <h2 class="text-center">#(no.)SUMMARY</h2>



                <div class="container align-items-left ">
                    <div class="col px-0 mt-6">
                        <div id="content" class="justify-content-left mb-3">
                            <tbody>
                                <tr><a class="mr-3" href="#">SUMMARY</a></tr>
                                <tr><a class="mr-3" href="#">REVIEW</a></tr>
                                <tr><a class="mr-3" href="#">EDITING</a></tr>
                                <tr><a class="mr-3" href="#">HISTORY</a></tr>
                                <tr><a class="mr-3" href="#">REFERENCES</a></tr>
                            </tbody>
                        </div>
                        <!-- content -->
                    </div>
                    <hr>
                    <div class="col px-0">
                        <div id="submission">
                            <h3>Submission</h3>
                            <hr>


                            <table width="100%" class="data">
                                <tr>
                                    <td width="20%" class="label">Authors</td>
                                    <td width="80%" colspan="2" class="value">

                                        Cyntia Niani
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">Title</td>
                                    <td colspan="2" class="value">test</td>
                                </tr>
                                <tr>
                                    <td class="label">Original file</td>
                                    <td colspan="2" class="value">
                                        <a href="" class="file">12541-32566-1-SM.pdf</a>2022-05-24
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td class="label">Supp. files</td>
                                    <td colspan="2" class="value">
                                        <a href="" class="file">12541-32567-1-SP.pdf</a>
                                        
                                        2022-05-24
                                        <a href="" class="action">Edit</a>

                                        <a href="" onclick="return confirm('Are you sure you want to delete this supplementary file?')" class="action">Delete</a>

                                        <a href="" class="action">Add a Supplementary File</a>
                                        <br />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">Submitter</td>
                                    <td colspan="2" class="value">

                                        Cyntia Niani
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">Date submitted</td>
                                    <td>2022-05-24</td>
                                </tr>
                                <tr>
                                    <td class="label">Section</td>
                                    <td class="value">Articles</td>
                                    
                                </tr>
                                <tr valign="top">
                                    <td width="20%" class="label">Author comments</td>
                                    <td width="80%" colspan="2" class="data">Name | Affiliation | Email | Reasons</td>
                                </tr>
                            </table>
                        </div>
                        <hr>
                        <div class="col px-0">
                            <div id="editors">
                                <h3>Editors</h3>

                                <form action="" method="post">
                                    <input type="hidden" name="articleId" value="12541" />
                                    <table width="100%" class="listing">
                                        <tr class="heading" valign="bottom">
                                            <td width="20%"></td>
                                            <td width="30%"></td>
                                            <td width="10%">Review</td>
                                            <td width="10%">Editing</td>
                                            <td width="20%">Request</td>
                                            <td width="10%">Action</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            
                                            
                                            <td colspan="6" class="nodata ml-8">None assigned</td>
                                        </tr>
                                    </table>
                                    <button type="button" class="btn btn-primary btn-sm">Record</button>
                                    <a href="" class="action">Add Section Editor</a>
                                    |<a href="" class="action">Add Editor</a>
                                    |<a href="" class="action">Add Self</a>
                                </form>
                            </div>

                        </div>
                        <hr>
                        <div class="col px-0">
                            <div id="status">
                                <h3>Status</h3>

                                <table width="100%" class="data">
                                    <tr>
                                        <td width="20%" class="label">Status</td>
                                        <td width="30%" class="value">
                                            Awaiting assignment
                                        </td>
                                        <td width="50%" class="value">
                                            <a href="" class="action">Reject and Archive Submission</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label">Initiated</td>
                                        <td colspan="2" class="value">2022-05-24</td>
                                    </tr>
                                    <tr>
                                        <td class="label">Last modified</td>
                                        <td colspan="2" class="value">2022-05-24</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <hr>
                        <div class="col px-0">
                            <div id="metadata">
                                <h3>Submission Metadata</h3>

                                <p><a href="" class="action">Edit Metadata</a></p>


                                <div id="authors">
                                    <h4>Authors</h4>

                                    <table width="100%" class="data">
                                        <tr valign="top">
                                            <td width="20%" class="label">Name</td>
                                            <td width="80%" class="value">

                                                Cyntia Niani 
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="label">Affiliation</td>
                                            <td class="value"></td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="label">Country</td>
                                            <td class="value"></td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="label">Bio Statement</td>
                                            <td class="value"></td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" class="label">Principal contact for editorial correspondence.</td>
                                        </tr>
                                    </table>
                                </div>

                                <div id="titleAndAbstract" class="mt-3 mr-3">
                                    <h4>Title and Abstract</h4>

                                    <table width="100%" class="data">
                                        <tr valign="top">
                                            <td width="20%" class="label">Title</td>
                                            <td width="80%" class="value">test</td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="separator"></td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="label">Abstract</td>
                                            <td class="value">test</td>
                                        </tr>
                                    </table>
                                </div>

                                <div id="indexing" class="mt-3 mr-3">
                                    <h4>Indexing</h4>

                                    <table width="100%" class="data">
                                        <tr valign="top">
                                            <td width="20%" class="label">Keywords</td>
                                            <td width="80%" class="value"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="separator"></td>
                                        </tr>
                                        <tr valign="top">
                                            <td width="20%" class="label">Language</td>
                                            <td width="80%" class="value">en</td>
                                        </tr>
                                    </table>
                                </div>

                                <div id="supportingAgencies" class="mt-3 mr-3">
                                    <h4>Supporting Agencies</h4>

                                    <table width="100%" class="data">
                                        <tr valign="top">
                                            <td width="20%" class="label">Agencies</td>
                                            <td width="80%" class="value"></td>
                                        </tr>
                                    </table>
                                </div>



                                <div id="citations" class="mt-3 mr-3">
                                    <h4>References</h4>

                                    <table width="100%" class="data">
                                        <tr valign="top">
                                            <td width="20%" class="label">References</td>
                                            <td width="80%" class="value"></td>
                                        </tr>
                                    </table>
                                </div>

                            </div><!-- metadata -->
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
    <br>
    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">


            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->

            <!-- Section: Form -->

            <!-- Section: Text -->


            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row align-items-start">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-blue">NOTIFICATIONS</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">View</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Suscribe</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">manage</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-blue">Browse</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">By Issue</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">By Author</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">By Title</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Other Journals</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-blue">information</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">For Readers</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">For Authors</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">For Librarians</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-blue">user</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">login</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">logout</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">My Journals</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">My Profile</a>
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">

            <a class="text-white" href="https://mdbootstrap.com/"></a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    </div>
    <!--   Core JS Files   -->
    <script src="<?= base_url(); ?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="<?= base_url(); ?>/assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?= base_url(); ?>/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>/assets/js/plugins/moment.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>/assets/js/plugins/bootstrap-datepicker.min.js"></script>
    <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="<?= base_url(); ?>ttps://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="<?= base_url(); ?>/assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
    <script>
        function scrollToDownload() {

            if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }
    </script>
    <script src="<?= base_url(); ?>ttps://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-design-system-pro"
            });
    </script>
</body>

</html>