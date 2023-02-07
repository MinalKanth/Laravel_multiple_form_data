<?
include_once 'config.php';

$id = $_POST['id'];

$f1 = $_POST['f1'];
$f3 = $_POST['f3'];
$f4 = $_POST['f4'];
$f5 = $_POST['f5'];
$f6 = $_POST['f6'];
$f7 = $_POST['f7'];
$f8 = $_POST['f8'];
$f9 = $_POST['f9'];
$f10 = $_POST['f10'];
$f11 = $_POST['f11'];
$f12 = $_POST['f12'];
$f13 = $_POST['f13'];
$f14 = $_POST['f14'];

$year = $_POST['DOB_day'];
$month = $_POST['DOB_month'];
$day = $_POST['DOB_day'];

$DOB = $day . "-" . $month . "-" . $year;

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt');
$path = 'uploads/';

$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

$final_image = rand(1000, 1000000) . $img;



if (in_array($ext, $valid_extensions)) {
    $path = $path . strtolower($final_image);

    if (move_uploaded_file($tmp, $path)) {
        echo "<img src='$path' />";

        $query = "INSERT INTO tb1 (f1,f2,f3,f4,f5,f6,f7,f8,f9,f10,f11,f12,f13,f14,uploaded_on) VALUES ('$f1','$DOB','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10','$f11','$f12','$f13','$f14',now())";

        $result = mysqli_query($conn, $query);
        $student_id = $conn->insert_id;
        if($result){
            echo "<script> alert('Uploaded Successfuly !')</script>";
        }else{
            echo "<script> alert('Failed to Upload !')</script>";

        }
        $insert = $conn->query("INSERT tb6 (tb1_id,name,email,file_name) VALUES ('" . $student_id . "','" . $f1 . "','" . $f9 . "','" . $path . "')");
    }
}

foreach ($_POST['platform_title'] as $key => $value) {

    $query1 = "INSERT INTO tb2(tb1_id,g1,g2)VALUES ('" . $student_id . "','" . $_POST['platform_title'][$key] . "','" . $_POST['description'][$key] . "')";
    mysqli_query($conn, $query1);
}

foreach ($_POST['skill'] as $key => $value) {

    $query2 = "INSERT INTO tb3(tb1_id,h1,h2)VALUES ('" . $student_id . "','" . $_POST['skill'][$key] . "','" . $_POST['value'][$key] . "')";
    mysqli_query($conn, $query2);
}

foreach ($_POST['collage_name'] as $key => $value) {

    $query3 = "INSERT INTO tb4(tb1_id,i1,i2,i3,i4)VALUES ('" . $student_id . "','" . $_POST['collage_name'][$key] . "','" . $_POST['e_start_from'][$key] . "','" . $_POST['e_end_at'][$key] . "','" . $_POST['e_description'][$key] . "')";
    mysqli_query($conn, $query3);
}

foreach ($_POST['company_name'] as $key => $value) {

    $query3 = "INSERT INTO tb5(tb1_id,j1,j2,j3,j4,j5,j6)VALUES ('" . $student_id . "','" . $_POST['company_name'][$key] . "','" . $_POST['job_title'][$key] . "','" . $_POST['w_location'][$key] . "','" . $_POST['w_start_from'][$key] . "','" . $_POST['w_end_at'][$key] . "','" . $_POST['w_description'][$key] . "')";
    mysqli_query($conn, $query3);
}

?>
