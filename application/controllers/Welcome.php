<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->data['page_title'] = 'Dashboard';

        $this->load->model('model_students');;
        $this->load->model('model_users');
    }

    public function index()
    {
        $student_data = $this->model_students->getStudentData();

        $result = array();
        foreach ($student_data as $k => $v) {

            $school_id = $v['school_id'];
            $grade_id = $v['grade_id'];
            $school = $this->model_students->getSchoolData($school_id);
            $grade = $this->model_students->getGradeData($grade_id);



            $v['school'] = $school['name'];
            $v['grade'] =  $grade['name'];

            $result[$k]['student_info'] = $v;
        }

        $this->data['student_data'] = $result;

        $this->render_template('students/students', $this->data);
    }
}
