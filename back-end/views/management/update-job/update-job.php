<?php 
    $jobOverview = $jobDetail["overview"];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/search.css?version=3"> 
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/submit-property.css?version=2">
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/bootstrap-select.css?version=2">
    </head>

    <body>
        <div class="dashboard-header clearfix">
            <div class="row">
                <div class="col-sm-12 col-md-6"><h4>Post a Job</h4></div>
            </div>
        </div>

        <div class="submit-address dashboard-list">
            <form method="GET">
                <h4 class="bg-grea-3"> Basic Information </h4>
                <div class="search-contents-sidebar">
                    <div class="row pad-20">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" class="input-text" name="your name" value="<?php echo $jobOverview["title"];?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Job Type</label>
                                <select class="selectpicker search-fields" name="job-type">
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
                                <select class="selectpicker search-fields" name="job-category">
                                    <?php foreach ($categoryList as $category) { ?>
                                        <option <?php if($jobOverview["job_type"] == 'Full time'){echo("selected");}?>> <?php echo $category["category"];?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" class="input-text" name="your name" value="<?php echo $jobOverview["company"];?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Contact Email</label>
                                <input type="email" class="input-text" name="your name" value="<?php echo $jobOverview["contact_email"];?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Deadline</label>
                                <input type="date" class="input-text" name="your name" value="<?php echo $jobOverview["deadline"];?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Qualification</label>
                                <input type="text" class="input-text" name="your name" value="<?php echo $jobOverview["qualification"];?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="selectpicker search-fields" name="Gender">
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
                                <input type="number" class="input-text" name="your name" value="<?php echo $jobOverview["salary"];?>">
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Min Experience</label>
                                <input type="number" class="input-text" name="your name" value="<?php echo $jobOverview["min_experience"];?>">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea class="input-text" name="message"> <?php echo $jobOverview["description"];?> </textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="post-btn"><a href="#" class="btn btn-md button-theme">Update job</a></div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </body>
</html>