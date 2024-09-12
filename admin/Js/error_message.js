document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    var formData = new FormData(this);

    // Send form data via AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "log-in.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Response from PHP file
            var response = xhr.responseText;
            document.getElementById("errorMessage").innerText = response;
            
            // Check if the response is a success message
            if (response.trim() === "Success") {
                // Redirect to admin_dashboard.php
                window.location.href = "admin_dashboard.php";

            } else if (response.trim() === "Guest") {
                // Handle the unsuccessful case (optional)
                // Maybe display an error message or perform some other action
                window.location.href = "upload.php";
            } else {
                // Handle unexpected responses (optional)
                console.log("Unexpected response:", response.trim());
            }
        }
    };
    xhr.send(formData);
});
