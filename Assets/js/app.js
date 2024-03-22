
//creates counter for cart
var ItemCounter = 0;

//gets the id of the button
const counterDiv = document.getElementById("ItemCounter");

//adds the numbers like a pro
function addProduct(){
  ItemCounter++;
  counterDiv.innerHTML = ItemCounter;
  localStorage.setItem('amountProduce', ItemCounter);
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
  //window.location.href = "https://u230062.gluwebsite.nl/web/WebshopJulia/";
  window.location.href = "index.php";

}

function goToLink() {
  window.location.href = "form.php";
}

function productPage() {
  window.location.href = "productPage.php";
}

function clearCart(){
  localStorage.clear();
}

// //maakt een var voor het grote plaatje aan en linkt em naar de class
// let GrootPlaatje = document.getElementById("bigImage");

// // waarschijnlijk veranderen naar n onclick="changePicture" ding want dit is te ingewikkelt voor zo iets simpels voor mijn brein
// GrootPlaatje.addEventListener("click", () => {}

//function changePicture(){

// // maakt var aan voor het kleine plaatje en stopt de pictures d'r in
//   let klein = document.getElementsByClassName("tiniestImages");

//   GrootPlaatje.src = klein.src;
// })

// localStorage.clear();




