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

// Payment Tabs.
let CCPayment = document.getElementById("credit_card_information");
let MomoPayment = document.getElementById("mobile_money_information");
let CryptoPayment = document.getElementById("crypto_currency_information");

let radios = document.forms.checkout_form.elements.payment_method;

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
//
// CCPayment.addEventListener("click", () => {
//   alert("credit car payment clicked");
// });
//
// MomoPayment.addEventListener("click", () => {
//   alert("mobile money payment clicked");
// });
//
// CryptoPayment.addEventListener("click", () => {
//   alert("crypto Currency payment clicked");
// });

function displayPaymentOption(event) {
  selectedRadioBtn = event.target;
  if (selectedRadioBtn.value == "credit_card") {
    CCPayment.style.display = "block";
    MomoPayment.style.display = "none";
    CryptoPayment.style.display = "none";
  } else if (selectedRadioBtn.value == "mobile_money") {
    MomoPayment.style.display = "block";
    CCPayment.style.display = "none";
    CryptoPayment.style.display = "none";
  } else if (selectedRadioBtn.value == "cyrto_currency") {
    CryptoPayment.style.display = "block";
    CCPayment.style.display = "none";
    MomoPayment.style.display = "none";
  } else {
    alert("Invalid Option.Please try again");
  }
}
