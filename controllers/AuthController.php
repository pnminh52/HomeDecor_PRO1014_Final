<?php
class AuthController {
    // đăng ký
    public function register() {
        $categories = (new Category)->all();
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data = $_POST;
            // dd($data);
            
            //mã hóa mật khẩu
            $password = $_POST['password'];
            $password = password_hash($password, PASSWORD_DEFAULT);

            // đưa vào data 
            $data['password'] = $password;

            // Insert vào database
            (new User)->create($data);

            // thông báo 
            $_SESSION['message'] = 'đăng ký thành công';
            header("Location:" . ROOT_URL ."?ctl=login");
            die;
        }

        return view('clients.users.register',compact('categories'));
    }

    // đăng nhập
    public function login() {

        // kiểm tra người dùng đăng nhập chưa
        if (isset($_SESSION['user'])){
            header("location:" . ROOT_URL ."");
            die;
        }
        $categories = (new Category)->all();
        $error = null;

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];
           
            $user = (new User)->findUserOfEmail($email);

            //kiểm tra mật khẩu
            if($user){
                if(password_verify($password, $user['password'])){
                    $_SESSION['user'] = $user;
                    // nếu role = 1, vào admin, ngược lại vào trang chủ
                    if($user['role'] == 'admin'){
                        header("Location:" . ADMIN_URL);
                        die;
                    }
                    header("Location:" . ROOT_URL);
                    die;
                }else{
                    $error = "Email hoặc Mật khẩu không đúng";
                }
            }
            
        }

        $message = session_flash('message');
        return view('clients.users.login', compact('message', 'error','categories'));


    }
    public function logout() {
        unset($_SESSION['user']);
        header('Location:' . ROOT_URL . '?ctl=login');
        die;
    }
    // user
    public function index()
    {
        $categories = (new Category)->all();
        $users = (new User)->all();
        return view('admin.users.list', compact('users','categories'));
    }

    public function updateActive(){
        $data = $_POST;

        $data['active'] = $data['active'] ? 0   : 1;

        (new User) ->updateActive($data['id'],$data['active']);
        return header('location: ' . ADMIN_URL . '?ctl=listuser');
    }
}