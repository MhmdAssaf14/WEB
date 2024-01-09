const nameInput = document.querySelector("#name");
const email = document.querySelector("#email");
const message = document.querySelector("#message");
const success = document.querySelector("#success");
const errorNodes = document.querySelectorAll(".error");

// Validate data
function validateForm() {
  clearMessages();

  let errorFlag = false;

  if (nameInput.value.trim() === "") {
    errorNodes[0].innerText = "Name cannot be blank";
    nameInput.classList.add("error-border");
    errorFlag = true;
  }

  if (!isValidEmail(email.value)) {
    errorNodes[1].innerText = "Invalid email address";
    email.classList.add("error-border");
    errorFlag = true;
  }

  if (message.value.trim() === "") {
    errorNodes[2].innerText = "Please enter a message";
    message.classList.add("error-border");
    errorFlag = true;
  }

  if (errorFlag) {
    return;
  }

  
  // Form is valid, reload the page
  location.reload();
}

// Clear error
function clearMessages() {
  for (let i = 0; i < errorNodes.length; i++) {
    errorNodes[i].innerText = "";
  }
  success.innerText = "";
  nameInput.classList.remove("error-border");
  email.classList.remove("error-border");
  message.classList.remove("error-border");
}

// Check if the email is valid
function isValidEmail(email) {
  let pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return pattern.test(email);
}

// Add event listener to form submission
document.querySelector("form").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent the form submission

  validateForm();
});
