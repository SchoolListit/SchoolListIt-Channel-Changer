<?php
/**
 * The Business End of this plugin
 * 
 * This file will house the classes and methods responsible for communicating from teacher = parent via twilio 
 * = split outgoing communications into specific parent preferred channels
 * = consolidate incoming communications into the channel teacher prefers
 */

namespace SchoolListIt_Channel_Changer;
use \DateTime;


/**
 * set up needs its own number
 *
 * new message from new number
 * looks like you are new to the channel changer.
 * are you a teacher or a student representative
 * ==> teacher
 * follow this link to setup payment for the channel changer service.
 * Once you've paid, your classroom phone and messaging will be all set up. Your receipt has the phone number for your class. To send a tet or call to one or all students you just message or call your class and we will prompt you from there. 
 * 
 * 
 * 
 * 
 */


 /**
  * Looks like this is your first time messaging Kidz Corner. Are you a teacher or a parent?
  * ==> parent
  * What is your student's name?
  * => okay. What is your name?
  * We are forwarding your request to the teacher. Once approved, your will be added to "student name"'s communication list and you will recieve all communication regarding "student name" and this class.
  * 
  */

add_shortcode('kickoff_class', __NAMESPACE__.'\\kickoff_class');

function kickoff_class($atts){
  

}

function voice_teacher_to_all(\WP_REST_Request $request){
    $response_data = array();
    $params = $request->get_params();
    $response_data['params']=$params;


    //set up the http response
    $response = new \WP_REST_RESPONSE($response_data);
    $response->set_status( 200 );
    return $response;
}


function add_student_contact(\WP_REST_Request $request){
  $response_data = array();
    $params = $request->get_params();
    $response_data['params']=$params;
    $class_id = get_class_id($params['class']);
     if($class_id){
      global $wpdb;
      $data = array(
          'class_id'=>$class_id,
          'student_name' => $params['student_name'],
          'contact_name' => $params['contact_name'],
          'relationship' => $params['relationship'],
          'phone'=>$params['phone']
        );
      $wpdb->insert(
        'wp_sli_cc_numbers',
        $data
      );
      //set up the http response
      $response = new \WP_REST_RESPONSE($response_data);
      $response->set_status( 200 );
      return $response;
    }

    //set up the http response
    $response = new \WP_REST_RESPONSE($response_data);
    $response->set_status( 500 );
    return $response;
}

function is_new_contact(\WP_REST_Request $request){
  $response_data = array();
  $params = $request->get_params();
  $response_data['params']=$params;
  $class_id = get_class_id($params['class']);
  if($class_id){
    $classroom_contacts = new Classroom_Contacts($class_id);
    $response_data['classroom'] = $classroom_contacts;
    $new = !in_array($params['from'], $classroom_contacts->phone_numbers);
    $new = ($new) ? 'true' : 'false';
    //set up the http response
    $response = new \WP_REST_RESPONSE($new);
    $response->set_status( 200 );
    return $response;
  } else {
    //set up the http response
    $response_data = "class not found";
    $response = new \WP_REST_RESPONSE($response_data);
    $response->set_status( 500 );
    return $response;
  }
  
  
}

function message_teacher_to_all(\WP_REST_Request $request){
    $response_data = array();
    $params = $request->get_params();
    $response_data['params']=$params;
     //find classcode
     $class_id = get_class_id($params['class']);
     if($class_id){
      //instantiate classroom contacts
      $class_contacts = new Classroom_Contacts($class_id);
      $bulk_message = new Bulk_Message(
        $params['from'], 
        $class_contacts->phone_numbers, 
        $params['body'], 
        $params['media_url']);
      
      //send outgoing bulk message

      $response = new \WP_REST_RESPONSE($bulk_message);
      $response->set_status( 200 );
      return $response;
     } else {
      $response_data = "class not found";
      $response = new \WP_REST_RESPONSE($response_data);
      $response->set_status( 500 );
      return $response;
     }

    
    
}

/**
 * get class id so that we can instantiate the class.
 */
function get_class_id($class_code){
  global $wpdb;
  $class = $wpdb->get_row("SELECT * FROM wp_classrooms where class='".$class_code."'");
  if($class){
    return $class->id;
  } else {
    return false;
  } 
}

?>
