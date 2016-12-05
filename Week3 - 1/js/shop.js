var greeting;
    var time = new Date().getHours();
    if (time <= 10) {
        greeting = "Good morning";
    } else if (time <= 17) {
        greeting = "Good afternoon";
    } else {
        greeting = "Good evening";
    }
document.getElementById("greet").innerHTML = greeting;


var customerName = "Mintra";
var price = 10;
var quantity = 2;
var totalPrice = 0;
var prices = [10, 10, 199, 159];
var productsText = "";
totalPrice = (prices[0] + prices[1] + prices[2] + prices[3]) * 0.75;


var customerElement = document.getElementById("customer-name");
customerElement.textContent = customerName;

var totalPriceElement = document.getElementById("total-price");
totalPriceElement.textContent = totalPrice;

var products = [
	"Brooklyn T-Shirt White",
	"Brooklyn T-Shirt Black",
	"Apple Watch",
	"Android Phone"
];


var productsElement = document.getElementById("product-list");

productsText += "<li class='list-group-item'><span class='badge'>$"+ prices[0]+"</span>" + products[0] + "</li>";

productsText += "<li class='list-group-item'><span class='badge'>$"+ prices[1]+"</span>" + products[1] + "</li>";

productsText += "<li class='list-group-item'><span class='badge'>$"+ prices[2]+"</span>" + products[2] + "</li>";

productsText += "<li class='list-group-item'><span class='badge'>$"+ prices[3]+"</span>" + products[3] + "</li>";

productsElement.innerHTML = productsText;

