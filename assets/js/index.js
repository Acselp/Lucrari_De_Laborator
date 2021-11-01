
$(window).on("load", () => {
    currTheme = localStorage.getItem("currentTheme");
    changeTheme(currTheme);

    currPage = localStorage.getItem("currentPage");
    changeActive(currPage); //Verifica din local storage pagina curenta si se 
                         //face activ linkul respectiv din navbar
})

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
            navBarHoverColor = '#914617';
            break;
        }
        case 'purple': {
            baseColor = '#9946b2'; 
            navBarHoverColor = '#632d73';
            break;
        }
        case 'green': {
            baseColor = '#6fbe51'; 
            navBarHoverColor = '#487d35';
            break;
        }
    }

    $('#nav_bar').css({'background-color': baseColor});
    $('#nav_bar a:hover').css({'background-color': navBarHoverColor});
    $('#header_div a').css({'border-color': baseColor});
    $('#toggle-text-btn').css({
        'border-color': baseColor, 
        'color': baseColor
    });
    $('.burger_menu ul').css({
        'border-color': baseColor, 
    });
}


//Pagina activa navbar
function changeActive(page) {

    localStorage.setItem("currentPage", page);
    $('#menu a').removeClass('active');

    switch(page) {
        case "acasa": {
            $('#a1').addClass('active');
            break;
        }
        case "rezumat": {
            $('#a2').addClass('active');
            break;
        }
        case "original": {
            $('#a3').addClass('active');
            break;
        }
        case "personaje": {
            $('#a4').addClass('active');
            break;
        }
        case "contact": {
            $('#a5').addClass('active');
            break;
        }
    }
}