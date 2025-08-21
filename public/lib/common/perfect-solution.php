<section class="nandik-sec business-form">
    <div class="background-overlay"></div>
    <div class="container z_in">
        <div class="row g-5">
            <div class="col-md-6">
                <div class="busi-content-block">
                    <h3 class="title2">We Are <span class="_span">Perfect Solutions</span> For <span class="_span">Your
                            Business</span></h3>
                    <p class="text">Empowering your business with perfect solutions – where innovation meets excellence.
                    </p>
                    <ul>
                        <li><i class="fa-solid fa-check"></i> <span> Proactive problem-solving</span></li>
                        <li><i class="fa-solid fa-check"></i> <span> Industry-leading standards</span></li>
                        <li><i class="fa-solid fa-check"></i> <span> Latest Technology</span></li>
                        <li><i class="fa-solid fa-check"></i> <span> Transparent communication</span></li>
                        <li><i class="fa-solid fa-check"></i> <span> Sustainable growth strategies</span></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-6 wow animate__animated animate__fadeInRight">
                <div class="busi-form-block ">
                    <form class="row g-3" id="myForm">
                        <div class="col-md-6 input_select">
                            <input type="text" class="form-control" placeholder="Your Name..." id="inputName">
                            <p class="showError" id="nameError"></p>
                        </div>
                        <div class="col-md-6 input_select">
                            <input type="email" class="form-control" placeholder="Your Email..." id="inputEmail">
                            <p class="showError" id="emailError"></p>
                        </div>
                        <div class="col-md-6 input_select select-input">
                            <div class="down-arrow"><i class="fa-solid fa-sort-down"></i></div>
                            <select id="inputInquery" class="form-select">
                                <option value="" selected disabled>Inquiry...</option>
                                <option value="IT Management">IT Management</option>
                                <option value="Cyber Security">Cyber Security</option>
                                <option value="Cloud Services">Cloud Services</option>
                                <option value="Data Center">Data Center</option>
                            </select>
                            <p class="showError" id="inquiryError"></p>
                        </div>

                        <div class="col-md-6 input_select">
                            <input type="text" class="form-control" placeholder="Your Phone..." id="inputNumber">
                            <p class="showError" id="phoneError"></p>
                        </div>
                        <div class="col-12 input_select">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5.5" placeholder="Additional Details..."></textarea>
                            <p class="showError" id="detailsError"></p>
                        </div>
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-default _button mission_btn" onclick="validateForm()">Submit Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Function to validate the form
    function validateName() {
        var name = document.getElementById('inputName').value;
        var nameError = document.getElementById('nameError');
        nameError.innerHTML = "";
        if (name === "") {
            nameError.innerHTML = "Name is required";
            return false;
        }
        return true;
    }

    // Function to validate email
    function validateEmail() {
        var email = document.getElementById('inputEmail').value;
        var emailError = document.getElementById('emailError');
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
    function validateInquiry() {
        var inquiry = document.getElementById('inputInquery').value;
        var inquiryError = document.getElementById('inquiryError');
        inquiryError.innerHTML = "";
        if (inquiry === "") {
            inquiryError.innerHTML = "Please select an inquiry";
            return false;
        }
        return true;
    }

    // Function to validate phone
    function validatePhone() {
        var phone = document.getElementById('inputNumber').value;
        var phoneError = document.getElementById('phoneError');
        phoneError.innerHTML = "";
        var phoneRegex = /^[0-9 ()+-]+$/;
        var phoneNumber = phone.replace(/\D/g, ''); // Remove non-numeric characters

        if (phone === "") {
            phoneError.innerHTML = "Phone is required";
            return false;
        } else if (!phone.match(phoneRegex)) {
            phoneError.innerHTML = "Invalid phone number";
            return false;
        } else if (phoneNumber.length < 10 || phoneNumber.length > 13) {
            phoneError.innerHTML = "Phone must be 10 to 13 digits";
            return false;
        }

        return true;
    }

    // Function to validate the entire form
    function validateForm() {
        var validate = validateName() || validateEmail() || validateInquiry() || validatePhone();
        if (!validate) {
            return;
        }
        console.log('success')
    }
    document.getElementById('inputName').addEventListener('keyup', validateName);
    document.getElementById('inputEmail').addEventListener('keyup', validateEmail);
    document.getElementById('inputInquery').addEventListener('change', validateInquiry);
    document.getElementById('inputNumber').addEventListener('keyup', validatePhone);

    document.getElementById('inputName').addEventListener('blur', validateName);
    document.getElementById('inputEmail').addEventListener('blur', validateEmail);
    document.getElementById('inputInquery').addEventListener('blur', validateInquiry);
    document.getElementById('inputNumber').addEventListener('blur', validatePhone);
</script>