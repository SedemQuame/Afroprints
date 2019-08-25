function addToCart() {
  // event.preventDefault();
  event.preventDefault();
  console.log("starting asynchronous callbaclk.");

  let action = event.target.parentNode.action;

  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // document.getElementById("txtHint").innerHTML = this.responseText;
      // Add message that product so so and so has been added to cart.
    }
  };
  xmlhttp.open("GET", action, true);
  xmlhttp.send();
}
