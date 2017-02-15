<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class guestbook extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
      
            $this->output->set_header('Last-Modified:'.gmdate('D,d M Y H:i:s').'GMT');
            $this->output->set_header('Cache-Control:no-store, no-cache, must-revalidate');
            $this->output->set_header('Cache-Control:post-check=0,pre-check=0',false);
            $this->output->set_header('Pragma: no-cache');
            $this->load->model('guest');
            $this->load->model('comment');

                    
    }

    public function index()
    {
        // $this->load->view('global_home/header_global_home');
        $this->load->view('v_guestbook');
        // $this->load->view('global_home/footer_global_home');

    }

    public function saveComment(){
        // Include the google api php libraries
        include_once APPPATH."libraries/google-api-php-client/Google_Client.php";
        include_once APPPATH."libraries/google-api-php-client/contrib/Google_Oauth2Service.php";
        
        // Google Project API Credentials
        $clientId = '839609477079-ur1738aqqlq7cceapha9gqufoce53lk0.apps.googleusercontent.com';
        $clientSecret = 'X1lLvrFCe5wLHVEZHMd7D8vR';
        $redirectUrl = base_url('guestbook/saveComment');
        $apiKey = 'AIzaSyCPa9KI7qEoKuIo0VtB2xQu8e0FGXf6gRo';
        
        // Google Client Configuration
        $gClient = new Google_Client();
        $gClient->setApplicationName('undanganmu');
        $gClient->setClientId($clientId);
        $gClient->setClientSecret($clientSecret);
        $gClient->setRedirectUri($redirectUrl);
        $gClient->setDeveloperKey($apiKey);
        // $gClient->addScope("https://www.googleapis.com/auth/userinfo.email");
        $google_oauthV2 = new Google_Oauth2Service($gClient);

        if (isset($_GET['code'])) {
            $gClient->authenticate();
            $this->session->set_userdata('token', $gClient->getAccessToken());
            redirect($redirectUrl);
        }

        $token = $this->session->userdata('token');
        if (!empty($token)) {
            $gClient->setAccessToken($token);
        }

        if ($gClient->getAccessToken()) {

            $userProfile = $google_oauthV2->userinfo->get();
            // Preparing data for database insertion
            // print_r($userProfile);
            $userData['oauth_provider'] = 'google';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['given_name'];
            $userData['last_name'] = $userProfile['family_name'];
            $userData['email'] = $userProfile['email'];
            $userData['locale'] = $userProfile['locale'];
            $userData['picture_url'] = $userProfile['picture'];
            // Insert or update user data
            $userID = $this->guest->checkUser($userData);
            if(!empty($userID)){
                $data['userData'] = $userData;
                $this->session->set_userdata('userData',$userData);
            } else {
               $data['userData'] = array();
            }

            $commentData = array();
            $commentData['id_guest'] = $userProfile['id'];
            $commentData['comment'] = $this->input->post('message');
            $this->comment->saveComment($commentData);

        } else {
            $authUrl = $gClient->createAuthUrl();
            redirect($authUrl);
        }
        $this->load->view('v_guestbook');
    }
}
