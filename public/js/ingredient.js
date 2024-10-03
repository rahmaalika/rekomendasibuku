ingredient.js

console.log("p");
document.addEventListener("DOMContentLoaded", function () {
    const ingridients = document.getElementById("ingredient");
    console.log(ingridients); // Output: Hello World!
    // var queries = [`<div class="row gap-2 id=(ingredient_1)">
    //     <div class="col-md-3">
    //     <input type="text" name="ingredients[]" placeholder="bahan">
    //     </div>
    //     <div class="col-md-2">
    //     <input type="number" name="quantity[]" class="mb-1" placeholder="Jumlah">
    //     <input type="text" name="units[]" placeholder="Satuan">
    //     </div>
    //     <div class="col">
    //     <button id="delete" type="button" onclick="remove(1)">Delete</button>
    //     </div>
    //     </div>`];
    // console.log(ingridients.innerHTML);
    // Variabel untuk menghitung jumlah input yang ditambahkan
let inputCount = 0;

window.load = function load(id){
    id? inputCount = id : 0;
    console.log(inputCount);

}
// Fungsi untuk menambah field input
 window.addField = function addField() {
    inputCount++; // Tambah jumlah input
    const container = document.getElementById('ingredient');

    // Buat elemen div baru sebagai pembungkus input
    const newDiv = document.createElement('div');
    newDiv.setAttribute('id', `inputGroup${inputCount}`);
    newDiv.setAttribute('class', 'row')
    const ingredientContainer = document.createElement('div');
    ingredientContainer.setAttribute('id', `ingredientContainer${inputCount}`);
    ingredientContainer.setAttribute('class', 'col-md-3')
    const quantityUnitContainer = document.createElement('div');
    quantityUnitContainer.setAttribute('id', `quantityUnitContainer${inputCount}`);
    quantityUnitContainer.setAttribute('class', 'col')
    const removeContainer = document.createElement('div');
    removeContainer.setAttribute('id', `removeContainer${inputCount}`);
    removeContainer.setAttribute('class', 'col')

    // Buat input field baru
    const ingredient = document.createElement('input');
    ingredient.setAttribute('type', 'text');
    ingredient.setAttribute('name', 'ingredients[]');
    ingredient.setAttribute('placeholder', 'Ingredient');
    // Buat input field baru
    const quantity = document.createElement('input');
    quantity.setAttribute('type', 'text');
    quantity.setAttribute('name', 'quantity[]');
    quantity.setAttribute('placeholder', 'Quantity');
    const units = document.createElement('input');
    units.setAttribute('type', 'text');
    units.setAttribute('name', 'units[]');
    units.setAttribute('placeholder', 'Units');

    // Buat tombol untuk menghapus input
    const removeButton = document.createElement('button');
    removeButton.setAttribute('type', 'button');
    removeButton.innerText = 'Hapus';
    removeButton.setAttribute('onclick', `removeField(${inputCount})`);

    // Tambahkan input dan tombol hapus ke dalam div baru
    ingredientContainer.appendChild(ingredient);
    quantityUnitContainer.appendChild(quantity);
    quantityUnitContainer.appendChild(units);
    removeContainer.appendChild(removeButton);
    newDiv.appendChild(ingredientContainer);
    newDiv.appendChild(quantityUnitContainer);
    newDiv.appendChild(removeContainer);
    newDiv.appendChild(removeContainer);

    // Tambahkan div baru ke dalam container
    console.log(newDiv);

    container.appendChild(newDiv);
}

// Fungsi untuk menghapus field input
window.removeField = function removeField(id) {
    const fieldToRemove = document.getElementById(`inputGroup${id}`);
    fieldToRemove.remove(); // Hapus elemen input berdasarkan ID
}

});
