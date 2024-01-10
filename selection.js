function showPayment() {
  document.getElementById("car-selection").style.display = "none";
  document.getElementById("payment-form").style.display = "block";
}

function showFinalCost() {
  document.getElementById("payment-form").style.display = "none";
  document.getElementById("final-cost").style.display = "block";
}



function changeImage() {
  var carType = document.getElementById("car-type").value;
  var carImage = document.getElementById("car-image");

 carImage.src = carType +".jpg";
}



