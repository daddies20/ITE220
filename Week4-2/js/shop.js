var shop = {
  customerName: "Mintra",
  totalPrice: 0,
  products: [
  	"Brooklyn T-Shirt White",
  	"Brooklyn T-Shirt Black",
  	"Apple Watch",
  	"Android Phone"
  ],
  prices: [10, 10, 199, 159],

displayCustomerName: function () {
  var customerElement = document.getElementById("customer-name");
  customerElement.textContent = this.customerName;
},

displayProductList: function () {
  var productsText = "";
  var productsElement = document.getElementById("product-list");

  productsText += "<li class='list-group-item'><span class='badge'>$" + this.prices[0]+"</span>" + this.products[0] + "</li>";
    productsText += "<li class='list-group-item'><span class='badge'>$" + this.prices[1]+"</span>" + this.products[1] + "</li>";
      productsText += "<li class='list-group-item'><span class='badge'>$" + this.prices[2]+"</span>" + this.products[2] + "</li>";
        productsText += "<li class='list-group-item'><span class='badge'>$" + this.prices[3]+"</span>" + this.products[3] + "</li>";

        productsElement.innerHTML = productsText;
},

calculateTotalPrice: function() {
  return (this.prices[0] + this.prices[1] + this.prices[2] + this.prices[3]) * 0.75;
},

displayTotalPrice: function(){
  this.totalPrice = this.calculateTotalPrice();
  var totalPriceElement = document.getElementById("total-price");
  totalPriceElement.textContent = this.totalPrice;
},
displayGreeting: function(){
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

}
}

shop.displayCustomerName();
shop.displayProductList();
shop.displayTotalPrice();
shop.displayGreeting();
// var greeting;
//     var time = new Date().getHours();
//     if (time <= 10) {
//         greeting = "Good morning";
//     } else if (time <= 17) {
//         greeting = "Good afternoon";
//     } else {
//         greeting = "Good evening";
//     }
// document.getElementById("greet").innerHTML = greeting;
//
//
// var customerName = "Mintra";
// var price = 10;
// var quantity = 2;
// var totalPrice = 0;
// var prices = [10, 10, 199, 159];
// var productsText = "";
// totalPrice = (prices[0] + prices[1] + prices[2] + prices[3]) * 0.75;
//
//
// var customerElement = document.getElementById("customer-name");
// customerElement.textContent = customerName;
//
// var totalPriceElement = document.getElementById("total-price");
// totalPriceElement.textContent = totalPrice;
//
// var products = [
// 	"Brooklyn T-Shirt White",
// 	"Brooklyn T-Shirt Black",
// 	"Apple Watch",
// 	"Android Phone"
// ];
//
//
// var productsElement = document.getElementById("product-list");
//
// productsText += "<li class='list-group-item'><span class='badge'>$"+ prices[0]+"</span>" + products[0] + "</li>";
//
// productsText += "<li class='list-group-item'><span class='badge'>$"+ prices[1]+"</span>" + products[1] + "</li>";
//
// productsText += "<li class='list-group-item'><span class='badge'>$"+ prices[2]+"</span>" + products[2] + "</li>";
//
// productsText += "<li class='list-group-item'><span class='badge'>$"+ prices[3]+"</span>" + products[3] + "</li>";
//
// productsElement.innerHTML = productsText;
//
