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
    <link rel="apple-touch-icon" sizes="76x76" href="
				<?= base_url() ?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="
					<?= base_url() ?>/assets/img/favicon.png">
    <title> Argon Design System by Creative Tim </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="
								<?= base_url() ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="
									<?= base_url() ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="
										<?= base_url() ?>/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="
											<?= base_url() ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="
												<?= base_url() ?>/assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
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
                <a href="
																			<?= base_url() ?>/examples/login.html" class="dropdown-item">Login </a>
                <a href="
																			<?= base_url() ?>/examples/register.html" class="dropdown-item">Register </a>
                <a href="
																			<?= base_url() ?>/examples/register.html" class="dropdown-item">Logout </a>
              </div>
            </li>
          </ul>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
      <div class="section section-hero section-shaped">
        <div class="page-header">
          <h2 class="text-center">#(no.)REVIEW</h2>
          <div class="container align-items-left ">
            <div class="col px-0 mt-6">
              <div id="content" class="justify-content-left mb-3">
                <tbody>
                  <tr>
                    <a class="mr-3" href="#">SUMMARY</a>
                  </tr>
                  <tr>
                    <a class="mr-3" href="#">REVIEW</a>
                  </tr>
                  <tr>
                    <a class="mr-3" href="#">EDITING</a>
                  </tr>
                  <tr>
                    <a class="mr-3" href="#">HISTORY</a>
                  </tr>
                  <tr>
                    <a class="mr-3" href="#">REFERENCES</a>
                  </tr>
                </tbody>
              </div>
              <!-- content -->
            </div>
            <hr>
            <div class="col px-0">
              <div id="submission">
                <h3>Submission</h3>
                <table width="100%" class="data">
                  <tr>
                    <td width="20%" class="label">Authors</td>
                    <td width="80%"> Cyntia Niani </td>
                  </tr>
                  <tr>
                    <td class="label">Title</td>
                    <td>test</td>
                  </tr>
                  <tr>
                    <td class="label">Section</td>
                    <td>Articles</td>
                  </tr>
                  <tr>
                    <td class="label">Editor</td>
                    <td> Baru Nanto </td>
                  </tr>
                  <tr valign="top">
                    <td class="label" width="20%">Review Version</td>
                    <td width="80%" class="value">
                      <a href="" class="file">12536-31575-1-RV.pdf</a> 2022-03-15
                    </td>
                  </tr>
                  <tr valign="top">
                    <td>&nbsp;</td>
                    <td>
                      <form method="post" action="" enctype="multipart/form-data"> Upload a revised Review Version <input type="hidden" name="articleId" value="12536" />
                        <div class="input-group mb-3">
                          <div class="input-group-prepend mb-1">
                            <span class="input-group-text bg-primary">Upload</span>
                          </div>
                          <div class="custom-file  ">
                            <input type="file" class="custom-file-input  mt-1 mb-1" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                        </div>
                      </form>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td class="label">Supp. files</td>
                    <td class="nodata">None</td>
                  </tr>
                </table>
                <div class="separator"></div>
              </div>
            </div>
            <hr>
            <div class="col px-0">
              <div id="peerReview">
                <table class="data" width="100%">
                  <tr id="reviewersHeader" valign="middle">
                    <td width="22%">
                      <h3>PeerReview</h3>
                    </td>
                    <td width="14%">
                      <h4>Round&nbsp;1</h4>
                    </td>
                    <td width="64%" class="nowrap">
                      <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12536" class="action">Select Reviewer</a>
                    </td>
                  </tr>
                </table>
                <div class="separator"></div>
                <table class="data" width="100%">
                  <tr class="reviewer">
                    <td class="r1" width="20%">
                      <h4>Reviewer A</h4>
                    </td>
                    <td class="r2" width="34%">
                      <h4>Prayogi Reviewer</h4>
                    </td>
                    <td class="r3" width="46%">
                      <a href="https://iptek.its.ac.id/index.php/itj/editor/cancelReview?articleId=12536&amp;reviewId=4596" class="action">Cancel Request</a>
                    </td>
                  </tr>
                </table>
                <table width="100%" class="data">
                  <tr valign="top">
                    <td class="label">Review Form</td>
                    <td> None / Free Form Review &nbsp;&nbsp;&nbsp;&nbsp; <a class="action" href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewForm/12536/4596">Select Review Form</a>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td class="label" width="20%">&nbsp;</td>
                    <td width="80%">
                      <table width="100%" class="info">
                        <tr>
                          <td class="heading" width="25%">Request</td>
                          <td class="heading" width="25%">Underway</td>
                          <td class="heading" width="25%">Due</td>
                          <td class="heading" width="25%">Acknowledge</td>
                        </tr>
                        <tr valign="top">
                          <td> 2022-05-24 </td>
                          <td> 2022-05-29 </td>
                          <td>
                            <a href="https://iptek.its.ac.id/index.php/itj/editor/setDueDate/12536/4596">2022-06-21</a>
                          </td>
                          <td>
                            <img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/mail_disabled.gif" width="16" height="14" alt="Mail" />
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td class="label">Recommendation</td>
                    <td> None </td>
                  </tr>
                  <tr valign="top">
                    <td class="label">Review</td>
                    <td>
                      <button class="btn btn-sm btn-primary" type="button">OK</button>No Comments
                    </td>
                  </tr>
                  <tr valign="top">
                    <td class="label">Uploaded files</td>
                    <td>
                      <table width="100%" class="data">
                        <tr valign="top">
                          <td>None</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td class="label">Editor To Enter</td>
                    <td>
                      <form method="post" action="" enctype="multipart/form-data"> Upload review <input type="hidden" name="articleId" value="12536" />
                        <input type="hidden" name="reviewId" value="4596" />
                        <div class="input-group mb-3">
                          <div class="input-group-prepend mb-1">
                            <span class="input-group-text bg-primary">Upload</span>
                          </div>
                          <div class="custom-file  ">
                            <input type="file" class="custom-file-input  mt-1 mb-1" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                        </div>
                      </form>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            <hr>
            <div class="col px-0">
              <div id="editorDecision">
                <h3>Editor Decision</h3>
                <table id="table1" width="100%" class="data">
                  <tr valign="top">
                    <td class="label" width="20%">Select decision</td>
                    <td width="80%" class="value">
                      <form method="post" action="https://iptek.its.ac.id/index.php/itj/editor/recordDecision">
                        <input type="hidden" name="articleId" value="12536" />
                        <select class="custom-select" id="inputGroupSelect04">
                          <option label="Choose One" value="">Choose One</option>
                          <option label="Accept Submission" value="1" selected="selected">Accept Submission</option>
                          <option label="Revisions Required" value="2">Revisions Required</option>
                          <option label="Resubmit for Review" value="3">Resubmit for Review</option>
                          <option label="Decline Submission" value="4">Decline Submission</option>
                        </select>
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-primary mt-2" type="button">Record Decision</button>
                        </div>
                      </form>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td class="label">Decision</td>
                    <td class="value"> Accept Submission&nbsp;&nbsp;2022-05-24 </td>
                  </tr>
                  <tr valign="top">
                    <td class="label">Notify Author</td>
                    <td class="value">
                      <a href="">
                        <button class="btn btn-sm btn-primary" type="button">OK</button>
                      </a> &nbsp;&nbsp;&nbsp;&nbsp; Editor/Author Email Record <a href="javascript:openComments('https://iptek.its.ac.id/index.php/itj/editor/viewEditorDecisionComments/12536#6056');" class="icon">
                        <img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/comment.gif" width="16" height="14" alt="Comment" />
                      </a>&nbsp;&nbsp;2022-05-29
                    </td>
                  </tr>
                </table>
                <form method="post" action="https://iptek.its.ac.id/index.php/itj/editor/editorReview" enctype="multipart/form-data">
                  <input type="hidden" name="articleId" value="12536" />
                  <table id="table2" class="data" width="100%">
                    <tr valign="top">
                      <td width="20%">&nbsp;</td>
                      <td width="80%">
                        <button class="btn btn-sm btn-primary" type="button">Send to Copyediting</button>
                      </td>
                    </tr>
                    <tr valign="top">
                      <td width="20%" class="label">Review Version</td>
                      <td width="50%" class="value">
                        <input type="radio" name="editorDecisionFile" value="31575,1" />
                        <a href="https://iptek.its.ac.id/index.php/itj/editor/downloadFile/12536/31575/1" class="file">12536-31575-1-RV.pdf</a>&nbsp;&nbsp; 2022-03-15 &nbsp;&nbsp;&nbsp;&nbsp;Sent&nbsp;&nbsp;2022-05-29
                      </td>
                    </tr>
                    <tr valign="top">
                      <td width="20%" class="label">Author Version</td>
                      <td width="80%" class="nodata">None</td>
                    </tr>
                    <tr valign="top">
                      <td width="20%" class="label">Editor Version</td>
                      <td width="80%" class="nodata">None</td>
                    </tr>
                    <tr valign="top">
                      <td class="label">&nbsp;</td>
                      <td class="value">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend mb-1">
                            <span class="input-group-text bg-primary">Upload</span>
                          </div>
                          <div class="custom-file  ">
                            <input type="file" class="custom-file-input  mt-1 mb-1" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>
                </form>
              </div>
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
    <script src="
																				<?= base_url() ?>/assets/js/core/jquery.min.js" type="text/javascript">
    </script>
    <script src="
																				<?= base_url() ?>/assets/js/core/popper.min.js" type="text/javascript">
    </script>
    <script src="
																				<?= base_url() ?>/assets/js/core/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="
																				<?= base_url() ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js">
    </script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="
																				<?= base_url() ?>/assets/js/plugins/bootstrap-switch.js">
    </script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="
																				<?= base_url() ?>/assets/js/plugins/nouislider.min.js" type="text/javascript">
    </script>
    <script src="
																				<?= base_url() ?>/assets/js/plugins/moment.min.js">
    </script>
    <script src="
																				<?= base_url() ?>/assets/js/plugins/datetimepicker.js" type="text/javascript">
    </script>
    <script src="
																				<?= base_url() ?>/assets/js/plugins/bootstrap-datepicker.min.js">
    </script>
    <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="
																				<?= base_url() ?>ttps://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE">
    </script>
    <script src="
																				<?= base_url() ?>/assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript">
    </script>
    <script>
      function scrollToDownload() {
        if ($('.section-download').length != 0) {
          $("html, body").animate({
            scrollTop: $('.section-download').offset().top
          }, 1000);
        }
      }
    </script>
    <script src="
																				<?= base_url() ?>ttps://cdn.trackjs.com/agent/v3/latest/t.js">
    </script>
    <script>
      window.TrackJS && TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
    </script>
  </body>
</html>