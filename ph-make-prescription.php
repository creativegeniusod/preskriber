<?php include 'admin-header.php'; ?>
<figure class="figure w-100 after-header">
    <div class="container-fluid">
      <div class="row d-block d-xs-block d-sm-block d-lg-flex ">
         <div class="col col-md-auto db-left">
            <div class="row text-center user-photo pt-5">
               <div class="col">
                  <img class="wow zoomIn" src="images/user2.png">
                  <p class="white mt-2">James</p>
               </div>
            </div>
            <div class="row user-menu">
               <div class="col p-0">
                  <ul>
                     <li class="active"><a class="wow fadeInLeft" href="ph-make-prescription.php"><i class="fa fa-users"></i>&nbsp;&nbsp; Make Prescription</a></li>
                     <li><a class="wow fadeInLeft" href="ph-add-patient.php"><i class="fa fa-vcard-o"></i>&nbsp;&nbsp; Add New Patient</a></li>
                     <li><a class="wow fadeInLeft" href="ph-view-description.php"><i class="fa fa-eye"></i>&nbsp;&nbsp; View Prescription</a></li>
                     <li><a class="wow fadeInLeft" href="ph-request-permission.php"><i class="fa fa-check-circle-o"></i>&nbsp;&nbsp; Request Permission</a></li>
                     <li><a class="wow fadeInLeft" href="ph-change-password.php"><i class="fa fa-lock"></i>&nbsp;&nbsp; Change Password</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col db-right">
            <div class="db-content">
               <div class="row m-0">
                  <div class="col py-3 px-4 head-sec">
                     <h5 class="wow fadeInUp">Make Prescription</h5>
                     <p class="m-0 lighter-color wow fadeInUp">To make a prescription, enter the patient's preskriber identification code, the drug prescription, and the prescription expiry date.</p>
                  </div>
               </div>
                <div class="row m-0 px-4 pt-5 make-pr-inner">
                  <div class="col p-0">
                     <div id="accordion" class="add-official wow fadeInUp">
                        <div class="card mb-3">
                           <div class="card-header" id="headingOne">
                              <div class="row">
                                 <div class="col col-8">
                                    <h6 class="mb-0 pt-1 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Prescription 1</h6>
                                 </div>
                                 <div class="col col-4 text-right pl-0">
                                    <ul class="m-0 p-0">
                                       <li class="fa fa-pencil px-2 white"></li>
                                       <li class="fa fa-trash px-2 white"></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                 <div class="row m-0 px-2 pt-2">
                                    <div class="col p-0">
                                       <form class="">
                                          <div class="row">
                                             <div class="col-lg-6 col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                   <input type="text" class="form-control form-control-lg" name="" id="" placeholder="Prescriber ID">
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-xs-12 col-sm-6">
                                                <div class="form-group sandbox-container">
                                                    <input type="text" type="text" class="form-control" placeholder="Expiry Date" />
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                   <textarea class="form-control" placeholder="Drug Prescription"></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12 col-xs-12 col-sm-12 text-right">
                                                <div class="form-group m-0 action-btn">
                                                   <button class="btn green-btn btn-sm py-2 px-4">ADD PRESCRIPTION</button>
                                                </div>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwo">
                              <div class="row">
                                  <div class="col col-8">
                                    <h6 class="mb-0 pt-1 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">Prescription 2</h6>
                                 </div>
                                 <div class="col col-4 pl-0 text-right">
                                    <ul class="m-0 p-0">
                                       <li class="fa fa-pencil px-2 white"></li>
                                       <li class="fa fa-trash px-2 white"></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                 <div class="row m-0 px-2 pt-2">
                                    <div class="col p-0">
                                       <form class="">
                                          <div class="row">
                                             <div class="col-lg-6 col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                   <input type="text" class="form-control form-control-lg" name="" id="" placeholder="Prescriber ID">
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-xs-12 col-sm-6">
                                                <div class="form-group sandbox-container">
                                                    <input type="text" type="text" class="form-control" placeholder="Expiry Date" />
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                   <textarea class="form-control" placeholder="Drug Prescription"></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12 col-xs-12 col-sm-12 text-right">
                                                <div class="form-group m-0 action-btn">
                                                   <button class="btn green-btn btn-sm py-2 px-4">ADD PRESCRIPTION</button>
                                                </div>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row m-0 p-4 action-btn form-btn">
                            <div class="col p-0 text-right px-1">
                                <button class="btn blue-btn py-2 px-5">SUBMIT</button>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</figure>
<?php include 'footer.php'; ?>