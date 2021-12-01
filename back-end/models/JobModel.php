<?php
class JobModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getJobView($searchTerm=NULL)
    {
        
        $sql = 
        "SELECT Job.id, title, company, deadline, salary, job_type, city , contact_email ,image, email, first_name
            FROM Job JOIN Location ON Job.`location_id`=Location.`id`
                JOIN Category ON Job.`category_id`=Category.`id`
                JOIN User ON Job.`manager_id`=User.`id`
        ";
        if ($searchTerm) $sql .= $searchTerm;
        return $this->sqlFetchAll($sql);
    }

    public function getJobByUserId($id)
    {
        $sql = 
        "SELECT Job.id, title, company, deadline, salary, job_type, city  
            FROM Job JOIN Location ON Job.`location_id`=Location.`id` WHERE Job.`manager_id`=:id
        ";
        return $this->sqlFetchAll($sql, array("id"=>$id));
    }

    public function getJobOverview($id)
    {
        $sql = 
        "SELECT Job.id, title, company, deadline, 
            salary, job_type, gender, 
            qualification,  min_experience, 
            contact_email, description, lat, lng, name, city, image, email, first_name
            FROM Job JOIN Location ON Job.`location_id`=Location.`id` 
            JOIN User ON Job.`manager_id`=User.`id`
            WHERE Job.`id`=:id
        ";
        return $this->sqlFetchAll($sql, array("id"=>$id))[0];
    }

    public function getJobExperience($id)
    {
        $sql = 
        "SELECT experience_text FROM JobExperience WHERE job_id=:id";
        return $this->sqlFetchAll($sql, array("id"=>$id));
    }
    public function getCompanyJob($id)
    {

        $sql = 
        "SELECT Job.id, title, company, deadline, salary, job_type, city , contact_email ,image, email, first_name
            FROM Job JOIN Location ON Job.`location_id`=Location.`id`
                JOIN Category ON Job.`category_id`=Category.`id`
                JOIN User ON Job.`manager_id`=User.`id`
                WHERE manager_id=$id
        ";
        debugAlert($sql);
        return $this->sqlFetchAll($sql);
       
    }
    

    public function getJobResponsibility($id)
    {
        $sql = 
        "SELECT responsibility_text FROM JobResponsibility WHERE job_id=:id";
        return $this->sqlFetchAll($sql, array("id"=>$id));
    }

    public function insertNewJob($info)
    {
        // Create location point first
        // Location(id, lat, lng, name, city)
        // Temporarily do this until we get location from front-end
        $info["location"] = array(
            "lat" => "10.8144067",
            "lng" => "106.7106083", 
            "name" => "Ben xe Mien Dong", 
            "city" => "Ho Chi Minh City"
        );

        $newLocationId = $this->postAndGetId(
            array("lat", "lng", "name", "city"),
            array(),
            $info["location"],
            "Location(lat, lng, name, city)"
        );

        $info["location_id"] = $newLocationId;
        // $newJobId = $this->postAndGetId(
        //     array("title", "company", "manager_id", "location_id", "category_id", "date_posted", "deadline", "salary", "job_type", "gender", "qualification", "min_experience", "contact_email", "description"),
        //     array("manager_id", "location_id", "category_id", "salary", "min_experience"),
        //     $info,
        //     "Job(title, company, manager_id, location_id, category_id, date_posted, deadline, salary, job_type, gender, qualification, min_experience, contact_email, description)"
        // );
        $newJobId = $this->postAndGetId(
            array("title",  "manager_id", "location_id", "category_id", "date_posted", "deadline", "salary", "job_type", "gender", "qualification", "min_experience",  "description"),
            array("manager_id", "location_id", "category_id", "salary", "min_experience"),
            $info,
            "Job(title,  manager_id, location_id, category_id, date_posted, deadline, salary, job_type, gender, qualification, min_experience, description)"
        );
        
        if ($info["experience"] && count($info["experience"])>0){
            $insertTerms = array();
            foreach($info["experience"] as $text){
                $insertTerms[] = "($newJobId, '$text')";
            }
            $sql = "INSERT INTO JobExperience(job_id, experience_text) VALUES " . implode(",", $insertTerms);
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
        }

        if ($info["responsibility"] && count($info["experience"])>0){
            $insertTerms = array();
            foreach($info["responsibility"] as $text){
                $insertTerms[] = "($newJobId, '$text')";
            }
            $sql = "INSERT INTO JobResponsibility(job_id, responsibility_text) VALUES " . implode(",", $insertTerms);
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
        }

        return $newJobId;
    }
    
    public function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
      }

    public function jobDeleted($id)
    {
        $stmt = $this->conn->prepare('DELETE FROM `job` WHERE `job`.id = :id');
        return $stmt->execute(array(
            "id" => $id
        ));
    }

    public function addFavoriteJob($info){
        $job_id = $info["job-id"];
        $user_id = $_SESSION["user_id"];
        $stmt = $this->conn->prepare("INSERT INTO FavoriteJob(job_id, user_id) VALUES ($job_id, $user_id)");
        return $stmt->execute();
    }

    public function removeFavoriteJob($info){
        $job_id = $info["job-id"];
        $user_id = $_SESSION["user_id"];
        $stmt = $this->conn->prepare("DELETE FROM FavoriteJob WHERE `job_id`=$job_id AND `user_id`=$user_id");
        return $stmt->execute();
    }

    public function getUserFavoriteJobs(){
        $user_id = $_SESSION["user_id"];
        $sql = "
            SELECT job_id, user_id, Job.`id`, title, company, deadline, salary, job_type, city , contact_email , image, first_name, email
            FROM FavoriteJob JOIN (Job JOIN Location ON Job.`location_id`=Location.`id`) 
                ON FavoriteJob.`job_id`=Job.`id`
                JOIN User ON Job.`manager_id`=User.`id`
            WHERE user_id=$user_id";
        debugAlert($sql);
        return $this->sqlFetchAll($sql);
    }
}
