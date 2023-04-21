<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM overtime WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Đã xóa làm thêm giờ thành công!';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Chọn mục cần xóa trước!';
	}

	header('location: overtime.php');
	
?>