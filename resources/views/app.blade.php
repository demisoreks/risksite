<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $page_title }} | {{ config('app.name') }}</title>
        
        <style type="text/css">
        #map {
          height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
          height: 100%;
          margin: 0;
          padding: 0;
        }
        #description {
          font-family: Roboto;
          font-size: 15px;
          font-weight: 300;
        }

        #infowindow-content .title {
          font-weight: bold;
        }

        #infowindow-content {
          display: none;
        }

        #map #infowindow-content {
          display: inline;
        }

        .pac-card {
          margin: 10px 10px 0 0;
          border-radius: 2px 0 0 2px;
          box-sizing: border-box;
          -moz-box-sizing: border-box;
          outline: none;
          box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
          background-color: #fff;
          font-family: Roboto;
        }

        #pac-container {
          padding-bottom: 12px;
          margin-right: 12px;
        }

        .pac-controls {
          display: inline-block;
          padding: 5px 11px;
        }

        .pac-controls label {
          font-family: Roboto;
          font-size: 13px;
          font-weight: 300;
        }

        #pac-input {
          background-color: #fff;
          font-family: Roboto;
          font-size: 15px;
          font-weight: 300;
          margin-left: 12px;
          padding: 0 11px 0 13px;
          text-overflow: ellipsis;
          width: 400px;
        }

        #pac-input:focus {
          border-color: #4d90fe;
        }

        #title {
          color: #fff;
          background-color: #4d90fe;
          font-size: 25px;
          font-weight: 500;
          padding: 6px 12px;
        }
        #target {
          width: 345px;
        }
        
        .pac-container {
            background-color: #FFF;
            z-index: 100000;
            position: absolute;
            display: inline-block;
            float: left;
        }
        .modal{
            z-index: 2000;
        }
        .modal-backdrop{
            z-index: 1000;
        }​
        
        .dot {
            height: 25px;
            width: 25px;
            background-color: #CCC;
            border-radius: 50%;
            display: inline-block;
        }
        </style>
        
        {!! Html::style('css/app.css') !!}
        {!! Html::style('css/mdb.min.css') !!}
        {!! Html::style('css/datatables.min.css') !!}
        {!! Html::style('css/responsive.dataTables.min.css') !!}
        {!! Html::style('css/buttons.dataTables.min.css') !!}
        {!! Html::style('fontawesome/css/all.css') !!}
        {!! Html::style('css/select2.min.css') !!}
        
        {!! Html::script('js/jquery-3.3.1.min.js') !!}
        {!! Html::script('js/popper.min.js') !!}
        {!! Html::script('js/app.js') !!}
        {!! Html::script('js/mdb.min.js') !!}
        {!! Html::script('js/datatables.min.js') !!}
        {!! Html::script('js/dataTables.responsive.min.js') !!}
        {!! Html::script('js/dataTables.buttons.min.js') !!}
        {!! Html::script('js/buttons.flash.min.js') !!}
        {!! Html::script('js/jszip.min.js') !!}
        {!! Html::script('js/pdfmake.min.js') !!}
        {!! Html::script('js/vfs_fonts.js') !!}
        {!! Html::script('js/buttons.html5.min.js') !!}
        {!! Html::script('js/buttons.print.min.js') !!}
        {!! Html::script('js/select2.min.js') !!}
        
        <script type="text/javascript">
            $(document).ready(function () {
                $('#myTable1').DataTable({
                    fixedHeader: true
                });
                $('#myTable2').DataTable({
                    fixedHeader: true
                });
                $('#myTable3').DataTable({
                    fixedHeader: true,
                    "order": [[ 0, "desc" ]]
                });
                $('#myTable4').DataTable({
                    fixedHeader: true,
                    dom: 'Bfrtip',
                    buttons: [
                        'excel', 'print'
                    ]
                });
            });
        </script>

        <!-- Styles -->
        
    </head>
    
    <body style="background-color: #FFF;">
        @if ($page_title == "Home")
        <span id="tryjstip"></span>
        @endif
        <div class="container-fluid" style="height: 100vh;">
            <div class="sticky-top">
                <div class="row bg-white" style="padding: 20px;">
                    <div class="col-md-6">
                        <div class="float-sm-left" style="display: flex; align-items: center; justify-content: center;">
                            <a href="{{ route('home') }}">{{ Html::image('images/logo.png', 'Logo', ['height' => 30]) }}</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="float-sm-right" style="display: flex; align-items: center; justify-content: center; height: 100%;">
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('profile') }}">Risk Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('travel') }}">Travel Advisory</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row bg-primary">
                    <div class="col-12 text-center text-white" style="padding: 15px;">
                        Join our security risk advisory mailing list!
                        <a class="btn btn-secondary text-primary" data-toggle="modal" data-target="#modal1">Subscribe Now</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding: 30px 20px;">
                    <div class="row">
                        <div class="col-md-7" style="margin-bottom: 20px;">
                            <h3 class="text-primary" style="border-bottom: 1px solid #999; margin-bottom: 20px; padding-bottom: 20px;">{{ $page_title }}</h3>
                            @yield('content')
                        </div>
                        <div class="col-md-5" class="col-md-8" style="margin-bottom: 20px;">
                            <div class="row">
                                <!--
                                <div class="col-md-12" style="margin-bottom: 15px;">
                                    <a href="{{ route('profile') }}" class="btn btn-block btn-blue-grey btn-lg">National Security Risk Profile</a>
                                </div>
                                -->
                                <div class="col-md-6" style="margin-bottom: 20px;">
                                    <div class="card">
                                        <div class="card-header bg-white text-primary">
                                            <strong>COVID-19 UPDATE</strong>
                                        </div>
                                        <div class="card-body">
                                            <img src="https://pbs.twimg.com/media/EWAHqVDWsAcKoqh?format=jpg&name=medium" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-bottom: 20px;">
                                    <div class="card">
                                        <div class="card-header bg-white text-primary">
                                            <strong>SECURITY RISK PROFILE</strong>
                                        </div>
                                        <div class="card-body">
                                            <a href="{{ route('profile') }}">{{ Html::image('images/profile.jpg', 'Risk Profile', ['class' => 'img-fluid']) }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-bottom: 20px;">
                                    <div class="card">
                                        <div class="card-header bg-white text-primary">
                                            <strong>TRAVEL ADVISORY</strong>
                                        </div>
                                        <div class="card-body text-center">
                                            <h1 class="text-center text-primary"><i class="fas fa-car"></i></h1>
                                            <a class="btn btn-secondary btn-block btn-sm" href="{{ route('travel') }}">View Travel Advisory</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-bottom: 20px;">
                                    <div class="card">
                                        <div class="card-header bg-white text-primary">
                                            <strong>HEADLINES</strong>
                                        </div>
                                        <div class="card-body">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 20px;">
                                    <div class="card">
                                        <div class="card-header bg-white text-primary">
                                            <strong>NEWS FEEDS</strong>
                                        </div>
                                        <div class="card-body" style="height: 300px; overflow-y: scroll;">
                                            <p>
                                                <a target="_blank" href="https://allafrica.com/stories/202004130515.html">UPDATE: President Buhari extends lockdown in Lagos, Ogun, Abuja by 14 days</a>
                                            </p>
                                            <p>
                                                <a target="_blank" href="http://venturesafrica.com/we-have-drug-insecurity-because-of-coronavirus-nafdac-dg/">WE HAVE DRUG INSECURITY BECAUSE OF CORONAVIRUS” – NAFDAC DG</a>
                                            </p>
                                            <p>
                                                <a target="_blank" href="https://www.aljazeera.com/news/2020/04/armed-bandits-kill-47-nigeria-katsina-state-police-200419183056608.html">Armed bandits kill at lest 47 in Nigeria's Katsina state: Police</a>
                                            </p>
                                            <p>
                                                <a target="_blank" href="https://www.premiumtimesng.com/news/388803-coronavirus-nigeria-records-highest-daily-figure-total-now-627.html">Coronavirus: Nigeria records highest daily figure, total now 627</a>
                                            </p>
                                            <p>
                                                <a target="_blank" href="https://nairametrics.com/2020/04/13/president-buhari-extends-lockdown-in-lagos-ogun-abuja-by-14-days/">UPDATE: President Buhari extends lockdown in Lagos, Ogun, Abuja by 14 days</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-secondary">
                <div class="col-md-4 col-lg-2" style="padding: 30px;">
                    <a target="_blank" href="https://pshalogen.com/">{{ Html::image('images/logos/ps.jpg', 'PS Halogen', ['class' => 'img-fluid']) }}</a>
                    <p class="text-center text-primary">Technology supported physical security</p>
                </div>
                <div class="col-md-4 col-lg-2" style="padding: 30px;">
                    <a target="_blank" href="https://armadahalogen.com/">{{ Html::image('images/logos/armada.jpg', 'Armada Halogen', ['class' => 'img-fluid']) }}</a>
                    <p class="text-center text-primary">Moving with you</p>
                </div>
                <div class="col-md-4 col-lg-2" style="padding: 30px;">
                    <a target="_blank" href="https://armourxhalogen.com/">{{ Html::image('images/logos/armourx.jpg', 'ArmourX Halogen', ['class' => 'img-fluid']) }}</a>
                    <p class="text-center text-primary">Protecting you in a virtual and open world</p>
                </div>
                <div class="col-md-4 col-lg-2" style="padding: 30px;">
                    <a target="_blank" href="https://averthalogen.com/">{{ Html::image('images/logos/avert.jpg', 'Avert Halogen', ['class' => 'img-fluid']) }}</a>
                    <p class="text-center text-primary">Clear sight and control</p>
                </div>
                <div class="col-md-4 col-lg-2" style="padding: 30px;">
                    <a target="_blank" href="https://academyhalogen.com/">{{ Html::image('images/logos/academy.jpg', 'Academy Halogen', ['class' => 'img-fluid']) }}</a>
                    <p class="text-center text-primary">Creating knowledge in pursuit of safety in an open world</p>
                </div>
                <div class="col-md-4 col-lg-2" style="padding: 30px;">
                    <a target="_blank" href="https://avanthalogen.com/">{{ Html::image('images/logos/avant.jpg', 'Avant Halogen', ['class' => 'img-fluid']) }}</a>
                    <p class="text-center text-primary">We accelerate businesses with people risk management solutions</p>
                </div>
            </div>
            <div class="row bg-primary text-white">
                <div class="col-12 text-center" style="padding: 40px;">
                    Powered by<br />
                    <a href="https://halogensecurity.com" target="_blank">
                        {{ Html::image('images/logo-new-small.jpg', 'Halogen Logo', ['width' => 60]) }}
                    </a><br />
                    &copy; {{ date("Y") }} All rights reserved.
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><strong>Joining mailing list!</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! Form::model(null, ['route' => ['subscribe'], 'class' => 'form-group']) !!}
                        @include('site/form_subscribe', ['submit_text' => 'Subscribe'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
