console.log("Js for the admin page.");

document
  .getElementById("image_upload")
  .addEventListener("click", function(event) {
    document.getElementById("img_element").src = document.getElementById(
      "image_upload"
    ).value;
  });
