$('.block2-btn-addcart').click(function () {
    var product_id = $(this).attr('id').replace('add-cart-', '');
    var quantity = 1;
    $.ajax({
        url: '/api-them-gio-hang',
        method: 'post',
        data: {
            id: product_id,
            quantity: quantity,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (resp) {
            var new_count = resp.shopping_cart.count;
            var new_total_money = resp.shopping_cart.total_money;
            var new_items = resp.shopping_cart.items;
            var new_content = '';
            for (var i in new_items) {
                new_content += '<li class="header-cart-item">';
                new_content += '<div class="header-cart-item-img">';
                new_content += '<img src="' + new_items[i].product.images + '" alt="IMG">';
                new_content += '</div>';
                new_content += '<div class="header-cart-item-txt">';
                new_content += '<a href="#" class="header-cart-item-name">';
                new_content += new_items[i].product.name;
                new_content += '</a>';
                new_content += '<span class="header-cart-item-info">';
                new_content += new_items[i].quantity + ' x ' + new_items[i].product.dicountPriceString;
                new_content += '</span>';
                new_content += '</div>';
                new_content += '</li>';
            }
            if(new_count == undefined){
                $('#header-icons-noti').text(1);
            }else{
                $('#header-icons-noti').text(new_count);
            }

            $('#header-cart-wrapitem').html(new_content);
            $('#header-cart-total').text(new_total_money);
            swal('Thao tác thành công!', 'Sản phẩm đã được thêm vào giỏ hàng!', 'success');
        },
        error: function (error) {
            swal('Thao tác thất bại', JSON.parse(error.responseText).msg);
        }
    });
});
$('.block2-btn-addcart2').click(function () {
    var product_id = $(this).attr('id').replace('add-cart-', '');
    var quantity = 1;
    $.ajax({
        url: '/api-them-gio-hang',
        method: 'post',
        data: {
            id: product_id,
            quantity: quantity,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (resp) {
            var new_count = resp.shopping_cart.count;
            var new_total_money = resp.shopping_cart.total_money;
            var new_items = resp.shopping_cart.items;
            var new_content = '';
            for (var i in new_items) {
                new_content += '<li class="header-cart-item">';
                new_content += '<div class="header-cart-item-img">';
                new_content += '<img src="' + new_items[i].product.images + '" alt="IMG">';
                new_content += '</div>';
                new_content += '<div class="header-cart-item-txt">';
                new_content += '<a href="#" class="header-cart-item-name">';
                new_content += new_items[i].product.name;
                new_content += '</a>';
                new_content += '<span class="header-cart-item-info">';
                new_content += new_items[i].quantity + ' x ' + new_items[i].product.dicountPriceString;
                new_content += '</span>';
                new_content += '</div>';
                new_content += '</li>';
            }
            if(new_count == undefined){
                $('#header-icons-noti').text(1);
            }else{
                $('#header-icons-noti').text(new_count);
            }

            $('#header-cart-wrapitem').html(new_content);
            $('#header-cart-total').text(new_total_money);
            swal('Thao tác thành công!', 'Sản phẩm đã được thêm vào giỏ hàng!', 'success');
        },
        error: function (error) {
            swal('Thao tác thất bại', JSON.parse(error.responseText).msg);
        }
    });
});

// cong tien gio hang
Number.prototype.numberFormat = function (decimals, dec_point, thousands_sep) {
    dec_point = typeof dec_point !== 'undefined' ? dec_point : '.';
    thousands_sep = typeof thousands_sep !== 'undefined' ? thousands_sep : ',';

    var parts = this.toFixed(decimals).split('.');
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_sep);

    return parts.join(dec_point);
}
$('.btn-num-product-down').on('click', function (e) {
    e.preventDefault();
    var numProduct = Number($(this).next().val());
    if (numProduct > 1) {
        numProduct = numProduct - 1;
        $(this).next().val(numProduct);
    }
    var cart_count =  $('#checkout_items').val();
    // alert(cart_count);

    var discountPrice = $(this).closest('.quantity_selector').find('input[name="discountPrice"]').val();
    var totalPrice = Number(discountPrice) * numProduct;
    $(this).closest('.table-row').find('.column-5').text(totalPrice.numberFormat());

    var total = parseInt($('#totalPrice').attr('name').replace(',', ''));
    var removePrice = parseInt($(this).attr('name'))  (numProduct - 1);
    total = total - removePrice;
    $('#totalPrice').attr('name', total);
    $('#totalPrice').text(total.numberFormat(0) + " (VND)");

});

$('.btn-num-product-up').on('click', function (e) {
    e.preventDefault();
    var numProduct = Number($(this).prev().val());
    numProduct += 1;
    $(this).prev().val(numProduct);

    var discountPrice = $(this).closest('.quantity_selector').find('input[name="discountPrice"]').val();
    var totalPrice = Number(discountPrice) * numProduct;
    $(this).closest('.table-row').find('.column-5').text(totalPrice.numberFormat(0));

    var total = parseInt($('#totalPrice').attr('name').replace(',', ''));
    var addPrice = parseInt($(this).attr('name'));
    total = total + addPrice;
    $('#totalPrice').attr('name', total);
    $('#totalPrice').text(total.numberFormat(0) + " (VND)");
});