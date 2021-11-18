
$(window).on("load", () => {
    currTheme = localStorage.getItem("currentTheme");
    changeTheme(currTheme);
})

$(document).ready(function () {
    $("#regSubmitBtn").click(() => {
        regFormValidation();
    });

    $("#submitBtn").click(() => {
        logFormValidation();
    });

    $("#contactSubmitBtn").click(() => {
        contactFormValidation()
    });
});

//Afisarea si ascunderea textului la apasarea butonului
function toggleTextBtn(btn) {
    if($("#toggle-tale-text").css('display') == 'none'){
        $(btn).html('Citeste mai putin');
    }
    else{
        $(btn).html('Citeste mai mult');
    }
    $("#toggle-tale-text").slideToggle(1000);
}


//Meniul burger din nav-bar
isBurgerActive = false;
function toggleBurgerMenu(btn) {
    
    if(!isBurgerActive) {
        $(btn).css({'background-color': 'rgba(0, 0, 0, 0.4)'});
        $(".burger_menu").show(200);
        isBurgerActive = true;
    }
    else {
        $(btn).css({'background-color': 'rgba(0, 0, 0, 0.0)'});
        $(".burger_menu").hide(200);
        isBurgerActive = false;
    } 
}


//------------Themes-----------------
function changeTheme(theme) {
    localStorage.setItem("currentTheme", theme);

    let baseColor;
    let navBarHoverColor;

    switch(theme){
        case 'orange': {
            baseColor = '#f07427'; 
            break;
        }
        case 'purple': {
            baseColor = '#9946b2'; 
            break;
        }
        case 'green': {
            baseColor = '#6fbe51'; 
            break;
        }
    }

    $('#nav_bar').css({'background-color': baseColor});
    $('#header_div a').css({'border-color': baseColor});
    $('#toggle-text-btn').css({
        'border-color': baseColor, 
        'color': baseColor
    });
    $('.burger_menu ul').css({
        'border-color': baseColor, 
    });
}

//Registration request----------------------------------

function regRequest() {
    let uname = $("#unameId").val();
    let email = $("#emailId").val();
    let pwd = $("#pwdId").val();

    $.ajax({
        type: "POST",
        url: "http://localhost/TWEB/regAction.php",
        data: ({"username": uname, "email": email, "password": pwd}),
        dataType: "html",
        success: (response) => {
            $("#regPage").html(response);
        },
        error: () => {
            alert("Something went wrong :(");
        }
    })
}

//reg validation -----------------------------------------------------------

function regFormValidation() {
    let $form = $("#regForm");
    $form.validate({
        wrapper: "div",
        rules: {
            unameReg: {
                required: true,
                minlength: 3,
                maxlength: 20
            },
            emailReg: {
                required: true,
                email: true
            },
            pwdReg: {
                required: true,
                minlength: 8,
                maxlength: 20
            },
            rpwdReg: {
                required: true,
                equalTo: "#pwdReg"
            },
            submitHandler: () => {
                regRequest()
            },
        }
    })
}


function loginRequest() {
    let uname = $("#unameLog").val();
    let pwd = $("#pwdLog").val();

    $.ajax({
        type: "POST",
        url: "http://localhost/TWEB/loginAction.php",
        data: {"username": uname, "password": pwd},
        dataType: "html",
        success: (response) => {
            
        },
        error: () => {
            alert("Something went wrong. :(");
        }
    })
}

//Login form validation------------------------------------------------

function logFormValidation() {
    let $form = $("#loginForm");
    $form.validate({
        wrapper: "div",
        rules: {
            unameLog: {required: true},
            pwdLog: {required: true}
        },
        submitHandler: () => {
            loginRequest();
        }
    });
}


//Contact request --------------------------------------------------

function contactRequest() {
    let fname = $("#contactFname");
    let lname = $("#contactLname");
    let email = $("#contactEmail");
    let subj = $("#contactSubject");

    $.ajax({
        type: "POST",
        url: "http://localhost/TWEB/contactAction.php",
        data: ({"constactFname": fname, "contactLname": lname, "contactEmail": email, "contactSubject": subj}),
        dataType: "html",
        success: (response) => {
            $("#regPage").html(response);
        },
        error: () => {
            alert("Error :(");
        }
    })
}

//Contact form validation-----------------------------------------------

function contactFormValidation() {
    let form = $("#contactForm");
    form.validate({
        wrapper: "div",
        rules: {
            contactFname: {
                required: true
            },
            contactLname: {
                required: true
            },
            contactEmail: {
                required: true,
                email: true
            },
            contactSubject: {
                required: true
            },
            submitHandler: () => {
                contactRequest();
            }
        }
    });
}