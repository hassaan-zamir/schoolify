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
                                                  <h4 class="c-grey-900 mB-20">Edit Attendance</h4>

                                                  <div class="mT-30">
                                                    <form>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">Class</label>
                                                                <select class="form-control" name="">
                                                                    <option value="">2-B</option>
                                                                    <option value="">3-B</option>
                                                                    <option value="">4-C</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">Subject</label>
                                                                <select class="form-control" name="">
                                                                    <option value="">English</option>
                                                                    <option value="">Urdu</option>
                                                                    <option value="">Maths</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="inputPassword4">Date</label>
                                                                <input type="date" class="form-control" id="inputPassword4" placeholder="Password">
                                                            </div>

                                                            <div class="form-group col-md-2" >
                                                                <button type="submit" class="btn btn-primary uploadButton">Edit</button>

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
                                                              <th scope="col">Attendance</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <th scope="row">1</th>
                                                              <td>Mark</td>
                                                              <td>Otto</td>
                                                              <td><input type="checkbox" class="form-check-input" />  </td>
                                                          </tr>
                                                          <tr>
                                                              <th scope="row">2</th>
                                                              <td>Jacob</td>
                                                              <td>Thornton</td>
                                                              <td>@fat</td>
                                                          </tr>
                                                          <tr>
                                                              <th scope="row">3</th>
                                                              <td>Larry</td>
                                                              <td>the Bird</td>
                                                              <td>@twitter</td>
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
