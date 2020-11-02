var items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
]

var listBarang = document.getElementById("listBarang")
var tampung = ""
for(var i=0; i<items.length;i++){
    tampung += '    <div class="card" style="width: 18rem;">
    <img src="${items[i][4]}" class="card-img-top" alt="${items[i][4]}">
    <div class="card-body">
        <h5 class="card-title" id="itemName">${items[i][1]}</h5>
        <p class="card-text" id="itemDesc">${items[i][3]}</p>
        <p class="card-text">${items[i][2]}</p>
        <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
    </div>
</div>
    '
}