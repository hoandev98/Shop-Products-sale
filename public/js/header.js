if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', loadMiniCard)
} else {
    loadMiniCard()
}

function loadMiniCard() {
    // key la maSP value la so luong
    var ca = document.cookie.split(';');
    var listID = [];
    var listQuantity = [];
    for (var i = 0; i < ca.length; i++) {
        listID.push(ca[i].split('=')[0]);
        listQuantity.push(ca[i].split('=')[1]);
    }
    $.ajax({
        type: "POST",
        url: "./../controller/handlingProduct.php",
        dataType: "json",
        timeout: 1500,
        data: {
            request: "getlistbyids",
            listID: listID
        },
        success: function (data) {
            showMiniCard(data, listQuantity);
        },
        error: function (e) {
            console.log("Fail");
        }
    })
}

function showMiniCard(data, listQuantity) {
    var result = "";
    result += `<ul class="minicart-product-list">`;
    var total = 0;
    for (var i = 0; i < data.length; i++) {
        result += `
        <li>
            <a href="single-product.php" class="minicart-product-image">
                <img style="width: 48px; height: 48px" src="${data[i].HinhAnh}" alt="cart products">
            </a>
            <div class="minicart-product-details">
                <h6><a href="single-product.php">${data[i].TenSP}</a></h6>
                <span>$${data[i].DonGia}</span>
            </div>
            <button class="close" title="Remove">
                <i class="fa fa-close"></i>
            </button>
        </li>
        `;
        var s = (data[i].DonGia * listQuantity[i]);
        s = Math.round(s * 100) / 100;
        total += s;
    }
    total = Math.round(total * 100) / 100;
    result += `</ul>`;
    document.getElementsByClassName("show-minicard")[0].innerHTML = result;
    document.getElementsByClassName("quantity-minicard")[0].innerText = data.length;
    document.getElementsByClassName("total-minicard")[0].innerHTML = '$' + total;
    document.getElementsByClassName("subtotal-minicard")[0].innerHTML = '$' + total;
}