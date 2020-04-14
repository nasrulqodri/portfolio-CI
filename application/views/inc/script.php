<script type="text/javascript">
	$(document).ready(function(){
		$('#viewProfile').on('click', function(){
			$.ajax({
				type:'post',
				url:'http://localhost/portfolio/profile/get_data',
				dataType: 'json',
				data:{},
				success:function(data){
					console.log(data)
				}
			});
		})
	});
</script>