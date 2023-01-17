<?php 

    $connect = mysqli_connect("localhost", "root", "", "film-rega");

    function query($query) {
        global $connect;
        $result = mysqli_query($connect, $query);
        $row = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }



    function regis($data){
        global $connect;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($connect, $data["password"]);
        $confirmPassword = mysqli_real_escape_string($connect, $data["confirm-password"]);
    
        //cek apakah username sudah ada atau belum
        $result = mysqli_query($connect, "SELECT username_login FROM users WHERE username_login = '$username'");
    
        if ( mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('Username yang dipilih sudah terdaftar')
                </script>";
                return false;
        }   
    
    
        if ($password !== $confirmPassword) {
            echo "<script>
                    alert('Password tidak sama')
                </script>";
            return false;
        } 
        
        //enskripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        //tambahkan userbaru ke database
        mysqli_query($connect, "INSERT INTO users VALUES('', '$username', '$password', '')");
    
        return mysqli_affected_rows($connect);
    
    }




?>