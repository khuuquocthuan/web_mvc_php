<script type="text/javascript">
	function Kiemtra(){
		var name=document.getElementById('name');
		if (name.value=="") {
			document.getElementById("err_name").innerHTML="Bạn đang để tên trống";
			name.focus();
			return false;
		}
		else{
			document.getElementById("err_name").innerHTML="";
		}
	}

</script>