var SoLuongTrangHienThi = 4;
var ProductsPerPage = 4;
var DanhSachSanPham = [];
var DataCompany = [];
var CurrentFilters = [];

window.onload = function() {
    // khoiTao();

    // autocomplete cho khung tim kiem
    // autocomplete(document.getElementById('search-box'), list_products);

    // thêm tags (từ khóa) vào khung tìm kiếm
    var tags = ["Samsung", "iPhone", "Coolpad", "Oppo", "Mobi"];
    for (var t of tags) addTags(t, "index.php?search=" + t);

    // =================== web 2 tìm nâng cao ================
    // Thêm hình vào banner
    // setupBanner();

    // Thêm danh sách hãng điện thoại
    // setupCompany();

    // slider chọn khoảng giá
    // $("#demoSlider").ionRangeSlider({
    //     type: "double",
    //     grid: true,
    //     min: 0,
    //     max: 50,
    //     from: 0,
    //     to: 50,
    //     step: 0.5,
    //     drag_interval: true,
    //     postfix: " triệu",
    //     prettify_enabled: true,
    //     prettify_separator: ",",
    //     values_separator: " →   ",
    //     onFinish: function(data) {
    //         filtersAjax(createFilters('price', data.from * 1E6 + "-" + data.to * 1E6));
    //     },
    // });
    // ==================== End ===========================

    // Thêm sản phẩm vào trang
    var filters = getFilterFromURL();
    if (filters.length) { // có filter
        filtersAjax(filters);

    } else { // ko có filter : trang chính mặc định sẽ hiển thị các sp hot, ...
        hienThiKhungSanPhamMacDinh();
    }

    // // Thêm chọn mức giá
    // addPricesRange(0, 2000000);
    // addPricesRange(2000000, 4000000);
    // addPricesRange(4000000, 7000000);
    // addPricesRange(7000000, 13000000);
    // addPricesRange(13000000, 0);

    // // Thêm chọn khuyến mãi
    // addPromotion('Nothing');
    // addPromotion('giamgia');
    // addPromotion('tragop');
    // addPromotion('moiramat');
    // addPromotion('giareonline');

    // // Thêm chọn số sao
    // addStarFilter(0);
    // addStarFilter(1);
    // addStarFilter(2);
    // addStarFilter(3);
    // addStarFilter(4);
    // addStarFilter(5);

    // // Thêm chọn sắp xếp
    // addSortFilter('asc', 'DonGia', 'Giá tăng dần');
    // addSortFilter('des', 'DonGia', 'Giá giảm dần');
    // addSortFilter('asc', 'SoSao', 'Sao tăng dần');
    // addSortFilter('des', 'SoSao', 'Sao giảm dần');
    // addSortFilter('asc', 'SoDanhGia', 'Đánh giá tăng dần');
    // addSortFilter('des', 'SoDanhGia', 'Đánh giá giảm dần');
    // addSortFilter('asc', 'TenSP', 'Tên A-Z');
    // addSortFilter('des', 'TenSP', 'Tên Z-A');
};

function hienThiKhungSanPhamMacDinh() {

    $('.product-active').html('');

    var soLuong = (window.innerWidth < 1200 ? 4 : 5); // màn hình nhỏ thì hiển thị 4 sp, to thì hiển thị 5

    // Các màu
    var yellow_red = ['#ff9c00', '#ec1f1f'];
    var blue = ['#42bcf4', '#004c70'];
    var green = ['#5de272', '#007012'];

    // Thêm các khung sản phẩm
    addKhungSanPham('NỔI BẬT NHẤT', yellow_red, ['star=0', 'sort=SoDanhGia-desc', 'page=0'], soLuong);
    // addKhungSanPham('SẢN PHẨM MỚI', blue, ['promo=moiramat', 'sort=SoDanhGia-desc', 'page=0'], soLuong);
    // addKhungSanPham('TRẢ GÓP 0%', yellow_red, ['promo=tragop', 'page=0'], soLuong);
    // addKhungSanPham('GIÁ SỐC ONLINE', green, ['promo=giareonline', 'page=0'], soLuong);
    // addKhungSanPham('GIẢM GIÁ LỚN', yellow_red, ['promo=giamgia', 'page=0'], soLuong);
    // addKhungSanPham('GIÁ RẺ CHO MỌI NHÀ', green, ['price=0-3000000', 'sort=DonGia-asc', 'page=0'], soLuong);
}
function getFilterFromURL() { // tách và trả về mảng bộ lọc trên url
    var fullLocation = window.location.href;
    fullLocation = decodeURIComponent(fullLocation);
    var dauHoi = fullLocation.split('?'); // tách theo dấu ?

    if (dauHoi[1]) {
        var dauVa = dauHoi[1].split('&');
        return dauVa;
    }

    return [];
}

// Thêm sản phẩm vào các khung sản phẩm
function addKhungSanPham(tenKhung, color, filters, len) {
    // convert color to code
    var gradient = `background-image: linear-gradient(120deg, ` + color[0] + ` 0%, ` + color[1] + ` 50%, ` + color[0] + ` 100%);`
    var borderColor = `border-color: ` + color[0];
    var borderA = ` border-left: 2px solid ` + color[0] + `; border-right: 2px solid ` + color[0] + `;`;

    // mở tag
    var s = `<div class="khungSanPham" style="` + borderColor + `">
                <h3 class="tenKhung" style="` + gradient + `">* ` + tenKhung + ` *</h3>
                <div class="listSpTrongKhung flexContain" data-tenkhung="` + tenKhung + `">
                    <div class="loader"></div>
                </div>
                <a class="xemTatCa" onclick='filtersAjax(`+JSON.stringify(filters)+`)' style="` + borderA + `" data-tenkhung="` + tenKhung + `">
                </a>
              </div> <hr>`;


    // thêm khung vào contain-khung
    document.getElementsByClassName('product-active')[0].innerHTML += s;

    // lấy dữ liệu cho vào khung
    filtersAjax(filters, (data) => {
        // thêm các <li> (sản phẩm) vào tag
        var s1 = "";
        var spResult = data;
        if (spResult.length < len) len = spResult.length;

        for (var i = 0; i < len; i++) {
            s1 += addToWeb(spResult[i], null, true);
            // truyền vào 'true' để trả về chuỗi rồi gán vào s
        }

        $("div.listSpTrongKhung[data-tenkhung='" + tenKhung + "']").html(s1);
        $("a.xemTatCa[data-tenkhung='" + tenKhung + "']").html("Xem tất cả " + spResult.length + " sản phẩm");
    })
}
function filtersAjax(filters, callback) {
    if(filters.length == 0) {
        removeAllFilters();
        return;
    }

    if (!callback) { // ko có call back -> mặc định là thêm vào contain-products
        // hiển thị list sản phẩm
        $(".contain-products").css("display", "block");
        $(".contain-khungSanPham").css("display", "none");
        $(".contain-products li.sanPham").remove(); // xóa các sản phẩm hiện tại
        $(".loader").css("display", "block");
    }
    $.ajax({
        type: "POST",
        url: "controller/handlingProduct.php",
        dataType: "json",
        timeout: 1500, // sau 1.5 giây mà không phản hồi thì dừng => hiện lỗi
        data: {
            request: "phanTich_Filters",
            filters: filters
        },
        success: function(data, status, xhr) {

            if (callback) callback(data);
            else {
                addProductsFromList(data, filters);
                addAllChoosedFilter(filters);
                pushState(filters);
                $(".loader").css("display", "none");
            }
        },
        error: function(e) {
            Swal.fire({
                type: "error",
                title: "Lỗi lấy dữ liệu sản phẩm filters (trangchu.js > filtersAjax)",
                html: e.responseText
            });
        }
    })
}
function addToWeb(p, ele, returnString) {
    // Chuyển star sang dạng tag html
    var rating = "";
    if (p.SoDanhGia >= 0) {
        for (var i = 1; i <= 5; i++) {
            if (i <= p.SoSao) {
                rating += `<i class="fa fa-star"></i>`
            } else {
                rating += `<i class="fa fa-star-o"></i>`
            }
        }
        rating += `<span>` + p.SoDanhGia + ` đánh giá</span>`;
    }

    // Chuyển giá tiền sang dạng tag html
    var giaTri = parseInt(p.DonGia);
    var giaTrikhuyenMai = parseInt(p.KM.GiaTriKM);
    var giaTriSauKM = giaTri - giaTrikhuyenMai;

    var pricediv, khuyenmaidiv;

    if (p.KM.LoaiKM == "GiaReOnline") {

        khuyenmaidiv = promoToWeb(p.KM.LoaiKM, giaTriSauKM);
        pricediv = `<strong>` + giaTriSauKM.toLocaleString() + `&#8363;</strong>
                <span>` + giaTri.toLocaleString() + `&#8363;</span>`;
    } else {

        khuyenmaidiv = promoToWeb(p.KM.LoaiKM, giaTrikhuyenMai);
        pricediv = `<strong>` + giaTri.toLocaleString() + `&#8363;</strong>`;
    }

    // tách theo dấu ' ' vào gắn lại bằng dấu '-', code này giúp bỏ hết khoảng trắng và thay vào bằng dấu '-'.
    // Tạo link tới chi tiết sản phẩm, chuyển tất cả ' ' thành '-'
    var chitietSp = 'chitietsanpham.php?' + p.MaSP;

    // Cho mọi thứ vào tag <li>... </li>
    var newLi =
        `<li class="sanPham">
        <a href="` + chitietSp + `">
            <img src="` + p.HinhAnh + `" alt="">
            <h3>` + p.TenSP + `</h3>
            <div class="price">
                ` + pricediv + `
            </div>
            <div class="ratingresult">
                ` + rating + `
            </div>
            ` + (promoToWeb(p.KM.LoaiKM, giaTrikhuyenMai)) + `
            <div class="tooltip">
                <button class="themvaogio" onclick="return themVaoGioHang('` + p.MaSP + `', '` + p.TenSP + `');">
                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                    +
                </button>
            </div>
        </a>
    </li>`;

    if (returnString) return newLi;

    // Thêm tag <li> vừa tạo vào <ul> homeproduct (mặc định) , hoặc tag ele truyền vào
    var products = ele || document.getElementById('products');
    products.innerHTML += newLi;
}
// Thêm từ khóa tìm kiếm
function addTags(nameTag, link) {
    var new_tag = `<a href=` + link + `>` + nameTag + `</a>`;

    // Thêm <a> vừa tạo vào khung tìm kiếm
    var khung_tags = document.getElementsByClassName('tags')[0];
    // khung_tags.innerHTML += new_tag;
}
