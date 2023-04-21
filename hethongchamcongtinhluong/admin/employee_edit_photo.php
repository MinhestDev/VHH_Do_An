<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$empid = $_POST['id'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		
		$sql = "UPDATE employees SET photo = '$filename' WHERE id = '$empid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Cập nhật ảnh nhân viên thành công!';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Chọn ảnh nhân viên để sửa đầu tiên';
	}

	header('location: employee.php');
?>