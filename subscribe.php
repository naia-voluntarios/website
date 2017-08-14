<?php
	 // Put your MailChimp API and List ID hehe
    $api_key = '2f4255eb70b03dd6c14f53fc3f2c3f19-us16';
    $list_id = 'da773b0fce';
 
    // Let's start by including the MailChimp API wrapper
    include('./inc/MailChimp.php');
    // Then call/use the class
    use \DrewM\MailChimp\MailChimp;
    $MailChimp = new MailChimp($api_key);
 
    // Submit subscriber data to MailChimp
    // For parameters doc, refer to: http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
    // For wrapper's doc, visit: https://github.com/drewm/mailchimp-api
    $result = $MailChimp->post("lists/$list_id/members", [
                            'email_address' => $_POST["email"],
                            'merge_fields'  => ['FNAME'=>$_POST["fname"], 'LNAME'=>$_POST["lname"]],
                            'status'        => 'subscribed',
                        ]);
 
    if ($MailChimp->success()) {
        // Success message
        //echo "<h4>Thank you, you have been added to our mailing list.</h4>";
        $result = Array("senderEmail" => $_POST["email"], "result" => 0);
        echo json_encode($result);
    } else {
        // Display error
        echo $MailChimp->getLastError();
        // Alternatively you can use a generic error message like:
        // echo "<h4>Please try again.</h4>";
    }
?>