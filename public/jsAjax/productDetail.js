// var nameProduct, maProduct; // Tên sản phẩm trong trang này, 
// // // là biến toàn cục để có thể dùng ở bát cứ đâu trong trang
// // // không cần tính toán lấy tên từ url nhiều lần

// window.addEventListener("load", function() 
// {
//     loadProductDetail();
// });

// function loadProductDetail() {
//     // khoiTao();

//     // // thêm tags (từ khóa) vào khung tìm kiếm
//     // var tags = ["Samsung", "iPhone", "Huawei", "Oppo", "Mobi"];
//     // for (var t of tags) addTags(t, "index.php?search=" + t, true);

// // ======================= Web 2 =======================
// // function phanTichURL_Web2() {
//     maProduct = window.location.href.split('?')[1]; // lấy tên
//     if (!maProduct) return; // nếu không tìm thấy tên thì thoát hàm

//     $.ajax({
//         type: "POST",
//         url: "http://localhost:88/shop/controller/xulysanpham.php",
//         dataType: "json",
//         timeout: 3500, // sau 1.5 giây mà không phản hồi thì dừng => hiện lỗi
//         data: {
//             request: "getbyid",
//             id: maProduct
//         },
//         success: function(data, status, xhr) {
//             // console.log(data);
//             addChiTietToWeb(data);
//             nameProduct = data.TenSP;
//             return true;
//         },
//         error: function(e) {
//             Swal.fire({
//                 type: "error",
//                 title: "Lỗi lấy sản phẩm (productDetail.js > phanTichURL_Web2)",
//                 html: e.responseText
//             });
//         }
//     })
// }

// function addChiTietToWeb(p) {
//     var divChiTiet = document.getElementById('contentProductDetail');
//     document.title = p.TenSP + ' - Lipuma Shop';
//     document.getElementById("nameProducts").innerHTML += p.TenSP;
//     document.getElementById("product-details-ref").innerHTML += "reference: " + `<a href='http://localhost:88/shop/index.php?search=` + p.LSP.TenLSP +  `'>`+p.LSP.TenLSP +`</a>` ;
//     console.log(p.SoSao);
//     // Cập nhật sao
//     var rating = "";
//     if (p.SoSao >= 0) {
//         rating = getRateStar(p.SoSao);
//         rating += `<span> ` + p.SoDanhGia + ` đánh giá </span>`;
//     }
//     document.getElementById("ratingPageDetail").innerHTML += rating;
//     console.log(p);
//     // Cập nhật giá + label khuyến mãi
//     var area_price = document.getElementById('area_price');
//     // Chuyển giá tiền sang dạng tag html
//     var giaTri = parseInt(p.DonGia);
//     var giaTrikhuyenMai = parseInt(p.KM.GiaTriKM);
//     var giaTriSauKM = giaTri - giaTrikhuyenMai;

//     var pricediv, khuyenmaidiv;

//     if (p.KM.LoaiKM == "GiaReOnline") {

//         area_price.innerHTML = `<strong>` + giaTriSauKM.toLocaleString() + `&#8363;</strong>
//                 <span>` + giaTri.toLocaleString() + `&#8363;</span>`;

//         area_price.innerHTML += promoToWeb(p.KM.LoaiKM, giaTriSauKM);
//     } else {
//         document.getElementsByClassName('ship')[0].style.display = ''; // hiển thị 'giao hàng trong 1 giờ'
        
//         khuyenmaidiv = promoToWeb(p.KM.LoaiKM, giaTrikhuyenMai);
//         area_price.innerHTML = `<strong>` + giaTri.toLocaleString() + `&#8363;</strong>` + khuyenmaidiv;
//     }


//     // Cập nhật thông số
//     var info = document.getElementsByClassName('product-desc')[0];
//     var s = addThongSo('Details', p.Details);
//     info.innerHTML = s;

//     // Cập nhật hình
//     var listImage = p.HinhAnh.split(",", 7);
//     console.log(listImage[0]);
//     var hinh1 = divChiTiet.getElementsByClassName('lg-image1')[0];
//     hinh1 = hinh1.getElementsByTagName('img')[0];
//     hinh1.src = listImage[0];
//     //thumnail
//     var hinh1 = divChiTiet.getElementsByClassName('sm-image1')[0];
//     hinh1 = hinh1.getElementsByTagName('img')[0];
//     hinh1.src = listImage[0];

//     var hinh2 = divChiTiet.getElementsByClassName('lg-image2')[0];
//     hinh2 = hinh2.getElementsByTagName('img')[0];
//     hinh2.src = listImage[1];
//     //thumnail
//     var hinh2 = divChiTiet.getElementsByClassName('sm-image2')[0];
//     hinh2 = hinh2.getElementsByTagName('img')[0];
//     hinh2.src = listImage[1];

//     var hinh3 = divChiTiet.getElementsByClassName('lg-image3')[0];
//     hinh3 = hinh3.getElementsByTagName('img')[0];
//     hinh3.src = listImage[2];
//     //thumnail
//     var hinh3 = divChiTiet.getElementsByClassName('sm-image3')[0];
//     hinh3 = hinh3.getElementsByTagName('img')[0];
//     hinh3.src = listImage[2];


    
// //     // Test bình luận
// //     refreshBinhLuan();
// // }

// // function checkGuiBinhLuan() {
// //     getCurrentUser((user) => {
// //         if(user == null) {
// //             Swal.fire({
// //                 title: 'Xin chào!',
// //                 text: 'Bạn cần đăng nhập để binh luận',
// //                 type: 'error',
// //                 grow: 'row',
// //                 confirmButtonText: 'Đăng nhập',
// //                 cancelButtonText: 'Trở về',
// //                 showCancelButton: true
// //             }).then((result) => {
// //                 if (result.value) {
// //                     showTaiKhoan(true);
// //                 }
// //             })
// //         } else {
// //             guiBinhLuan(user);
// //         }

// //     }, (error) => {
// //         Swal.fire({
// //             title: 'Lỗi!',
// //             text: 'Có lỗi khi đăng đánh giá',
// //             type: 'error',
// //             grow: 'row'
// //         })
// //     })
// // }

// // function guiBinhLuan(nguoidung) {
// //     var soSao = $("input[name='star']:checked").val();
// //     var binhLuan = $("#inpBinhLuan").val();

// //     if(!soSao) {
// //         Swal.fire({
// //             title: 'Thiếu!',
// //             text: 'Bạn vui lòng đánh số sao',
// //             type: 'warning',
// //             grow: 'row'
// //         })
// //         return;
// //     }

// //     if(!binhLuan) {
// //         Swal.fire({
// //             title: 'Thiếu!',
// //             text: 'Bạn vui lòng để lại bình luận',
// //             type: 'warning',
// //             grow: 'row'
// //         })
// //         $("#inpBinhLuan")[0].focus();
// //         return;
// //     }


// //     $.ajax({
// //         type: "POST",
// //         url: "php/xulydanhgia.php",
// //         dataType: "json",
// //         timeout: 1500, // sau 1.5 giây mà không phản hồi thì dừng => hiện lỗi
// //         data: {
// //             request: "thembinhluan",
// //             masp: maProduct,
// //             mand: nguoidung.MaND,
// //             sosao: soSao,
// //             binhluan: binhLuan,
// //             thoigian: new Date().toMysqlFormat()
// //         },
// //         success: function(data, status, xhr) {
// //             $("#inpBinhLuan").val("");
// //             refreshBinhLuan();
// //         },
// //         error: function(e) {
// //             console.log(e);
// //         }
// //     })
// // }

// // function refreshBinhLuan() {
// //     $.ajax({
// //         type: "POST",
// //         url: "php/xulydanhgia.php",
// //         dataType: "json",
// //         timeout: 1500, // sau 1.5 giây mà không phản hồi thì dừng => hiện lỗi
// //         data: {
// //             request: "getbinhluan",
// //             masp: maProduct
// //         },
// //         success: function(data, status, xhr) {
// //             var div = document.getElementsByClassName("comment-content")[0];
// //             div.innerHTML = "";
// //             for(var b of data) {
// //                 div.innerHTML += createComment(b.ND.TaiKhoan, b.BinhLuan, getRateStar(b.SoSao), b.NgayLap);
// //             }
// //         },
// //         error: function(e) {
// //             console.log(e);
// //         }
// //     })
// // }

// // =====================================================
// }
// function getRateStar(num) {
//     var result = "";
//     for (var i = 1; i <= 5; i++) {
//         if (i <= num) {
//             result += `<i class="fa fa-star"></i>`
//         } else {
//             result += `<i class="fa fa-star-o"></i>`
//         }
//     }
//     return result;
// }


// function addThongSo(ten, giatri) {
//     return `<li>
//                 <p>` + ten + `</p>
//                 <div>` + giatri + `</div>
//             </li>`;
// }

// function createComment(name, value, star, time) {
//     return `<div class="comment">
//                 <i class="fa fa-user-circle"> </i>
//                 <h4>` + name + `<span> `+ star +`</span></h4>
//                 <p>` + value + `</p>
//                 <span class="time">` + time + `</span>
//             </div>`;
// }

// /*// add hình
// function addSmallImg(img) {
//     var newDiv = `<div class='item'>
//                         <a>
//                             <img src=` + img + ` onclick="changepic(this.src)">
//                         </a>
//                     </div>`;
//     var banner = document.getElementsByClassName('owl-carousel')[0];
//     banner.innerHTML += newDiv;
// }

// // đóng mở xem hình
// function opencertain() {
//     document.getElementById("overlaycertainimg").style.transform = "scale(1)";
// }

// function closecertain() {
//     document.getElementById("overlaycertainimg").style.transform = "scale(0)";
// }

// // đổi hình trong chế độ xem hình
// function changepic(src) {
//     document.getElementById("bigimg").src = src;
// }*/