function createNotificationElement() {
  let np = document.getElementById("notification-pane");
  np.style.display = "block";

  // Creating the div element.
  let notification = document.createElement("div");
  notification.setAttribute("class", "notification");

  // Creating div element.
  let content = document.createElement("p");
  content.textContent = "Item added to the cart.";
  notification.appendChild(content);

  np.appendChild(notification);
  console.log("Creating element.");
  return notification;
}

function animateCSS(node, animationName, callback) {
  // var node = document.querySelector(element);
  node.classList.add("animated", animationName);

  function handleAnimationEnd() {
    node.classList.remove("animated", animationName);
    animateCSS(node, "fadeOutRight");
    node.removeEventListener("animationend", handleAnimationEnd);

    // Removing element after 5s.
    setTimeout(() => {
      node.remove();
      console.log("Destroying Element.");
      let parent = document.getElementById("notification-pane");
      if (parent.childElementCount == 0) {
        parent.style.display = "none";
      }
    }, 3000);

    if (typeof callback === "function") callback();
  }

  node.addEventListener("animationend", handleAnimationEnd);
}

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

  // Starting animation.
  let node = createNotificationElement();
  animateCSS(node, "bounceInRight");
}
