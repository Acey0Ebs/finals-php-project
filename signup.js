const accountTypes = document.querySelectorAll('input[name="account_type"]');

const landlordFields = document.getElementById("landlordFields");

const landlordInputs = landlordFields.querySelectorAll("input");

function updateRegistrationForm() {
  const selectedAccount = document.querySelector(
    'input[name="account_type"]:checked',
  ).value;

  if (selectedAccount === "landlord") {
    landlordFields.hidden = false;

    landlordInputs.forEach((input) => {
      input.required = true;
      input.disabled = false;
    });
  } else {
    landlordFields.hidden = true;

    landlordInputs.forEach((input) => {
      input.required = false;
      input.disabled = true;
      input.value = "";
    });
  }
}

// Listen for account type changes
accountTypes.forEach((radio) => {
  radio.addEventListener("change", updateRegistrationForm);
});

// Initialize the form
updateRegistrationForm();
