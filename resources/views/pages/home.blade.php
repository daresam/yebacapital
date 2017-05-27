@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="cp wrapper">
<!--Slider-->
<div class="container-fluid" id="Home">  
    <div class="row">
        <div id="yCarousel" class="carousel slide" data-ride="carousel">
            <!--indicators-->
            <ol class="carousel-indicators">
                <li data-target="#yCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#yCarousel" data-slide-to="1"></li>
                <li data-target="#yCarousel" data-slide-to="2"></li>
            </ol>
            <!--images-->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ url('/images/slider/1.jpg') }}" class="img-responsive" alt="Slider_Image"/>
                    <div class="carousel-caption">
                        <p>Need to sell your Agricultural Goods?<br/>YEBA has got you covered</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ url('/images/slider/2.jpg') }}" class="img-responsive" alt="Slider_Image"/>
                    <div class="carousel-caption">
                        <p>
                            Interested in farming?<br/> Worried about the needed information?<br/>
                            YEBA is what you need
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ url('/images/slider/3.jpg') }}" class="img-responsive" alt="Slider_Image"/>
                    <div class="carousel-caption">
                        <p>Easy connection, Easy access<br/>...a place where Farmers meet Consumers</p>
                    </div>
                </div>
            </div>
            <!--navigators-->
            <a class="carousel-control left" href="#yCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="carousel-control right" href="#yCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
</div>

<!--About YEBA-->
<div class="container-fluid" id="About">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h4 class="text-center heading"><b>ABOUT</b></h4>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-sm-8 aboutY">
                <div class="row">
                    <div class="col-xs-12">
                        <p>
                            <b class="text-success">YEBA</b> is a registered company under the extant Laws of the Federal 
                            Republic of Nigeria.<br/>
                            It is an agriculture-based organization whose core mission is to furnish 
                            farmers and consumers alike with a readily available marketing and educative platforms both locally
                            and internationally, in order to achieve maximum exploration and exploitation of the vast range of 
                            possibilities obtainable in the agricultural sector.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <h4 class="subHeading"><b>PARTNERS</b></h4>
                    </div>
                    <div class="col-xs-3 col-xs-offset-0">
                        <img src="{{ url('images/partners/1.jpg') }}" alt="yebaPartner" class="img-responsive"/>
                    </div>
                    <div class="col-xs-3 col-xs-offset-1">
                        <img src="{{ url('images/partners/2.jpg') }}" alt="yebaPartner" class="img-responsive"/>
                    </div>
                    <div class="col-xs-3 col-xs-offset-1">
                        <img src="{{ url('images/partners/3.jpg') }}" alt="yebaPartner" class="img-responsive"/>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel-group" id="yCollapse">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="#one" data-toggle="collapse" data-parent="#yCollapse">
                                    OUR VISION
                                </a>
                            </h4>
                        </div>
                        <div id="one" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>
                                    To Bridge the gap between famers and consumers thereby providing solution to 
                                    agricultural problems
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="#two" data-toggle="collapse" data-parent="#yCollapse">
                                    OUR MISSION
                                </a>
                            </h4>
                        </div>
                        <div id="two" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    To be the best agricultural hub that delivers unrivalled agricultural services 
                                    to farmers and consumers
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="#three" data-toggle="collapse" data-parent="#yCollapse">
                                    OUR PHILOSOPHY
                                </a>
                            </h4>
                        </div>
                        <div id="three" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    Your Choice Agro Link (Farmers To Consumer)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Services-->
<div class="container-fluid" id="Services">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h4 class="text-center heading"><b>SERVICES</b></h4>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="boxes bg-info">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="text-info">CONSULTANCY</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="{{ url('images/consultancy.jpg') }}" class="img-responsive img-circle center-block" alt="yebaServices"/>
                            <br/>
                            <ul>
                                <li><i class="fa fa-gears text-info"></i> Acquisition of Land</li>
                                <li><i class="fa fa-gears text-info"></i> Financial Analysis</li>
                                <li><i class="fa fa-gears text-info"></i> Farm Management</li>
                                <li><i class="fa fa-gears text-info"></i> Survey and Statistics</li>
                                <li><i class="fa fa-gears text-info"></i> Project Management</li>
                                <li><i class="fa fa-gears text-info"></i> Soil Evaluation</li>
                                <li><i class="fa fa-gears text-info"></i> Setting up Farms for upcoming Farmers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="boxes bg-warning">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="text-warning">MARKETING</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="{{ url('images/marketing.jpg') }}" class="img-responsive img-circle center-block" alt="yebaServices"/>
                            <br/>
                            <ul>
                                <li><i class="fa fa-gears text-success"></i> Advertisement</li>
                                <li><i class="fa fa-gears text-success"></i> Promos</li>
                                <li><i class="fa fa-gears text-success"></i> Trade Fair</li>
                                <li><i class="fa fa-gears text-success"></i> Sponsor</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="boxes bg-danger">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="text-danger">E-COMMERCE HUB</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="{{ url('images/ecommerce.jpg') }}" class="img-responsive img-circle center-block" alt="yebaServices"/>
                            <br/>
                            <ul>
                                <li><i class="fa fa-gears text-black"></i> Selling of Agricultural Goods</li>
                                <li><i class="fa fa-gears text-black"></i> Trade Fair</li>
                                <li><i class="fa fa-gears text-black"></i> Buying and Selling between Farmers and Consumers as well as Farmers and Farmers</li>
                                <li><i class="fa fa-gears text-black"></i> Advertising of Farmers Goods</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="boxes bg-success">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="text-success">LOGISTICS</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="{{ url('images/logistics.jpg') }}" class="img-responsive img-circle center-block" alt="yebaServices"/>
                            <br/>
                            <ul>
                                <li><i class="fa fa-gears text-success"></i> Importation and Exportation</li>
                                <li><i class="fa fa-gears text-success"></i> Connect Farmers with delivery services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Socials & Address-->
<div class="container-fluid" id="Socials">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-xs-12">
                        <h4>YEBA SOCIALS</h4>
                    </div>
                    <div class="col-xs-12">
                        <ul>
                            <li><a href="{{ url('#') }}"><i class="fa fa-caret-right"></i> News</a></li>
                            <li><a href="{{ url('#') }}"><i class="fa fa-caret-right"></i> Games</a></li>
                            <li><a href="{{ url('#') }}"><i class="fa fa-caret-right"></i> Chat Rooms</a></li>
                            <li><a href="{{ url('#') }}"><i class="fa fa-caret-right"></i> Alarm / Alert through Farm Process</a></li>
                            <li><a href="{{ url('#') }}"><i class="fa fa-caret-right"></i> YEBA App</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row">
                    <div class="col-xs-12">
                        <h4>GET IN TOUCH</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <form role="form" action="#" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="Name" id="Name" class="form-control" value="{{ old('Name' )}}" placeholder="Name" required/>
                            </div>
                            <div class="form-group">
                                <input type="email" name="Email" id="Email" class="form-control" value="{{ old('Email') }}" placeholder="Email Address" required/>
                            </div>
                            <div class="form-group">
                                <textarea name="Message" id="Message" class="form-control" placeholder="Your Inquiries, Comments, Complaints, etc" rows="5" required>{{ old('Message') }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success center-block"><i class="fa fa-send"></i> Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12 text-center">
                <p><i class="fa fa-map-marker"></i> Ijapo Estate, Akure, Ondo State, Nigeria</p>
                <p><i class="fa fa-phone-square"></i> +234(0) 806 218 4979, +234(0) 803 688 5195</p>
                <p><i class="fa fa-envelope"></i> yebacapital@gmail.com</p>
            </div>
        </div>
    </div>
</div>

<!--Copyright-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>
                    Copyright &copy; {{ date ('Y') }} Yeba
                </p>
            </div>
        </div>
    </div>
</footer>
</div>

@endsection