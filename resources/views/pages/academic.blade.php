@extends('app')

@section('head_page')
    <style media="screen">
        .uploadButton {
            margin-top:30px;
        }

        #chart {
           padding: 20px;
           color: black !important;
           text-align: center;
           width: 50%;
           margin: 0 auto;
           }
           @media(max-width: 480px){
           #chart {
           padding: 20px;
           color: black !important;
           text-align: center;
           width: 100%;
           margin: 0 auto;
           font-size: 10px;
           }
           }
           .barTable {
           width: 100%;
           height: 400px;
           }
           .charttitle {
           text-align: center;
           font-size: 10px;
           color:#FFF;
           }
           .bars td {
           vertical-align: bottom;
           }
           .bars div:hover {
           opacity: 0.6;
           }
           .legend {
           vertical-align: bottom;
           padding-left: 20px;
           text-align: left;
           }
           .legbox {
           display: block;
           clear: both;
           }
           .xaxisname {
           margin: 5px;
           color: #fff;
           font-size: 77%;
           padding: 5px;
           float: left;
           }
           /*Flat UI colors*/
           .one {
           background: #16A085;
           }
           .two {
           background: #2ECC71;
           }
           .three {
           background: #27AE60;
           }
           .four {
           background: #3498DB;
           }
           .five {
           background: #2980B9;
           }
           .six {
           background: #9B59B6;
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
                                                  <h4 class="c-grey-900 mB-20">Academic Record</h4>

                                                  @if(empty($subject))
                                                  <div class="mT-30">
                                                    <div class="alert alert-primary" role="alert">Select a subject to view furthur details.</div>

                                                  </div>

                                                  <br />
                                                  <table class="table table-striped">
                                                      <thead>
                                                          <tr>
                                                              <th scope="col">#</th>
                                                              <th scope="col">Subject</th>
                                                              <th scope="col">Grade</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <th scope="row">1</th>
                                                              <td><a href="academic/urdu">Urdu</a></td>
                                                              <td>B+</td>

                                                          </tr>
                                                          <tr>
                                                              <th scope="row">1</th>
                                                              <td>English</td>
                                                              <td>10</td>
                                                          </tr>
                                                          <tr>
                                                              <th scope="row">1</th>
                                                              <td>Maths</td>
                                                              <td>10</td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                                  @else
                                                  <div class="bgc-light-blue-500 c-white p-20">
                                                      <div class="peers ai-c jc-sb gap-40">
                                                          <div class="peer peer-greed">
                                                              <h5>Urdu</h5>
                                                              <p class="mB-0">Academic Report</p>
                                                          </div>
                                                          <div class="peer">
                                                              <h3 class="text-right">B+</h3></div>
                                                      </div>
                                                  </div>

                                                  <br />
                                                  <table class="table table-striped">
                                                      <thead>
                                                          <tr>
                                                              <th scope="col">#</th>
                                                              <th scope="col">Title</th>
                                                              <th scope="col">Total Marks</th>
                                                              <th scope="col">Obtained Marks</th>
                                                              <th scope="col">Progress</th>

                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <th scope="row">1</th>
                                                              <td>Quiz 1</td>
                                                              <td>10</td>
                                                              <td>9</td>
                                                              <td>
                                                                 <div class="progress mT-10">
                                                                    <div class="progress-bar bgc-green-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%"><span class="sr-only">80% Complete</span></div>
                                                                </div>
                                                              </td>

                                                          </tr>
                                                          <tr>
                                                              <th scope="row">2</th>
                                                              <td>Quiz 2</td>
                                                              <td>10</td>
                                                              <td>9</td>
                                                              <td>
                                                                 <div class="progress mT-10">
                                                                    <div class="progress-bar bgc-green-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%"><span class="sr-only">80% Complete</span></div>
                                                                </div>
                                                              </td>

                                                          </tr>
                                                          <tr>
                                                              <th scope="row">3</th>
                                                              <td>Quiz 3</td>
                                                              <td>10</td>
                                                              <td>9</td>
                                                              <td>
                                                                 <div class="progress mT-10">
                                                                    <div class="progress-bar bgc-green-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%"><span class="sr-only">80% Complete</span></div>
                                                                </div>
                                                              </td>

                                                          </tr>
                                                          <tr>
                                                              <th scope="row">4</th>
                                                              <td>Midterm</td>
                                                              <td>25</td>
                                                              <td>20</td>
                                                              <td>
                                                                 <div class="progress mT-10">
                                                                    <div class="progress-bar bgc-green-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%"><span class="sr-only">80% Complete</span></div>
                                                                </div>
                                                              </td>

                                                          </tr>
                                                      </tbody>

                                                
                                                  </table>
                                                  @endif

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
