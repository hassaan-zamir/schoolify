@extends('app')

@section('head_page')
    <style media="screen">
        .uploadButton {
            margin-top:30px;
        }
    </style>
@stop


@section('content')

  @include('includes.spinner')

  <div>
    @include('includes.sidebar')

    <div class="page-container">
            @include('includes.topnav')



              <main class="main-content bgc-grey-100">
                  <div id="mainContent">
                      <div class="container-fluid">
                          <!-- <h4 class="c-grey-900 mT-10 mB-30">Attendance</h4> -->
                          <div class="row">
                                          <div class="col-md-12">
                                              <div class="bgc-white bd bdrs-3 p-20 mB-20">
                                                  <h4 class="c-grey-900 mB-20">Edit Evaluation</h4>

                                                  <div class="mT-30">
                                                    <form>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-2">
                                                                <label for="inputEmail4">Class</label>
                                                                <select class="form-control" name="">
                                                                    <option value="">2-B</option>
                                                                    <option value="">3-B</option>
                                                                    <option value="">4-C</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="inputEmail4">Subject</label>
                                                                <select class="form-control" name="">
                                                                    <option value="">English</option>
                                                                    <option value="">Urdu</option>
                                                                    <option value="">Maths</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                              <label for="inputPassword4">Title</label>
                                                              <input type="text" class="form-control" id="inputPassword4" placeholder="Title">
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                              <label for="inputPassword4">Total Marks</label>
                                                              <input type="text" class="form-control" id="inputPassword4" placeholder="Marks">
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                              <label for="inputPassword4">Weightage</label>
                                                              <input type="text" class="form-control" id="inputPassword4" placeholder="Weightage">
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="inputPassword4">Date</label>
                                                                <input type="date" class="form-control" id="inputPassword4" placeholder="Password">
                                                            </div>

                                                            <div class="form-group col-md-2" >
                                                                <button type="submit" class="btn btn-primary">Edit</button>

                                                            </div>
                                                        </div>


                                                    </form>
                                                </div>

                                                  <table class="table table-striped">
                                                      <thead>
                                                          <tr>
                                                              <th scope="col">#</th>
                                                              <th scope="col">Student Name</th>
                                                              <th scope="col">Parent Name</th>
                                                              <th scope="col">Marks Obtained</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <th scope="row">1</th>
                                                              <td>Mark</td>
                                                              <td>Otto</td>
                                                              <td><input type="text" class="form-control" placeHolder="Marks Obtained" />  </td>
                                                          </tr>
                                                          <tr>
                                                              <th scope="row">1</th>
                                                              <td>Mark</td>
                                                              <td>Otto</td>
                                                              <td><input type="text" class="form-control" placeHolder="Marks Obtained" />  </td>
                                                          </tr>
                                                          <tr>
                                                              <th scope="row">1</th>
                                                              <td>Mark</td>
                                                              <td>Otto</td>
                                                              <td><input type="text" class="form-control" placeHolder="Marks Obtained" />  </td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                              </div>
                                          </div>
                                      </div>
                      </div>
                  </div>
              </div>
            @include('includes.footer_content')
        </div>
  </div>


@stop
