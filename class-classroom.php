<?php
namespace SchoolListIt_Channel_Changer;


/**
 * another comment
 */
class Classroom {
    public $class_id;
    public $class_code;
    public $class_title;
    public $school_name;
    public $teacher_name;
    public $grade_name;
    public $subject_name;
    public $school_id;
    public $teacher_id;
    public $grade_id;
    public $subject_id;
    public $numbers_id;
    public $phone_numbers;
  
    public function __construct($id){
      $this->class_id = (int)$id;
      $this->set_taxonomies();
    }
  
    private function set_taxonomies(){
      global $wpdb;
      $qry = "select * from wp_classrooms where id=".$this->class_id;
      $this->class_qry = $qry;
      $class = $wpdb->get_row($qry);
      if($class){
        //set code and title
        $this->class_code = $class->class;
        $this->class_title = $class->title;
        //get term ids
        $terms_array = explode($class->terms);
        $this->school_id = $terms_array[0];
        $this->teacher_id = $terms_array[1];
        $this->subject_id = $terms_array[2];
        $this->grade_id = $terms_array[3];
        //get term names
        $terms_array = explode($class->class_title);//note this returns the name not the slug.
        $this->school_name = $terms_array[0];
        $this->teacher_name = $terms_array[1];
        $this->subject_name = $terms_array[2];
        $this->grade_name = $terms_array[3];
        //to get term slugs wouild pull the $class->class
      }
  
    }
  
  }

  /**
   * extends classroom with the phone numbers and contacts associated with the class
   * the methods to message the class contacts
   * the method to call the class contacts
   */
  class Classroom_Contacts extends Classroom {
  
    public function __construct($id) {
      parent::__construct($id);
      $this->set_phone_numbers();
    }
  
    private function set_phone_numbers(){
      global $wpdb;
      $qry = "select * from wp_sli_cc_numbers where class_id=".$this->class_id;
      $contacts = $wpdb->get_results($qry);
      $this->class_contacts = $contacts;
      $phone_numbers = array();
      foreach($contacts as $contact){
        $phone_numbers[] = $contact->phone;
      }
      $this->phone_numbers = $phone_numbers;
    }
  
    
    
  }

?>