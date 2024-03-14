
/* ----- Search Mini ----- */
function displaySearchMini() {
    let searchIcon = document.querySelector('.cartgroup-search_icon');
    let searchMini = document.querySelector('.searchmini');
    let index = 0;

    searchIcon.addEventListener('click', function() {
        index++;

        if (index % 2 != 0) {
            searchMini.style.display = 'block';
            searchIcon.classList.replace('fa-magnifying-glass', 'fa-xmark');
        } else {
            searchMini.style.display = 'none';
            searchIcon.classList.replace('fa-xmark', 'fa-magnifying-glass');
        }
    });
};
displaySearchMini();


/* -------------- Nav Mobile ---------------- */
function changeNavMobile() {
    let navOpacity = document.querySelector('.opacity-nav');
    let navMobileList = document.querySelector('.header-nav-mobile_list');
    let navMobileicon = document.querySelector('.header-nav-mobile_icon');
    let turnOff = document.querySelector('.header-nav-mobile_item-img_turn-off');
    
    navMobileicon.addEventListener('click', function() {
        navMobileList.style.transform = 'translateX(0)';
        navOpacity.style.display = 'block';
    });

    navOpacity.addEventListener('click', function() {
        navMobileList.style.transform = 'translateX(-290px)';
        navOpacity.style.display = 'none';
    });

    turnOff.addEventListener('click', function() {
        navMobileList.style.transform = 'translateX(-290px)';
        navOpacity.style.display = 'none';
    });
}
changeNavMobile();


function changeNavSmall() {
    let navSmallIcon = document.querySelector('.nav-small-icon');
    let listSmall = document.querySelector('.header-nav-mobile_item-small');
    let icon = document.getElementById('icon-nav-small');

    let index = 0;
    navSmallIcon.addEventListener('click', function() {
        index++;
        if (index % 2 != 0) {
            listSmall.style.height = '146px';
            icon.classList.replace('fa-plus', 'fa-minus');
        } else {
            listSmall.style.height = '0px';
            icon.classList.replace('fa-minus', 'fa-plus');
        }
    });
};
changeNavSmall();



/* --------------- Footer Customer Care ----------------- */
function footerCustomerCare() {
    let footerIconMobile1 = document.querySelector('.footer-content_left-icon-mobile-1');
    let footerIconMobile2 = document.querySelector('.footer-content_left-icon-mobile-2');
    let footerList1 = document.querySelector('.footer-content_left-list--one');
    let footerList2 = document.querySelector('.footer-content_left-list--two');
    let index1 = 0;
    let index2 = 0;

    footerIconMobile1.addEventListener('click', function() {
        index1++;
        
        if (index1 % 2 != 0) {
            footerList1.style.height = '192px';
            footerIconMobile1.classList.replace('fa-chevron-down', 'fa-chevron-up');
        } else {
            footerList1.style.height = '0px';
            footerIconMobile1.classList.replace('fa-chevron-up', 'fa-chevron-down');
        }
    });

    footerIconMobile2.addEventListener('click', function() {
        index2++;
        
        if (index2 % 2 != 0) {
            footerList2.style.height = '192px';
            footerIconMobile2.classList.replace('fa-chevron-down', 'fa-chevron-up');
        } else {
            footerList2.style.height = '0px';
            footerIconMobile2.classList.replace('fa-chevron-up', 'fa-chevron-down');
        }
    });
};
footerCustomerCare();

    

/* ----------- Go To Top --------------- */

function backToTop() {
    let goToTop = document.getElementById('go-to-top');

    goToTop.addEventListener('click', function(event) {
        // document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;

        event.preventDefault();
    });
};
backToTop();



/* ----------------- Go To Top Btn ------------------ */

function goToTopBtn() {
    let goToTop = document.getElementById('go-To-Top-Btn');

    window.addEventListener('scroll', function() {
        if (this.document.documentElement.scrollTop > 200 && this.document.documentElement.scrollWidth > 1300) {
            goToTop.style.display = 'block';
            goToTop.style.opaciti = '1';
        } else {
            goToTop.style.display = 'none';
            goToTop.style.opaciti = '0';
        }   
    });

    goToTop.addEventListener('click', function () {
        document.documentElement.scrollTop = 0;
    });
};
goToTopBtn();

