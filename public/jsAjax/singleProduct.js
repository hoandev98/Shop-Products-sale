if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', loadSingleProduct)
} else {
    loadSingleProduct()
}

function loadSingleProduct() {
    var url_string = window.location.href;
    var url = new URL(url_string);
    var id = url.searchParams.get("id");
    console.log(id);
    $.ajax({
        type: "POST",
        url: "/shop/controller/xulysanpham.php",
        dataType: "json",
        timeout: 1500,
        data: {
            request: "getbyid",
            id: id
        },
        success: function (data) {
            console.log(data);
            showSingleProduct(data);
            loadComment(id);
        },
        error: function (e) {
            console.log("Fail");
        }
    })
}

function showSingleProduct(data) {
    result1 = `
    <div class="lg-image">
        <img src="${data.HinhAnh}" alt="product image">
    </div>
    `;
    document.getElementById("showImageLarge").innerHTML = result1;

    result2 = `
    <h2>${data.TenSP}</h2>
    <span class="product-details-ref">Reference: ${data.LSP.TenLSP}</span>
    <div class="rating-box pt-20">
        <ul class="rating rating-with-review-item">
            ${convertToRate(data.SoSao)}
            <span style="color: orange;
                font-size: 13px;
                font-weight: 500;">
                (${data.SoDanhGia})</span>
        </ul>
    </div>
    <div class="price-box pt-20">
        <span class="new-price new-price-2">$${data.DonGia}</span>
    </div>
    
    <div class="product-desc">
        <p>
            <span>${data.Details}</span>
        </p>
    </div>
    `;

    document.getElementById("contentProduct").innerHTML = result2;
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

function addToCard() {
    var url_string = window.location.href;
    var url = new URL(url_string);
    var id = url.searchParams.get("id");
    setCookieSingleProduct("name" + id, "1", 0);
    window.location.replace("shopping-cart.php");
}

function addToWishList() {
    var url_string = window.location.href;
    var url = new URL(url_string);
    var id = url.searchParams.get("id");
    setCookieSingleProduct("wishlist" + id, "", 0);
    window.location.replace("wishlist.php");
}

function setCookieSingleProduct(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}


function loadComment(id) {
    $.ajax({
        type: "POST",
        url: "/shop/controller/xulydanhgia.php",
        dataType: "json",
        timeout: 1500,
        data: {
            request: "getbyid",
            id: id
        },
        success: function (data) {
            showComment(data);
        },
        error: function (e) {
            console.log("Fail");
        }
    })
}

function showComment(data) {
    console.log(data);
    result = ``;
    for (var i = 0; i < data.length; i++) {
        result += `
        <div class="comment-author-infos">
            <span>${data[i].TK.Ho + data[i].TK.Ten}</span>
            <em>${data[i].NgayLap}</em>
        </div>
        <div class="comment-review">
            <span>Vote</span>
            <ul class="rating">
                ${convertToRate(data[i].SoSao)}
            </ul>
        </div>
        
        <div class="comment-details">
            <p>${data[i].BinhLuan}</p>
        </div>
        <hr style="margin: 5px 0px">
        `;
    }

    document.getElementById("commentProduct").innerHTML = result;
}
