<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}else
if($status == PHP_SESSION_DISABLED){
    //Sessions are not available
}else
if($status == PHP_SESSION_ACTIVE){
    //Destroy current and start new one
    session_destroy();
    session_start();
}

error_reporting(E_ALL);
ini_set('display_errors', 'On');
class Login extends Controller {


    public $SinhVienModel;
    public $Session;

    public function __construct() {

        // call model
        $this->SinhVienModel = $this->model("SinhVienModel");
        $this->Session = $this->model("Session");
    }

    public function admin () {
        
        $this->view("aodep",[
            "Page" => "Login",
            // "sinhvienmodel" => $this->SinhVienModel->CheckUser
        ]);
    }
    public function DangNhap() 
    {
        
        if(isset($_POST['Login'])) {
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            
            // check user
            $role = $this->SinhVienModel->CheckUser($user, $pass);

            $_SESSION['role'] =$role;
            // var_dump($role);
            // die();

             if($role==1) 
                header('location: http://localhost/manager/Home/Admin');
            else
            { 
                $erro = "User hoặc Pass không tồn tại";
            
            } 
        }
    }
}
?>