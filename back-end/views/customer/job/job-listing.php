<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/banner.css?version=4">
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
        <div class="sub-banner ">
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

<!-- <?php debugAlert($favoriteJobs); ?> -->
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
                                    <option>Ho Chi Minh City</option>
                                    <option>Hanoi</option>
                                    <option>Vung Tau</option>
                                    <option>Da Nang</option>
                                    <option>Foreign Countries</option>
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
                                <div class="radio">
                                    <input id="fulltime" type="radio" name="job-type">
                                    <label for="Full time">
                                        Full Time
                                    </label>
                                </div>
                                <div class="radio">
                                    <input id="parttime" type="radio" name="job-type">
                                    <label for="Part time">
                                        Part Time
                                    </label>
                                </div>
                                <br>
                            </div>

                            <!-- date-posted is not really needed
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
                            </div>-->

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
                                    <input type="text" id="minsal" name="minsal" min="0" pattern="[0-9]+">
                                    -
                                    <input type="text" id="maxsal" name="maxsal" min="0" pattern="[0-9]+">
                                    $
                                </div>
                                <br>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content3">
                                <i class="fa fa-plus-circle"></i> Qualification
                            </a>
                            <div id="options-content3" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="high_school" type="checkbox" name="high-school">
                                    <label for="high_school">
                                        High school
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="undergrad" type="checkbox" name="undergraduate">
                                    <label for="undergrad">
                                        Undergraduate
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="grad" type="checkbox" name="graduate">
                                    <label for="grad">
                                        Graduate
                                    </label>
                                </div>
                                <br>
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
                                        <option value="id">Relevance</option>
                                        <option value="date_posted DESC">Newest</option>
                                        <option value="date_posted ASC">Oldest</option>
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
                
                    <?php include("job-item.php"); ?>
                        
                    
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>

