document.getElementById('togglePasswordVisibility').addEventListener('click', function() {
    // Get the password input field
    var passwordInput = document.getElementById('passwordInput');
    
    // Get the current type of the password input field
    var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    
    // Set the new type for the password input field
    passwordInput.setAttribute('type', type);
    
    // Get the eye icon inside the button
    var eyeIcon = this.querySelector('i');
    
    // Toggle the eye icon class based on the new type
    if (type === 'password') {
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    } else {
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    }
});