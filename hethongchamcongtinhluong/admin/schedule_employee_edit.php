<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$empid = $_POST['id'];
		$sched_id = $_POST['schedule'];
		
		$sql = "UPDATE employees SET schedule_id = '$sched_id' WHERE id = '$empid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Cập nhật lịch trình thành công!';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Chọn lịch trình để chỉnh sửa trước!';
	}

	header('location: schedule_employee.php');
?>