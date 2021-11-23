<div class="dashboard-list">
    <div class="job-info">
        <table class="table">
            <thead>
            <tr>
                <th>User</th>
                <th class="ds-none"></th>
                <th class="hdn">Contact</th>
                <th>CV</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
        <?php foreach($users as $user) { ?>
            <tr class="responsive-table">
                <td class="image">
                    <a href="#"><img alt="user-photo" src="http://placehold.it/80x80" class="img-fluid"></a>
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
                <?php if ($user["role"] === "customer") {?>
                    <a href="<?= $user["profile_link"]?>" target="_blank"><img src="../../../public/images/cv1.png" style="width:35px; height:35px;"></a>
                <?php } else { ?>
                    <ul >
                        <li><a href="<?= $user["profile_link"]?>" target="_blank"><img src="../../../public/images/fblogo.png" style="width:25px; height:25px;border-radius:25px"></a></li>
                        <li><a href="<?= $user["web_link"]?>" target="_blank"><img src="../../../public/images/weblink1.png" style="width:25px; height:25px;border-radius:25px"></a></li>  
                    </ul>
                <?php } ?>
                </td>
                <td class="actions">
                <button id="a-<?=$user["id"]?>" onclick="activeSwitch(this.id)" style="border-radius: 50px; font-size: 13px; font-weight: 600;"><a></a>
                </td>
            </tr>
        <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    window.onload = function(){
    <?php foreach ($users as $user) { ?>
        let button_id = "a-<?=$user["id"]?>";
        <?php if ($user["status"]==="Active") {?>
            document.getElementById(button_id).innerHTML = 'Active';
            document.getElementById(button_id).style.backgroundColor = 'greenyellow';
        <?php } else { ?>
            document.getElementById(button_id).innerHTML = 'Deactive';
            document.getElementById(button_id).style.backgroundColor = 'red';
        <?php } ?>
    <?php } ?>
    }

    function activeSwitch(uid){
        let state = document.getElementById(uid).innerHTML;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState==4 && this.status==200) {
                if (state === 'Deactive') {
                    document.getElementById(uid).style.backgroundColor = "greenyellow";
                    document.getElementById(uid).innerHTML = "Active";
                } else {
                    document.getElementById(uid).style.backgroundColor = "red";
                    document.getElementById(uid).innerHTML = "Deactive";
                }
            }
        }
        let uri = "user/switch-active";
        xmlhttp.open("POST", uri, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("uid="+uid.split("-")[1]+"&current="+state);
    }
</script>