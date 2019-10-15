<?php   
    include_once('views/login.view.php');
    include_once('models/login.model.php');
    include_once('helpers/auth.Helper.php');

    class LoginController{
        private $viewLogin;
        private $modelLogin;
        private $authHelper;


        public function __construct(){
            $this->viewLogin= new LoginView();
            $this->modelLogin= new LoginModel();
            $this->authHelper= new AuthHelper();
        }
        public function mostrarLogin(){
            $this->viewLogin->mostrarLogin();
        }
        public function verificarLogin(){
            $email= $_POST["email"];
            $password= $_POST["password"];
            $datosUser= $this->modelLogin->obtenerDatosUser($email);
            //bug si pongo correo y contraseña vacio entra igual
            if(!empty($email) && password_verify($password, $datosUser->contraseña )){
                $this->authHelper->login($datosUser);

                header("Location: productos");
            } else{
                $this->viewLogin->mostrarLoginError("Usuario o Contraseña Incorrectos");
            }
        }
        public function logout() {
            $this->authHelper->logout();
            header('Location: login');
        }
        public function mostrarSingup(){
            $this->viewLogin->mostrarSingup();
        }
        public function singup(){
            $email= $_POST["newEmail"];
            $password= $_POST["newPassword"];
            if(!isset($email)){
                $passwordHass= password_hash($password, PASSWORD_DEFAULT);
                $this->modelLogin->crearUsuario($email, $passwordHass);
                header('Location: login');
            }else{
                $this->viewLogin->mostrarLoginError("Complete todos los campos");
            }
        }
    
    }