@extends('layouts.NavFoot')

@section('content')
    
<!--PageContent-->
    
    <div class="container text-center">
        <ul class="nav nav-tabs">
            <li><a class="active" data-toggle="tab" href="#LeaveReq">Leave Req.</a></li>
            <li><a data-toggle="tab" href="#Approved">Approved</a></li>
            <li><a data-toggle="tab" href="#Denied">Denied</a></li>
        </ul>
        <div class="tab-content">
            <div id="LeaveReq" class="tab-pane active">
                <div class="tools row"> 
                    <label class="col-3">Leave Requests</label>
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
                      <th scope="col">Department</th>
                      <th scope="col">Leave Req. Date</th>
                      <th scope="col">Return Date</th>
                      <th scope="col">Actions</th>
                      <th class="text-center" scope="col">More Info</th>
                    </tr>
                  </thead>
                    <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>John Doe</td>
                          <td>SE</td>
                          <td>12-10-2020</td>
                          <td>15-10-2020</td>
                          <td><button class="accept">Accept</button><button class="deny">Deny</button></td>
                          <td class="text-center"><button class="tableButton">Show Profile</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="Approved" class="tab-pane">
                <div class="tools row"> 
                    <label class="col-3">Approved Req.</label>
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
                      <th scope="col">Department</th>
                      <th scope="col">Leave Req. Date</th>
                      <th scope="col">Return Date</th>
                      <th scope="col">Actions</th>
                      <th class="text-center" scope="col">More Info</th>
                    </tr>
                  </thead>
                    <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>John Doe</td>
                          <td>SE</td>
                          <td>12-10-2020</td>
                          <td>15-10-2020</td>
                          <td><button style="display: none"  class="accept acceptdeny">Accept</button><button style="display: none" class="deny acceptdeny">Deny</button><button class="reconsider">reconsider</button></td>
                          <td class="text-center"><button class="tableButton">Show Profile</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="Denied" class="tab-pane">
                <div class="tools row"> 
                    <label class="col-3">Denied Req.</label>
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
                      <th scope="col">Department</th>
                      <th scope="col">Leave Req. Date</th>
                      <th scope="col">Return Date</th>
                      <th scope="col">Actions</th>
                      <th class="text-center" scope="col">More Info</th>
                    </tr>
                  </thead>
                    <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>John Doe</td>
                          <td>SE</td>
                          <td>12-10-2020</td>
                          <td>15-10-2020</td>
                          <td><button style="display: none"  class="accept acceptdeny">Accept</button><button style="display: none" class="deny acceptdeny">Deny</button><button class="reconsider">reconsider</button></td>
                          <td class="text-center"><button class="tableButton">Show Profile</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<!--/PageContent-->
    
@endsection