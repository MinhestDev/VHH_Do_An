<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM employees WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Đã xóa nhân viên thành công!';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Chọn vật phẩm để xóa trước!';
	}

	header('location: employee.php');
	
?>