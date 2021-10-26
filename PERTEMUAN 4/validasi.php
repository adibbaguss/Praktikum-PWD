<html>
    <head>
        <style>
            .error{color:#FF0000;}
        </style>
    </head>

    <body>
    <?php
        include_once("koneksi.php");

        //define variables and set to empty values
        $namaErr = $emailErr = $genderErr = $websiteErr = "";
        $nama = $email = $gender = $comment = $website = "";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["nama"])){
                $namaErr="Nama harus diisi";
            }else{
                $nama=test_input($_POST["nama"]);
            }

            if(empty($_POST["email"])){
                $emailErr = "Email harus diisi";
            }else{
                $email=test_input($_POST["email"]);
            
                //check if e-mail address is well-formed
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $emailErr="Email tidak sesuai format";
                }
            }

            if(empty($_POST["website"])){
                $websiteErr ="Website harus diisi";
            }else{
                $website=test_input($_POST["website"]);
            }

            if(empty($_POST["comment"])){
                $comment ="";
            }else{
                $comment=test_input($_POST["comment"]);
            }

            if(empty($_POST["gender"])){
                $genderErr="Gender harus dipilih";
            }else{
                $gender=test_input($_POST["gender"]);
            }
        }

        function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        if(isset($_POST["submit"])){
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $website = $_POST["website"];
            $comment = $_POST["comment"];
            $gemder = $_POST["gender"];

            if(!empty(($nama)&&($email)&&($website)&&($website)&&($gender))){ 
                $result = mysqli_query($con, "INSERT INTO account(nama, email, website, comment, gender) VALUES ('$nama','$email','$website','$comment', '$gender')");
                
            }
        }
    ?>    

    <h2>Posting Komentar</h2>
    <p><span class="error">*Harus Diisi</span></p>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <table border="1">
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama">
                <span class="error">*<?php echo $namaErr;?></span>
                </td>
            </tr>

            <tr>
                <td>E-mail :</td>
                <td><input type="text" name="email">
                <span class="error">*<?php echo $emailErr;?></span>
                </td>
            </tr>

            <tr>
                <td>Website :</td>
                <td><input type="text" name="website">
                <span class="error">*<?php echo $websiteErr;?></span>
                </td>
            </tr>

            <tr>
                <td>Komentar :</td>
                <td><textarea name="comment" id="" cols="40" rows="5"></textarea></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="radio" name="gender" value="L">Laki-Laki 
                    <input type="radio" name="gender" value="P">Perempuan 
                    <span class="error">*<?php echo $genderErr;?></span>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    
    <?php
        echo "<h2>Data yang anda isi:</h2>";
        echo $nama;
        echo "<br>";

        echo $email;
        echo "<br>";

        echo $website;
        echo "<br>";
        
        echo $comment;
        echo "<br>";
        
        echo $gender;
        echo "<br>";

    ?>
    </body>
</html>