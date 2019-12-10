if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', loadWishList)
} else {
    loadWishList()
}

function loadWishList() {
    var ca = document.cookie.split(';');
    var listID = [];
    var idWishList = "";
    for (var i = 0; i < ca.length; i++) {
        idWishList = ca[i].split('=')[0];
        if (idWishList.includes("wishlist")){
            listID.push(idWishList.replace("wishlist", ""));
        }
    }
    console.log(listID);
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
            showTableWishList(data);
        },
        error: function (e) {
            console.log("Fail");
            showTableWishList([]);
        }
    })
}

function showTableWishList(data) {
    console.log(data);
    var result = `
    <table class="table">
    <thead>
        <tr>
            <th class="li-product-remove">remove</th>
            <th class="li-product-thumbnail">images</th>
            <th class="cart-product-name">Product</th>
            <th class="li-product-price">Unit Price</th>
            <th class="li-product-stock-status">Stock Status</th>
            <th class="li-product-add-cart">Add to cart</th>
        </tr>
    </thead>
    <tbody>
    `;
    for (var i = 0; i < data.length; i++) {
        result += `
        <tr>
            <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
            <td class="li-product-thumbnail"><a href="#"><img src="${data[i].HinhAnh}" style="width: 150px; height: 150px" alt=""></a></td>
            <td class="li-product-name"><a href="#">${data[i].TenSP}</a></td>
            <td class="li-product-price"><span class="amount">$${data[i].DonGia}</span></td>
            <td class="li-product-stock-status"><span class="in-stock">in stock</span></td>
            <td class="li-product-add-cart"><a href="#">add to cart</a></td>
        </tr>
        `;
    }
    result += `</tbody>
    </table>`;

    document.getElementById("list-wishlist").innerHTML = result;
}
