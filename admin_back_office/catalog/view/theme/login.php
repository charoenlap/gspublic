<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-3">
			<div class="card mt-4">
				<div class="card-header">
					<!-- <label for="">เข้าสู่ระบบ</label> -->
					<img src="../uploads/gosportlogo.png" alt="" class="w-100">
				</div>
				<div class="card-body">
					<?php if($result){?>
						<p class="alert alert-danger"><?php echo $result; ?></p>
					<?php } ?>
					<form action="<?php echo $action;?>" method="POST">
						<label for="">ชื่อผู้ใช้</label>
						<input type="text" class="form-control" name="username">
						<label for="">รหัสผ่าน</label>
						<input type="password" class="form-control" name="password">
						<input type="submit" class="btn btn-primary mt-2 btn-block" value="เข้าสู่ระบบ">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>