
// Function to show a modal
function showModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.remove("hidden");
    modal.classList.add("block");
    document.body.style.overflow = "hidden"; // Prevent scrolling when the modal is open
}

// Function to hide a modal
function hideModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.remove("block");
    modal.classList.add("hidden");
    document.body.style.overflow = "auto"; // Allow scrolling when the modal is closed
}

// Event listeners for opening modals
const modalButtons = document.querySelectorAll("[data-modal-target]");
modalButtons.forEach((button) => {
    button.addEventListener("click", function () {
        const targetModalId = button.getAttribute("data-modal-target");
        showModal(targetModalId);
    });
});

// Event listeners for closing modals
const closeModalButtons = document.querySelectorAll("[data-modal-hide]");
closeModalButtons.forEach((button) => {
    button.addEventListener("click", function () {
        const modalIdToHide = button.getAttribute("data-modal-hide");
        hideModal(modalIdToHide);
    });
});

// Close modals when clicking outside of them
const modals = document.querySelectorAll(".modal");
modals.forEach((modal) => {
    modal.addEventListener("click", function (event) {
        if (event.target === modal) {
            hideModal(modal.id);
        }
    });
});