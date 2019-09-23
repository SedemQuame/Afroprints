// Billing Address Accordion Tab.
let first_name = document.getElementById("first_name");
let last_name = document.getElementById("last_name");
let address = document.getElementById("address");
let address_extra_info = document.getElementById("address_extra_info");
let locale = document.getElementById("locale");
let number_format = document.getElementById("phone_format");
let phone_number = document.getElementById("phone_number");
let email_address = document.getElementById("email_address");
let delivery_date = document.getElementById("estimated_dev_date");

// Shipping Address Accordion Tab.
// Pseudo-Code
// 1. Check, if ship to different destination checkbox is ticked.
// if yes:
//   check the validity of the various inputs.
// else:
//    do nothing.
let diff_first_name = document.getElementById("diff_first_name");
let diff_last_name = document.getElementById("diff_last_name");
let diff_locale = document.getElementById("diff_locale");
let order_notes = document.getElementById("diff_optional_notes");

// Check Out Reviews Accordion Tab.

// funtion to determine state of the various input fields.
function checkField(element) {
  // check if field is valid.
  console.log("Value" + element.value);
}

// Create an array, of the various fields.
let arrOfBillingAddressFields = [
  first_name,
  last_name,
  address,
  locale,
  number_format,
  phone_number,
  email_address
];

let arrOfShippingAddressFields = [
  diff_first_name,
  diff_last_name,
  diff_locale,
  order_notes
];

// Place fields of check reviews here.
let arrOfCheckReviews = [];

function fieldProcessor() {
  let bool1,
    bool2 = null;

  // Refactor code this shit is just SO ugly an unefficient.
  if (
    JSON.stringify([]) ==
    JSON.stringify(
      arrOfBillingAddressFields.filter(element => element.value == "")
    )
  ) {
    bool1 = true;
  } else {
    event.preventDefault();
  }

  if (document.getElementById("diff_shipping_destination").checked) {
    if (
      JSON.stringify([]) ==
      JSON.stringify(
        arrOfShippingAddressFields.filter(element => element.value == "")
      )
    ) {
      bool2 = true;
    } else {
      event.preventDefault();
    }
  }

  // Submit from if no, problems occured
  console.log(bool1);
  console.log(bool2);
  if (bool1 && (bool2 == null || bool2)) {
    // submit form.
    document.getElementById("checkout_form").submit();
  } else {
    event.preventDefault();
    // dsiplay message of unfilled field here.
    document.getElementById("error-alert").style.display = block;
  }
}
