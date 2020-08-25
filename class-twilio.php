<?php
namespace SchoolListIt_Channel_Changer;
use Twilio\Rest\Client;

class Bulk_Message {
    public $body;
    public $media_url;
    public $recipients;
    public $response;

    public function __construct($from, $recipients, $body, $media_url){
        $this->body = ($body === null )? $media_url : $body;
        $this->from= $from;
        $this->media_url = $media_url;
        $this->recipients = $recipients;
        
        // Create REST API Client
        $sid = 'AC0da01f03a2215425abb66d8b107993ad';
        $token = '7b7b62ab0e55d2055c910a3b068c2e85';
        $client = new Client($sid, $token);
        
        if($client){
            //send messages
            foreach($recipients as $to){
                $message = ($body === '')
                    ? array(
                        'to'=>$recipient,
                        'from'=>$from,
                        'mediaURL'=>$media_url
                    )
                    : array(
                        'to'=>$recipient,
                        'from'=>$from,
                        'body'=>$body
                    );
                
                $twilio_response = $client->messages->create(
                    // Where to send a text message (your cell phone?)
                    $to,
                    $message
                );
                $response[]=$twilio_response;
                
            }
            
        } else {
            $this->response = "client failed";
        }
    }

}

?>