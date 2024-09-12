
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.edit-btn-residence');
    const modal = document.getElementById('modal-residence');
    const closeBtn = document.querySelector('.close-edit-residence');
    const blotterIdInput = document.getElementById('blotterId');

    // Fetch all data when the page loads
    $.ajax({
        url: 'residence_id.php',
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
            const id = this.getAttribute('data-id-residence');

            // Set the ID in the hidden input field
            blotterIdInput.value = id;
            // Find the data for the selected ID
            const selectedData = window.blotterData.find(item => item.id == id);

            // Populate the form fields with the selected data
            document.getElementById("fullname_").value =  selectedData.fullname;
            document.getElementById("age_").value = selectedData.age;
            document.getElementById('gender_').value = selectedData.gender;
            document.getElementById("inputAddress_").value = selectedData.address;
            document.getElementById("city_").value = selectedData.city;
            document.getElementById("state_").value = selectedData.state;
            document.getElementById("zipcode_").value = selectedData.zipcode;
            document.getElementById('type_residence').value = selectedData.type_of_residence;

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













  
    editButtons_residence.forEach(function (button) {
      button.addEventListener("click", function () {
          var householdId_ = this.getAttribute("data-id-residence");
          var xhr = new XMLHttpRequest();
          xhr.open("GET", "residence-data.php?id=" + householdId_, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var datas = JSON.parse(xhr.responseText);
  
                    if (datas.status === "no_data" || datas.status === "error") {
                        // Handle no data or error case
                    } else {
                        // Update modal content with retrieved data
                        document.getElementById("fullname_").value = datas.fullname;
                        document.getElementById("age_").value = datas.age;
                        document.getElementById('gender').value = datas.gender;
                        document.getElementById("inputAddress_").value = datas.inputAddress;
                        document.getElementById("city_").value = datas.city;
                        document.getElementById("state_").value = datas.state;
                        document.getElementById("zipcode_").value = datas.zipcode;
                        document.getElementById('type_residence').value = datas.residence;
  
                        // Open the modal
                        modal_residence.style.display = "block";
                    }
                }
            };
            xhr.send();
        });
    });
  
    closeBtn_residence.addEventListener("click", function () {
        modal_residence.style.display = "none";
    });
  
    window.addEventListener("click", function (event) {
        if (event.target === modal_residence) {
            modal_residence.style.display = "none";
        }
    });    

  