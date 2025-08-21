<?php
$title = "Account Deletion Request | Shreenandik IT Services";
$desc = "Submit your account deletion request effortlessly with Shreenandik. Follow our simple process to request the deletion of your account and ensure your data privacy preferences are honored.";
include_once './public/lib/common/header.php';
?>



<section class="nandik-sec delete_account">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="busi-form-block">
                    <h2 class="text-center title3 white1 mb-5">Account Deletion Request</h2>
                    <form class="row g-3" id="myForm">
                        <div class="col-md-6 input_select">
                            <input type="text" class="form-control" placeholder="Full Name..." id="requestFullName">
                            <p class="showError" id="requestFullNameError"></p>
                        </div>
                        <div class="col-md-6 input_select">
                            <input type="email" class="form-control" placeholder="Your Email..." id="requestEmail">
                            <p class="showError" id="requestEmailError"></p>
                        </div>
                        <div class="col-md-6 input_select">
                            <input type="email" class="form-control" placeholder="User ID..." id="requestUserId">
                            <p class="showError" id="requestUserIdError"></p>
                        </div>

                        <div class="col-md-6 input_select">
                            <input type="text" class="form-control" placeholder="User Account Name..." id="requestAccountName">
                            <p class="showError" id="requestAccountNameError"></p>
                        </div>
                        <div class="col-12 input_select">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5.5" placeholder="Additional Details..."></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-default _button mission_btn" onclick="validateForm()">Submit Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
include_once './public/lib/common/footer.php';
?>

<script>
    // Function to validate the form
    function validateName() {
        var name = document.getElementById('requestFullName').value;
        var nameError = document.getElementById('requestFullNameError');
        nameError.innerHTML = "";
        if (name === "") {
            nameError.innerHTML = " Full Name is required. ";
            return false;
        }
        return true;
    }

    // Function to validate email
    function validateEmail() {
        var email = document.getElementById('requestEmail').value;
        var emailError = document.getElementById('requestEmailError');
        emailError.innerHTML = "";
        if (email === "") {
            emailError.innerHTML = "Email is required";
            return false;
        } else if (!validateEmailFormat(email)) {
            emailError.innerHTML = "Invalid email format";
            return false;
        }
        return true;
    }

    // Function to validate email format
    function validateEmailFormat(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

    // Function to validate inquiry
    function validateUserId() {
        var inquiry = document.getElementById('requestUserId').value;
        var inquiryError = document.getElementById('requestUserIdError');
        inquiryError.innerHTML = "";
        if (inquiry === "") {
            inquiryError.innerHTML = "User Id is required";
            return false;
        }
        return true;
    }

    // Function to validate phone
    function validateUserAccountName() {
        var phone = document.getElementById('requestAccountName').value;
        var phoneError = document.getElementById('requestAccountNameError');
        phoneError.innerHTML = "";

        if (phone === "") {
            phoneError.innerHTML = " User Account name is required.";
            return false;
        }

        return true;
    }

    // Function to validate the entire form
    function validateForm() {
        var validate = validateName() || validateEmail() || validateUserId() || validateUserAccountName();
        if (!validate) {
            return;
        }
        console.log('success')
    }
    document.getElementById('requestFullName').addEventListener('keyup', validateName);
    document.getElementById('requestEmail').addEventListener('keyup', validateEmail);
    document.getElementById('requestUserId').addEventListener('keyup    ', validateUserId);
    document.getElementById('requestAccountName').addEventListener('keyup', validateUserAccountName);

    document.getElementById('requestFullName').addEventListener('blur', validateName);
    document.getElementById('requestEmail').addEventListener('blur', validateEmail);
    document.getElementById('requestUserId').addEventListener('blur', validateUserId);
    document.getElementById('requestAccountName').addEventListener('blur', validateUserAccountName);
</script>