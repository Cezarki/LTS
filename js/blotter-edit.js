document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.edit-btn-blotter');
    const modal = document.getElementById('blotter-modal');
    const closeBtn = document.querySelector('.close-btn');
    const blotterIdInput = document.getElementById('blotterId');

    // Fetch all data when the page loads
    $.ajax({
        url: 'blotter_id.php',
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
            const id = this.getAttribute('data-id-blotter');

            // Set the ID in the hidden input field
            blotterIdInput.value = id;
            // Find the data for the selected ID
            const selectedData = window.blotterData.find(item => item.id == id);

            // Populate the form fields with the selected data
            document.getElementById('status_2').value = selectedData.status;
            document.getElementById('incidentType_2').value = selectedData.incident;
            document.getElementById('dateTimeReported_2').value = selectedData.date_time_reported;
            document.getElementById('dateTimeIncident_2').value = selectedData.date_time_incident;
            document.getElementById('dateRecorded_2').value = selectedData.date_record;

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
