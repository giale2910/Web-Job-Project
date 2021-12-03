<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/search.css?version=3"> 
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/submit-property.css?version=3">
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/bootstrap-select.css?version=3">
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/map.css?version=3">
    </head>

    <body>
        <div class="dashboard-header clearfix">
            <div class="row">
                <div class="col-sm-12 col-md-6"><h4>Post a Job</h4></div>
            </div>
        </div>

        <div class="submit-address dashboard-list">
            <form action="job/addJob" method="POST">
                <h4 class="bg-grea-3"> Basic Information </h4>
                <div class="search-contents-sidebar">
                    <div class="row pad-20">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" required class="input-text" id="title" name="title" placeholder="Your Title">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Job Type</label>
                                <select class="selectpicker search-fields" id="jobtype" name="job_type">
                                    <option>To be discussed</option>
                                    <option>Full time</option>
                                    <option>Part time</option>
                                    <option>Temporary</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Job Category</label>
                                <select class="selectpicker search-fields" id="category" name="category_id">
                                    <?php foreach ($categoryList as $category) { ?>
                                        <option value="<?= $category["id"]?>"> <?= $category["category"]?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Deadline</label>
                                <input type="date" class="input-text" id="deadline" name="deadline" placeholder="Deadline">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Qualification</label>
                                <input type="text" id="qualification" class="input-text" name="qualification" placeholder="Qualification">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="selectpicker search-fields" id="gender" name="gender">
                                    <option>Any</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Expectd Salary</label>
                                <input type="text" pattern="[0-9]*" id="salary" class="input-text" name="salary" placeholder="USD">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Min Experience</label>
                                <input type="number" id="min_experience" class="input-text" name="min_experience" placeholder="Years">
                            </div>
                        </div>
                        <div class="location col-lg-12 mb-20">
                            <div class="map">
                                <label> Location </label>
                                <input type="text" id="locationName" class="input-text mb-20" name="locationName" placeholder="Location Name">
                                <input type="text" id="lng" class="input-text mb-20" name="lng">
                                <input type="text" id="lat" class="input-text mb-20" name="lat">
                                <div id="map" class="contact-map"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea class="input-text" id="description" name="description" placeholder="Detailed Information"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Job Experience</label>
                                <textarea class="input-text" id="description" name="experience[]" placeholder="Detailed Information"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Job Responsibility</label>
                                <textarea class="input-text" id="description" name="responsibility[]" placeholder="Detailed Information"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TODO: Add Qualification / Responsibility option (multiple text), see job-detail -->
                <div class="col-lg-6">
                    <button class="post-btn btn btn-md button-theme" type="submit">Post a job</button>
                </div>
            </form>
        </div>

        <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3f46sTEdAZCfXqmYwuXsHBrABWue7T2c"></script>

        <script>
            function LoadMap(propertes) {
                const defaultLocation = {lat: 10.8144067, lng: 106.7106083};
                var mapOptions = {
                    center: new google.maps.LatLng(defaultLocation.lat, defaultLocation.lng),
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
                var lng = document.getElementById("lng");
                var lat = document.getElementById("lat");
                lng.value = defaultLocation.lng;
                lat.value = defaultLocation.lat;
                var myLatlng = new google.maps.LatLng(defaultLocation.lat, defaultLocation.lng);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map
                });
                var infoWindow = new google.maps.InfoWindow();
                (function () {
                    google.maps.event.addListener(map,'click',function(event) {
                        marker.setMap(null);
                        marker = new google.maps.Marker({
                            position: event.latLng,
                            map: map
                        });
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
                        infoWindow.open(map,marker);
                        lng.value = event.latLng.lng();
                        lat.value = event.latLng.lat();
                    });
                })();
            }
            LoadMap();
        </script>
    </body>
</html>