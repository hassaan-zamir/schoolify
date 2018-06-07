@extends('app')

@section('head_page')
    <style media="screen">
        .uploadButton {
            margin-top:30px;
        }

        .moveLeft5px {
          margin-left: -13px;
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
                                                  <h4 class="c-grey-900 mB-20">Feedback</h4>

                                                  <div class="mT-30">
                                                    <form>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <select class="form-control" name="">
                                                                    <option value="">Choose Subject</option>
                                                                    <option value="">Urdu</option>
                                                                    <option value="">Maths</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <input type="text" name="" value="" class="form-control" placeHolder="Title">
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <textarea name="name" rows="8" cols="80" class="form-control" placeHolder="Message"></textarea>
                                                            </div>
                                                        </div>



                                                        <div class="form-group col-md-2" >
                                                          <button type="submit" class="btn btn-primary moveLeft5px">Send</button>

                                                        </div>

                                                    </form>
                                                </div>

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
