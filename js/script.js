// Basic client-side form validation
document.addEventListener('DOMContentLoaded', function () {

    // Validate login form
    const loginForm = document.querySelector('#loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function (e) {
            const username = document.querySelector('#username').value.trim();
            const password = document.querySelector('#password').value.trim();

            if (username === '' || password === '') {
                alert('Please fill in both username and password.');
                e.preventDefault(); // Prevent form submission
            }
        });
    }

    // Validate order form
    const orderForm = document.querySelector('#orderForm');
    if (orderForm) {
        orderForm.addEventListener('submit', function (e) {
            const flowerName = document.querySelector('#flowerName').value.trim();
            const quantity = document.querySelector('#quantity').value.trim();
            const address = document.querySelector('#address').value.trim();

            if (flowerName === '' || quantity === '' || address === '') {
                alert('Please fill in all fields to place an order.');
                e.preventDefault(); // Prevent form submission
            }

            if (isNaN(quantity) || quantity <= 0) {
                alert('Please enter a valid quantity.');
                e.preventDefault(); // Prevent form submission
            }
        });
    }
});