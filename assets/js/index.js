
$(document).ready(function () {
    currTheme = localStorage.getItem("currentTheme");
    changeTheme(currTheme);

    $("#regBtn").click(() => {
        regFormValidation();
    });

    $("#loginBtn").click(() => {
        logFormValidation();
    });

    $("#contactBtn").click(() => {
        contactFormValidation();
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
    let uname = $("input[name='unameReg']").val();
    let email = $("input[name='emailReg']").val();
    let pwd = $("input[name='pwdReg']").val();

    $.ajax({
        type: "POST",
        url: "http://localhost/TWEB/regAction.php",
        data: {username: uname, email: email, password: pwd},
        dataType: "json",
        success: (response) => {
            //response = JSON.parse(res);
            if(!response.errors) {
                let htmlMessage = "<div class='container'><div class='serverData'><div>Your data has been successfully sent.<img src='./img/ok.png' alt='Successfuly sent' width='52px' height='52px'><br>Now you can pretend you are signed in :)</div><br>Your data:<br>Username: " + response["unsername"] + "<br> Email: " + response["email"] + "<br> Password: " + response["password"] + "<br> </div></div>";
                $("#regPage").html(htmlMessage);
            }
            else {
                let htmlMessage = "<div class='container'><div class='serverData'><div>The server hasn't been comitted your data,<img src='./img/notok.png' alt='Server don't accept wrong data.'><br>because of the following errors:<br><br></div>";
                $("#regPage").html(htmlMessage);

                response.errorList.forEach(() => {
                    let htmlError = "<span style='color: red; font-family: Lato; font-weight: bold; font-size='14pt''>$err</span></div></div>";
                    $("#regPage").html(htmlError);
                })
            }
        },
        error: () => {
            alert("Something went wrong :(");
        }
    })
}

//reg validation -----------------------------------------------------------

function regFormValidation() {
    let form = $("form[name='regForm']");
    form.validate({
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
                equalTo: "input[name='pwdReg']"
            }
        },
        submitHandler: () => {
            regRequest();
        }
    })
}

function loginRequest() {
    let uname = $("input[name='unameLog']").val();
    let pwd = $("input[name='pwdLog']").val();

    $.ajax({
        type: "POST",
        url: "http://localhost/TWEB/loginAction.php",
        data: {username: uname, password: pwd},
        dataType: "json",
        success: (response) => {
            //response = JSON.parse(res);
            if(!response.errors) {
                let htmlMessage = "<div class='container'><div class='serverData'><div>Your data has been successfully sent.<img src='./img/ok.png' alt='Successfuly sent' width='52px' height='52px'><br>Now you can pretend you are logged in :)</div><br>Your data:<br>Username: " + response["unsername"] + "<br> Password: " + response["password"] + "<br> </div></div>";
                $("#loginPage").html(htmlMessage);
            }
            else {
                let htmlMessage = "<div class='container'><div class='serverData'><div>The server hasn't been comitted your data,<img src='./img/notok.png' alt='Server don't accept wrong data.'><br>because of the following errors:<br><br></div>";
                $("#loginPage").html(htmlMessage);

                response.errorList.forEach((el) => {
                    let htmlError = "<span style='color: red; font-family: Lato; font-weight: bold; font-size='14pt''>" + el + "</span></div></div>";
                    $("#loginPage").html(htmlError);
                })
            }
        },
        error: () => {
            alert("Something went wrong. :(");
        }
    })
}

//Login form validation------------------------------------------------

function logFormValidation() {
    let form = $("form[name='loginForm'");
    form.validate({
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
    const fname = $('input[name="contactFname"]').val();
    const lname = $('input[name="contactLname"]').val();
    const email = $('input[name="contactEmail"]').val();
    const subj = $('textarea[name="contactSubject"]').val();



    $.ajax({
        type: "POST",
        url: "http://localhost/TWEB/contactAction.php",
        data: {contactFname: fname, contactLname: lname, contactEmail: email, contactSubj: subj},
        dataType: "json",
        success: (response) => {
            if(!response.errors) {
                let htmlMessage = "<div class='container'><div class='serverData'><div>Your data has been successfully sent.<img src='./img/ok.png' alt='Successfuly sent' width='52px' height='52px'><br>Now you can pretend you are signed in :)</div><br>Your data:<br>Fname: " + response.fname + "<br> Lname: " + response.lname + "<br> Email: " + response.email + "<br>Subject: " + response.subj + "<br> </div></div>";
                $("#contactPage").html(htmlMessage);
            }
            else {
                let htmlMessage = "<div class='container'><div class='serverData'><div>The server hasn't been comitted your data,<img src='./img/notok.png' alt='Server don't accept wrong data.'><br>because of the following errors:<br><br></div>";
                $("#contactPage").html(htmlMessage);

                response.errorList.forEach(() => {
                    let htmlError = "<span style='color: red; font-family: Lato; font-weight: bold; font-size='14pt''>$err</span></div></div>";
                    $("#contactPage").html(htmlError);
                })
            }
        },
        error: () => {
            alert("Error :(");
        }
    });
    return false;
}

//Contact form validation-----------------------------------------------

function contactFormValidation() {
    let $form2 = $("#contactForm");
    $form2.validate({
        wrapper: "div",
        debug: false,
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
            }
        },
        submitHandler: () => {
            contactRequest();
        }
    });
}
