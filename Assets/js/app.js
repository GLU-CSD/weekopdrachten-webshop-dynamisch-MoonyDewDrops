// $_SESSION["ProductInCart"] = ItemCounter;

//creates counter for cart
var ItemCounter = 0;

//gets the id of the button
const counterDiv = document.getElementById("ItemCounter");

//adds the numbers like a pro
function addProduct(){
  ItemCounter++;
  counterDiv.innerHTML = ItemCounter;
  localStorage.setItem('amountProduce', ItemCounter); //change this to session
}

// Retrieve the saved value from localStorage when the page loads
document.addEventListener('DOMContentLoaded', (event) => {
  // Check if the stored value exists
  if(localStorage.getItem('amountProduce')) {
    ItemCounter = parseInt(localStorage.getItem('amountProduce'), 10);
    counterDiv.innerHTML = ItemCounter;
  }
});

//the function to send it to the site
function link() {
  window.location.href = "index.php";

}

//other things to send it to site
function goToLink() {
  window.location.href = "form.php";
}

function productPage() {
  window.location.href = "productPage.php";
}

//to clear cart/storage for testing
function clearCart(){
  localStorage.clear();
}


