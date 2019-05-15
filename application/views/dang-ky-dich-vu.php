<?php
/**
 * Created by PhpStorm.
 * User: Truong Minh Duong
 * Date: 08/11/2018
 * Time: 2:29 CH
 */
if ($this->session->userdata("phone")) {
    $phone = $this->session->userdata("phone");

    $link = "http://10.54.134.1/api/get?action=getActivePkgs&msisdn=" . $phone . "&channel=WAP";

    $data_curl = get_web_page_curl($link);

    $stt = explode('|', $data_curl);
    ?>
    <div class="container padding-slide-mobile">
        <p class="tieude" style="color: black">Gói cước: Tranh tài Showbiz</p>
        <p>- Cú pháp đăng ký: <strong>DK TS</strong> gửi <strong>9365</strong></p>
        <p>- Người chơi sẽ tham gia bình chọn Ngôi sao Showbiz mỗi ngày bằng cách soạn <strong>TOP</strong> gửi
            <strong>9365</strong> để lấy danh sách các Ngôi
            sao. Ngôi sao có lượt bình chọn nhiều nhất trong ngày sẽ là Ngôi sao Showbiz của ngày hôm đó. Cuối ngày hệ
            thống sẽ tổng hợp kết quả bình chọn, người chơi chiến thắng sẽ được tích lũy điểm và dành giài thưởng hấp
            dẫn từ chương trình.</p>
        <div align="center">
            <?
            if (strpos($stt[1], 'TS') !== false) { ?>
                <button class="btn btn-danger" disabled>ĐÃ ĐĂNG KÝ</button>
            <? } else {
                $url = "http://xemlien.vn/dkdv?pkg=TS";
                ?>
                <button class="btn btn-danger"><a href="<?= $url; ?>">ĐĂNG KÝ</a></button>
            <? } ?>
        </div>

        <p class="tieude" style="color: black;">Gói cước: Ngày</p>
        <p>- Cú pháp đăng ký: <strong>DK XEM</strong> gửi <strong>9365</strong></p>
        <p>- Khách hàng được miễn phí xem, tải, tặng không giới hạn các nội dung video clip, phim, ảnh, truyện tranh do
            dịch vụ cung cấp trong 24 giờ tính từ thời điểm đăng ký.</p>
        <div align="center">
            <?
            if (strpos($stt[1], 'XEM1') !== false) { ?>
                <button class="btn btn-danger" disabled>ĐÃ ĐĂNG KÝ</button>
            <? } else {
                $url = "http://xemlien.vn/dkdv?pkg=XEM1";
                ?>
                <button class="btn btn-danger"><a href="<?= $url; ?>">ĐĂNG KÝ</a></button>
            <? } ?>
        </div>
        <p class="tieude" style="color: black">Gói cước: Tuần</p>
        <p>- Cú pháp đăng ký: <strong>DK XEM7</strong> gửi <strong>9365</strong></p>
        <p>- Khách hàng được miễn phí xem, tải, tặng không giới hạn các nội dung video clip, phim, ảnh, truyện tranh
            do
            dịch vụ cung cấp trong 07 ngày (168 giờ) tính từ thời điểm đăng ký.</p>
        <div align="center">
            <?
            if (strpos($stt[1], 'XEM7') !== false) { ?>
                <button class="btn btn-danger" disabled>ĐÃ ĐĂNG KÝ</button>
            <? } else {
                $url = "http://xemlien.vn/dkdv?pkg=XEM7";
                ?>
                <button class="btn btn-danger"><a href="<?= $url; ?>">ĐĂNG KÝ</a></button>
            <? } ?>
        </div>
    </div>
<? } else { ?>
    <div class="container" align="center">
        <h3 style="color: black; padding-top: 15px;"> Vui lòng sử dụng 3G/4G để đăng ký dịch vụ!</h3>
    </div>
<? } ?>