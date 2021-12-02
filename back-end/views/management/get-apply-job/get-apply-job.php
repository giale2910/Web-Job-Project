<div class="dashboard-list">
    <div class="job-info">
        <table class="table">
            <thead>
            <tr>
                <th>User</th>
                <th class="ds-none"></th>
                <th class="hdn">Contact</th>
                <th>CV</th>

            </tr>
            </thead>
            <tbody>
        <?php foreach($users as $user) { ?>
            <tr class="responsive-table">
                <td class="image">
                    <!-- <a href="#"><img alt="user-photo" src="http://placehold.it/80x80" class="img-fluid"></a> -->
                    <a href="#"><img alt="user-photo" src="<?php if($user["image"] !== null){ ?> ../../public/images/uploadImage/<?= $user["image"]?> <?php }else{ ?>  ../../public/images/ava1.png <?php }?> "   style="border-radius:100px;border: 1px solid lightgray; width: 85px;height: 85px; object-fit: cover; " ></a>
                </td>
                <td>
                    <div class="inner">
                        <h5><a href="#"><?= $user["first_name"]." ".$user["last_name"]?></a></h5>
                        <ul>
                            <li><i class="flaticon-pin"></i> <?= $user["address"]?$user["address"]:"Not set"?></li>
                        </ul>
                    </div>
                </td>
                <td class="hdn">
                    <?= $user["email"]?> <br/>
                    <?= $user["phone"]?>
                </td>

                <td>
                <a href="<?= $user["profile_link"]?>" target="_blank"><img src="../../../public/images/cv1.png" style="width:35px; height:35px;"></a>

                
                </td>
                
            </tr>
        <?php } ?>
            </tbody>
        </table>
    </div>
</div>
