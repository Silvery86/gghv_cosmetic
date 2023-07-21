// JavaScript Document
function validateEmail(input_text) {
    emailInput = input_text.value;
    submitButton = document.getElementById("submit-btn");
    
    if (emailInput == '') {
        document.getElementById("email_error").innerHTML="Email không được bỏ trống";
        submitButton.disabled = true;
        return false;
    }
    
    var emailPattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    if (!emailPattern.test(emailInput)) {
        document.getElementById("email_error").innerHTML="Email không đúng định dạng";
        submitButton.disabled = true;
        return false;
    }
    document.getElementById("email_error").innerHTML="";
    submitButton.disabled = false;
    return true;
}

function validateName(input_text) {
    submitButton = document.getElementById("submit-btn");
    // Check if the name input is empty
    if (input_text.value == '') {
        document.getElementById("name_error").innerHTML="Họ tên không được bỏ trống";
        submitButton.disabled = true;
        return false;
    }

   

    // You can add more criteria if needed, such as minimum and maximum length
    document.getElementById("name_error").innerHTML="";
    submitButton.disabled = false;
    return true;
}

function validatePhone(input_text) {
            var phoneInput = input_text.value;
            submitButton = document.getElementById("submit-btn");
            // Remove any non-digit characters from the input
            var cleanedPhoneNumber = phoneInput.replace(/\D/g, '');

            if (!/^\d+$/.test(phoneInput)) {
                document.getElementById("phone_error").innerHTML="Số điện thoại chỉ được nhập số";
                submitButton.disabled = true;
                return false;
            }
            // Check if the cleaned phone number is empty
            if (cleanedPhoneNumber == '') {
                document.getElementById("phone_error").innerHTML="Số điện thoại không được bỏ trống";
                submitButton.disabled = true;
                return false;
            }


            // Check if the cleaned phone number has a valid format
            var phonePattern = /^0\d{9}$/; // Assumes a 10-digit phone number format
            if (!phonePattern.test(cleanedPhoneNumber)) {
                document.getElementById("phone_error").innerHTML="Số điện thoại không hợp lệ!";
                submitButton.disabled = true;
                return false;
            }

            
            document.getElementById("phone_error").innerHTML="";
            submitButton.disabled = false;
            return true;
}

function validatePassword(input_text) {
    var passwordInput = input_text.value;
    submitButton = document.getElementById("submit-btn");
    // Check if the password contains at least one uppercase letter
    if (!/[A-Z]/.test(passwordInput)) {
        document.getElementById("password_error").innerHTML="Mật khẩu phải bao gồm 1 chữ in Hoa";
        submitButton.disabled = true;
        return false;
    }

    // Check if the password contains at least one special symbol
    if (!/[\W_]/.test(passwordInput)) {
        document.getElementById("password_error").innerHTML="Mật khẩu phải bao gồm 1 ký tự đặc biệt";
        submitButton.disabled = true;
        return false;
    }

    // Check if the password contains at least one number
    if (!/\d/.test(passwordInput)) {
        document.getElementById("password_error").innerHTML="Mật khẩu phải bao gồm 1 chữ số";
        submitButton.disabled = true;
        return false;
    }

    // You can add more criteria if needed, such as minimum and maximum length
    document.getElementById("password_error").innerHTML="";
    submitButton.disabled = false;
    return true;
}

function validateCPassword(input_text) {
    var password = document.getElementById("password").value;
    var confirmPassword = input_text.value;
    submitButton = document.getElementById("submit-btn");
  
    if (!(password === confirmPassword)) {
      
    document.getElementById("c_password_error").innerHTML="Mật khẩu không khớp";
    submitButton.disabled = true;
      return false;
    }
    document.getElementById("c_password_error").innerHTML="";
    submitButton.disabled = false;
    return true;
  }
function checks(input_text)
{
	if(input_text.value=="")
	{
		document.getElementById("name_error").innerHTML="chưa nhập dữ liệu";
        document.getElementById("email_error").innerHTML="chưa nhập dữ liệu";
        document.getElementById("phone_error").innerHTML="chưa nhập dữ liệu";
        document.getElementById("password_error").innerHTML="chưa nhập dữ liệu";
        document.getElementById("c_password_error").innerHTML="chưa nhập dữ liệu";
		input_text.focus();//đặt lại focus vào text hiện tại
		return false;
	}
	if(isNaN(input_text.value))
	{
		document.getElementById("baoloi").innerHTML="phải nhập số";
		input_text.focus();//đặt lại focus vào text hiện tại
		return false;
	}
	if(parseFloat(input_text.value)<0 || parseFloat(input_text.value)>10)
	{
		document.getElementById("baoloi").innerHTML="điểm phải >=0 và <=10";
		input_text.focus();//đặt lại focus vào text hiện tại
		return false;
	}
	document.getElementById("baoloi").innerHTML="";
}

//kiểm tra toán,văn, anh không trống và phải là số
function kiemtra()
{
	tToan = document.getElementById("tToan");
	tVan = document.getElementById("tVan");
	tAnh = document.getElementById("tAnh");
	if(tToan.value==""||tVan.value==""||tAnh.value=="")
	{
		alert("Mời nhập đầy đủ điểm các môn");
		return false;
	}
	if(isNaN(tToan.value)||isNaN(tVan.value)
							||isNaN(tAnh.value))
	{
		alert("điểm phải nhập số");
		return false;
	}
	toan = parseFloat(tToan.value);
	van = parseFloat(tVan.value);
	anh = parseFloat(tAnh.value);
	if(toan<0||toan>10||van<0||van>10||anh<0||anh>10)
	{
		alert("điểm phải >=0 và <=10");
		return false;
	}
}