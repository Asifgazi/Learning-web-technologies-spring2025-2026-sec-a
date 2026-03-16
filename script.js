let unitPrice = 1000;

let quantityField = document.getElementById('quantityField');
let totalPrice = document.getElementById('totalPrice');
let message = document.getElementById('message');

quantityField.addEventListener('input', function(){

    let quantity = parseInt(quantityField.value);

    if(quantity < 0){
        quantityField.value = 0;
        message.innerHTML = "Quantity cannot be negative";
        message.style.color = "red";
        quantity = 0;
    }else{
        message.innerHTML = "";
    }

    let total = unitPrice * quantity;

    totalPrice.value = total;

    if(total > 1000){
        alert("You are eligible for gift coupon");
    }

});