document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.edit-btn');
    const modal = document.getElementById('modal-edit-form');
    const closeBtn = document.querySelector('.close-content');
    const blotterIdInput = document.getElementById('blotterId');

    // Fetch all data when the page loads
    $.ajax({
        url: 'household_id.php',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            // Store the fetched data globally for later use
            window.blotterData = data;
        },
        error: function (xhr, status, error) {
            console.error('Error fetching all data:', error);
        }
    });

    editButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');

            // Set the ID in the hidden input field
            blotterIdInput.value = id;
            // Find the data for the selected ID
            const selectedData = window.blotterData.find(item => item.id == id);

            // Populate the form fields with the selected data
            document.getElementById("name").value = selectedData.fullname;
            document.getElementById("age").value = selectedData.age;
            document.getElementById("address").value = selectedData.address;
            document.getElementById("gender").value = selectedData.gender;
            document.getElementById("relationship").value = selectedData.relationship;
            document.getElementById("occupation_").value = selectedData.occupation;

            // Show the modal
            modal.style.display = "block";
        });
    });

    closeBtn.addEventListener("click", function () {
        modal.style.display = "none";
    });

    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});
