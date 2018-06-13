@extends('app')

@section('head_page')

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
                                      <h4 class="c-grey-900 mB-20">Vue</h4>





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
