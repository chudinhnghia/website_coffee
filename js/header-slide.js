/* ------------- Header Slide -------------- */
function changeSlide() {
    const listImage = document.querySelector('.list-images')
    const imgs = document.getElementsByTagName('img')
    var index = 0;
    setInterval(() => {
        if(index == 1) {
            listImage.style.transform = `translateX(0px)`;
            index = 0;
        }else{
            let width = imgs[0].offsetWidth;
            listImage.style.transform = `translateX(${width * -1}px)`;
            index++;
        }
    }, 4000);
}
changeSlide();