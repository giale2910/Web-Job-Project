<div class="sub-banner bg-color-full">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Job Listing</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Job Listing</li>
            </ul>
        </div>
    </div>
</div>

<div class="job-listing-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="widget-4 advanced-search">
                        <form method="GET" class="informeson">
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" name="search" class="form-control selectpicker search-fields" placeholder="Search Keywords">
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <select class="selectpicker search-fields" name="Location">
                                    <option>All Location</option>
                                    <option>New York City</option>
                                    <option>Australia</option>
                                    <option>Brazil</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Categories</label>
                                <select class="selectpicker search-fields" name="categories">
                                    <option>All Categories</option>
                                <?php foreach ($categoryList as $category) { ?>
                                    <option><?php echo $category["category"];?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <br>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content4">
                                <i class="fa fa-plus-circle"></i> Job Type
                            </a>
                            <div id="options-content4" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="fulltime" type="checkbox" name="job_type">
                                    <label for="fulltime">
                                        Full Time
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="parttime" type="checkbox" name="job_type">
                                    <label for="parttime">
                                        Part Time
                                    </label>
                                </div>
                                <br>
                            </div>
                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content5">
                                <i class="fa fa-plus-circle"></i> Date Posted
                            </a>
                            <div id="options-content5" class="collapse">
                                <div class="radio">
                                    <input id="last_hour" type="radio" name="last_posted">
                                    <label for="last_hour">
                                        Last Hour
                                    </label>
                                </div>
                                <div class="radio">
                                    <input id="last_24_hours" type="radio" name="last_posted">
                                    <label for="last_24_hours">
                                        Last 24 Hours
                                    </label>
                                </div>
                                <div class="radio">
                                    <input id="last_7_days" type="radio" name="last_posted">
                                    <label for="last_7_days">
                                        Last 7 Days
                                    </label>
                                </div>
                                <div class="radio">
                                    <input id="last_30_days" type="radio" name="last_posted">
                                    <label for="last_30_days">
                                        Last 30 Days
                                    </label>
                                </div>
                                <br>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content6">
                                <i class="fa fa-plus-circle"></i> Experience
                            </a>
                            <div id="options-content6" class="collapse">
                                <div class="numinput">
                                    <input type="number" id="minexp" name="minexp" min="0" max="100">
                                    -
                                    <input type="number" id="maxexp" name="maxexp" min="0" max="100">
                                </div>
                                <br>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content">
                                <i class="fa fa-plus-circle"></i> Offerd Salary
                            </a>
                            <div id="options-content" class="collapse">
                                <div class="numinput">
                                    <input type="number" id="minsal" name="minsal" min="0">
                                    -
                                    <input type="number" id="maxsal" name="maxsal" min="0">
                                    $
                                </div>
                                <br>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content3">
                                <i class="fa fa-plus-circle"></i> Qualification
                            </a>
                            <div id="options-content3" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="high_school" type="checkbox" name="qualification">
                                    <label for="high_school">
                                        High school
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="undergrad" type="checkbox" name="qualification">
                                    <label for="undergrad">
                                        Undergraduate
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="grad" type="checkbox" name="qualification">
                                    <label for="grad">
                                        Graduate
                                    </label>
                                </div>
                                <br>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content2">
                                <i class="fa fa-plus-circle"></i> Gender
                            </a>
                            <div id="options-content2" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="male" type="checkbox" name="gender">
                                    <label for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="female" type="checkbox" name="gender">
                                    <label for="female">
                                        Female
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="others" type="checkbox" name="gender">
                                    <label for="others">
                                        Others
                                    </label>
                                </div>

                            </div>

                            <div class="search-submission">
                                <input type="submit" id="submit-button" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12">
                <!-- Option bar start -->
                <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                    <form method="GET" id="sortingform">
                        <div class="row">
                            <div class="col-lg-6 col-md-7 col-sm-7">
                                <div class="sorting-options2">
                                    <label for="sortby">
                                        <span class="sort">Sort by:</span>
                                    </label>
                                    <select id="sortby" class="selectpicker search-fields">
                                        <option value="relevance">Relevance</option>
                                        <option value="newest">Newest</option>
                                        <option value="oldest">Oldest</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-sm-5">
                                <div class="sorting-options">
                                    <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                    <a href="#" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- job box start -->
            <?php foreach ($jobList as $job) { ?> 
                <div class="job-box">
                    <div class="company-logo">
                        <img src="http://placehold.it/90x90" alt="logo">
                    </div>
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title">
                                <a href="/job-detail?id=<?php echo $job["id"];?>"><?php echo $job["title"];?></a>
                            </h5>
                            <div class="candidate-listing-footer">
                                <ul>
                                    <li><i class="flaticon-work"></i> <?php echo $job["company"];?></li>
                                    <li><i class="flaticon-pin"></i> <?php echo $job["city"];?></li>
                                    <li><i class="flaticon-time"></i> <?php echo $job["job_type"];?></li>
                                </ul>
                                <h6>Deadline: <?php echo dateFormat($job["deadline"]);?></h6>
                            </div>
                        </div>
                        <div class="div-right">
                            <a href="#" class="apply-button">Apply Now</a>
                            <a href="#"><i class="flaticon-heart favourite"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
                <!-- hard-coded job list
                <div class="job-box">
                    <div class="company-logo">
                        <img src="http://placehold.it/90x90" alt="logo">
                    </div>
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title"><a href="job-detail">Restaurant General Manager</a></h5>
                            <div class="candidate-listing-footer">
                                <ul>
                                    <li><i class="flaticon-work"></i> Hotel</li>
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
                <div class="job-box">
                    <div class="company-logo">
                        <img src="http://placehold.it/90x90" alt="logo">
                    </div>
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title"><a href="job-detail">Marketing Dairector</a></h5>
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
                <div class="job-box">
                    <div class="company-logo">
                        <img src="http://placehold.it/90x90" alt="logo">
                    </div>
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title"><a href="job-detail">Dhaka Event Support Specialist</a></h5>
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
                            <h5 class="title"><a href="job-detail">Green Development Marketer</a></h5>
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
                <div class="job-box">
                    <div class="company-logo">
                        <img src="http://placehold.it/90x90" alt="logo">
                    </div>
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title"><a href="job-detail">Restaurant General Manager</a></h5>
                            <div class="candidate-listing-footer">
                                <ul>
                                    <li><i class="flaticon-work"></i> Hexagon</li>
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
                <div class="job-box">
                    <div class="company-logo">
                        <img src="http://placehold.it/90x90" alt="logo">
                    </div>
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title"><a href="job-detail">Restaurant General Manager</a></h5>
                            <div class="candidate-listing-footer">
                                <ul>
                                    <li><i class="flaticon-work"></i> Hotel</li>
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
                <div class="job-box">
                    <div class="company-logo">
                        <img src="http://placehold.it/90x90" alt="logo">
                    </div>
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title"><a href="job-detail">Marketing Dairector</a></h5>
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
                <div class="job-box">
                    <div class="company-logo">
                        <img src="http://placehold.it/90x90" alt="logo">
                    </div>
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title"><a href="job-detail">Dhaka Event Support Specialist</a></h5>
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
                -->
                <!-- Page navigation start -->
                <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">Prev</a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

