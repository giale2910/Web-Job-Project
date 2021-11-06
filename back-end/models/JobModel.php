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
}
