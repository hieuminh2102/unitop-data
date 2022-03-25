<?php

function construct()
{
    //    echo "DÙng chung, load đầu tiên";
}

function loginAction()
{
    global $username, $password, $error;
    load_model('login');
    if (isset($_POST['btn-login'])) {
        $error = array();
        if (empty($_POST['username'])) {
            $error['username'] = "khong de trong ten dang nhap";
        } else {
            if (!(strlen($_POST['username']) > 6 && strlen($_POST['username']) < 32)) {
                $error['username'] = "username yeu cau tu 6 den 32 ky tu";
            } else {
                if (!is_username($_POST['username']))
                    $error['username'] = "username cho phep su dung ky tu, chu so, dau gach duoi, 6-32 ky tu";
                else {
                    $username = $_POST['username'];
                }
            }
        }
        if (empty($_POST['password'])) {
            $error['password'] = "khong de trong mat khau";
        } else {
            if (is_password($_POST['password'])) {
                $password = $_POST['password'];
            } else {
                $error['password'] = "mat khau ban vua nhap khong dung dinh dang";
            }
        }
        //ket luan
        if (empty($error)) { // ở đây kiểm tra lỗi chuẩn hóa
            // xu ly login
            if (check_login($username, $password)) { /* hàm tuong tác với database nên sẽ tao ở loginModel */
                echo "Dăng nhập thành công";
                if (isset($_POST['remember-me'])) {
                    setcookie('is_login', true, time() + 3600);
                    setcookie('username', $username, time() + 3600);
                }
                //luu tru phien dang nhap
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
                $_SESSION['name_login'] = name_login($username, $password);/* hàm tuong tác với database nên sẽ tao ở loginModel */
                // show_array($_SESSION['name_login']);
                // echo $_SESSION['name_login'];

                //chuyen huong vao trong he thong
                redirect("?mod=home&controller=index&action=index");
            } else {
                $error['account'] = "Ten dang nhap va mat khau khong chính xác";
            }
        } 
        $data['error'] = $error;
    }
    // $a = array('h', 'i', 'e', 'u');
    // echo $a; lỗi ngay vì không dùng echo để hiển thị mảng

    // có dữ liệu thì mới được sử dụng, nếu ko có dữ liệu nghia la bien chưa đc định nghĩa, 
    // if (isset($username) && isset($password)) {
    //     $data['username'] = $username;
    // }

    if (isset($data)) {
        load_view('login', $data);
    } else {
        load_view('login');
    }
}

function sign_upAction()
{
    load_model('sign_up');
    if (isset($_POST['btn-reg'])) {
        $error = array();
        // chuẩn hóa fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "không để trống họ và tên";
        } else {
            $fullname = $_POST['fullname'];
        }

        //chuẩn hóa username
        if (empty($_POST['username'])) {
            $error['username'] = "không để trống tên đăng nhập";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "tên đăng nhập không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }

        //chuẩn hóa email
        if (empty($_POST['email'])) {
            $error['email'] = "không để trống email";
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "email không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }

        //chuẩn hóa password
        if (empty($_POST['password'])) {
            $error['password'] = "không để trống mật khẩu";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "password ko đúng định dạng";
            } else {
                $password = $_POST['password'];
            }
        }

        // kiểm tra giới tính
        if (empty($_POST['gender'])) {
            $error['gender'] = "bạn cần nhập giới tính";
        } else {
            $gender = $_POST['gender'];
        }

        if (isset($username) && isset($email)) {
            if (isseted_user($username, $email)) {
                $error['isseted'] = "tài khoản đã tồn tại";
            }
        }

        //kết luận
        if (empty($error)) {
            $success = "đăng ký thành công";
            $user = array(
                'fullname' => $fullname,
                'username' => $username,
                'email' => $email,
                'gender' => $gender,
                'password' => $password,
            );
            //thông báo đã đăng ký thành công
            insert_user($user);
            $data['success'] = $success;
        } else {
            $data['error'] = $error;
        }
    }
    if (isset($data)) {
        load_view('sign_up', $data);
    } else {
        load_view('sign_up');
    }
}

function log_outAction()
{
    $username = $_SESSION['user_login'];
    //xử lý log out
    setcookie('is_login', true, time() - 3600);
    setcookie('username', $username, time() - 3600);
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);
    redirect("?mod=home&controller=index&action=login");
}
