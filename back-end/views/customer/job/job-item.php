
<!-- job box start -->
<?php foreach ($jobList as $job) { ?> 
    <div class="job-box" style="margin-bottom:20px;">
        <div class="company-logo">
            <!-- <img src="http://placehold.it/90x90" alt="logo"> -->
            <img src="../../../public/images/uploadImage/<?php echo $job["image"];?>" alt="logo">
        </div>
        <div class="description">
            <div class="float-left">
                <h5 class="title">
                    <a href="/job-detail?id=<?php echo $job["id"];?>"><?php echo $job["title"];?></a>
                </h5>
                <div class="candidate-listing-footer">
                    <ul>
                        <!-- <li><i class="flaticon-work"></i> <?php echo $job["company"];?></li> -->

                        <li><i class="flaticon-work"></i> <?php echo $job["first_name"];?></li>
                        <li><i class="flaticon-pin"></i> <?php echo $job["city"];?></li>
                        <li><i class="flaticon-time"></i> <?php echo $job["job_type"];?></li>
                    </ul>
                    <h6>Deadline: <?php echo dateFormat($job["deadline"]);?></h6>
                </div>
            </div>
            <div class="div-right">
                <!-- <a href="mailto: <?= $job["contact_email"]?>" class="apply-button">Apply Now</a> -->
                <a href="mailto: <?= $job["email"]?>" class="apply-button">Apply Now</a>
                <a id="<?= $job["id"]?>" onclick="addFavorite(this.id)">
                    <i id="icon-<?= $job["id"]?>" class="flaticon-heart favourite" >
                    </i>
                </a>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Page navigation start -->
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

<script>
    window.onload = function(){
        <?php foreach($favoriteIds as $favoriteId) { ?>
          document.getElementById("icon-<?=$favoriteId?>").style.backgroundColor = "pink";
        <?php } ?>
    }
    function addFavorite(job_id){
        var xmlhttp = new XMLHttpRequest();
        let state = document.getElementById("icon-"+job_id).style.backgroundColor === 'pink';
        xmlhttp.onreadystatechange = function() {
            if (this.readyState==4 && this.status==200) {
                if (state) document.getElementById("icon-"+job_id).style.backgroundColor = "white";
                else document.getElementById("icon-"+job_id).style.backgroundColor = "pink";
            }
        }
        let uri = (state) ? "job/remove-favorite" : "job/add-favorite";
        xmlhttp.open("POST", uri, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("job-id="+job_id);
    }
</script>