<?php

namespace App\Fonction;
use \Mailjet\Resources;
use Mailjet\LaravelMailjet\Facades\Mailjet;

class SendMail
{

    public function send($mail_user,$name_user,$subject,$textpart,$view)
    {

       /* MAILJETAPIKEY=e146a234e46f999be3f3a8c1cc4aae15
MAILJETAPISECRET="690eb89d81443afe25894b15cce1871c"*/
// $mailjet = new \Mailjet\Client('d74c56e367b61a9303c575b42897eb31','fcf383a01a7f1ba80ec4f507c9a015a9',true,['version' => 'v3.1']);
$mailjet = new \Mailjet\Client(env('MAILJETAPIKEY'), env('MAILJETAPISECRET'),true,['version' => 'v3.1']);

     $body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "",
                'Name' => ""
            ],
            'To' => [
                [
                    'Email' => $mail_user,
                    'Name' => $name_user
                ]
            ],
            'Subject' => $subject,
            'TextPart' => $textpart,
            'HTMLPart' => 'Chers M./Mme  '.$name_user.' '.$view
        ]
    ]
];
$response = $mailjet->post(Resources::$Email, ['body' => $body]);
// if($response->success())
//  return 'Success';
// else return 'Failed';
    }
}




















?>

