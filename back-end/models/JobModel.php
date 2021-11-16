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
        "SELECT Job.id, title, company, deadline, salary, job_type, city  
            FROM Job JOIN Location ON Job.`location_id`=Location.`id`
                JOIN Category ON Job.`category_id`=Category.`id`
        ";
        //if ($searchTerm) $sql .= " WHERE Job.title LIKE '%$searchTerm%'";
        if ($searchTerm) $sql .= $searchTerm;
        return $this->sqlFetchAll($sql);
    }

    public function getJobByUserId($id)
    {
        $sql = 
        "SELECT Job.id, title, company, deadline, min_salary, max_salary, job_type, city  
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
            contact_email, description, lat, lng, name, city
            FROM Job JOIN Location ON Job.`location_id`=Location.`id` 
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

    public function getJobResponsibility($id)
    {
        $sql = 
        "SELECT responsibility_text FROM JobResponsibility WHERE job_id=:id";
        return $this->sqlFetchAll($sql, array("id"=>$id));
    }

    public function postJob($info)
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
        $newJobId = $this->postAndGetId(
            array("title", "company", "manager_id", "location_id", "category_id", "date_posted", "deadline", "salary", "job_type", "gender", "qualification", "min_experience", "contact_email", "description"),
            array("manager_id", "location_id", "category_id", "salary", "min_experience"),
            $info,
            "Job(title, company, manager_id, location_id, category_id, date_posted, deadline, salary, job_type, gender, qualification, min_experience, contact_email, description)"
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

    public function insertNewJobs($job)
    {
        $userId = $_SESSION["user_id"];
        $sql = 
        "INSERT INTO Job(title, company, manager_id, location_id, category_id, date_posted, deadline, min_salary, max_salary, job_type, gender, qualification, min_experience, max_experience, contact_email, description) VALUES 
        (:title, :company, :id, 2, 1, :deadline, :deadline, :min_salary, :max_salary, :jobType, :gender, :qualification, :min_experience, :max_experience, :contact, :description)";
        
        // $job['id']=$userId;
        // $stmt = $this->conn->prepare('INSERT INTO Job(title, company, manager_id, location_id, category_id, date_posted, deadline, min_salary, max_salary, job_type, gender, qualification, min_experience, max_experience, contact_email, description) VALUES 
        // ("hii", "Test", 1, 2, 1, :deadline, :deadline, 200, 500, "Full time", "Any", "Kindergarten", -1, -1, "oisp@hcmut.edu.vn", "Please replace the current A.I. lecturer ASAP - this is a call for help.")');
        // return $stmt->execute($job);

        return $this->sqlFetchAll($sql, array(
            "id"=>$_SESSION["user_id"],
            "title" => $job["title"],
            "company" => $job["company"],
            "deadline" => $job["deadline"],
            "min_salary" => $job["min_salary"],
            "max_salary" => $job["max_salary"],
            "jobType" => $job["job-type"],
            "gender" => $job["gender"],
            "qualification" => $job["qualification"],
            "min_experience" => $job["min_experience"],
            "max_experience" => $job["max_experience"],
            "contact" => $job["contact"],
            "description" => $job["description"]

            ));
    }

    public function jobDeleted($id)
    {
        $stmt = $this->conn->prepare('DELETE FROM `job` WHERE `job`.id = :id');
        return $stmt->execute(array(
            "id" => $id
        ));
    }
}
