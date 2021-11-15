
$(window).on("load", () => {
    currTheme = localStorage.getItem("currentTheme");
    changeTheme(currTheme);

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


//Pagina activa navbar -----------------------------------------------------------

