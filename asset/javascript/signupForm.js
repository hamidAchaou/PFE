const form = document.querySelector('.form-Signup');
const firstName = document.querySelector('#first-name');
const lastName = document.querySelector('#last-name');
const city = document.querySelector('#city');
const phoneNumber = document.querySelector('#phone-number');
const dateOfBirth = document.querySelector('#date-of-birth');
const gender = document.querySelector('#gender');
const occupation = document.querySelector('#occupation');
const email = document.querySelector('#email2');
const password = document.querySelector('#password');
const confirmPassword = document.querySelector('#confirm-password');
const submitButton = document.querySelector('#signupSubmit');

// Add event listener to form submit button
submitButton.addEventListener('click', function(event) {
  event.preventDefault(); // prevent form from submitting

  // Validate form fields
  let errors = [];

  if (firstName.value.trim() === '') {
    errors.push('First name is required');
  }

  if (lastName.value.trim() === '') {
    errors.push('Last name is required');
  }

  if (city.value.trim() === '') {
    errors.push('City is required');
  }

  if (phoneNumber.value.trim() === '') {
    errors.push('Phone number is required');
  }

  if (dateOfBirth.value.trim() === '') {
    errors.push('Date of birth is required');
  }

  if (gender.value.trim() === '') {
    errors.push('Gender is required');
  }

  if (occupation.value.trim() === '') {
    errors.push('Occupation is required');
  }

  if (email.value.trim() === '') {
    errors.push('Email is required');
  } else if (!isValidEmail(email.value.trim())) {
    errors.push('Email is invalid');
  }

  if (password.value.trim() === '') {
    errors.push('Password is required');
  }

  if (confirmPassword.value.trim() === '') {
    errors.push('Confirm password is required');
  } else if (password.value.trim() !== confirmPassword.value.trim()) {
    errors.push('Passwords do not match');
  }

  // Show errors or submit form
  if (errors.length > 0) {
    alert(errors.join('\n'));
  } else {
    form.submit();
  }
});

// Function to check if email is valid
function isValidEmail(email) {
  // Regular expression pattern for email validation
  const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return pattern.test(email);
}