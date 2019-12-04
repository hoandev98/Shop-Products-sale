function addCardToCookie(key, value) {
    document.cookie = key + "=" + value + ";";
}

// Hien thi card
window.onload = function () {
    // key la maSP value la so luong
    console.log("ieie");
    this.setCookie("1", "3", 0);
    this.setCookie("2", "10", 0);
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
            showTableCard(data, listQuantity);
        },
        error: function (e) {
            console.log("Fail");
        }
    })
}

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function showTableCard(data, listQuantity) {
    var result = "";
    result += "<table class=\"table\">";
    result += "<thead>";
    result += "<tr>";
    result += "<th class=\"li-product-remove\">remove</th>";
    result += "<th class=\"li-product-thumbnail\">images</th>";
    result += "<th class=\"cart-product-name\">Product</th>";
    result += "<th class=\"li-product-price\">Unit Price</th>";
    result += "<th class=\"li-product-quantity\">Quantity</th>";
    result += "<th class=\"li-product-subtotal\">Total</th>";
    result += "</tr>";
    result += "</thead>";
    result += "<tbody>";
    for (var i = 0; i < data.length; i++) {
        result += "<tr>";
        result += "<td class=\"li-product-remove\"><a href=\"#\"><i class=\"fa fa-times\"></i></a></td>";
        result += "<td class=\"li-product-thumbnail\"><a href=\"#\"><img src=" + data[i].HinhAnh + " alt=\"Li's Product Image\"></a></td>";
        result += "<td class=\"li-product-name\"><a href=\"#\">" + data[i].TenSP + "</a></td>";
        result += "<td class=\"li-product-price\"><span class=\"amount\">$" + data[i].DonGia + "</span></td>";
        result += "<td class=\"quantity\">";
        result += "<label>Quantity</label>";
        result += "<div>";
        result += "<input class=\"input-product-quantity\" value=" + listQuantity[i] + " type=\"number\">";
        result += "</div>";
        result += "</td>";
        result += "<td class=\"product-subtotal\"><span class=\"amount\">$70.00</span></td>";
        result += "</tr>";
    }
    result += "</tbody>";
    result += "</table>";
    // document.getElementById("listcard").innerHTML = result;
    $("#listcard").html(result);
}

