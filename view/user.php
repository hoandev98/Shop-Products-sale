<?php include "./include/headerOther.php" ?>


	<section>
		<div class="infoUser"> </div>
		<div class="listDonHang"> </div>

		<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				    <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel" >Chi tiết đơn hàng</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
				          <span aria-hidden="true">&times;</span>
				        </button>
				    </div>
				<div class="modal-body" id="chitietdonhang"></div>
				<div class="modal-footer">
		        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
		        	<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
		      	</div>
		    	</div>
		  	</div>
		</div>
		
	</section> <!-- End Section -->


	<div class="containTaikhoan">
    <span class="close" onclick="showTaiKhoan(false);">&times;</span> 
        
    </div>

	<div class="footer">
    <?php include "./include/footer.php" ?>
	</div>

	
</body>

</html>