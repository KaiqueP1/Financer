<div class="c-loader"></div>

<meta http-equiv="refresh" content="4; home.php">

<!-- For Demo Purpose-->
<div class="container py-5">
    <header class="text-center text-white mb-5 py-5">
        <h1 class="display-4">Bootstrap Spinner</h1>
        <p class="font-italic mb-0">Create a nice loading window with an animated spinner. </p>
        <p class="font-italic">Snippet By <a href="https://bootstrapious.com" class="text-white">
            <u>Bootstrapious</u></a>
        </p>
    </header>
    <div class="text-white">
        <p class="lead">Visit
            <a href="https://loading.io/css/" class="text-white">
                <u>Pure CSS Loaders</u>
            </a> and pick a nice spinner.</p>
        <p class="lead">Wrap your spinner in a full width/height window that covers all your page content.</p>
        <p class="lead">Using JavaScript, remove this loading window when the page is fully loaded.</p>
        <a id="reload" href="" class="btn btn-outline-light px-5 text-uppercase font-weight-bold rounded-pill">Reload Page</a>
    </div>
</div>

<!-- Loading Spinner Wrapper-->
<div class="loader text-center">
    <div class="loader-inner">

<img class="logo" src="http://financer.great-site.net/dwl/Completa-Preta.png">

        <!-- Animated Spinner -->
        <div class="lds-roller mb-3">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <!-- Spinner Description Text [For Demo Purpose]-->
        <br>
        <h4 class="text-uppercase font-weight-bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loading ...</h4>

                <!-- <p class="center">CARREGANDO, POR FAVOR AGUARDE ...</p> -->


        <p class="font-italic text-muted"><strong class="countdown text-dark font-weight-bold"> </strong></p>

    </div>
</div>

<style>
/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

/* Spinner Wrapper */
.logo{
width: 350px;  
margin-left: 6px;  
}

P { text-align: center }

.loader {
    width: 100vw;
    height: 100vh;
    background: #fff;
    position: fixed;
    top: 0;
    left: 0;
    overflow: hidden;
}

.loader-inner {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    overflow: hidden;
}


/* Spinner */
.lds-roller {
    display: center;
    position: relative;
    width: 64px;
    height: 64px;
    left: 45%;
}
.lds-roller div {
    animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
    transform-origin: 32px 32px;
}
.lds-roller div:after {
    content: " ";
    display: block;
    position: absolute;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #333;
    margin: -3px 0 0 -3px;
}
.lds-roller div:nth-child(1) {
    animation-delay: -0.036s;
}
.lds-roller div:nth-child(1):after {
    top: 50px;
    left: 50px;
}
.lds-roller div:nth-child(2) {
    animation-delay: -0.072s;
}
.lds-roller div:nth-child(2):after {
    top: 54px;
    left: 45px;
}
.lds-roller div:nth-child(3) {
    animation-delay: -0.108s;
}
.lds-roller div:nth-child(3):after {
    top: 57px;
    left: 39px;
}
.lds-roller div:nth-child(4) {
    animation-delay: -0.144s;
}
.lds-roller div:nth-child(4):after {
    top: 58px;
    left: 32px;
}
.lds-roller div:nth-child(5) {
    animation-delay: -0.18s;
}
.lds-roller div:nth-child(5):after {
    top: 57px;
    left: 25px;
}
.lds-roller div:nth-child(6) {
    animation-delay: -0.216s;
}
.lds-roller div:nth-child(6):after {
    top: 54px;
    left: 19px;
}
.lds-roller div:nth-child(7) {
    animation-delay: -0.252s;
}
.lds-roller div:nth-child(7):after {
    top: 50px;
    left: 14px;
}
.lds-roller div:nth-child(8) {
    animation-delay: -0.288s;
}
.lds-roller div:nth-child(8):after {
    top: 45px;
    left: 10px;
}
@keyframes lds-roller {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}



/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/

body {
    min-height: 100vh;
    background-color: #de6262;
    background-image: linear-gradient(147deg, #de6262 0%, #ffb88c 100%);
    overflow: hidden;
}

p.lead {
    text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.1)
}

.btn-outline-light:hover, .btn-outline-light:focus {
    color: #de6262 !important;
  
}
</style>

<script>

$(document).ready(function(){
    // HIDE LOADING SPINNER WHEN PAGE IS LOADED [7000msec after the page is loaded]
    $(window).on('load', function () {
        setTimeout(function () {
            $('.loader').hide(300);
        }, 7000);
    });



    // FOR DEMO PURPOSE
    $(window).on('load', function () {
        var loadingCounter = setInterval(function () {
            var count = parseInt($('.countdown').html());
            if (count !== 0) {
                $('.countdown').html(count - 1);
            } else {
                clearInterval();
            }
        }, 1000);
    });
    $('#reload').on('click', function (e) {
        e.preventDefault();
        location.reload();
    });
});
</script>
