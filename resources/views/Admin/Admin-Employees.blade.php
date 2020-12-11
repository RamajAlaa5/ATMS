@extends('layouts.NavFoot')

@section('content')
<!--Modals-->
    
            <!--ShowProfile Modal-->
<div class="modal fade" id="ShowProfileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            
                <div class="card">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="text-center">
                        <img src="images/fPerson1.jpg" class="w-50 rounded-circle mt-3"><br><label>&nbsp;&nbsp;Chloe</label>
                    </div> 
                    <div class=" text-center">
                        Personal Information            
                    </div> 
                    <table class="infoTable">
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
</div>
                <!--/ShowProfile Modal-->
    
<!--/Modals-->
    
<!--PageContent-->
    
    <div class="container text-center">
        <ul class="nav nav-tabs">
            <li><a class="active" data-toggle="tab" href="#Employees">Employees</a></li>
            <li><a data-toggle="tab" href="#Current">Current&nbsp;Emp.</a></li>
            <li><a data-toggle="tab" href="#Attendance">Attendance</a></li>
        </ul>
        <div class="tab-content">
            <div id="Employees" class="tab-pane active">
                <div class="tools row"> 
                    <label class="col-3">Employees</label>
                    <span class="col-1">4</span>
                    <div class="dropdown offset-1 col-3">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort By...</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">ID</a>
                            <a class="dropdown-item" href="#">Name</a>
                            <a class="dropdown-item" href="#">Department</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <input type="search" class=" toolssearch" ><button class="toolsbutton">search</button>
                    </div>
                </div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Emaill</th>
                      <th scope="col">Department</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Gender</th>
                      <th class="text-center" scope="col" >More Info</th>
                    </tr>
                  </thead>
                    <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>John Doe</td>
                          <td>Example@Email.com</td>
                          <td>SE</td>
                          <td>01007162472</td>
                          <td>Male</td>
                          <td class="text-center"><button class="tableButton" data-toggle="modal" data-target="#ShowProfileModal">Show Profile</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="Current" class="tab-pane">
                <div class="tools row"> 
                    <label class="col-3">Employees</label>
                    <span class="col-1">4</span>
                    <div class="dropdown offset-1 col-3">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort By...</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">ID</a>
                            <a class="dropdown-item" href="#">Name</a>
                            <a class="dropdown-item" href="#">Department</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <input type="search" class=" toolssearch" ><button class="toolsbutton">search</button>
                    </div>
                </div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Emaill</th>
                      <th scope="col">Department</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Gender</th>
                      <th class="text-center" scope="col">More Info</th>
                    </tr>
                  </thead>
                    <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>John Doe</td>
                          <td>Example@Email.com</td>
                          <td>SE</td>
                          <td>01007162472</td>
                          <td>Male</td>
                          <td class="text-center"><button class="tableButton">Show Profile</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="Attendance" class="tab-pane">
                <div class="tools row"> 
                    <label class="col-3">Employees</label>
                    <span class="col-1">4</span>
                    <div class="dropdown offset-1 col-3">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By...</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Absent</a>
                            <a class="dropdown-item" href="#">Attended</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <input type="search" class=" toolssearch" ><button class="toolsbutton">search</button>
                    </div>
                    <div class="datefilter">
                        <span>Date: </span><input id="dateFrom" type="date"> <input id="toCheckbox" type="checkbox"><span>to</span><input style="display: none" id="dateTo" type="date"> 
                    </div>
                </div>
                
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Emaill</th>
                      <th scope="col">Department</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Attendance</th>
                      <th class="text-center" scope="col">More Info</th>
                    </tr>
                  </thead>
                    <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>John Doe</td>
                          <td>Example@Email.com</td>
                          <td>SE</td>
                          <td>01007162472</td>
                          <td>Male</td>
                          <td>Attended</td>
                          <td class="text-center"><button class="tableButton">Show Profile</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<!--/PageContent-->
    
@endsection