function updateChange() {
    // Get the values from input elements
    var cashGiven = parseFloat(document.getElementById('Cash').value);
    var quantity = parseFloat(document.getElementById('Quantity').value);
    var discount = parseFloat(document.getElementById('Discount').value);
    var discounted = parseFloat(document.getElementById('Discounted').value);
    var pricePerItem = parseFloat(document.getElementById('ItemPrice').value);

    // Calculate the total price
    var totalPrice = quantity * itemPrice;

    // Calculate the change and update the total values
    var change = cashGiven - discounted;
    totalQuantity += quantity;
    totalDiscount += discount;
    totalDiscounted += discounted;

    // Update the input elements with the calculated values
    document.getElementById('Change').value = change.toFixed(2);
    document.getElementById('totalQuantity').value = totalQuantity.toFixed(2);
    document.getElementById('totalDiscount').value = totalDiscount.toFixed(2);
    document.getElementById('totalDiscounted').value = totalDiscounted.toFixed(2);
}
document.querySelectorAll('input[name="discount_option"]').forEach(function (radio) {
    radio.addEventListener('change', updateDiscountAmount);
});