<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="/public/css/imported/component/job-info.css?version=2"> 
    </head>
    <body>
        <div class="dashboard-content">
            <div class="dashboard-header clearfix">
                <div class="row">
                    <div class="col-sm-12 col-md-6"><h4> Manage Jobs</h4></div>
                </div>
            </div>
            <div class="dashboard-list">
                <div class="job-info job-info-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th class="ds-none"></th>
                                <th class="hdn">Deadline</th>
                                <th>Salary</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jobList as $job) { ?> 
                                <tr class="responsive-table">
                                    <td class="image">
                                        <a href="#"><img alt="my-properties-3" src="img/avatar/avatar-3.jpg" class="img-fluid"></a>
                                    </td>
                                    <td class="p-left-20">
                                        <div class="inner">
                                            <h5><a href="/management/update-job?id=<?php echo $job["id"];?>"><?php echo $job["title"];?></a></h5>
                                            <ul>
                                                <li><i class="flaticon-work"></i> <?php echo $job["company"];?> </li>
                                                <li><i class="flaticon-pin"></i> <?php echo $job["city"];?> </li>
                                                <li><i class="flaticon-time"></i> <?php echo $job["job_type"];?> </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="hdn"> <?php echo dateFormat($job["deadline"]);?> </td>
                                    <td> <?php echo $job["salary"];?> </td>
                                    <td class="actions">
                                        <a href="/management/update-job?id=<?php echo $job["id"];?>"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="delete fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>