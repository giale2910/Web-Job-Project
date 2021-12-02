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
                    <h1>Job Seeker</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Job Seeker</li>
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
                <!-- job box start -->
            <?php foreach ($jobseekerList as $user) { ?> 
                <div class="job-box" style='min-height:170px; margin-bottom:10px;'> 
                    <div class="company-logo">
                        <!-- <img src="http://placehold.it/90x90" alt="logo"> -->
                        <img src="../../../public/images/uploadImage/<?php echo $user["image"];?>" alt="logo">
                    </div>
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title">
                                <a href=""><?php echo $user["first_name"].' '. $user["last_name"];?></a>
                            </h5>
                            <div class="candidate-listing-footer">
                                <ul>
                                    <li><i class="flaticon-work"></i> <?php echo $user["address"];?></li>
                                    <li><i class="flaticon-pin"></i> <?php echo $user["phone"];?></li>
                                    <li><i class="flaticon-time"></i> <?php echo $user["email"];?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="div-right">
                            <!-- <a  href = "mailto: phuonggiale13@gmail.com" class="apply-button">Email to Apply</a> -->
                            <!-- <a href="#"><i class="flaticon-heart favourite"></i></a> -->
                            <a href="<?php echo $company["profile_link"];?>" target="_blank"><img class="favourite" src="../../../public/images/cv1.png" style="width:30px; height:30px;border-radius:30px; border: solid 1px #fff;"></a>

                        </div>
                    </div>
                </div>
            <?php } ?>
                        <!-- Page navigation start -->
                        <!-- <div class="pagination-box hidden-mb-45 text-center">
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
                        </div> -->
                        <div class="pagination-box hidden-mb-45 text-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                <?php if ($page != 0) {?> 
                                    <li class="page-item">
                                        <a class="page-link" href="<?php urlUpdate("page", $page-1);?>">Prev</a></li> 
                                <?php } ?>
                                    <li class="page-item"><a class="page-link active" href="#"><?= $page?></a></li>
                                    <li class="page-item">
                                        <a id="custom-text" class="page-link" href="<?php urlUpdate("page", $page+1);?>">Next</a>
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

