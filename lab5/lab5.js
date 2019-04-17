array = [document.getElementById("picture1"),document.getElementById("picture2")];

function f1() {
    array[0].style.display ="";
}//输出一行内容

function f2() {
    var  i ;
    const count = 1;
    for  (i = 0; i <= count ; i++){
        array[i].style.display ="";
    }
}//循环输出两行

const amount1 = 1000;
const amount2 = 700;
var amount = document.getElementById("amount");
var tax = document.getElementById("tax");
var shipping = document.getElementById("shipping");
var total = document.getElementById("total");


function f3() {
    amount.value = amount1 + amount2;
    tax.value = 0.1 * amount.value;
    if(amount.value >= 1000){
        shipping.value = 0;
    }
    else shipping.value = 40;
    total.value = amount.value + tax.value + shipping.value;
    document.getElementById("amount").innerHTML = amount.value;
    document.getElementById("tax").innerHTML = tax.value;
    document.getElementById("shipping").innerHTML = shipping.value;
    document.getElementById("total").innerHTML = total.value;
}//计算