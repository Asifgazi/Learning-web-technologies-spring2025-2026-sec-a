let display = document.getElementById("result");

// number and operator button
let buttons = document.getElementsByClassName("btnNum");

for(let i=0;i<buttons.length;i++){
    buttons[i].addEventListener("click", function(){
        display.value += this.innerHTML;
    });
}

// clear button
let clearBtn = document.getElementById("clear");

clearBtn.addEventListener("click", function(){
    display.value = "";
});

// equal button
let equalBtn = document.getElementById("equal");

equalBtn.addEventListener("click", function(){
    try{
        display.value = eval(display.value);
    }catch(e){
        alert("Invalid Expression");
    }
});