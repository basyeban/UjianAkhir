<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./assets/images/LOGO-BARU-24.png" type="image/svg+xml">
    <link rel="stylesheet" href="style5.css">
    <title>Register Pasien</title>
    <script>
        var check = function () {
            if (document.getElementById('password').value ==
                document.getElementById('cpassword').value) {
                document.getElementById('message').style.color = '#5dd05d';
                document.getElementById('message').innerHTML = 'Matched';
            } else {
                document.getElementById('message').style.color = '#f55252';
                document.getElementById('message').innerHTML = 'Not Matching';
            }
        }

        function alphaOnly(event) {
            var key = event.keyCode;
            return ((key >= 65 && key <= 90) || key == 8 || key == 32);
        };
        function redirectToPatientLogin() {
            window.location.replace("patient-login.php");     
            return false;       
        }
        function redirectToDoctorLogin() {
            window.location.replace("doctor-login.php");
            return false;
        }
        function redirectToAdminLogin() {
            window.location.replace("admin-login.php");
            return false;
        }
        window.onload = function () {
            var formSubmitted = localStorage.getItem('formSubmitted');
            if (formSubmitted === 'true') {
                var formId = localStorage.getItem('lastSubmittedForm');
                if (formId) {
                    showForm(formId);
                }
            } else {
                showForm('loginPatient'); // Show the patient registration form by default
            }
        };

        function submitForm(formId) {
            localStorage.setItem('formSubmitted', 'true');
            localStorage.setItem('lastSubmittedForm', formId);
            return true;
        }
    </script>

</head>

<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <a href="index.php"><img src="logo.png" alt="">
                    <span>Rumah Sakit Umum Islam Kustati</span>
            </div>
            <div class="nav-menu" id="navMenu">
           <ul>
                <li><a href="patient-login.php" class="mobile-only">Pasien</a></li>
                <li><a href="doctor-login.php" class="mobile-only">Dokter</a></li>
                <li><a href="admin-login.php" class="mobile-only">Admin</a></li>
            </ul>
            </div>

            <div class="nav-button">
                <button class="btn white-btn" id="registerBtn" onclick="redirectToPatientLogin()">Pasien</button>
                <button class="btn white-btn" id="registerBtn" onclick="redirectToDoctorLogin()">Dokter</button>
                <button class="btn white-btn" id="registerBtn" onclick="redirectToAdminLogin()">Admin</button>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>

        <div class="form-box">

            <div class="register-container" id="loginPatient">
                <div class="top">
                    <header>Daftar pasien</header>
                </div>
                <form action="function2.php" method="POST" onsubmit="return validateForm()">
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="text" class="form-control" placeholder="Nama Depan *" name="fname"
                                onkeydown="return alphaOnly(event);" />
                            <i class="bx bx-user"></i><br><br>
                        </div>
                        <div class="input-box">
                            <input type="text" class="form-control" placeholder="Nama Belakang *" name="lname"
                                onkeydown="return alphaOnly(event);" />
                            <i class="bx bx-user"></i><br><br>
                        </div>
                    </div>
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="email" class="form-control" placeholder="Email Anda *" name="email" />
                            <i class="bx bx-envelope"></i><br><br>
                        </div>
                        <div class="input-box">
                            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control"
                                placeholder="Nomor Telepon *" />
                            <i class='bx bx-phone'></i><br><br>
                        </div>
                    </div>
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="password" class="form-control" placeholder="Password *" id="password"
                                name="password" onkeyup='check();' />
                            <i class="bx bx-lock-alt"></i><br><br>
                        </div>
                        <div class="input-box">
                            <input type="password" class="form-control" id="cpassword" placeholder="Konfirmasi Password *"
                                name="cpassword" onkeyup='check();' /><span id='message'></span>
                            <i class="bx bx-lock-alt"></i><br><br>
                        </div>
                    </div>
                    <div class="two-col">
                        <div class="one">
                            <label class="radio inline">
                                <input type="radio" name="gender" value="Male" checked>
                                <span> Pria </span>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="gender" value="Female">
                                <span> Wanita </span>
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="input-box">
                        <input type="submit" class="btnRegister" name="patsub1"
                            onclick="return checklen() && validateForm();" value="Register" />
                    </div><br>

                </form>
                <div class="input-box">
                    <button class="btnlogin" onclick="window.location.href='patient-login.php';">Sign-In</button>
                </div>
            </div>

            <!-- Doctor -->
            <div class="register-container" id="loginDoctor">
                <div class="top">
                    <header>Login as Doctor</header>
                </div>
                <form action="function1.php" method="POST" onsubmit="return validateDoctorForm();">
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="text" class="form-control" placeholder="User Name *" name="username3" />
                            <i class="bx bx-user"></i><br><br>
                        </div>
                        <div class="input-box">
                            <input type="password" class="form-control" placeholder="Password *" name="password3" />
                            <i class="bx bx-lock-alt"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="btnRegister" name="docsub1" value="Login" />
                    </div>
                </form>
            </div>

            <!-- Admin -->
            <div class="register-container" id="loginAdmin">
                <div class="top">
                    <header>Login as Admin</header>
                </div>
                <form action="function3.php" method="POST" onsubmit="return validateAdminForm();">
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="text" class="form-control" placeholder="User Name *" name="username1" />
                            <i class="bx bx-user"></i><br><br>
                        </div>
                        <div class="input-box">
                            <input type="password" class="form-control" placeholder="Password *" name="password2" />
                            <i class="bx bx-lock-alt"></i><br><br>
                        </div>
                    </div>
                    <div>
                        <input type="submit" class="btnRegister" name="adsub" value="Login" />
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        function myMenuFunction() {
            var i = document.getElementById("navMenu");

            if (i.className === "nav-menu") {
                i.className += " responsive";
            } else {
                i.className = "nav-menu";
            }
        }

        function showForm(formId) {
            var forms = document.getElementsByClassName("register-container");
            for (var i = 0; i < forms.length; i++) {
                forms[i].style.display = "none";
            }

            var form = document.getElementById(formId);
            form.style.display = "block";
        }

        function validateForm() {
            // Get the values from the form
            var firstName = document.getElementsByName("fname")[0].value;
            var lastName = document.getElementsByName("lname")[0].value;
            var email = document.getElementsByName("email")[0].value;
            var contact = document.getElementsByName("contact")[0].value;

            // Check if all fields are filled
            if (firstName === "" || lastName === "" || email === "" || contact === "") {
                alert("Mohon isikan semua data.");
                return false;
            }

            // Check if the email field is not empty and has a valid email format
            if (email !== "") {
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    alert("Mohon masukkan email ada yang benar.");
                    return false;
                }
            }

            // Check if the contact field is not empty and has a length of 10 digits
            if (contact !== "") {
                var contactRegex = /^\d{10}$/;
                if (!contactRegex.test(contact)) {
                    alert("Mohon masukkan nomor telepon anda minimal 10-digit.");
                    return false;
                }
            }

            function checklen() {
                var pass1 = document.getElementById("password");
                if (pass1.value.length < 6) {
                    alert("Password minimal 6 karakter, silahkan coba lagi");
                    return false;
                }
            }

            return true; // Form is valid and can be submitted
        }

        function validateDoctorForm() {
            var username = document.getElementsByName("username3")[0].value;
            var password = document.getElementsByName("password3")[0].value;

            if (username === "" || password === "") {
                alert("Mohon isikan semua data");
                return false;
            }

            return true;
        }

        function validateAdminForm() {
            var username = document.getElementsByName("username1")[0].value;
            var password = document.getElementsByName("password2")[0].value;

            if (username === "" || password === "") {
                alert("Mohon isikan semua data");
                return false;
            }

            return true;
        }
    </script>
</body>

</html>