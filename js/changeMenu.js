/* ------------- Menu ------------------ */
function changeMenu() {
    const linkTab1 = document.querySelector('.menu-coffee_link--tab1');
    const linkTab2 = document.querySelector('.menu-coffee_link--tab2');
    const linkTab3 = document.querySelector('.menu-coffee_link--tab3');
    const linkTab4 = document.querySelector('.menu-coffee_link--tab4');

    const contentTab1 = document.getElementById('content-tabb1');
    const contentTab2 = document.getElementById('content-tabb2');
    const contentTab3 = document.getElementById('content-tabb3');
    const contentTab4 = document.getElementById('content-tabb4');

    if(linkTab1) {
        linkTab1.addEventListener("click", function(event){
            linkTab1.classList.add('menu-coffee_link--active');
            linkTab2.classList.remove('menu-coffee_link--active');
            linkTab3.classList.remove('menu-coffee_link--active');
            linkTab4.classList.remove('menu-coffee_link--active');

            contentTab1.style.display = 'block';
            contentTab2.style.display = 'none';
            contentTab3.style.display = 'none';
            contentTab4.style.display = 'none';

            event.preventDefault();
        });
    }

    if(linkTab2) {
        linkTab2.addEventListener("click", function(event){
            linkTab1.classList.remove('menu-coffee_link--active');
            linkTab2.classList.add('menu-coffee_link--active');
            linkTab3.classList.remove('menu-coffee_link--active');
            linkTab4.classList.remove('menu-coffee_link--active');

            contentTab1.style.display = 'none';
            contentTab2.style.display = 'block';
            contentTab3.style.display = 'none';
            contentTab4.style.display = 'none';

            event.preventDefault();
        });
    }

    if(linkTab3) {
        linkTab3.addEventListener("click", function(event){
            linkTab1.classList.remove('menu-coffee_link--active');
            linkTab2.classList.remove('menu-coffee_link--active');
            linkTab3.classList.add('menu-coffee_link--active');
            linkTab4.classList.remove('menu-coffee_link--active');

            contentTab1.style.display = 'none';
            contentTab2.style.display = 'none';
            contentTab3.style.display = 'block';
            contentTab4.style.display = 'none';

            event.preventDefault();
        });
    }

    if(linkTab4) {
        linkTab4.addEventListener("click", function(event){
            linkTab1.classList.remove('menu-coffee_link--active');
            linkTab2.classList.remove('menu-coffee_link--active');
            linkTab3.classList.remove('menu-coffee_link--active');
            linkTab4.classList.add('menu-coffee_link--active');

            contentTab1.style.display = 'none';
            contentTab2.style.display = 'none';
            contentTab3.style.display = 'none';
            contentTab4.style.display = 'block';

            event.preventDefault();
        });
    }
};
// changeMenu();

/* ----- Menu Mobile ----- */
function changeMenuMobile() {
    let menuCoffeLinkTab1 = document.querySelector('.menu-coffee_link--tab1');
    let menuCoffeLinkTab2 = document.querySelector('.menu-coffee_link--tab2');
    let menuCoffeLinkTab3 = document.querySelector('.menu-coffee_link--tab3');
    let menuCoffeLinkTab4 = document.querySelector('.menu-coffee_link--tab4');
    let menuCoffeTextMobile = document.querySelector('.menu-coffee_text-mobile');

    let iconMobile = document.querySelector('.menu-coffee_icon-mobile');
    let menuCoffeeList = document.querySelector('.menu-coffee_list');
    let index = 0;
    
    if (document.documentElement.scrollWidth <= 970) {
        iconMobile.addEventListener('click', function() {
            index++;
            if (index % 2 != 0) {
                menuCoffeeList.style.height = '150px';
                menuCoffeeList.style.padding = '10px 0';
            } else {
                menuCoffeeList.style.height = '0';
                menuCoffeeList.style.padding = '0';
            }
        });
    
        menuCoffeLinkTab1.addEventListener('click', function() {
            menuCoffeTextMobile.innerText = 'Cà phê thế giới';
    
            menuCoffeeList.style.height = '0';
            menuCoffeeList.style.padding = '0';
            index = 0;
        });
    
        menuCoffeLinkTab2.addEventListener('click', function() {
            menuCoffeTextMobile.innerText = 'Cà phê pha việt';
            
            menuCoffeeList.style.height = '0';
            menuCoffeeList.style.padding = '0';
    
            index = 0;
        });
    
        menuCoffeLinkTab3.addEventListener('click', function() {
            menuCoffeTextMobile.innerText = 'Cà phê cảm hứng';
    
            menuCoffeeList.style.height = '0';
            menuCoffeeList.style.padding = '0';
    
            index = 0;
        });
    
        menuCoffeLinkTab4.addEventListener('click', function() {
            menuCoffeTextMobile.innerText = 'đồ uống';
    
            menuCoffeeList.style.height = '0';
            menuCoffeeList.style.padding = '0';
    
            index = 0;
        });
    };
};
changeMenuMobile();