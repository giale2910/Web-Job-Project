<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/banner.css?version=3">
        <!-- Right body css -->
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/sidebar-right.css">
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/search.css">
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/pagination-box.css">
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/custom-animation.css">
        <!-- Left body css -->
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/option-bar.css">
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/job-box.css">
    </head>
    <body>
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
                                            <input id="checkbox13" type="checkbox">
                                            <label for="checkbox13">
                                                Full Time
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox14" type="checkbox">
                                            <label for="checkbox14">
                                                Part Time
                                            </label>
                                        </div>
                                        <br>
                                    </div>
                                    <a class="show-more-options" data-toggle="collapse" data-target="#options-content5">
                                        <i class="fa fa-plus-circle"></i> Date Posted
                                    </a>
                                    <div id="options-content5" class="collapse">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox15" type="checkbox">
                                            <label for="checkbox15">
                                                Last Hour
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox16" type="checkbox">
                                            <label for="checkbox16">
                                                Last 24 Hours
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox17" type="checkbox">
                                            <label for="checkbox17">
                                                Last 7 Days
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox18" type="checkbox">
                                            <label for="checkbox18">
                                                Last 30 Days
                                            </label>
                                        </div>
                                        <br>
                                    </div>

                                    <a class="show-more-options" data-toggle="collapse" data-target="#options-content6">
                                        <i class="fa fa-plus-circle"></i> Experience
                                    </a>
                                    <div id="options-content6" class="collapse">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox19" type="checkbox">
                                            <label for="checkbox19">
                                                1 Year
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox20" type="checkbox">
                                            <label for="checkbox20">
                                                2 Year
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox21" type="checkbox">
                                            <label for="checkbox21">
                                                3 Year
                                            </label>
                                        </div>
                                        <br>
                                    </div>

                                    <a class="show-more-options" data-toggle="collapse" data-target="#options-content">
                                        <i class="fa fa-plus-circle"></i> Offerd Salary
                                    </a>
                                    <div id="options-content" class="collapse">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox2" type="checkbox">
                                            <label for="checkbox2">
                                                10k - 20k
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3">
                                                20k - 30k
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox4" type="checkbox">
                                            <label for="checkbox4">
                                                30k - 40k
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">
                                                40k - 50k
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox7" type="checkbox">
                                            <label for="checkbox7">
                                                50k - 60k
                                            </label>
                                        </div>
                                        <br>
                                    </div>

                                    <a class="show-more-options" data-toggle="collapse" data-target="#options-content3">
                                        <i class="fa fa-plus-circle"></i> Qualification
                                    </a>
                                    <div id="options-content3" class="collapse">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox11" type="checkbox">
                                            <label for="checkbox11">
                                                Intermidiate
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox12" type="checkbox">
                                            <label for="checkbox12">
                                                Gradute
                                            </label>
                                        </div>
                                        <br>
                                    </div>

                                    <a class="show-more-options" data-toggle="collapse" data-target="#options-content2">
                                        <i class="fa fa-plus-circle"></i> Gender
                                    </a>
                                    <div id="options-content2" class="collapse">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox8" type="checkbox">
                                            <label for="checkbox8">
                                                Male
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox9" type="checkbox">
                                            <label for="checkbox9">
                                                Female
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox10" type="checkbox">
                                            <label for="checkbox10">
                                                Others
                                            </label>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <!-- Option bar start -->
                        <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 col-sm-7">
                                    <div class="sorting-options2">
                                        <span class="sort">Sort by:</span>
                                        <select class="selectpicker search-fields" name="default-order">
                                            <option>Relevance</option>
                                            <option>Newest</option>
                                            <option>Oldest</option>
                                            <option>Random</option>
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
    </body>
</html>
