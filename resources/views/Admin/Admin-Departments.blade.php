@extends('layouts.NavFoot')

@section('content')

    
<!--PageContent-->
    
    <div class="container text-center">
        <ul class="nav nav-tabs">
            <li><a class="active" data-toggle="tab" href="#Departments">Departments</a></li>
            <li><a data-toggle="tab" href="#AddDepartment">Add&nbsp;Dept.</a></li>
        </ul>
        <div class="tab-content">
            <!--Depatments tab-->
            <div id="Departments" class="tab-pane active">
                <div class="tools row"> 
                    <label class="col-3">Departments</label>
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
                      <th scope="col">Dept. Code</th>
                      <th scope="col">Dept. Name</th>
                      <th scope="col">Short Name</th>
                      <th scope="col">Head</th>
                      <th class="text-center" scope="col">More Info</th>
                    </tr>
                  </thead>
                    <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>12321453</td>
                          <td>Software Engineering</td>
                          <td>SE</td>
                          <td>Jhon Doe</td>
                          <td class="text-center"><button class="tableButton" data-toggle="modal" data-target="#changeHeadModal">Change Head</button></td>
                        </tr>
                    </tbody>
                </table>
                 <div class="modal fade" id="changeHeadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div>
                        <h1 id="exampleModalLabel">Change Head</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                        <form>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <p class="h3">Assign a new head for <span id="departmentSpan">SE</span> Department</p>                               
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                  <input type="text" class="form-control form-control-lg"  placeholder="New Head" >
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="tableButton">Submit</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
            
            <!--Add Department tab-->
            
            <div id="AddDepartment" class="tab-pane">
                <div class="card">
                    <label class="centerlabel">Add Department</label>
                    <form>
                            <div class="form-group">
                                <div class="col-sm-10">
                                  <input type="text" class="form-control form-control-lg"  placeholder="Department Code">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                  <input type="text" class="form-control form-control-lg"  placeholder="Department Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                  <input type="text" class="form-control form-control-lg"  placeholder="Department Short Name">
                                </div>
                            </div>
                            <Button>Add</Button>
                    </form>
                </div>
            </div>
           </div>
    </div>
    
<!--/PageContent-->
    
@endsection