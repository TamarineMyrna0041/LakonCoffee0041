<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body {
        font-family: sans-serif;
        background: #dcc8b0;
        background-image: url('6.png');
        background-size: cover;
    }

    h1 {
        text-align: center;
        /*ketebalan font*/
        font-weight: 300;
    }

    .tulisan_login {
        text-align: center;
        /*membuat semua huruf menjadi kapital*/
        text-transform: uppercase;
    }

    .kotak_login {
        width: 350px;
        background: white;
        /*meletakkan form ke tengah*/
        margin: 80px auto;
        padding: 30px 20px;
        box-shadow: 0px 0px 100px 4px #d6d6d6;
    }

    label {
        font-size: 11pt;
    }

    .form_login {
        /*membuat lebar form penuh*/
        box-sizing: border-box;
        width: 100%;
        padding: 10px;
        font-size: 11pt;
        margin-bottom: 20px;
    }

    .tombol_login {
        background: #f8cc9c;
        color: white;
        font-size: 11pt;
        width: 100%;
        border: none;
        border-radius: 3px;
        padding: 10px 20px;
    }

    .link {
        color: #232323;
        text-decoration: none;
        font-size: 10pt;
    }

    .alert {
        background: #e44e4e;
        color: white;
        padding: 10px;
        text-align: center;
        border: 1px solid #b32929;
    }
    
    </style>
</head>

<body>
    <?php
require('connection.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($db,$username); 
	$password = md5($_REQUEST['password']);
	$password = mysqli_real_escape_string($db,$password);
	$level = stripslashes($_REQUEST['level']);
	$level = mysqli_real_escape_string($db,$level);
	$nama = stripslashes($_REQUEST['nama']);
	$nama = mysqli_real_escape_string($db,$nama);
        $query = "INSERT into `user` (nama, username, password, level) 
		VALUES ('$nama', '$username', '$password', '$level')";
        $result = mysqli_query($db,$query);
        if($result){
            echo "<div class='form'>
<h3>Registrasi Berhasil.</h3>
<br/>Klik disini untuk <a href='index.php'>Login</a></div>";
        }
    }else{
?>
    <table class="kotak_login" align="center">
        <form name="registration" action="" method="post">
            <tr>
                <th align="center" colspan="2"><h1>Registrasi</h1></th>
            </tr>
            <tr>
                <td>Name</td>
                <td><input class="form_login" type="text" name="nama" placeholder="Nama" required /></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input class="form_login" type="text" name="username" placeholder="Username" required /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input class="form_login" type="password" name="password" placeholder="Password" required /></td>
            </tr>

            <tr>
                <td>Sebagai</td>
                <td>
                    <select class="form_login" name="level">
                        <option value="admin">Admin
                        <option value="staff">Staff
                    </select>
                </td>
            </tr>

            <tr>
                <th align="center" colspan="2"><input class="tombol_login" type="submit" name="submit"
                        value="Register" /></th>
            </tr>

            <tr>
                <th align="center" colspan="2">
                    <br>
                    <p>Anda sudah memiliki akun? <a href="index.php">Login</a></p>
                </th>
            </tr>
        </form>
    </table>
    <?php } ?>
</body>

</html>