<div class="dashboard-header clearfix">
    <div class="row">
        <div class="col-sm-12 col-md-6"><h4>Post a Job</h4></div>
        <div class="col-sm-12 col-md-6">
            <div class="breadcrumb-nav">
                <ul>
                    <li>
                        <a href="index.html">Index</a>
                    </li>
                    <li>
                        <a href="dashboard.html">Dashboard</a>
                    </li>
                    <li class="active">Post a Job</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="submit-address dashboard-list">
    <form method="POST" action="job/post">
        <h4 class="bg-grea-3">Basic Information</h4>
        <div class="search-contents-sidebar">
            <div class="row pad-20">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Job Title</label>
                        <input type="text" class="input-text" id="title" name="title" placeholder="Your Title">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Company name</label>
                        <input type="text" class="input-text" id="company" name="company" placeholder="Company name...">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Job Type</label>
                        <select class="selectpicker search-fields" name="job_type">
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
                        <select class="selectpicker search-fields" name="category_id">
                        <?php foreach ($categoryList as $category) { ?>
                            <option value="<?= $category["id"]?>"><?= $category["category"]?></option>
                        <?php } ?>
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
                        <input type="text" class="input-text" id="salary" name="salary" placeholder="USD" pattern="-?[0-9]+">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="selectpicker search-fields" name="gender">
                            <option>Any</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Location</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Qualification</label>
                        <select class="selectpicker search-fields" name="qualification">
                            <option>None</option>
                            <option>High school</option>
                            <option>Undergraduate</option>
                            <option>Graduate</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Minimum Experience</label>
                        <input type="number" class="input-text" id="min_experience" name="min_experience" max="100">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Contact Email</label>
                        <input type="email" id="contact_email" name="contact_email">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Application deadline</label>
                        <input type="datetime-local" id="deadline" name="deadline" value="<?= date("Y-m-d")?>T00:00" min="<?= date("Y-m-d")+"T"+date("H-i")?>">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Job Description</label>
                        <textarea class="input-text" name="description" id="description" placeholder="Detailed Information"></textarea>
                    </div>
                </div>
                <!-- TODO: Add Qualification / Responsibility option (multiple text), see job-detail -->
                <div class="col-lg-6">
                    <!-- TODO: Allow image upload (else remove this) -->
                    <div class="photoUpload photoUpload-2">
                        Upload Files
                        <input type="file" class="upload">
                    </div>
                    <div class="post-btn"><button type="submit" name="Submit" class="btn btn-md button-theme">Post job</button></div>
                </div>
            </div>
        </div>

    </form>
</div>