@vite('resources/js/app.js')

<script src="{{asset('client/libs/%40popperjs/core/umd/popper.min.js')}}"></script>
<script src="{{asset('client/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('admin/libs/jquery/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('client/js/pages/switcher.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script src="{{asset('client/js/pages/dropdown%26modal.init.js')}}"></script>

<!-- Swiper Js -->
<script src="{{asset('client/libs/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('client/js/pages/swiper.init.js')}}"></script>

<script src="{{asset('client/js/pages/nav%26tabs.js')}}"></script>

<script src="{{asset('client/js/app.js')}}"></script>
<script>
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    const firebaseConfig = {

        apiKey: "AIzaSyBVjPvLia-lQ3KTIlGyJtwkO6gnF4EhA6c",
        authDomain: "fir-2-73a65.firebaseapp.com",
        projectId: "fir-2-73a65",
        storageBucket: "fir-2-73a65.appspot.com",
        messagingSenderId: "793008679902",
        appId: "1:793008679902:web:01e40657ee99f0150dcb4f",
        measurementId: "G-CTLCZLM3R1"
        // apiKey: "AIzaSyCJ8pbe36jbzUmVQK_pFOZlPKXRW6JNoG8",
        // authDomain: "test2-5f15d.firebaseapp.com",
        // projectId: "test2-5f15d",
        // storageBucket: "test2-5f15d.appspot.com",
        // messagingSenderId: "660182456617",
        // appId: "1:660182456617:web:89d3c4ddf2b96307efff38",
        // measurementId: "G-31DTR2L4VF"

        // apiKey: "AIzaSyBVjPvLia-lQ3KTIlGyJtwkO6gnF4EhA6c",
        // authDomain: "fir-2-73a65.firebaseapp.com",
        // projectId: "fir-2-73a65",
        // storageBucket: "fir-2-73a65.appspot.com",
        // messagingSenderId: "793008679902",
        // appId: "1:793008679902:web:01e40657ee99f0150dcb4f",
        // measurementId: "G-CTLCZLM3R1"


        // apiKey: "AIzaSyCJ8pbe36jbzUmVQK_pFOZlPKXRW6JNoG8",
        // authDomain: "test2-5f15d.firebaseapp.com",
        // projectId: "test2-5f15d",
        // storageBucket: "test2-5f15d.appspot.com",
        // messagingSenderId: "660182456617",
        // appId: "1:660182456617:web:89d3c4ddf2b96307efff38",
        // measurementId: "G-31DTR2L4VF"

    };
    firebase.initializeApp(firebaseConfig);
</script>
<script type="text/javascript">
    window.onload = function () {
        render();
        hidePopup();
    };
    document.getElementById("number").addEventListener("keyup", function (event) {
        if (event.key === "Enter") {
            sendOTP();
        }
    });

    function checkEnter(event) {
        if (event.key === "Enter") {
            verify();
        }
    }

    function render() {
        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
        recaptchaVerifier.render();
    }

    var coderesult;
    function sendOTP() {
        var number = "+84" + $("#number").val();
        firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function (confirmationResult) {
            window.confirmationResult = confirmationResult;
            coderesult = confirmationResult;
            console.log(coderesult);
            $("#successAuth").text("Message sent");
            $("#successAuth").show();
            localStorage.setItem("phoneNumber", number);
            // window.location.href = "/verify-otp?verificationId=" + confirmationResult.verificationId;
            localStorage.setItem("verificationId", confirmationResult.verificationId);
            document.getElementById("popupContainer2").style.display = "block";
            document.getElementById("popupContainer").style.display = "none";
        }).catch(function (error) {
            $("#error").text(error.message);
            $("#error").show();
        });
    }

    function verify() {
        var code = $("#verificationId").val();
        var phoneNumber = localStorage.getItem("phoneNumber");

        // const urlParams = new URLSearchParams(window.location.search);
        // const verificationId = urlParams.get("verificationId");
        // const confirmationResult = firebase.auth.PhoneAuthProvider.credential(verificationId, code);

        const verificationId = localStorage.getItem("verificationId");
        const confirmationResult = firebase.auth.PhoneAuthProvider.credential(verificationId, code);

        firebase.auth().signInWithCredential(confirmationResult).then(function (result) {

                $.ajax({
                    type: 'POST',
                    url: '/process',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        phone: phoneNumber,
                    },
                    success: function (data) {
                        window.location.href ='/';
                    },
                    error: function (error) {
                        $("#error").text(error.message);
                        $("#error").show();
                    }
                });

        }).catch(function (error) {
            $("#error").text(error.message);
            $("#error").show();
        });
    }

    function validatePhoneNumber(input) {
    var phoneNumber = input.value;
    var formattedPhoneNumber = '';
    for (var i = 0; i < phoneNumber.length; i++) {
        if (phoneNumber[i] >= '0' && phoneNumber[i] <= '9') {
            formattedPhoneNumber += phoneNumber[i];
        }
    }
    if (formattedPhoneNumber.length !== 10) {
        input.value = '';
        alert('Số điện thoại hợp lệ!');
    } else {
        input.value = formattedPhoneNumber;
    }
}
</script>
