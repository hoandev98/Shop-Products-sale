if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', loadShop)
} else {
    loadShop()
}

// Hien thi products
function loadShop() {
    $.ajax({
        type: "POST",
        url: "./../controller/handlingProduct.php",
        dataType: "json",
        timeout: 1500,
        data: {
            request: "getall"
        },
        success: function (data) {
            showListProducts(data);
        },
        error: function (e) {
            console.log("Fail");
        }
    })
}

function showListProducts(data) {
    var listProducts = document.getElementsByClassName("list-products")[0];
    var result = "";
    for (var i = 0; i < data.length; i++) {
        var id = data[i].MaSP;
        var name = data[i].TenSP;
        var price = data[i].DonGia;
        var rate = parseFloat(data[i].SoSao);
        var img = data[i].HinhAnh;
        
        var product = `
            <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                <div class="single-product-wrap">
                    <div class="product-image">
                        <a href="single-product.php">
                            <img src="${img}" alt="Li's Product Image">
                        </a>
                        <span class="sticker">New</span>
                    </div>
                    <div class="product_desc">
                        <div class="product_desc_info">
                            <div class="product-review">
                                <h5 class="manufacturer">
                                    <a href="product-details.php">Graphic Corner</a>
                                </h5>
                                <div class="rating-box">
                                    <ul class="rating">
                                        ${convertToRate(rate)}
                                    </ul>
                                </div>
                            </div>
                            <h4><a class="product_name" href="single-product.php">${name}</a></h4>
                            <div class="price-box">
                                <span class="new-price">$${price}</span>
                            </div>
                        </div>
                        <div class="add-actions">
                            <ul class="add-actions-link">
                                <li style="cursor: pointer" class="add-cart active"><a onClick="addToCard(${id})">Add to cart</a></li>
                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                <li><a class="links-details" href="wishlist.php"><i class="fa fa-heart-o"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        `;
        result += product;
    }
    listProducts.innerHTML = result;
}

function convertToRate(num) {
    var rating = "";
    if (num >= 0) {
        for (var i = 1; i <= 5; i++) {
            if (i <= num) {
                rating += `<li><i class="fa fa-star-o"></i></li>`
            } else {
                rating += `<li class="no-star"><i class="fa fa-star-o"></i></li>`
            }
        }
    }
    return rating;
}

function addToCard(id) {
    if (setCookie(id, "1", 0)) {
        alert("Đặt hàng thành công!");
        alert("IEIE");
        loadMiniCard();
    } else {
        alert("Sản phầm đã tồn tại trong giỏ hàng!");
    }
}

function setCookie(name, value, days) {
    // check co trong cokkie chua
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        if (ca[i].split('=')[0].trim() === name.toString()) {
            return false;
        }
    }

    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
    return true;
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