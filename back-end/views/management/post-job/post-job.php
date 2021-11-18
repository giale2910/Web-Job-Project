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
                                <label>Company</label>
                                <input type="text" required class="input-text" id="company" name="company" placeholder="Company">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Contact Email</label>
                                <input type="email" class="input-text" id="contact" name="contact" placeholder="Email">
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
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea class="input-text" id="description" name="description" placeholder="Detailed Information"></textarea>
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
    </body>
</html>