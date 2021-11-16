<?php
class JobModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getJobView()
    {
        $sql = 
        "SELECT Job.id, title, company, deadline, min_salary, max_salary, job_type, city  
            FROM Job JOIN Location ON Job.`location_id`=Location.`id`
        ";
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
            min_salary, max_salary, job_type, gender, 
            qualification,  min_experience, max_experience, 
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
