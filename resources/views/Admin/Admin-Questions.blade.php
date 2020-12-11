@extends('layouts.NavFoot')

@section('content')
    
    <!--PageContent-->
    
    <div class="container text-center">
        <ul class="nav nav-tabs">
            <li><a class="active" data-toggle="tab" href="#Questions">Questions</a></li>
            <li><a data-toggle="tab" href="#AddQuestion">Add A Question</a></li>
        </ul>
        <div class="tab-content">
            
            <!--Questions tab-->
            
            <div id="Questions" class="tab-pane active">
                <div class="tools row"> 
                    <label class="col-3">Questions</label>
                    <span class="col-1">1</span>
                    <div class="col-4 offset-4">
                        <input type="search" class=" toolssearch" ><button class="toolsbutton">search</button>
                    </div>
                </div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Question</th>
                      <th scope="col">Answer</th>
                      <th scope="col">Note</th>
                      <th class="text-center" scope="col">Actions</th>
                    </tr>
                  </thead>
                    <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>How many legs does a cat have?</td>
                          <td>4</td>
                          <td>please write numbers only</td>
                          <td class="text-center"><button class="accept">Edit</button><button class="deny">Delete</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!--Add Question tab-->
            
            <div id="AddQuestion" class="tab-pane">
                <div class="card">
                    <label class="centerlabel">Add Question</label>
                    <form>
                            <div class="form-group">
                                <div class="col-sm-10">
                                  <input type="text" class="form-control form-control-lg"  placeholder="Question">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                  <input type="text" class="form-control form-control-lg"  placeholder="Answer">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                  <input type="text" class="form-control form-control-lg"  placeholder="Note">
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