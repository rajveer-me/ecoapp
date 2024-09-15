// Ensure the DOM is fully loaded before executing scripts
document.addEventListener('DOMContentLoaded', () => {
    "use strict";
  
    // Correct selectors
    const signUpButton = document.querySelector('#signUp');
    const signInButton = document.querySelector('#signIn');
    const container = document.querySelector('.log-container');
  
    console.log('Sign Up Button:', signUpButton);  // Should log the button element or null
    console.log('Sign In Button:', signInButton);  // Should log the button element or null
    console.log('Container:', container);          // Should log the container element or null
  
    if (signUpButton && signInButton && container) {
      signUpButton.addEventListener('click', () => {
        console.log('Sign Up button clicked'); // Debug log
        container.classList.add("right-panel-active");
      });
  
      signInButton.addEventListener('click', () => {
        console.log('Sign In button clicked'); // Debug log
        container.classList.remove("right-panel-active");
      });
    } else {
      console.error("One or more elements are not found");
    }
  });
  