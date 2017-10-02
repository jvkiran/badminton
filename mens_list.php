<?php
    // require('db.php');
    // include("auth.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Dashboard - Secured Page</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
<body>
<?php
    require('db.php');
    include("auth.php");
        error_log(print_r(isset($_POST['strategy']), TRUE));    
    if (isset($_POST['strategy'])){
        echo "sasasasa";
        error_log("ddddddddddddddddddd");
        $user_email = $_SESSION['email'];

        $mens_dou_em = stripslashes($_POST['mens_dou_em']);
        //escapes special characters in a string
        $mens_dou_em = mysqli_real_escape_string($con,$mens_dou_em); 

        error_log("useremail"+$user_email);

        // $stragey = stripcslashes($_POST['strategy']);
        // //escapes special characters in a string
        // $stragey = mysqli_real_escape_string($con, $stragey);

        // if(isset($_POST['mens_dou_em'])){
        //     $category = 'mens_dou';
        //     $partner_email = $_POST['mens_dou_em'];
        // }else if(isset($_POST['mens_dou_em'])){
        //     $category = 'mens_mix';
        //     $partner_email = $_POST['mens_mix_em'];
        // }
        
        // $query ="INSERT INTO matchdetails(user_email, category, partner_email) VALUES('$user_email', '$category', '$partner_email')";
        
        // $result = mysqli_query($con, $query) or die(mysql_error());
        // $rows = mysqli_num_rows($result);
        // if($rows >= 1){
        //     $_SESSION['username'] = $username;
        //     // Redirect user to index.php
        //     header("Location: dashboard.php");
        // }else{
        //     // Redirect user to index.php
        //     header("Location: dashboard.php");
        // }

    }else{

?>
   <div class="form">
        <a href="logout.php" style="float:right">Logout</a>
    </div>

    <h2 style="padding-left:40%; color:blue;">Please select your preferences</h2>
    <form action="" method="POST" name="form1" style="padding-left:40%;">
        <select required name="strategy" id="strageySelection">
            <option value="">Please select stragey type</option>
            <option value="mens_single">Mens Single</option>
            <option value="mens_double" id="mens_double">Mens Double</option>
            <option value="mixed_doubles">Mixed Doubles</option>
        </select>
        <div id="mens_dou_em" style="display: none">
            Male Partner Email :<input type="email" name="mens_dou_em"/>
        </div>
        <div id="mens_mix_em" style="display: none">
            Partner Email :<input type="email" name="mens_mix_em"/>
        </div>
        <input type="submit" name="submit" value="Submit" />
        <!-- <table border="0" >
            <tr>
                <span style="display:none;">Catagerioes</span>
                <td>
                    <span>Mens Single:<input type="checkbox" name="mens_sin" value="Mens Single" id="ppppp"></span>
                    <span>Mens Double:<input type="checkbox" name="mens_dou" value="Mens Double" id="chkPassport">
                        <div id="dvPassport" style="display: none">
                            Male Partner Email :<input type="text" name="mens_dou_em"/>
                        </div>
                    </span>
                    <span>Mixed Doubles:<input type="checkbox" name="mens_mix" value="Mixed Doubles" id="chkPassport1">
                         <div id="dvPassport1" style="display: none">
                            Partner Email :<input type="text" name="mens_mix_em"/>
                        </div>
                    </span>
                </td>
             </tr>
           <tr>
                <td style="text-align:center;"><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table> -->
    </form>

    <script
      src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $('#strageySelection').on('change',function(){
            var selection = $(this).val();
            console.log(selection);
            switch(selection){
            case "mens_single":
                $("#mens_dou_em").hide();
                $("#mens_dou_em > input").prop('required',false);
                $("#mens_mix_em").hide();
                $("#mens_mix_em > input").prop('required',false);
                break;
            case "mens_double":
                $("#mens_dou_em").show();
                $("#mens_dou_em > input").prop('required',true);
                $("#mens_mix_em").hide();
                break;
            case "mixed_doubles":
                $("#mens_dou_em").hide();
                $("#mens_mix_em").show();
                $("#mens_mix_em > input").prop('required',true);
                break;
            default:
                $("#mens_dou_em").hide();
                $("#mens_dou_em > input").prop('required',false);
                $("#mens_mix_em").hide();
                $("#mens_mix_em > input").prop('required',false);
            }
        });
    </script>
<?php } ?>
</body>
</html>