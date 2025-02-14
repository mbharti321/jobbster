<?php
   include("connecti.php");
    if (isset($_POST['submit'])) 
    {
        if(isset($_POST['job_title']) || isset($_POST['city'])) 
        {
            $title=$_POST['job_title'];
            $city=$_POST['city'];
            header("Location: job_search_result.php?city=$city&title=$title");
            exit(0);
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>
<body>

<!--=================================
header -->
<?php include "header.php"; ?>
<!--=================================
header -->

<!--=================================
banner -->
<section class="header-inner header-inner-big bg-holder text-white" style="background-image: url(images/bg/banner-01.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="job-search-field">
          <div class="job-search-item">
<!--            <form class="form row">-->
              <form class="form-row" action="" method="post" onsubmit="return check();" name="frm1" id="frm1">
              <div class="col-lg-5">
                <div class="form-group left-icon">
                  <input type="text" class="form-control" name="job_title" id="job_title" placeholder="What?">
                <i class="fas fa-search"></i> </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group left-icon">
                  <input type="text" class="form-control" name="city" id="city" placeholder="Where?">
                <i class="fas fa-search"></i> </div>
              </div>
              <div class="col-lg-2 col-sm-12">
                <div class="form-group form-action">
<!--                  <button type="submit" class="btn btn-primary mt-0"><i class="fas fa-search-location"></i> Find Job</button>-->
<input type="submit" style="padding:10px 40px" id="submit" name="submit" class="btn btn-primary mt-0" value="Find jobs">
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
banner -->


<!--=================================
job-list -->
<section class="space-ptb">
<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <!--=================================
      left-sidebar -->
      <div class="sidebar">
          <div class="widget">
              <div class="widget-title widget-collapse">
                <h6>Job Type</h6>
                <a class="ml-auto" data-toggle="collapse" href="#jobtype" role="button" aria-expanded="false" aria-controls="jobtype"> <i class="fas fa-chevron-down"></i> </a> </div>
                <div class="collapse show" id="jobtype">
                  <div class="widget-content">
                    <div class="custom-control custom-checkbox fulltime-job">
                      <input type="checkbox" class="custom-control-input" id="jobtype1">
                      <label class="custom-control-label" for="jobtype1">Full Time</label>
                    </div>
                    <div class="custom-control custom-checkbox parttime-job">
                      <input type="checkbox" class="custom-control-input" id="jobtype2">
                      <label class="custom-control-label" for="jobtype2">Part-Time</label>
                    </div>
                    <div class="custom-control custom-checkbox freelance-job">
                      <input type="checkbox" class="custom-control-input" id="jobtype3">
                      <label class="custom-control-label" for="jobtype3">Freelance</label>
                    </div>
                    <div class="custom-control custom-checkbox temporary-job">
                      <input type="checkbox" class="custom-control-input" id="jobtype4">
                      <label class="custom-control-label" for="jobtype4">Temporary</label>
                    </div>
                  </div>
                </div>
              </div>
          <hr>
<!--
          <div class="widget">
            <div class="widget-title widget-collapse">
              <h6>Specialism</h6>
              <a class="ml-auto" data-toggle="collapse" href="#specialism" role="button" aria-expanded="false" aria-controls="specialism"> <i class="fas fa-chevron-down"></i> </a> </div>
              <div class="collapse show" id="specialism">
                <div class="widget-content">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="specialism1">
                    <label class="custom-control-label" for="specialism1">IT Contractor</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="specialism2">
                    <label class="custom-control-label" for="specialism2">Charity & Voluntary</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="specialism3">
                    <label class="custom-control-label" for="specialism3">Digital & Creative</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="specialism4">
                    <label class="custom-control-label" for="specialism4">Estate Agency</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="specialism5">
                    <label class="custom-control-label" for="specialism5">Graduate</label>
                  </div>
                </div>
              </div>
            </div>
-->
            <hr>
<!--
            <div class="widget">
          <div class="widget-title widget-collapse">
            <h6>Date Posted</h6>
            <a class="ml-auto" data-toggle="collapse" href="#dateposted" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-chevron-down"></i> </a></div>
            <div class="collapse show" id="dateposted">
              <div class="widget-content">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="dateposted1">
                  <label class="custom-control-label" for="dateposted1">Last hour</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="dateposted2">
                  <label class="custom-control-label" for="dateposted2">Last 24 hour</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="dateposted3">
                  <label class="custom-control-label" for="dateposted3">Last 7 days</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="dateposted4">
                  <label class="custom-control-label" for="dateposted4">Last 14 days</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="dateposted5">
                  <label class="custom-control-label" for="dateposted5">Last 30 days</label>
                </div>
              </div>
            </div>
          </div>
-->
            <hr>
       <!--        <div class="widget">
                <div class="widget-title widget-collapse">
                  <h6>Experience</h6>
                  <a class="ml-auto" data-toggle="collapse" href="#experience" role="button" aria-expanded="false" aria-controls="experience"> <i class="fas fa-chevron-down"></i> </a> </div>
                  <div class="collapse show" id="experience">
                    <div class="widget-content">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="experience1">
                        <label class="custom-control-label" for="experience1">Fresher</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="experience2">
                        <label class="custom-control-label" for="experience2">Less than 1 year</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="experience3">
                        <label class="custom-control-label" for="experience3">2 Year</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="experience4">
                        <label class="custom-control-label" for="experience4">3 Year</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="experience5">
                        <label class="custom-control-label" for="experience5">4 Year</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="widget">
                  <div class="widget-title widget-collapse">
                    <h6>Offered Salary</h6>
                    <a class="ml-auto" data-toggle="collapse" href="#Offeredsalary" role="button" aria-expanded="false" aria-controls="Offeredsalary"> <i class="fas fa-chevron-down"></i> </a> </div>
                    <div class="collapse show" id="Offeredsalary">
                      <div class="widget-content">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="Offeredsalary1">
                          <label class="custom-control-label" for="Offeredsalary1">10k - 20k</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="Offeredsalary2">
                          <label class="custom-control-label" for="Offeredsalary2">20k - 30k</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="Offeredsalary3">
                          <label class="custom-control-label" for="Offeredsalary3">30k - 40k</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="Offeredsalary4">
                          <label class="custom-control-label" for="Offeredsalary4">40k - 50k</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="Offeredsalary5">
                          <label class="custom-control-label" for="Offeredsalary5">50k - 60k</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="widget">
                    <div class="widget-title widget-collapse">
                      <h6>Gender</h6>
                      <a class="ml-auto" data-toggle="collapse" href="#gender" role="button" aria-expanded="false" aria-controls="gender"><i class="fas fa-chevron-down"></i></a> </div>
                      <div class="collapse show" id="gender">
                        <div class="widget-content">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="gender1">
                            <label class="custom-control-label" for="gender1">Male</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="gender2">
                            <label class="custom-control-label" for="gender2">Female</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="widget">
                      <div class="widget-title widget-collapse">
                        <h6>Qualification</h6>
                        <a class="ml-auto" data-toggle="collapse" href="#qualification" role="button" aria-expanded="false" aria-controls="qualification"> <i class="fas fa-chevron-down"></i></a> </div>
                        <div class="collapse show" id="qualification">
                          <div class="widget-content">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="qualification1">
                              <label class="custom-control-label" for="qualification1">Matriculation</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="qualification2">
                              <label class="custom-control-label" for="qualification2">Intermediate</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="qualification3">
                              <label class="custom-control-label" for="qualification3">Graduate</label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="widget">
                        <div class="widget-add"> <img class="img-fluid" src="images/add-banner.png" alt=""></div>
                      </div>
-->
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <!--=================================
                    right-sidebar -->
                    <div class="row mb-4">
                       <div class="col-md-6">
                        <div class="section-title mb-3 mb-lg-4">
<!--                          <h6 class="mb-0">Showing 1-8 of <span class="text-primary">21 Jobs</span></h6>-->
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="job-filter-tag">
                        <ul class="list-unstyled">
<!--                          <li><a href="#">Freelance <i class="fas fa-times-circle"></i> </a></li>-->
                          <li><a class="filter-clear" href="job_listing.php">Reset Search <i class="fas fa-redo-alt"></i> </a></li>
                        </ul>
                      </div>
                      </div>
                    </div>
<!--
                    <div class="job-filter mb-4 d-sm-flex align-items-center">
                      <div class="job-alert-bt"> <a class="btn btn-md btn-dark" href="#"><i class="fa fa-envelope"></i>Get job alert </a> </div>
                      <div class="job-shortby ml-sm-auto d-flex align-items-center">
                        <form class="form-inline">
                          <div class="form-group mb-0">
                            <label class="justify-content-start mr-2">sort by :</label>
                            <div class="short-by">
                              <select class="form-control basic-select">
                                <option>Newest</option>
                                <option>Oldest</option>
                              </select>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
-->
                    <div class="row">  
        <?php 
                    include("connecti.php");
//                   if(!isset($_SESSION)) 
//                    { 
//                        session_start(); 
//                    } 
//                    if (isset($_SESSION['title']) || isset($_SESSION['city']))
//                    {
//                        $city = $_SESSION['city'];
//                        $title = $_SESSION['title'];
//                        $sql = "SELECT * FROM tbl_company join tbl_job_post ON tbl_company.company_id = tbl_job_post.company_id join tbl_job_type ON tbl_job_type.job_type_id = tbl_job_post.job_type_id";
//                        
//                    }
//                    else
//                    {
                        
                            $sql = "SELECT * FROM tbl_company join tbl_job_post ON tbl_company.company_id = tbl_job_post.company_id
                                              join tbl_job_type ON tbl_job_type.job_type_id = tbl_job_post.job_type_id";
//                    }
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) 
                    {
                      // output data of each row
                      while($row = $result->fetch_assoc()) 
                      {
//                include("connecti.php");
//                $sql = "SELECT * FROM tbl_company join tbl_job_post ON tbl_company.company_id = tbl_job_post.company_id
//                                  join tbl_job_type ON tbl_job_type.job_type_id = tbl_job_post.job_type_id";
//                $result = $conn->query($sql);
//                if ($result->num_rows > 0) 
//                {
//                  // output data of each row
//                  while($row = $result->fetch_assoc()) 
//                  {
        ?>
                        <div class="col-12">
                        <div class="job-list ">
                          <div class="job-list-logo">
                            <img class="img-fluid" src="<?php echo $row['logo']; ?>" alt="">
                          </div>
                          <div class="job-list-details">
                            <div class="job-list-info">
                              <div class="job-list-title">
                                <h5 class="mb-0"><a href="job_detail.php?pid=<?php echo $row['job_post_id']; ?>"><?php echo $row['job_title']; ?></a></h5>
                              </div>
                            <div class="job-list-option">
                                <ul class="list-unstyled">
                                  <li> <span>via</span> <a href="employer-detail.html"><?php echo $row['cname']; ?></a> </li>
                                  <li><i class="fas fa-map-marker-alt pr-1"></i><?php echo $row['city']; ?>, <?php echo $row['state']; ?></li>
                                  <li><i class="fas fa-filter pr-1"></i><?php echo $row['min_salary']; ?> - <?php echo $row['max_salary']; ?></li>
                                  <li><a class="freelance" href="#"><i class="fas fa-suitcase pr-1"></i><?php echo $row['job_type']; ?></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>1M ago</span> </div>
                        </div>
                      </div>
        <?php
                    
                }
                    } else 
                    {
                      echo "0 results";
                    }
                    $conn->close();
        ?>
<!--
                      <div class="col-12">
                        <div class="job-list">
                          <div class="job-list-logo">
                            <img class="img-fluid" src="images/svg/02.svg" alt="">
                          </div>
                          <div class="job-list-details">
                            <div class="job-list-info">
                              <div class="job-list-title">
                                <h5 class="mb-0"><a href="job-detail.html">Web Developer – .net</a></h5>
                              </div>
                              <div class="job-list-option">
                                <ul class="list-unstyled">
                                  <li> <span>via</span> <a href="employer-detail.html">Pendragon Green Ltd</a> </li>
                                  <li><i class="fas fa-map-marker-alt pr-1"></i>Needham, MA</li>
                                  <li><i class="fas fa-filter pr-1"></i>IT &amp; Telecoms</li>
                                  <li><a class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-Time</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>3D ago</span> </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="job-list">
                          <div class=" job-list-logo">
                            <img class="img-fluid" src="images/svg/03.svg" alt="">
                          </div>
                          <div class="job-list-details">
                            <div class="job-list-info">
                              <div class="job-list-title">
                                <h5 class="mb-0"><a href="job-detail.html">Payroll and Office Administrator</a></h5>
                              </div>
                              <div class="job-list-option">
                                <ul class="list-unstyled">
                                  <li> <span>via</span> <a href="employer-detail.html">Wight Sound Hearing LLC</a> </li>
                                  <li><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA</li>
                                  <li><i class="fas fa-filter pr-1"></i>Banking</li>
                                  <li><a class="temporary" href="#"><i class="fas fa-suitcase pr-1"></i>Temporary</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>2W ago</span> </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="job-list">
                          <div class="job-list-logo">
                            <img class="img-fluid" src="images/svg/04.svg" alt="">
                          </div>
                          <div class="job-list-details">
                            <div class="job-list-info">
                              <div class="job-list-title">
                                <h5 class="mb-0"><a href="job-detail.html">Data Entry Administrator</a></h5>
                              </div>
                              <div class="job-list-option">
                                <ul class="list-unstyled">
                                  <li> <span>via</span> <a href="employer-detail.html">Tan Electrics Ltd</a> </li>
                                  <li><i class="fas fa-map-marker-alt pr-1"></i>Park Avenue, Mumbai</li>
                                  <li><i class="fas fa-filter pr-1"></i>Charity &amp; Voluntary</li>
                                  <li><a class="full-time" href="#"><i class="fas fa-suitcase pr-1"></i>Full-time</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>3M ago</span> </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="job-list">
                          <div class="job-list-logo">
                            <img class="img-fluid" src="images/svg/05.svg" alt="">
                          </div>
                          <div class="job-list-details">
                            <div class="job-list-info">
                              <div class="job-list-title">
                                <h5 class="mb-0"><a href="job-detail.html">Operational manager part-time</a></h5>
                              </div>
                              <div class="job-list-option">
                                <ul class="list-unstyled">
                                  <li> <span>via</span> <a href="employer-detail.html">Fleet Home Improvements Pvt</a> </li>
                                  <li><i class="fas fa-map-marker-alt pr-1"></i>Green Lanes, London</li>
                                  <li><i class="fas fa-filter pr-1"></i>Accountancy (Qualified)</li>
                                  <li><a class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-Time</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>6D ago</span> </div>
                        </div>
                      </div>
-->
                      </div>

                    <div class="row">
                      <div class="col-12 text-center mt-4 mt-md-5">
                        <ul class="pagination justify-content-center mb-0">
                          <li class="page-item disabled"> <span class="page-link b-radius-none">Prev</span> </li>
                          <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">...</a></li>
                          <li class="page-item"><a class="page-link" href="#">10</a></li>
                          <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</section>
<!--=================================
job-list -->

<!--=================================
feature -->
<section class="feature-info-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-primary">
          <div class="feature-info-icon mb-3 mb-sm-0 text-dark">
            <i class="flaticon-team"></i>
          </div>
          <div class="feature-info-content text-white pl-sm-4 pl-0">
            <p>Jobseeker</p>
            <h5 class="text-white">Looking For Job?</h5>
          </div>
          <a class="ml-auto align-self-center" href="job_listing.php">Apply now<i class="fas fa-long-arrow-alt-right"></i> </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-dark">
          <div class="feature-info-icon mb-3 mb-sm-0 text-primary">
            <i class="flaticon-job-3"></i>
          </div>
          <div class="feature-info-content text-white pl-sm-4 pl-0">
            <p>Recruiter</p>
            <h5 class="text-white">Are You Recruiting?</h5>
          </div>
          <a class="ml-auto align-self-center" href="post_a_job.php">Post a job<i class="fas fa-long-arrow-alt-right"></i> </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
feature -->

<!--=================================
footer-->
<?php include "footer.php"; ?>
<!--=================================
footer-->

<!--=================================
Back To Top-->
   <div id="back-to-top" class="back-to-top">
     <i class="fas fa-angle-up"></i>
   </div>
<!--=================================
Back To Top-->

<!--=================================
Signin Modal Popup -->
<!--
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header p-4">
        <h4 class="mb-0 text-center">Login to Your Account</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="login-register">
          <fieldset>
            <legend class="px-2">Choose your Account Type</legend>
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item mr-4">
                <a class="nav-link active"  data-toggle="tab" href="#candidate" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ml-3">
                      <h6 class="mb-0">Candidate</h6>
                      <p class="mb-0">Log in as Candidate</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  data-toggle="tab" href="#employer" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-suitcase"></i>
                    </div>
                    <div class="ml-3">
                      <h6 class="mb-0">Employer</h6>
                      <p class="mb-0">Log in as Employer</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </fieldset>
          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              <form class="mt-4">
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="Email2">Username / Email Address:</label>
                    <input type="text" class="form-control" id="Email22">
                  </div>
                  <div class="form-group col-12">
                    <label for="password2">Password*</label>
                    <input type="password" class="form-control" id="password32">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <a class="btn btn-primary btn-block" href="#">Sign In</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ml-md-3 mt-3 mt-md-0 forgot-pass">
                      <a href="#">Forgot Password?</a>
                      <p class="mt-1">Don't have account? <a href="register.html">Sign Up here</a></p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form class="mt-4">
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="Email2">Username / Email Address:</label>
                    <input type="text" class="form-control" id="Email2">
                  </div>
                  <div class="form-group col-12">
                    <label for="password2">Password *</label>
                    <input type="password" class="form-control" id="password2">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <a class="btn btn-primary btn-block" href="#">Sign up</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ml-md-3 mt-3 mt-md-0">
                      <a href="#">Forgot Password?</a>
                      <div class="custom-control custom-checkbox mt-2">
                        <input type="checkbox" class="custom-control-input" id="Remember-02">
                        <label class="custom-control-label" for="Remember-02">Remember Password</label>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="mt-4">
            <fieldset>
              <legend class="px-2">Login or Sign up with</legend>
              <div class="social-login">
                <ul class="list-unstyled d-flex mb-0">
                  <li class="facebook text-center">
                    <a href="#"> <i class="fab fa-facebook-f mr-4"></i>Login with Facebook</a>
                  </li>
                  <li class="twitter text-center">
                    <a href="#"> <i class="fab fa-twitter mr-4"></i>Login with Twitter</a>
                  </li>
                  <li class="google text-center">
                    <a href="#"> <i class="fab fa-google mr-4"></i>Login with Google</a>
                  </li>
                  <li class="linkedin text-center">
                    <a href="#"> <i class="fab fa-linkedin-in mr-4"></i>Login with Linkedin</a>
                  </li>
                </ul>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
-->
<!--=================================
Signin Modal Popup -->

<!--=================================
Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/select2/select2.full.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

</body>
</html>
