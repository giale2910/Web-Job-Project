const giae71 = 350000;
const giae72 = 350000;
const count = document.querySelectorAll('.currency-unit').length;
window.onload = function() {
    document.getElementById("currency-active").innerHTML = "VNĐ";
    document.getElementById("gia-e71").innerHTML = giae71;
    document.getElementById("gia-e72").innerHTML = giae72;
    var currencyunitvnd = document.getElementsByClassName("currency-unit");
    for (let i = 0; i <= count; i++) {
        currencyunitvnd[i].innerHTML = "VNĐ";
    }
}

function changeUnittoVND() {
    document.getElementById("currency-active").innerHTML = "VNĐ";
    document.getElementById("gia-e71").innerHTML = giae71;
    document.getElementById("gia-e72").innerHTML = giae72;
    var currencyunitvnd = document.getElementsByClassName("currency-unit");
    for (let i = 0; i <= count; i++) {
        currencyunitvnd[i].innerHTML = "VNĐ";
    }
}

function changeUnittoUSD() {
    document.getElementById("currency-active").innerHTML = "USD";
    const giae71usd = (giae71 / 23000).toFixed(2);
    const giae72usd = (giae72 / 23000).toFixed(2);
    document.getElementById("gia-e71").innerHTML = giae71usd;
    document.getElementById("gia-e72").innerHTML = giae72usd;
    var currencyunitusd = document.getElementsByClassName("currency-unit");
    for (let i = 0; i <= count; i++) {
        currencyunitusd[i].innerHTML = "$";
    }
}


{
    /* <div class="product" data-id-product="1">
        <img src="" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
    </div> */
}

var products = document.getElementsByClassName("product");
products.forEach(product => {
    product.addEventListener("click", async(e) => {
        var idProduct = product.dataset.id;
        var productInfo = await fetch("getProductInfo", { id: idProduct }).json();
        var newProductEle = document.createElement("div");
        newProductEle.innerHTML = productInfo.name;


        document.getElementById("card").appendChild(newProductEle);
    })
})