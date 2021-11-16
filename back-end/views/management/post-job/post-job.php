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
                                <input type="text" class="input-text" name="your name" placeholder="Your Title">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Job Type</label>
                                <select class="selectpicker search-fields" name="job-type">
                                    <option>Job Type</option>
                                    <option>Full time</option>
                                    <option>Part time</option>
                                    <option>Freelance</option>
                                    <option>Temporary</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Job Category</label>
                                <select class="selectpicker search-fields" name="job-category">
                                    <option>Job Category</option>
                                    <option>Accounting / Finance</option>
                                    <option>Restaurant / Food Service</option>
                                    <option>Counseling</option>
                                    <option>Health Care</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="input-text" name="your name" placeholder="Location">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Salary</label>
                                <input type="text" class="input-text" name="your name" placeholder="USD">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="selectpicker search-fields" name="Gender">
                                    <option>Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="selectpicker search-fields" name="Country">
                                        <option>Country</option>
                                        <option>Usa</option>
                                        <option>Bangladesh</option>
                                        <option>Indea</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>City</label>
                                    <select class="selectpicker search-fields" name="City">
                                        <option>City</option>
                                        <option>Dhaka</option>
                                        <option>Dubai</option>
                                        <option>Mumbai</option>
                                        <option>Califonia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Qualification</label>
                                <select class="selectpicker search-fields" name="Qualification">
                                    <option>Qualification</option>
                                    <option>Matriculation</option>
                                    <option>Gradute</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Experience</label>
                                <select class="selectpicker search-fields" name="Experience">
                                    <option>Experience</option>
                                    <option>1 Year</option>
                                    <option>2 Year</option>
                                    <option>3 Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea class="input-text" name="message" placeholder="Detailed Information"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="post-btn"><a href="#" class="btn btn-md button-theme">Post a job</a></div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </body>
</html>