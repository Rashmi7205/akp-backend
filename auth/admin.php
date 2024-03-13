<?php
// include ".././utils.php";
class Admin
{
    private $conn = false;
    // connecting database
    public function __construct()
    {
        if (!$this->conn) {
            $this->conn = new mysqli("localhost", "root","", "akp") or die("Something went wrong!");
        } else {
            echo "Connection Failed!";
            exit(1);
        }
    }
    // show messages to the user
    public function get_message($message)
    {
        if (!empty($message)) {
            echo "<script>
                          window.alert('$message');
                </script>";
        }
    }
    // check for the valid email addres
    private function isValidEmail($email)
    {
        // Define the regular expression for a valid email address
        $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

        // Use preg_match to perform the validation
        return preg_match($pattern, $email);
    }
    // signup
    public function signup($username, $email, $password)
    {
        if ($this->conn) {
            // check for the admin
            if (empty($username)) {
                $this->get_message("Name field can't be empty.");
                return false;
            }
            // check for the email
            if (empty($email) | !$this->isValidEmail($email)) {
                $this->get_message("Please provide a valid email address");
                return false;
            }
            // hash the password
            $hash = password_hash($password, PASSWORD_DEFAULT);
            // Save the admin
            $sql = "INSERT INTO tbl_admin (admin_name,admin_email,admin_password) VALUES ('$username','$email','$hash');";
            $result = $this->conn->query($sql);
            // if successfully saved
            if ($result) {
                $this->get_message("Admin created Successfully!");
                return true;
            } else {
                $this->get_message("Failed to create Admin!");
                return false;
            }
        }
    }
    // Login
    public function login($email, $password)
    {
        if ($this->conn) {
            // check for the email
            if (empty($email) || !$this->isValidEmail($email)) {
                $this->get_message("Email is empty or Invalid!");
                return false;
            }
            // check for the password
            if (empty($password)) {
                $this->get_message("Password is empty!");
                return false;
            }
            // get the  user by email
            $sql = "SELECT * FROM tbl_admin WHERE admin_email='$email';";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // verify the password
                if (password_verify($password, $row['admin_password'])) {
                    // Start session and set the user credentials
                    session_start();
                    $row['admin_password'] = null;
                    $_SESSION["USER_CRED"] = $row;

                    $this->get_message('Logged in Successfully');
                    return true;
                } else {
                    $this->get_message('Invalid password! Try again.');
                    return false;
                }
            } else {
                $this->get_message("Failed to login!");
                return false;
            }

        } else {
            $this->get_message("Connection Failed!");
            exit(1);
        }
    }

    // logout  admin 
    public function logout(){
        session_start();
        if(isset($_SESSION["USER_CRED"])){
            unset($_SESSION["USER_CRED"]);
            session_destroy();
            $this->get_message("You have been logged out successfully");
            header("Location:/");
        }else{
            $this->get_message("Sign up to  access full functionality.");
            header("Location:/");
        }
    }
    // create admin
    public function create_admin($admin_name, $admin_email, $admin_password)
    {
        if ($this->conn) {
            // check for the email
            if (empty($admin_name)) {
                $this->get_message("Name field can't be empty.");
                return false;
            }
            if (empty($admin_email) | !$this->isValidEmail($admin_email)) {
                $this->get_message("Please provide a valid email address");
                return false;
            }
            $hash = password_hash($admin_password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO tbl_admin (admin_name,admin_email,admin_password) VALUES ('$admin_name','$admin_email','$hash');";
            $result = $this->conn->query($sql);
            if ($result) {
                $this->get_message("Admin created Successfully!");
                return true;
            } else {
                $this->get_message("Failed to create Admin!");
                return false;
            }
        }
    }
    // update admin role
    public function update_admin($username, $email, $role, $admin_id, $manager_id)
    {
        if (!$this->conn) {
            $this->get_message("Lost connection! Can't Update Information");
            return false;
        }

        if (empty($username) || empty($email) || empty($role) || empty($admin_id) || !$manager_id) {
            $this->get_message("All fields are required!");
            return false;
        }

        if (!$this->isValidEmail($email)) {
            $this->get_message("Invalid Email Address!");
            return false;
        }

        $username = $this->conn->real_escape_string($username);
        $email = $this->conn->real_escape_string($email);
        $role = strtoupper($this->conn->real_escape_string($role));
        $admin_id = $this->conn->real_escape_string($admin_id);

        // get the manager details
        $sql1 = "SELECT role FROM tbl_admin WHERE admin_id=$manager_id;";
        $res1 = $this->conn->query($sql1);

        if ($res1->num_rows > 0) {
            $row1 = $res1->fetch_assoc();

            // validate the manager
            if ($row1['role'] == "MANAGER") {
                // check the admin exist or not
                $sql2 = "SELECT * FROM tbl_admin WHERE admin_id='$admin_id';";
                $res2 = $this->conn->query($sql2);

                if ($res2->num_rows > 0) {
                    $sql3 = "UPDATE tbl_admin 
                            SET  admin_name='$username', admin_email='$email',role='$role'
                             WHERE admin_id='$admin_id';";

                    if ($this->conn->query($sql3) === true) {
                        $this->get_message("Admin Details Updated Successfully!");
                        return true;
                    } else {
                        $this->get_message("Error updating Admin Details: " . $this->conn->error);
                        return false;
                    }
                } else {
                    $this->get_message("This admin doesnot exist!");
                    return false;
                }
            } else {
                $this->get_message("Manager Access Required!");
                return false;
            }
        } else {
            $this->get_message("Unauthorized access");
            return false;
        }
    }

    // delete admin
    public function delete_admin($admin_id)
    {
        if (!$this->conn) {
            $this->get_message("Lost connection! Can't Update Information");
            return false;
        }
        // check for manager authorization
        session_start();
        if (isset($_SESSION["USER_CRED"]) && $_SESSION['USER_CRED']['role'] == "MANAGER") {
            // find the admin exist or not
            $sql1 = "SELECT * FROM tbl_admin WHERE admin_id='$admin_id'";
            $res1 = $this->conn->query($sql1);
            //  
            if ($res1->num_rows > 0) {
                $sql2 = "DELETE FROM tbl_admin WHERE admin_id=$admin_id";
                $is_deleted = $this->conn->query($sql2);
                if ($is_deleted) {
                    $this->get_message("Admin Deleted Successfully!");
                    return true;
                } else {
                    $this->get_message("Failed to delete admin!");
                    return false;
                }

            } else {
                $this->get_message("This Admin doesnot exist!");
                return false;
            }
        } else {
            $this->get_message("Manager Access Required!");
        }

    }
    //get all the user details
    public function get_all_user($limit, $skip)
    {
        if (!$this->conn) {
            $this->get_message("Connection Lost !Try again");
        }
        if ($limit || $skip) {
            $limit = 10;

        }
        $sql1 = "SELECT * FROM tbl_user;";
        $result = $this->conn->query($sql1);
        if ($result->num_rows > 0) {
            $userList = $result->fetch_all();
            $this->get_message("User List Retrieved Successfully!");
            return $userList;
        } else {
            $this->get_message("No User Found!");
            return false;
        }
    }
    //forgot password 
    // public function forgotPassword($email)
    // {
    //     if (!$this->conn) {
    //         $this->get_message("Connection Lost !Try again");
    //         return false;
    //     }
    //     if (!$email || !$this->isValidEmail($email)) {
    //         $this->get_message("Invalid Email ! Try again");
    //         return false;
    //     }
    //     // check for the email  in db
    //     $sql1 = "SELECT * FROM tbl_admin WHERE admin_email='$email'";
    //     $res = $this->conn->query($sql1);

    //     //exist
    //     if ($res->num_rows > 0) {
    //         // generate a random token and send it to
    //         $token = password_hash($email, PASSWORD_DEFAULT);
    //         $utils = new Utils();
    //         $mailSent = $utils->sendMail($email, "RESET YOUR PASSWORD", "RESET TOKEN  : " . $token);
    //         if ($mailSent) {
    //             // update the db 
    //             $updateSql = "UPDATE `tbl_admin` SET `reset_password_token`='" . $token . "' WHERE `admin_email`='" . $email . "'; ";
    //             $updated = $this->conn->query($updateSql);
    //             if ($updated) {
    //                 $this->get_message("Reset Token Sent To Your Mail Id!" . $email);
    //                 return true;
    //             }

    //         } else {
    //             $this->get_message("Failed To send mail");
    //             return false;
    //         }
    //     } else {
    //         $this->get_message("This Email is not registered with us.");
    //         return false;
    //     }
    // }
    // Change password
    // public function change_password($reset_token, $new_password){
    //     if (!$this->conn) {
    //         $this->get_message("Connection lost!");
    //         return false;
    //     }
    
    //     // no reset token
    //     if (empty($reset_token)) {
    //         $this->get_message("Provide reset token!");
    //         return false;
    //     }
    //     // empty password
    //     if (empty($new_password)){
    //         $this->get_message("Enter your new Password!");
    //         return false;
    //     }
    
    //     // hash the password 
    //     $new_password = password_hash($new_password, PASSWORD_DEFAULT);
    
    //     // check the validity of the token
    //     $findResetToken = "SELECT * FROM tbl_admin WHERE reset_password_token='$reset_token'";
    //     $res = $this->conn->query($findResetToken);
    
    //     // found reset token
    //     if ($res) {
    //         if ($res->num_rows > 0) {
    //             // update account
    //             $updateAcc = "UPDATE tbl_admin SET admin_password='$new_password', reset_password_token=NULL WHERE reset_password_token='$reset_token'";
    //             $updated = $this->conn->query($updateAcc);
    
    //             if ($updated) {
    //                 $this->get_message("Password reset successful!");
    //                 return true;
    //             } else {
    //                 echo "Error In updating the database: " . $this->conn->error;
    //                 $this->get_message("Error In updating the database!");
    //                 return false;
    //             }
    //         } else {
    //             echo $this->conn->error;
    //             $this->get_message("Invalid token or expired token. Please try again later!");
    //             return false;
    //         }
    //     } else {
    //         echo "Error executing query: " . $this->conn->error;
    //         return false;
    //     }
    // }
    
    //get all the enquiry details
    // get all the product details 
    // close the connection
    public function __destruct()
    {
        if (!$this->conn) {
            $this->conn->close();    
        }
    }           
}
$admin = new Admin();
// $admin->login('admin1@email.com','password');
// $admin->delete_admin(9);
// $admin->forgotPassword("tedam21567@bizatop.com");
// define('token', '$2y$10$F1HjhcpEya.m.75cOPsxiONOLPbn9s9Q1em06CIa9MVqt4Cl5MGD6');
// $admin->change_password(token,"hello");
// $admin->login('tedam21567@bizatop.com','hello');
// $admin->logout();
?>