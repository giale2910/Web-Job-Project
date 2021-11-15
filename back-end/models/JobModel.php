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
        // $terms = array("title", "company", "manager_id", "location_id", "category_id", "date_posted", "deadline", "salary", "job_type", "gender", "qualification", "min_experience", "contact_email", "description");
        // $jobTerms = array();
        // foreach ($terms as $term) $jobTerms[] = $info[$term];
        // $sql = 
        // "INSERT INTO Job(title, company, manager_id, location_id, category_id, date_posted, deadline, salary, job_type, gender, qualification, min_experience, contact_email, description)
        // VALUES (
        // " . implode(",", $jobTerms)
        // . ")";
        // $stmt = $this->conn->prepare($sql);
        // $stmt->execute();

        // $jobId = $this->sqlFetchAll("SELECT id FROM Job ORDER BY id DESC LIMIT 1")
        // $exprienceIds = $this->sqlFetchAll($sql)[0]["id"];
    }
}
