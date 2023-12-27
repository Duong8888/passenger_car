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

        // apiKey: "AIzaSyBVp--doBXDD0jWY0Zx5eWpKPaFe7PFWR4",
        // authDomain: "ancient-jigsaw-395304.firebaseapp.com",
        // databaseURL: "https://ancient-jigsaw-395304-default-rtdb.firebaseio.com",
        // projectId: "ancient-jigsaw-395304",
        // storageBucket: "ancient-jigsaw-395304.appspot.com",
        // messagingSenderId: "108708909152",
        // appId: "1:108708909152:web:e8cfdd123c499540147305",
        // measurementId: "G-55T3S1CNGQ"

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
        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
            'size': 'invisible',
            'callback': (response) => {
            }
            }); 
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
        alert('Số điện thoại không hợp lệ!');
    } else {
        input.value = formattedPhoneNumber;
    }
}
</script>


<script>
    var check = true;
    var storedStartTime = '';
    storedStartTime = localStorage.getItem("startTime");
    function createCountdown(startTime, elementId) {
        var endTime = new Date(startTime);
        var paymentTime = {{env('PAYMENT_TIME', 3)}};
        endTime.setMinutes(endTime.getMinutes() + paymentTime);

        var x = setInterval(function () {
            var now = new Date().getTime();
            var distance = endTime - now;
            console.log(check);
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            var countdownElement = document.getElementById(elementId);
            if (countdownElement && check) {
                countdownElement.style.display = 'block';
                countdownElement.innerHTML = `
                <div class="text-center">
                    Thời gian thanh toán còn lại <span id="countdownTime" class="text-red-500">${minutes + ":" + (seconds < 10 ? "0" : "") + seconds}</span>
                    <div class="mt-4">
                        <button onclick="cancelPayment()" class="bg-red-500 text-white px-4 py-2 mr-2 rounded">Hủy hàng</button>
                        <a href="{{route('client.ticket.payment-method')}}" class="bg-[#69cdf1] text-white px-4 py-2 rounded">Thanh toán</a>
                    </div>
                </div>
                `;


                if (distance < 0) {
                    clearInterval(x);
                    countdownElement.style.display = 'none';
                    localStorage.removeItem("startTime");
                    refreshSession();
                }
            }
        }, 1000);
    }

    function refreshSession(){
        $.ajax({
            url: "{{route('clear')}}",
            method: "POST",
            data:{
                _token:$('meta[name="csrf-token"]').attr('content'),
            },
            success:function (data){
                check = false;
                $('#countdownDisplay').hide();
                localStorage.removeItem("startTime");
            },
            error:function (error){
                console.log(error)
            }
        });
    }

    if (storedStartTime) {
        createCountdown(parseInt(storedStartTime), "countdownDisplay");
    }
    function cancelPayment(){
        Swal.fire({
            title: "Hủy vé đang chờ thanh toán?",
            text: "Chúng tôi vẫn đang giữ vé cho bạn. Bạn có muốn hủy đơn hàng hiện tại",
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: "Hủy đơn hàng",
            denyButtonText: `Đóng`
        }).then((result) => {
            if (result.isConfirmed) {
                refreshSession();
                Swal.fire("Saved!", "", "success");
            }
        });
    }

    function cancelPayment2(){
        Swal.fire({
            title: "Hủy vé đang chờ thanh toán?",
            text: "Chúng tôi vẫn đang giữ vé cho bạn. Bạn có muốn hủy đơn hàng hiện tại",
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: "Hủy đơn hàng",
            denyButtonText: `Đóng`
        }).then((result) => {
            if (result.isConfirmed) {
                refreshSession();
                Swal.fire("Saved!", "", "success");
                localStorage.removeItem("startTime");
                window.history.back();
            }
        });
    }
</script>

