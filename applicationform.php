
  <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo web_root; ?>plugins/jobportal/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Apply Now</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Apply Now</h1>
          </div>
        </div>
      </div>
    </div>

 <?php
if (isset($_GET['search'])) {
# code...
$jobid = $_GET['search'];
}else{
$jobid = '';

}
$sql = "SELECT * FROM `tblcompany` c,`tbljob` j WHERE c.`COMPANYID`=j.`COMPANYID` AND JOBID LIKE '%" . $jobid ."%' ORDER BY DATEPOSTED DESC" ;
$mydb->setQuery($sql);
$result = $mydb->loadSingleResult();

?> 
<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">



            <h2 class="page-header" ><strong>Job Details</strong></h2>
           
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
              <form class="form-horizontal span6  wow fadeInDown" action="process.php?action=submitapplication&JOBID=<?php echo $result->JOBID; ?>"  enctype="multipart/form-data"  method="POST" autocomplete="off">

               <?php require_once('applicantform.php') ?>  

            </form>
          </div>
          <div class="col-md-6 d-flex">
                     <div class="panel">
                         <div class="panel-header">
                              <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;"><a href="<?php echo web_root.'index.php?q=viewjob&search='.$result->JOBID;?>"><?php echo $result->OCCUPATIONTITLE ;?></a> 
                              </div> 
                         </div>
                         <div class="panel-body">
                                  <div class="row contentbody">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fp-ht-bed"></i><strong>Required No. of Employee's : </strong><?php echo $result->REQ_NO_EMPLOYEES; ?></li>
                                                <li><i class="fp-ht-food"></i><strong>Salary :</strong> <?php echo number_format($result->SALARIES,2);  ?></li>
                                                <li><i class="fa fa-sun-"></i><strong>Duration of Employment : </strong><?php echo $result->DURATION_EMPLOYEMENT; ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul> 
                                                <li><i class="fp-ht-tv"></i><strong>Prefered Gender : </strong><?php echo $result->PREFEREDSEX; ?></li>
                                                <li><i class="fp-ht-computer"></i><strong>Sector of Vacancy :</strong> <?php echo $result->SECTOR_VACANCY; ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12">
                                          <ul>
                                         <strong> <li>  <p>Qualification/Work Experience : </strong> <br> 
                                            
                                                <?php echo $result->QUALIFICATION_WORKEXPERIENCE ;?> </p></li>
                                                    </ul>
                                        </div>
                                        <br>
                                        <div class="col-md-12"> 
                                          <ul>
                                         <strong>  <li> <p>Job Description: </strong> 
                                            <br>
                                                 <?php echo $result->JOBDESCRIPTION ;?></p>
                                                 </li>
                                         </div>
                                        <div class="col-md-12">
                                          <ul>
                                        <strong>  <li> <p>Employer : </strong> <?php echo  $result->COMPANYNAME; ?></p> </li>
                                        <strong> <li>  <p>Location : </strong> <?php echo  $result->COMPANYADDRESS; ?></p> </li>
                                        </div>
                                    </div>
                                            </ul>
                         </div>
                         <div class="panel-footer">
                          <ul>
                         <strong>      <li>  Date Posted : </strong> <?php echo date_format(date_create($result->DATEPOSTED),'M d, Y'); ?> </li>
                         </div>
                                    </ul>
                     </div> 

          </div>
        </div>
      </div>
    </section>
