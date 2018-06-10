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
                                                  <h4 class="c-grey-900 mB-20">Assign Teacher</h4>

                                                  <div class="mT-30">
                                                    @if (Session::has('flash_message'))
                                                        <div class="alert alert-success">
                                                            {{ Session::get('flash_message') }}
                                                        </div>
                                                    @endif

                                                    @if ($errors->any())
                                                      <div class="alert alert-danger">
                                                         <ul>
                                                            @foreach($errors->all() as $error)
                                                              <li>{{ $error }}</li>
                                                            @endforeach
                                                         </ul>
                                                     </div>
                                                     <br />
                                                    @endif


                                                    <form action="assign_subject" method="post">
                                                      {{ csrf_field() }}

                                                        <div class="form-row">
                                                            <div class="form-group col-md-2">
                                                                <label for="inputEmail4">Class</label>
                                                                <select class="form-control" name="class">
                                                                  <option value="" disabled selected>Select Class/Section</option>
                                                                  @foreach($section as $sections)
                                                                    <option value="{{ $sections->id }}"> {{ App\Classes::find($sections->classId)->class }} -  {{ $sections->sec }}</option>
                                                                   @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="inputEmail4">Subject</label>
                                                                <select class="form-control" name="subject">
                                                                    <option value="" disabled selected>Select Subject</option>
                                                                    @foreach($subjects as $subject)
                                                                      <option value="{{ $subject->id }}">{{ $subject->name}}</option>
                                                                     @endforeach
                                                                </select>
                                                            </div>





                                                            <div class="form-group col-md-2" >
                                                                <button type="submit" class="btn btn-primary uploadButton">Assign</button>

                                                            </div>
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
