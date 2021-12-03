<?php 
    $jobOverview = $jobDetail["overview"];
    $jobExperience = "";
    $jobResponsibility = "";
    foreach ($jobDetail["responsibility"] as $responsibility) {
        $jobResponsibility = $responsibility["responsibility_text"];
    }
    foreach ($jobDetail["experience"] as $experience) {
        $jobExperience = $experience["experience_text"];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/search.css?version=3"> 
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/submit-property.css?version=4">
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/bootstrap-select.css?version=3">
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/map.css?version=3">
    </head>

    <body>
        <div class="dashboard-header clearfix">
            <div class="row">
                <div class="col-sm-12 col-md-6"><h4>Update a Job</h4></div>
            </div>
        </div>

        <div class="submit-address dashboard-list">
            <form method="POST" action="job/update?id=<?php echo $jobOverview["id"];?>" >
                <h4 class="bg-grea-3"> Basic Information </h4>
                <div class="search-contents-sidebar">
                    <div class="row pad-20">
                        <div class="hidden">
                            <div class="form-group">
                                <label>Job Id</label>
                                <input type="text" class="input-text" name="id" value="<?php echo $jobOverview["id"];?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" class="input-text" name="title" value="<?php echo $jobOverview["title"];?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Job Type</label>
                                <select class="selectpicker search-fields" name="job_type">
                                    <option>Job Type</option>
                                    <option <?php if($jobOverview["job_type"] == 'Full time'){echo("selected");}?>>Full time</option>
                                    <option <?php if($jobOverview["job_type"] == 'Part time'){echo("selected");}?>>Part time</option>
                                    <option <?php if($jobOverview["job_type"] == 'Temporary'){echo("selected");}?>>Temporary</option>
                                    <option <?php if($jobOverview["job_type"] == 'To be discussed'){echo("selected");}?>>To be discussed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Job Category</label>
                                <select class="selectpicker search-fields" name="category_id">
                                    <?php foreach ($categoryList as $category) { ?>
                                        <option <?php if($jobOverview["job_type"] == 'Full time'){echo("selected");}?>> <?php echo $category["category"];?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Deadline</label>
                                <input type="date" class="input-text" name="deadline" value="<?php echo $jobOverview["deadline"];?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Qualification</label>
                                <input type="text" class="input-text" name="qualification" value="<?php echo $jobOverview["qualification"];?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="selectpicker search-fields" name="gender">
                                    <option>Gender</option>
                                    <option <?php if($jobOverview["gender"] == 'Male'){echo("selected");}?>>Male</option>
                                    <option <?php if($jobOverview["gender"] == 'Female'){echo("selected");}?>>Female</option>
                                    <option <?php if($jobOverview["gender"] == 'Other'){echo("selected");}?>>Other</option>
                                    <option <?php if($jobOverview["gender"] == 'Any'){echo("selected");}?>>Any</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Salary</label>
                                <input type="number" class="input-text" name="salary" value="<?php echo $jobOverview["salary"];?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Min Experience</label>
                                <input type="number" class="input-text" name="min_experience" value="<?php echo $jobOverview["min_experience"];?>">
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
                                <textarea class="input-text" name="description"> <?php echo $jobOverview["description"];?> </textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Job Experience</label>
                                <textarea class="input-text" id="description" name="experience[]" placeholder="Detailed Information"> <?php echo $jobExperience;?> </textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Job Responsibility</label>
                                <textarea class="input-text" id="description" name="responsibility[]" placeholder="Detailed Information"> <?php echo $jobResponsibility;?> </textarea>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <button class="post-btn btn btn-md button-theme" type="submit">Update job</button>
                        </div>
                    </div>
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