<?php
get_header();
$rootURL = '/wordpress';
?>

<div class="container py-4">
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-uppercase">Trụ sở chính</h4>
            <p><span class="font-weight-bold">Địa chỉ: </span><span>Số 15, hẻm 7, ngách 73, ngõ 1194 đường Láng, Phường Láng Thượng, Quận Đống Đa, Thành phố Hà Nội, Việt Nam</span></p>
            <p><span class="font-weight-bold">Hotline: </span><span>0999 999 999</span></p>
            <p><span class="font-weight-bold">Email: </span><span>hoabinhcompany@gmail.com</span></p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14896.686598908784!2d105.7985877!3d21.0258168!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab449a4ee405%3A0xce317c905f183b50!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gUXXhu5FjIFThur8gSMOyYSBCw6xuaA!5e0!3m2!1sen!2s!4v1712152847163!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6">
            <h4>Gửi yêu cầu đến chúng tôi</h4>
            <form class="bg-gray p-3">
                <div class="form-row">
                    <div class="form-group col-md-12"><b>Thông tin cơ bản</b></div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Họ tên">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Nghề nghiệp">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" placeholder="Công ty">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12"><b>Liên hệ</b></div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Email(*)">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Số điện thoại(*)">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12"><b>Những đóng góp bạn muốn gửi</b></div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" placeholder="Tiêu đề">
                    </div>
                    <div class="form-group col-md-12">
                        <textarea class="form-control" placeholder="Mô tả chi tiết..." rows="7"></textarea>
                    </div>
                </div>
                <div class="form-row d-flex flex-row justify-content-between align-items-center">
                    <small><i>Lưu ý: Quý khách vui lòng điền đầy đủ thông tin phần (*) </i></small>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
get_footer();
?>