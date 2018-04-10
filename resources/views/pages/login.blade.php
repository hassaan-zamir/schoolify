@extends('app')


@section('head_page')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/custom.css">

    <style type="text/css">
        body{
        color: black;
        }
        .navbar_color{
        background-color: #180b31;
        color: white;
        }
        .navbar{
        color: white !important;
        }
        .navbar-default .navbar-brand{
        color: white;
        }
        .navbar-default .navbar-nav>li>a{
        color: white;
        }
        .login_button{
        margin-left: 40%;
        }
        .button_styling{
        background-color: #180b31 !important;
        border-radius: 25px #180b31;
        width: 150px;
        }
        @media(max-width:480px){
        .button_styling{
        width: 100px;
        }
        }
        .panel-info{
        border-color: white !important;
        }
        .sea_green{
        color: #180b31;
        }
        .welcome_text{
        color: #180b31;
        text-align: center;
        }
        .logo{
        width: 55px;
        margin-left: 40px;
        margin-top: -5px;
        }
        .element_right{
        margin-right: 40px;
        }
    </style>
@stop

@section('content')

<div class="login-page">
  <div class="form">
    <img src="img/school_icon.png" alt="" style="width:80%;"> <br /> <br /> <br />
    <form class="login-form">
      <input type="text" placeholder="Username"/>
      <input type="password" placeholder="Password"/>
      <button>login</button>
    </form>
  </div>
</div>

@stop