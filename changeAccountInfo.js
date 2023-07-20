
function func1(){
    let answer = prompt("Please enter your new Username: ");
    document.getElementById("username").innerText = answer;
};          
function func2(){
    let answer = prompt("Please enter your new Password: ");
    document.getElementById("password").innerText = answer;
}
function func3(){
    let answer = prompt("Please enter your new Shipping Address: ");
    document.getElementById("address").innerText = answer;
}

function func4(){
    func1();
    func2();
    func3();
    let answer = prompt("Please enter your new payment method: ");
    document.getElementById("payment").innerText = answer;
}