window.onload = function() {
    const sidebarState = localStorage.getItem('sidebarState');
    sidebarState === 'open' ? openNav() : closeNav();

    var sidebar = document.querySelector(".sidebar");
    var sidebarLinks = document.querySelectorAll(".sidebar a");
    var article = document.querySelector("#article_show");
    var nav = document.querySelector("#navbar");
    sidebar.style.transition = "none";
    sidebarLinks.forEach(a => a.style.transition = "none");
    article.style.transition = "none";
    nav.style.transition = "none";
    setTimeout(function () {
        sidebar.style.transition = "";
        sidebarLinks.forEach(a => a.style.transition = "");
        article.style.transition = "";
        nav.style.transition = "";
    }, 100);
};

function toggleNav() {
    const sidebar = document.getElementById("sidebar");
    const sidebarWidth = parseInt(sidebar.style.width, 10);
    sidebarWidth === 250 ? closeNav() : openNav();
}

function setSidebarStyles(width, marginLeft) {
    document.getElementById("sidebar").style.width = width;
    document.getElementById("navbar").style.width = `calc(100% - ${width})`;
    document.getElementById("navbar").style.marginLeft = marginLeft;
    document.getElementById("article_show").style.marginLeft = `${parseInt(marginLeft)}px`;
}

function closeNav() {
    setSidebarStyles("50px", "50px");
    const itens = document.getElementsByClassName("itens");
    const sidebarText = document.getElementsByClassName("sidebar-text");
    for (let i = 0; i < itens.length; i++) {
        itens[i].style.paddingLeft = "15px";
        itens[i].style.paddingTop = "10px";
        itens[i].style.paddingBottom = "10px";
        itens[i].style.margin = "0px";
        itens[i].style.marginTop = "10px";
    }
    for (let i = 0; i < sidebarText.length; i++) {
        sidebarText[i].style.opacity = "0";
    }
    localStorage.setItem('sidebarState', 'closed');
}

function openNav() {
    setSidebarStyles("250px", "250px");
    const itens = document.getElementsByClassName("itens");
    const sidebarText = document.getElementsByClassName("sidebar-text");
    for (let i = 0; i < itens.length; i++) {
        itens[i].style.marginLeft = "25px";
        itens[i].style.paddingLeft = "17px";
        itens[i].style.paddingTop = "10px";
        itens[i].style.paddingBottom = "10px";
        itens[i].style.marginTop = "10px";
    }
    for (let i = 0; i < sidebarText.length; i++) {
        sidebarText[i].style.opacity = "1";
    }
    localStorage.setItem('sidebarState', 'open');
}
