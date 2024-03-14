function validateNumberInput(event) {
    // Kiểm tra phím nhấn có phải là số hay không
    if(isNaN(event.key)) {
        // Nếu không phải là số, ngăn chặn sự kiện và không cho nhập ký tự đó vào input
        event.preventDefault();
    }
}



function changeInput() {
    let decrease = document.querySelector('.demo-product_content-nearEnd_left-decrease');
    let increase = document.querySelector('.demo-product_content-nearEnd_left-increase');
    let inputNumber = document.querySelector('.demo-product_content-nearEnd_left-number');
    let inputValue = inputNumber.value;
    
    decrease.addEventListener('click', function() {
        if(!isNaN(inputValue) && inputValue > 1) {
            inputValue--;
            inputNumber.value = inputValue;
        }
    });

    increase.addEventListener('click', function() {
        if(!isNaN(inputValue)) {
            inputValue++;
            inputNumber.value = inputValue;
        }
    });
}
changeInput();
