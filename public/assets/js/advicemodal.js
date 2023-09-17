// Get the modal and the buttons
const modal = document.getElementById('customModal');
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');



// Function to open the modal
function openModal() {
    modal.style.display = 'flex';
}

// Function to close the modal
function closeModal() {
    modal.style.display = 'none';
}

// Get the productType select element and if other is selected add a text field
var productType = document.getElementById("productType");
var otherReason = document.getElementById("other");
var otherReasonLabel = document.getElementById("other-label");
productType.addEventListener("change", function () {
    // Check if "F" (Other) is selected
    if (productType.value === "F") {
        // Show the otherReason div
        otherReason.value = "";
        otherReason.style.display = "block";
        otherReasonLabel.style.display = "block";
    } else {
        // Hide the otherReason div
        otherReason.value = "none";
        otherReason.style.display = "none";
        otherReasonLabel.style.display = "none";
    }
});

var submitButton = document.getElementById('submitButton');


var form = document.querySelector('form');

form.addEventListener('submit', function (e) {
    if (!form.checkValidity()) {
        e.preventDefault(); // Prevent the form from submitting if it's invalid
        submitButton.disabled = true;
    }
    if (form.checkValidity()) {
        submitButton.disabled = false;
    }
});

// var submitButton = document.getElementById('submitButton');

// // Add a click event listener to the submit button
// submitButton.addEventListener('click', function (e) {
//     e.preventDefault(); // Prevent the form from submitting (reloading the page)

//     // Hide the modal by selecting it by its id
//     var modal = document.getElementById('customModal');
//     modal.style.display = 'none';

//     var form = document.querySelector('form');
//     form.reset();
// });

// Modal
// Event listeners for opening and closing the modal
openModalBtn.addEventListener('click', openModal);
closeModalBtn.addEventListener('click', closeModal);
// Close the modal if the user clicks outside of it
window.addEventListener('click', function (event) {
    if (event.target === modal) {
        closeModal();
    }
});