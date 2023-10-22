function updateInputBoxes(checkboxId, itemName, itemPrice) {
    var checkbox = document.getElementById(checkboxId);
    var itemNameInput = document.getElementById('ItemName');
    var itemPriceInput = document.getElementById('ItemPrice');

    if (checkbox.checked) {
        itemNameInput.value = itemName;
        itemPriceInput.value = itemPrice;
        itemPrice = parseFloat(price);
    } else {
        itemNameInput.value = '';
        itemPriceInput.value = '';
        itemPrice = 0;
    }
}