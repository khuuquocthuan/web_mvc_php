<script type="text/javascript">
	function kiem_tra(){
			var name=document.getElementById('name');
			var email=document.getElementById('email');
			var phone=document.getElementById('phone');
			var rep=document.getElementById('rep');
			var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if (name.value=="" || name.value<6) {
				document.getElementById('err_name').innerHTML="Tên không được phép rỗng và lớn hơn 6 kí tự";
				name.focus();
				return false;
			}
			else{
				document.getElementById("err_name").innerHTML="";
			}
			if (email.value=="" || !re.test(email.value)) {
				document.getElementById('err_email').innerHTML="Email sai định dạng";
				email.focus();
				return false;	
			}
			
			else{
				document.getElementById("err_email").innerHTML="";
			}
			if (phone.value=="" || isNaN(phone.value) || phone.value<10 {
				document.getElementById('err_phone').innerHTML="Số điện thoại nhập sai định dạng";
				phone.focus();
				return false;
			}
			// 
			
			else{
				document.getElementById("err_phone"),innerHTML="";
			}
			if (rep.value=="") {
				document.getElementById('err_rep').innerHTML="Bạn đang để trống phản hồi";
				rep.focus();
				return false;
			}
			else{
				document.getElementById("err_rep"),innerHTML="";
			}
			

			
		return true;
	}

</script>