<?php
/**
 * ENDPOINTS
 * This file will hold the code that creates the REST endpoints needed by the SchoolListIt App
 * 
 */
namespace SchoolListIt_Channel_Changer;
use \DateTime;


add_action( 'rest_api_init', function () {
    /**
     * needed for the twilio workflow
     */
    register_rest_route( 'schoollistit-channel-changer/v2', '/voice-teacher-to-all', array(
        'methods' => 'POST',
        'callback' => __NAMESPACE__.'\\voice_teacher_to_all',
    ) );

    register_rest_route( 'schoollistit-channel-changer/v2', '/message-teacher-to-all', array(
        'methods' => 'POST',
        'callback' => __NAMESPACE__.'\\message_teacher_to_all',
    ) );

    register_rest_route( 'schoollistit-channel-changer/v2', '/add-student-contact', array(
        'methods' => 'POST',
        'callback' => __NAMESPACE__.'\\add_student_contact',
    ) );

    register_rest_route( 'schoollistit-channel-changer/v2', '/is-new-contact', array(
        'methods' => 'POST',
        'callback' => __NAMESPACE__.'\\is_new_contact',
    ) );

    /**
     * for the channel changer teacher dashboard
     */
    register_rest_route( 'schoollistit-channel-changer/v2', '/classroom-contacts', array(
        'methods' => 'POST',
        'callback' => __NAMESPACE__.'\\get_classroom_contacts',
    ) );

});





 
?>