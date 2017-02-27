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
        $data['list'] = $this->comment->all();
        $this->load->view('v_guestbook', $data);

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

            if($this->input->post('pesan')==null || $this->input->post('pesan')==""){
                if($this->session->userdata('SESS_GUEST_MESSAGE')!=null){
                    $commentData['comment'] = $this->session->userdata('SESS_GUEST_MESSAGE');
                    $commentData['is_hadir'] = $this->session->userdata('SESS_GUEST_ABSEN');
                    $commentData['id_guest'] = $userProfile['id'];
                    $this->comment->saveComment($commentData);
                }else{
                    //$this->guest->deleteUser($userData['oauth_uid'] );
                   
                    $this->session->set_flashdata('warning', 'Data gagal disimpan, anda tidak mengizinkan akses ke akun gmail!');
                    $this->session->sess_destroy();
                    redirect(base_url('guestbook'));
                }
                
            }else{
                $commentData['comment'] = $this->input->post('message');
                $commentData['is_hadir'] = $this->input->post('kehadiran');
                $commentData['id_guest'] = $userProfile['id'];
                $this->comment->saveComment($commentData);
            }

            
            
           

        } else {
            $authUrl = $gClient->createAuthUrl();
            $pesan =  $this->input->post('pesan');
            $absen = $this->input->post('kehadiran');
            $session = array(
                                'SESS_GUEST_MESSAGE' => $pesan,
                                'SESS_GUEST_ABSEN' => $absen
                            );
                        
            $this->session->set_userdata( $session );
            redirect($authUrl);
        }
        $data['list'] = $this->comment->all();
        
        $this->session->set_flashdata('message', 'Data berhasil disimpan, kami mengucapkan terimakasih atas ucapan yang sudah kamu berikan');
        $this->session->sess_destroy();
        redirect(base_url('guestbook'));
    }

}
