@extends('layouts.NavFoot')

@section('content')
    
<!--PageContent-->
    
    <div class="container text-center">
        
        <!--Modals-->
        
        <!--editProfileModal-->
        
        <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div>
                    <h1 id="exampleModalLabel">Edit Profile</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    <form>
                        <div class="form-group">
                            <div class="col-sm-10">
                              <input type="text" class="form-control form-control-lg"  placeholder="Full Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                              <input type="email" class="form-control form-control-lg"  placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                              <input type="file" class="form-control form-control-lg" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                Contact Info
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-lg"  placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                              <input type="text" class="form-control form-control-lg"  placeholder="Facebook">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="showProfile">Edit</button>
                        </div>
                    </form>
                </div>
              </div>
        </div>
        
        <!--/editProfileModal-->
        
        <!--changePasswordModal-->
        
        <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div>
                    <h1 id="exampleModalLabel">Change Password</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    <form>
                        <div class="form-group">
                            <div class="col-sm-10">
                              <input type="text" class="form-control form-control-lg"  placeholder="old password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                              <input type="text" class="form-control form-control-lg"  placeholder="New Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                              <input type="text" class="form-control form-control-lg"  placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="tableButton">Submit</button>
                        </div>
                    </form>
                </div>
              </div>
        </div>
        
        <!--/changePasswordModal-->
        
        <!--/Modals-->
        
        <div class="card">
            <div class="dropdown col-1 offset-11">
                      <i class="fas fa-sliders-h fa-lg mt-3 mr-2 " role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>                     
                  <div class="dropdown-menu dropdown-menu-right " aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" data-toggle="modal" data-target="#editProfileModal">Edit Profile</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#changePasswordModal">Change Password</a>
                  </div>
            </div>
            <div class="col-3 text-center">
                <img src="images/fPerson1.jpg" class="w-50 rounded-circle mt-3"><label>&nbsp;&nbsp;Chloe</label>
            </div> 
            <div class="col-3 text-center">
                Personal Information            
            </div> 
            <table class="col-4 infoTable">
            <tr>
            <td>Full Name</td>
            <td>Chloe abdelsalam Decker</td>            
            </tr>
            <tr>
            <td>Department</td>
            <td>Software Engineering</td>            
            </tr>
            <tr>
            <td>Age</td>
            <td>25</td>            
            </tr>
            <tr>
            <td>Date of Birth</td>
            <td>12-10-1995</td>            
            </tr>
            <tr>
            <td>Date added</td>
            <td>13-9-2005</td>            
            </tr>
            <tr>
            <td>Contact</td>
            </tr>
            <tr>
            <td><i style="font-size:30px" class="fa fa-phone"></i></td>
            <td><a>01150098580</a></td>            
            </tr>
            <tr>
            <td><i style="color:#4267B2; font-size:32px" class="fab fa-facebook-square"></i></td>
            <td><a>www.Facebook.com</a></td>            
            </tr>
            </table>
        </div>
    </div>
    
<!--/PageContent-->
    
@endsection