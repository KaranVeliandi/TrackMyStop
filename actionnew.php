<?php

    $email = $_GET['email'];
    if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false){
    $mailchimp_api_key = '';
    $mailchimp_list_id = '';
    $data = array(
              'apikey' => $mailchimp_api_key, 
              'id' => $mailchimp_list_id, 
              'email_address' => $email,
              'status'=>'subscribed'
    );
    $memberId = md5(strtolower($email));
    $dataCenter = substr($mailchimp_api_key ,strpos($mailchimp_api_key, '-')+1);
    $endpoint = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $mailchimp_list_id . '/members/' . $memberId;
    
    $json_data = json_encode($data);
    $options = array(
        'http' => array(
            'method' => 'PUT',
            'header' =>  implode(
                "\r\n",
                [
                    "Content-type: application/json",
                    "Content-length: " . strlen($json_data),
                    "Authorization: Basic " . base64_encode("anystring:$mailchimp_api_key")
                ]
            ),
            'content' => $json_data,
         )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($endpoint, false, $context); 

    $result =  json_decode($result);
   // var_dump($result);

   if($result->status = '200')
   {
    echo ' <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">TrackMyStop Says!!</h4>
  </div>
  <div class="modal-body">
    <p>Thank You for Subscribing.</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal" onClick = "location.reload()">Close</button>
  </div>';
   }
   else{
      if($result->status = 'Member Exists')
      {
        echo ' <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">TrackMyStop Says!!</h4>
  </div>
  <div class="modal-body">
    <p>Thank You have already subscribed.</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal" onClick = "location.reload()">Close</button>
  </div>';

      }
   }
  }
  
else{
  echo '<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">TrackMyStop Says!!</h4>
</div>
<div class="modal-body">
  <p>Please enter a valid E-Mail Address.</p>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal" onClick ="location.reload()">Close</button>
</div>';
}
?>