document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modal');
    const closeModal = document.getElementById('closeModal');
    const cartButton = document.getElementById('cartButton');
    const cartDropdown = document.getElementById('cartDropdown');
    let cartCount = 0;

    // Display modal with item details
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('click', () => {
            const details = card.querySelector('p').innerText;
            document.getElementById('modalDetails').innerText = details;
            modal.style.display = 'flex';
        });
    });

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Add item to cart
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', (event) => {
            event.stopPropagation();
            cartCount++;
            document.getElementById('cartCount').innerText = cartCount;

            const itemName = button.previousElementSibling.innerText;
            const itemPrice = button.closest('.card').dataset.price;

            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
                <span>${itemName}</span>
                <span>${itemPrice} XAF</span>
            `;
            cartDropdown.appendChild(cartItem);
        });
    });

    // Show cart dropdown on cart button click
    cartButton.addEventListener('click', () => {
        cartDropdown.style.display = cartDropdown.style.display === 'block' ? 'none' : 'block';
    });
});
