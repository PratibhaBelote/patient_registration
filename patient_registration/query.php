 <?php
    include('config/config.php');
    echo '<pre>'; print_r($_POST); echo '</pre>';//die;
    if(isset($_POST['action']) && $_POST['action']=='register'){
        $patient_name = $_POST['patient_name'];
        $mobile_number = $_POST['mobile_number'];
        $patient_age = $_POST['patient_age'];
        $blood_group = $_POST['blood_group'];
        $weight = $_POST['weight'];
        echo $sql = " INSERT INTO patient  SET patient_name='".$patient_name."',mobile_number='".$mobile_number."',patient_age='".$patient_age."',blood_group='".$blood_group."',weight='".$weight."'"; 
       // die;
        if (mysqli_query($conn, $sql)) {
            echo "Create successfully ";
            header("location:display.php");
            exit();
        } else {
            echo "Error creating table: " . mysqli_error($conn);
            header("location:display.php");
            exit();
        }
    }


    if(isset($_GET['action']) && $_GET['action']=='delete_registration')
    {
        echo $sql=" DELETE FROM patient WHERE patient_id='".$_GET['patient_id']."'";
        if (mysqli_query($conn, $sql)) {
            echo "Delete successfully ";
            header("location:display.php");
            exit();
        } else {
            echo "Error creating table: " . mysqli_error($conn);
            header("location:display.php");
            exit();
        }
    }

    


    if(isset($_POST['action']) && $_POST['action']=='update_register'){
        $patient_id= $_POST['patient_id'];
        $patient_name = $_POST['patient_name'];
        $mobile_number = $_POST['mobile_number'];

        $patient_age = $_POST['patient_age'];
        $blood_group = $_POST['blood_group'];
        $weight = $_POST['weight'];
        echo $sql = " UPDATE patient  SET patient_name='".$patient_name."',mobile_number='".$mobile_number."',patient_age='".$patient_age."',blood_group='".$blood_group."',weight='".$weight."' WHERE patient_id='".$patient_id."'"; 
      //die;
        if (mysqli_query($conn, $sql)) {
            echo "Update successfully ";
            header("location:display.php");
            exit();
        } else {
            echo "Error creating table: " . mysqli_error($conn);
            header("location:display.php");
            exit();
        }
    }


    mysqli_close($conn);
  
  
?>