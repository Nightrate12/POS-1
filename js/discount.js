function updateDiscountAmount() {
    var discountOption = document.querySelector('input[name="discount_option"]:checked').value;
    var quantity = parseFloat(document.getElementById('Quantity').value);
    var pricePerItem = parseFloat(document.getElementById('ItemPrice').value);

    // Calculate the discount amount based on the selected option
    var discountAmount = 0;
    if (discountOption === "senior_citizen") {
        discountAmount = 0.3 * pricePerItem; // 30% discount
    } else if (discountOption === "employee_discount") {
        discountAmount = 0.15 * pricePerItem; // 15% discount
    } else if (discountOption === "with_disc_card") {
        discountAmount = 0.2 * pricePerItem; // 20% discount
    }

    var totalPrice = quantity * pricePerItem;
    var discounted = totalPrice - discountAmount;

    // Update totalDiscounted and totalDiscount
    totalDiscounted += discounted; // Update total discounted given
    totalDiscount += discountAmount; // Update total discount

    document.getElementById('Discount').value = discountAmount.toFixed(2);
    document.getElementById('Discounted').value = discounted.toFixed(2);
    document.getElementById('totalDiscounted').value = totalDiscounted.toFixed(2); // Display the updated total discounted given
    document.getElementById('totalDiscount').value = totalDiscount.toFixed(2); // Display the updated total discount
}
document.querySelectorAll('input[name="discount_option"]').forEach(function (radio) {
    radio.addEventListener('change', updateDiscountAmount);
});