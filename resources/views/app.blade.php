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
        <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans"rel="stylesheet">

    </head>

    <body style="background-color: #FFF;">
        @if ($page_title == "Home")
        <span id="tryjstip"></span>
        @endif
        <div class="container-fluid" style="height: 100vh;">
            <div class="sticky-top">
                @include('cookieConsent::index')
                <div class="row bg-white" style="padding: 10px 20px;">
                    <div class="col-md-6">
                        <div class="float-sm-left" style="display: flex; align-items: center; justify-content: center;">
                            <a href="{{ route('home') }}">{{ Html::image('images/logo.png', 'Logo', ['height' => 58]) }}</a>
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
                                <li class="nav-item">
                                    <a class="nav-link" href="http://halogen-group.com/page?mp=About%20Us" target="_blank">About Us</a>
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
                @include('commons.message')
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
                                @if (json_decode(App\Http\Controllers\API::getSettings())->intel_report_link)
                                <div class="col-md-12" style="margin-bottom: 15px;">
                                    <a target="_blank" href="{{ json_decode(App\Http\Controllers\API::getSettings())->intel_report_link }}" class="btn btn-block btn-blue-grey btn-lg">Click here to get the latest security report in Nigeria</a>
                                </div>
                                @endif
                                <div class="col-md-6" style="margin-bottom: 20px;">
                                    <div class="card">
                                        <div class="card-header bg-white text-primary">
                                            <strong>COVID-19 UPDATE</strong>
                                        </div>
                                        <div class="card-body">
                                            <img src="{{ json_decode(App\Http\Controllers\API::getSettings())->covid_image_link }}" class="img-fluid" />
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
                                            <strong>BREAKING NEWS</strong>
                                        </div>
                                        <div class="card-body bg-primary" style="height: 122px; overflow-y: scroll;">
                                            <p>
                                                @if (json_decode(App\Http\Controllers\API::getSettings())->headline_link)
                                                <a target="_blank" href="{{ json_decode(App\Http\Controllers\API::getSettings())->headline_link }}">{{ json_decode(App\Http\Controllers\API::getSettings())->headline_text }}</a>
                                                @else
                                                {{ json_decode(App\Http\Controllers\API::getSettings())->headline_text }}
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 20px;">
                                    <div class="card">
                                        <div class="card-header bg-white text-primary">
                                            <strong>TOP SECURITY STORIES IN NIGERIA</strong>
                                        </div>
                                        <div class="card-body" style="height: 300px; overflow-y: scroll;">
                                            @foreach (json_decode(App\Http\Controllers\API::getNewsFeeds()) as $newsFeed)
                                            <p>
                                                <a target="_blank" href="{{ $newsFeed->link }}">{{ $newsFeed->title }}</a>
                                            </p>
                                            @endforeach
                                            <!--
                                            <p>
                                                <a target="_blank" href="https://www.channelstv.com/2020/04/21/buhari-loses-personal-bodyguard/">BUHARI LOSES PERSONAL BODYGUARD</a>
                                            </p>
                                            <p>
                                                <a target="_blank" href="https://www.vanguardngr.com/2020/04/buhari-approves-payment-of-february-march-salaries-of-varsity-lecturers/">IPPIS: Buhari approves payment of February, March salaries of Varsity lecturers</a>
                                            </p>
                                            <p>
                                                <a target="_blank" href="https://www.vanguardngr.com/2020/04/coronavirus-vaccine-to-be-tried-on-people-from-thursday-%e2%80%95-uk-health-official/">Coronavirus vaccine to be tried on people from Thursday ― UK Health official</a>
                                            </p>
                                            <p>
                                                <a target="_blank" href="https://www.vanguardngr.com/2020/04/lasg-approves-n25000-hazard-allowance-for-health-workers/">LASG approves N25,000 hazard allowance  for health workers</a>
                                            </p>
                                            <p>
                                                <a target="_blank" href="https://www.vanguardngr.com/2020/04/netflix-profits-soar-as-pandemic-shut-ins-sign-up/">Netflix profits soar as pandemic shut-ins sign up</a>
                                            </p>
                                            <p>
                                                <a target="_blank" href="https://www.vanguardngr.com/2020/04/remote-working-530000-zoom-accounts-hacked/">Remote working: 530,000 zoom accounts hacked</a>
                                            </p>
                                            <p>
                                                <a target="_blank" href="https://www.vanguardngr.com/2020/04/photo-fake-vaccine-made-in-kano-for-covid-19/">PHOTO: Fake Vaccine made in Kano for COVID-19</a>
                                            </p>
                                            <p>
                                                <a target="_blank" href="https://www.vanguardngr.com/2020/04/how-intelligent-securityll-drive-ecommerce-growth/">How intelligent security will drive eCommerce growth</a>
                                            </p>
                                            <p>
                                                <a target="_blank" href="http://saharareporters.com/2020/04/19/gunmen-assassinate-civil-defence-officer-benue">Gunmen Assassinate Civil Defence Officer In Benue</a>
                                            </p>
                                            -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-secondary">
                <div class="col-md-12 text-center text-primary" style="margin-top: 30px;">
                    <h3>Our Affiliates</h3>
                </div>
                <div class="col-md-4 col-lg-2" style="padding: 30px;">
                    <a target="_blank" href="https://pshalogen.com/">{{ Html::image('images/logos/ps.jpg', 'PS Halogen', ['class' => 'img-fluid']) }}</a>
                    <p class="text-center text-primary">Physical Security</p>
                </div>
                <div class="col-md-4 col-lg-2" style="padding: 30px;">
                    <a target="_blank" href="https://armadahalogen.com/">{{ Html::image('images/logos/armada.jpg', 'Armada Halogen', ['class' => 'img-fluid']) }}</a>
                    <p class="text-center text-primary">Travel Security</p>
                </div>
                <div class="col-md-4 col-lg-2" style="padding: 30px;">
                    <a target="_blank" href="https://armourxhalogen.com/">{{ Html::image('images/logos/armourx.jpg', 'ArmourX Halogen', ['class' => 'img-fluid']) }}</a>
                    <p class="text-center text-primary">Cyber Security</p>
                </div>
                <div class="col-md-4 col-lg-2" style="padding: 30px;">
                    <a target="_blank" href="https://averthalogen.com/">{{ Html::image('images/logos/avert.jpg', 'Avert Halogen', ['class' => 'img-fluid']) }}</a>
                    <p class="text-center text-primary">Electronic Security</p>
                </div>
                <div class="col-md-4 col-lg-2" style="padding: 30px;">
                    <a target="_blank" href="https://academyhalogen.com/">{{ Html::image('images/logos/academy.jpg', 'Academy Halogen', ['class' => 'img-fluid']) }}</a>
                    <p class="text-center text-primary">Security Education and Thought Leadership</p>
                </div>
                <div class="col-md-4 col-lg-2" style="padding: 30px;">
                    <a target="_blank" href="https://avanthalogen.com/">{{ Html::image('images/logos/avant.jpg', 'Avant Halogen', ['class' => 'img-fluid']) }}</a>
                    <p class="text-center text-primary">Outsourcing, Background Check and Investigations</p>
                </div>
            </div>
            <div class="row bg-primary text-white">
                <div class="col-12 text-center" style="padding: 40px;">
                    <p>
                        <i class="fas fa-map-marker"></i> 19B, Mobolaji Bank Anthony Way, Ikeja, Lagos<br />
                        <i class="fas fa-phone"></i> +234 1-3429012, 1-3429021 8081602646, 0700HALOGEN<br />
                        <i class="fas fa-envelope"></i> info@halogen-group.com, controlroom.headoffice@averthalogen.com<br />
                        Facebook: HalogenNigeria | Twitter: HalogenNG | Instagram: Halogengrp

                    </p>
                    <p class="text-sm"><a href="{{ route('disclaimer') }}">Disclaimer</a> | <a href="{{ route('privacy') }}">Data Privacy Policy</a></p>
                    <a href="https://halogen-group.com" target="_blank">Halogen Group</a> &copy; {{ date("Y") }} All rights reserved.<br /><br />
                    <p>
                        <script type="text/javascript"> //<![CDATA[
  var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
  document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]></script>
<script language="JavaScript" type="text/javascript">
  TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_lg_222x54.png", "POSDV", "none");
</script>
                    </p>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><strong>Join mailing list!</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--
                        {!! Form::model(null, ['route' => ['subscribe'], 'class' => 'form-group']) !!}
                        @include('site/form_subscribe', ['submit_text' => 'Subscribe'])
                        {!! Form::close() !!}
                        -->
                        <form class="form-group" id="ema_signup_form" target="_blank" action="https://madmimi.com/signups/subscribe/08fb0d01615b4ce5a4007113da2d66e4" accept-charset="UTF-8" method="post">
                            <input name="utf8" type="hidden" value="✓"/>
                            <div class="mimi_field required form-group row">
                               <label class="col-md-4 col-form-label" for="signup_email">Email Address *</label>
                               <br/>
                               <div class="col-md-8"><input class="form-control" id="signup_email" name="signup[email]" type="text" data-required-field="This field is required" placeholder="you@example.com"/></div>
                            </div>
                            <div class="mimi_field form-group row">
                               <label class="col-md-4 col-form-label" for="signup_first_name">First Name</label>
                               <br/>
                               <div class="col-md-8"><input class="form-control" id="signup_first_name" name="signup[first_name]" type="text" data-required-field="This field is required"/></div>
                            </div>
                            <div style="background: white; font-size:1px; height: 0; overflow: hidden">
                               <input type="text" name="a650dbe99bca7824954eb803009c648a" style="font-size: 1px; width: 1px !important; height:1px !important; border:0 !important; line-height: 1px !important; padding: 0 0; min-height:1px !important;"/>
                               <input class="checkbox" type="checkbox" name="beacon"/>
                            </div>
                            <div class="mimi_field">
                                <div class="col-md-10 offset-md-4"><input type="submit" class="submit btn btn-primary" value="Subscribe" id="webform_submit_button" data-default-text="Subscribe" data-submitting-text="Sending..." data-invalid-text="↑ You forgot some required fields" data-choose-list="↑ Choose a list" data-thanks="Thank you!"/></div>
                            </div>
                         </form>
                     <script type="text/javascript">
                     (function(global) {
                       function serialize(form){if(!form||form.nodeName!=="FORM"){return }var i,j,q=[];for(i=form.elements.length-1;i>=0;i=i-1){if(form.elements[i].name===""){continue}switch(form.elements[i].nodeName){case"INPUT":switch(form.elements[i].type){case"text":case"hidden":case"password":case"button":case"reset":case"submit":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"checkbox":case"radio":if(form.elements[i].checked){q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value))}break;case"file":break}break;case"TEXTAREA":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"SELECT":switch(form.elements[i].type){case"select-one":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"select-multiple":for(j=form.elements[i].options.length-1;j>=0;j=j-1){if(form.elements[i].options[j].selected){q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].options[j].value))}}break}break;case"BUTTON":switch(form.elements[i].type){case"reset":case"submit":case"button":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break}break}}return q.join("&")};


                       function extend(destination, source) {
                         for (var prop in source) {
                           destination[prop] = source[prop];
                         }
                       }

                       if (!Mimi) var Mimi = {};
                       if (!Mimi.Signups) Mimi.Signups = {};

                       Mimi.Signups.EmbedValidation = function() {
                         this.initialize();

                         var _this = this;
                         if (document.addEventListener) {
                           this.form.addEventListener('submit', function(e){
                             _this.onFormSubmit(e);
                           });
                         } else {
                           this.form.attachEvent('onsubmit', function(e){
                             _this.onFormSubmit(e);
                           });
                         }
                       };

                       extend(Mimi.Signups.EmbedValidation.prototype, {
                         initialize: function() {
                           this.form         = document.getElementById('ema_signup_form');
                           this.submit       = document.getElementById('webform_submit_button');
                           this.callbackName = 'jsonp_callback_' + Math.round(100000 * Math.random());
                           this.validEmail   = /.+@.+\..+/
                         },

                         onFormSubmit: function(e) {
                           e.preventDefault();

                           this.validate();
                           if (this.isValid) {
                             this.submitForm();
                           } else {
                             this.revalidateOnChange();
                           }
                         },

                         validate: function() {
                           this.isValid = true;
                           this.emailValidation();
                           this.fieldAndListValidation();
                           this.updateFormAfterValidation();
                         },

                         emailValidation: function() {
                           var email = document.getElementById('signup_email');

                           if (this.validEmail.test(email.value)) {
                             this.removeTextFieldError(email);
                           } else {
                             this.textFieldError(email);
                             this.isValid = false;
                           }
                         },

                         fieldAndListValidation: function() {
                           var fields = this.form.querySelectorAll('.mimi_field.required');

                           for (var i = 0; i < fields.length; ++i) {
                             var field = fields[i],
                                 type  = this.fieldType(field);
                             if (type === 'checkboxes' || type === 'radio_buttons' || type === 'age_check') {
                               this.checkboxAndRadioValidation(field);
                             } else {
                               this.textAndDropdownValidation(field, type);
                             }
                           }
                         },

                         fieldType: function(field) {
                           var type = field.querySelectorAll('.field_type');

                           if (type.length) {
                             return type[0].getAttribute('data-field-type');
                           } else if (field.className.indexOf('checkgroup') >= 0) {
                             return 'checkboxes';
                           } else {
                             return 'text_field';
                           }
                         },

                         checkboxAndRadioValidation: function(field) {
                           var inputs   = field.getElementsByTagName('input'),
                               selected = false;

                           for (var i = 0; i < inputs.length; ++i) {
                             var input = inputs[i];
                             if((input.type === 'checkbox' || input.type === 'radio') && input.checked) {
                               selected = true;
                             }
                           }

                           if (selected) {
                             field.className = field.className.replace(/ invalid/g, '');
                           } else {
                             if (field.className.indexOf('invalid') === -1) {
                               field.className += ' invalid';
                             }

                             this.isValid = false;
                           }
                         },

                         textAndDropdownValidation: function(field, type) {
                           var inputs = field.getElementsByTagName('input');

                           for (var i = 0; i < inputs.length; ++i) {
                             var input = inputs[i];
                             if (input.name.indexOf('signup') >= 0) {
                               if (type === 'text_field') {
                                 this.textValidation(input);
                               } else {
                                 this.dropdownValidation(field, input);
                               }
                             }
                           }
                           this.htmlEmbedDropdownValidation(field);
                         },

                         textValidation: function(input) {
                           if (input.id === 'signup_email') return;

                           if (input.value) {
                             this.removeTextFieldError(input);
                           } else {
                             this.textFieldError(input);
                             this.isValid = false;
                           }
                         },

                         dropdownValidation: function(field, input) {
                           if (input.value) {
                             field.className = field.className.replace(/ invalid/g, '');
                           } else {
                             if (field.className.indexOf('invalid') === -1) field.className += ' invalid';
                             this.onSelectCallback(input);
                             this.isValid = false;
                           }
                         },

                         htmlEmbedDropdownValidation: function(field) {
                           var dropdowns = field.querySelectorAll('.mimi_html_dropdown');
                           var _this = this;

                           for (var i = 0; i < dropdowns.length; ++i) {
                             var dropdown = dropdowns[i];

                             if (dropdown.value) {
                               field.className = field.className.replace(/ invalid/g, '');
                             } else {
                               if (field.className.indexOf('invalid') === -1) field.className += ' invalid';
                               this.isValid = false;
                               dropdown.onchange = (function(){ _this.validate(); });
                             }
                           }
                         },

                         textFieldError: function(input) {
                           input.className   = 'required invalid';
                           input.placeholder = input.getAttribute('data-required-field');
                         },

                         removeTextFieldError: function(input) {
                           input.className   = 'required';
                           input.placeholder = '';
                         },

                         onSelectCallback: function(input) {
                           if (typeof Widget === 'undefined' || !Widget.BasicDropdown) return;

                           var dropdownEl = input.parentNode,
                               instances  = Widget.BasicDropdown.instances,
                               _this = this;

                           for (var i = 0; i < instances.length; ++i) {
                             var instance = instances[i];
                             if (instance.wrapperEl === dropdownEl) {
                               instance.onSelect = function(){ _this.validate() };
                             }
                           }
                         },

                         updateFormAfterValidation: function() {
                           this.form.className   = this.setFormClassName();
                           this.submit.value     = this.submitButtonText();
                           this.submit.disabled  = !this.isValid;
                           this.submit.className = this.isValid ? 'submit' : 'disabled';
                         },

                         setFormClassName: function() {
                           var name = this.form.className;

                           if (this.isValid) {
                             return name.replace(/\s?mimi_invalid/, '');
                           } else {
                             if (name.indexOf('mimi_invalid') === -1) {
                               return name += ' mimi_invalid';
                             } else {
                               return name;
                             }
                           }
                         },

                         submitButtonText: function() {
                           var invalidFields = document.querySelectorAll('.invalid'),
                               text;

                           if (this.isValid || !invalidFields) {
                             text = this.submit.getAttribute('data-default-text');
                           } else {
                             if (invalidFields.length || invalidFields[0].className.indexOf('checkgroup') === -1) {
                               text = this.submit.getAttribute('data-invalid-text');
                             } else {
                               text = this.submit.getAttribute('data-choose-list');
                             }
                           }
                           return text;
                         },

                         submitForm: function() {
                           this.formSubmitting();

                           var _this = this;
                           window[this.callbackName] = function(response) {
                             delete window[this.callbackName];
                             document.body.removeChild(script);
                             _this.onSubmitCallback(response);
                           };

                           var script = document.createElement('script');
                           script.src = this.formUrl('json');
                           document.body.appendChild(script);
                         },

                         formUrl: function(format) {
                           var action  = this.form.action;
                           if (format === 'json') action += '.json';
                           return action + '?callback=' + this.callbackName + '&' + serialize(this.form);
                         },

                         formSubmitting: function() {
                           this.form.className  += ' mimi_submitting';
                           this.submit.value     = this.submit.getAttribute('data-submitting-text');
                           this.submit.disabled  = true;
                           this.submit.className = 'disabled';
                         },

                         onSubmitCallback: function(response) {
                           if (response.success) {
                             this.onSubmitSuccess(response.result);
                           } else {
                             top.location.href = this.formUrl('html');
                           }
                         },

                         onSubmitSuccess: function(result) {
                           if (result.has_redirect) {
                             top.location.href = result.redirect;
                           } else if(result.single_opt_in || !result.confirmation_html) {
                             this.disableForm();
                             this.updateSubmitButtonText(this.submit.getAttribute('data-thanks'));
                           } else {
                             this.showConfirmationText(result.confirmation_html);
                           }
                         },

                         showConfirmationText: function(html) {
                           var fields = this.form.querySelectorAll('.mimi_field');

                           for (var i = 0; i < fields.length; ++i) {
                             fields[i].style['display'] = 'none';
                           }

                           (this.form.querySelectorAll('fieldset')[0] || this.form).innerHTML = html;
                         },

                         disableForm: function() {
                           var elements = this.form.elements;
                           for (var i = 0; i < elements.length; ++i) {
                             elements[i].disabled = true;
                           }
                         },

                         updateSubmitButtonText: function(text) {
                           this.submit.value = text;
                         },

                         revalidateOnChange: function() {
                           var fields = this.form.querySelectorAll(".mimi_field.required"),
                               _this = this;

                           var onTextFieldChange = function() {
                             if (this.getAttribute('name') === 'signup[email]') {
                               if (_this.validEmail.test(this.value)) _this.validate();
                             } else {
                               if (this.value.length === 1) _this.validate();
                             }
                           }

                           for (var i = 0; i < fields.length; ++i) {
                             var inputs = fields[i].getElementsByTagName('input');
                             for (var j = 0; j < inputs.length; ++j) {
                               if (this.fieldType(fields[i]) === 'text_field') {
                                 inputs[j].onkeyup = onTextFieldChange;
                                 inputs[j].onchange = onTextFieldChange;
                               } else {
                                 inputs[j].onchange = function(){ _this.validate() };
                               }
                             }
                           }
                         }
                       });

                       if (document.addEventListener) {
                         document.addEventListener("DOMContentLoaded", function() {
                           new Mimi.Signups.EmbedValidation();
                         });
                       }
                       else {
                         window.attachEvent('onload', function() {
                           new Mimi.Signups.EmbedValidation();
                         });
                       }
                     })(this);
                     </script>

                    </div>
                </div>
            </div>
        </div>

        <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'b4530073-d8b7-47c1-8f81-7afc22eede82', f: true }); done = true; } }; })();</script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166969951-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-166969951-1');
        </script>

    </body>
</html>
