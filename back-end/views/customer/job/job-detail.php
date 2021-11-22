<?php 
    $jobOverview = $jobDetail["overview"];
    $salary = $jobOverview["salary"];
    $minExperience = $jobOverview["min_experience"];
    $maxExperience = $jobOverview["max_experience"];
    if ($salary==-1) $salaryDisplay = "To be negotiated";
    else $salaryDisplay = "£$salary";
    $experienceDisplay = "";
    if ($minExperience==-1) $experienceDisplay = "None";
    else $experienceDisplay = "$minExperience+ year(s)";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/banner.css?version=3">
        <!-- Body -->
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/job-box.css?version=3">
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/amenities.css?version=3">
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/job-detail.css?version=3">
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/sidebar-right.css?version=4">
    </head>
    <body>
        <div class="sub-banner bg-color-full">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>Job Detail</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Job Listing</li>
                        <li class="active">Job Detail</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="job-details-page content-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <!-- job box 2 start -->
                        <div class="job-box-2">
                            <div class="company-logo">
                                <img src="http://placehold.it/80x80" alt="avatar">
                            </div>
                            <div class="description">
                                <h5 class="title"><a href="#"><?php echo $jobOverview["title"];?></a></h5>
                                <div class="candidate-listing-footer">
                                    <ul>
                                        <li><i class="flaticon-work"></i><?php echo $jobOverview["company"];?></li>
                                        <li><i class="flaticon-pin"></i> <?php echo $jobOverview["city"];?></li>
                                        <li><i class="flaticon-time"></i> <?php echo $jobOverview["job_type"];?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-boder">
                        <!-- job description start -->
                        <div class="job-description mb-40">
                            <h3 class="heading-2">Job Description</h3>
                            <p><?php echo $jobOverview["description"];?></p>
                        </div>
                        <!-- Education + experience start-->
                        <div class="education-experience amenities mb-40">
                            <h3 class="heading-2">Education + Experience</h3>
                            <ul>
                            <?php foreach ($jobDetail["experience"] as $experience){ ?>
                                <li>
                                    <i class="fa fa-check"></i><?php echo $experience["experience_text"]; ?>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                        <!-- Responsibilities start-->
                        <div class="responsibilities amenities mb-40">
                            <h3 class="heading-2">Responsibilities</h3>
                            <ul>
                            <?php foreach ($jobDetail["responsibility"] as $responsibility){ ?>
                                <li>
                                    <i class="fa fa-check"></i><?php echo $responsibility["responsibility_text"]; ?>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                        <!-- Location start -->
                        <div class="location mb-50">
                            <div class="map">
                                <h3 class="heading-2">Location</h3>
                                <div id="map" class="contact-map"></div>
                            </div>
                        </div>
                        <!-- Social list 2 start -->
                        <div class="social-list-2 sl-3 float-left mb-40">
                            <span>Share</span>
                            <a href="#" class="facebook-bg">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="twitter-bg">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="google-bg">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="#" class="linkedin-bg">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="#" class="pinterest-bg">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Related jobs start -->
                        <div class="related-Jobs clearfix">
                            <h3 class="heading-2">Related Jobs</h3>
                            <div class="job-box">
                                <div class="company-logo">
                                    <img src="http://placehold.it/90x90" alt="logo">
                                </div>
                                <div class="description">
                                    <div class="float-left">
                                        <h5 class="title"><a href="job-details.html">Dhaka Event Support Specialist</a></h5>
                                        <div class="candidate-listing-footer">
                                            <ul>
                                                <li><i class="flaticon-work"></i> Xero</li>
                                                <li><i class="flaticon-pin"></i> New York City</li>
                                                <li><i class="flaticon-time"></i> Temporary</li>
                                            </ul>
                                            <h6>Deadline: Jan 31, 2019</h6>
                                        </div>
                                    </div>
                                    <div class="div-right">
                                        <a href="#" class="apply-button">Apply Now</a>
                                        <a href="#"><i class="flaticon-heart favourite"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="job-box">
                                <div class="company-logo">
                                    <img src="http://placehold.it/90x90" alt="logo">
                                </div>
                                <div class="description">
                                    <div class="float-left">
                                        <h5 class="title"><a href="job-details.html">Development Marketer</a></h5>
                                        <div class="candidate-listing-footer">
                                            <ul>
                                                <li><i class="flaticon-work"></i> Red</li>
                                                <li><i class="flaticon-pin"></i> New York City</li>
                                                <li><i class="flaticon-time"></i> Part Time</li>
                                            </ul>
                                            <h6>Deadline: Jan 31, 2019</h6>
                                        </div>
                                    </div>
                                    <div class="div-right">
                                        <a href="#" class="apply-button">Apply Now</a>
                                        <a href="#"><i class="flaticon-heart favourite"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="job-box mb-30">
                                <div class="company-logo">
                                    <img src="http://placehold.it/90x90" alt="logo">
                                </div>
                                <div class="description">
                                    <div class="float-left">
                                        <h5 class="title"><a href="job-details.html">Green Development Marketer</a></h5>
                                        <div class="candidate-listing-footer">
                                            <ul>
                                                <li><i class="flaticon-work"></i> Zooms</li>
                                                <li><i class="flaticon-pin"></i> New York City</li>
                                                <li><i class="flaticon-time"></i> Full Time</li>
                                            </ul>
                                            <h6>Deadline: Jan 31, 2019</h6>
                                        </div>
                                    </div>
                                    <div class="div-right">
                                        <a href="#" class="apply-button">Apply Now</a>
                                        <a href="#"><i class="flaticon-heart favourite"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-12">
                        <div class="sidebar-right-2">
                            <!-- Search box start -->
                            <!-- <div class="widget search-box">
                                <form method="GET">
                                    <div class="form-group fg-2">
                                        <button class="search-button sj-btn btn-outline">Save job</button>
                                    </div>
                                    <div class="form-group mb-0">
                                        <button class="search-button button-theme">Apply Now</button>
                                    </div>
                                </form>
                            </div> -->
                             <!-- Job overview start -->
                            <div class="job-overview widget">
                                <h3 class="sidebar-title">Job Overview</h3>
                                <div class="s-border"></div>
                                <ul>
                                    <li><i class="flaticon-money"></i><h5>Salary</h5><span><?php echo $salaryDisplay;?></span></li>
                                    <li><i class="flaticon-pin"></i><h5>Location</h5><span><?php echo $jobOverview["city"];?></span></li>
                                    <li><i class="flaticon-woman"></i><h5>Gender</h5><span><?php echo $jobOverview["gender"];?></span></li>
                                    <li><i class="flaticon-work"></i><h5>Job Type</h5><span><?php echo $jobOverview["job_type"];?></span></li>
                                    <li><i class="flaticon-honor"></i><h5>Qualification</h5><span><?php echo $jobOverview["qualification"];?></span></li>
                                    <li><i class="flaticon-notepad"></i><h5>Experience</h5><span><?php echo $experienceDisplay;?></span></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <!-- Quick contact start -->
                            <div class="widget-5 contact-2 quick-contact">
                                <h3 class="sidebar-title">Quick Contacts</h3>
                                <div class="s-border"></div>
                                <form action="#" method="GET" enctype="multipart/form-data">
                                    <div class="form-group name">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group email">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group message">
                                        <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                    </div>
                                    <div class="send-btn">
                                        <button type="submit" class="btn btn-md button-theme">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            (function(i,s,o,g,r,a,m) {
                i['GoogleAnalyticsObject'] = r; 
                i[r]=i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)}, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a,m)
            })(window,document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-89110077-3', 'auto');
            ga('send', 'pageview');
        </script>

        <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgCdL8eyrNZ4mR0qmepD6Q4N3ULd76J94"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgCdL8eyrNZ4mR0qmepD6Q4N3ULd76J94"></script>
        <script>
        function LoadMap(propertes) {
            var defaultLat = <?php echo $jobOverview["lat"]?>;
            var defaultLng = <?php echo $jobOverview["lng"]?>;
            var mapOptions = {
                center: new google.maps.LatLng(defaultLat, defaultLng),
                zoom: 15,
                scrollwheel: false,
                styles: [
                    {
                        featureType: "administrative",
                        elementType: "labels",
                        stylers: [
                            {visibility: "off"}
                        ]
                    },
                    {
                        featureType: "water",
                        elementType: "labels",
                        stylers: [
                            {visibility: "off"}
                        ]
                    },
                    {
                        featureType: 'poi.business',
                        stylers: [{visibility: 'off'}]
                    },
                    {
                        featureType: 'transit',
                        elementType: 'labels.icon',
                        stylers: [{visibility: 'off'}]
                    },
                ]
            };
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var infoWindow = new google.maps.InfoWindow();
            var myLatlng = new google.maps.LatLng(defaultLat, defaultLng);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map
                });
                (function (marker) {
                    google.maps.event.addListener(marker, "click", function (e) {
                        infoWindow.setContent("" +
                            "<div class='map-properties contact-map-content'>" +
                            "<div class='map-content'>" +
                            "<p class='address'>20-21 Kathal St. Tampa City, FL</p>" +
                            "<ul class='map-properties-list'> " +
                            "<li><i class='flaticon-phone'></i>  +0477 8556 552</li> " +
                            "<li><i class='flaticon-phone'></i>  info@themevessel.com</li> " +
                            "<li><a href='index.html'><i class='fa fa-globe'></i>  http://www.example.com</li></a> " +
                            "</ul>" +
                            "</div>" +
                            "</div>");
                        infoWindow.open(map, marker);
                    });
                })(marker);
            }
            LoadMap();
        </script>
    </body>

</html>