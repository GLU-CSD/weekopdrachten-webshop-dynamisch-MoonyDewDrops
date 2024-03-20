
//This creates a variable for the slider, and the value it changes.  
var slider = document.getElementById("myRange");
var output = document.getElementById("prijs");
//What the text that displays the price displays. This sets it to the slider value 
output.innerHTML = slider.value;

//when it changes, the value (so also the text) changes
slider.oninput = function() {
  output.innerHTML = this.value;
}

//creates counter for cart
var ItemCounter = 0;

//gets the id of the button
const counterDiv = document.getElementById("ItemCounter");

//adds the numbers like a pro
function addProduct(){
  ItemCounter++;
  counterDiv.innerHTML = ItemCounter;
}

//the function to send it to the site
function link() {
  //window.location.href = "https://u230062.gluwebsite.nl/web/WebshopJulia/";
  window.location.href = "index.php";

}

function test(){
  alert('aloha');
}


function goToLink() {
  window.location.href = "form.php";
}

function productPage() {
  window.location.href = "productPage.php";
}



//maakt een var voor het grote plaatje aan en linkt em naar de class
//let GrootPlaatje = document.getElementsByiD("GrootPlaatjesClass");

//waarschijnlijk veranderen naar n onclick="changePicture" ding want dit is te ingewikkelt voor zo iets simpels voor mijn brein
//GrootPlaatje.addEventListener("click", () => {

//maakt var aan voor het kleine plaatje en stopt de pictures d'r in
  //let klein = document.getElementsByClassName("ClassOfSmallPictures");

  //GrootPlaatje.src = klein.src;
//})


