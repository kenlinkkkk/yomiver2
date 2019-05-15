<?php
/**
 * Created by PhpStorm.
 * User: Truong Minh Duong
 * Date: 30/10/2018
 * Time: 1:31 CH
 */

?>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<?php
$link = "http://10.54.134.1/api/get/rp_exportgiaithuong.jsp";
$data_curl = get_web_page_curl($link);
$arr_giaithuong = explode('|', $data_curl);
//echo $arr_giaithuong[0];
?>

<div class="container" style="margin-top:45px">
    <div class="col-xs-12 nopadding" style="margin-top: 10px;">
        <p class="tieude" style="color:black">Tranh tài showbiz</p>
        <div class="col-xs-12 nopadding">
            <div id="exTab3" class="container nopadding">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#1b" data-toggle="tab">THỂ LỆ</a>
                    </li>

                    <li><a href="#2b" data-toggle="tab">DANH SÁCH NGÔI SAO</a>
                    </li>

                    <li><a href="#3b" data-toggle="tab">GIẢI THƯỞNG</a>
                    </li>

                    <li><a href="#4b" data-toggle="tab">KẾT QUẢ</a>
                    </li>
                </ul>

                <div class="tab-content clearfix">
                    <div class="tab-pane active" id="1b">
                        <h2 align="center"><strong>Thể lệ chương trình khuyến mại</strong></h2>
                        <p><strong>1. T&ecirc;n chương tr&igrave;nh khuyến mại:</strong> Nhắn tin liền tay – Ring ngay thẻ cào</p>

                        <p><strong>2. H&agrave;ng h&oacute;a, dịch vụ &aacute;p dụng khuyến mại:</strong> G&oacute;i
                            cước &quot;Tranh t&agrave;i Showbiz&quot; dịch vụ Xem Liền.</p>

                        <p><strong>3. Thời gian triển khai: </strong>: 01/02/2019 đến hết ngày 01/05/2019.</p>

                        <p><strong>4. Địa bản (phạm vi) &aacute;p dụng:</strong> Tr&ecirc;n to&agrave;n quốc</p>

                        <p><strong>5. H&igrave;nh thức tr&uacute;ng thưởng:</strong></p>

                        <div style="padding-bottom:6px">-	Tặng 5.000đ vào tài khoản chính cho 20.000 thuê bao thuộc đối tượng hưởng khuyến mại đăng ký mới gói ngày Tranh tài showbiz.
                            Thuê bao được miễn phí 01 ngày đầu tiên  sử dụng, sau khuyến mại: 2.000đ/ ngày.</div>

                        <div style="padding-bottom:6px">- Tặng 50.000đ, 100.000đ, 200.000đ, 500.000đ vào tài khoản chính cho thuê bao tham gia
                            tương tác bình chọn ngôi sao hàng ngày và có số điểm tích lũy cao nhất. ( Theo kịch bản hiện hành của dịch vụ).</div>

                        <p><strong>6. H&agrave;ng h&oacute;a, dịch vụ d&ugrave;ng để trao thưởng: </strong>Thẻ nạp tiền
                            trị gi&aacute; 50.000đ, 100.000đ, 200.000đ, 500.000đ</p>

                        <p><strong>7. Đối tượng &aacute;p dụng:</strong></p>

                        <p>Để được hưởng khuyến mại, thuê bao phải thỏa mãn đồng thời tất cả các điều kiện sau:</p>
                        <div style="padding-bottom:6px">
                            <p>-	Thuê bao MobiFone đang hoạt động 02 chiều;</p>
                       <p> -	Đăng ký thành công theo đúng thể lệ của chương
                            trình và gia hạn thành công các gói cước dịch vụ  trong thời gian khuyến mại, cụ thể như sau:
                       </p>

                       <p> + Đăng ký qua kênh SMS: Khách hàng là thuê bao nhận được tin nhắn
                           mời đăng ký tham gia chương trình khuyến mại từ hệ thống 090 thực hiện nhắn tin đăng ký tham gia bằng cách soạn cú pháp KM gửi 9365

                       </p>
                            <p>
                                + Đăng ký qua kênh truyền thông khác từ MobiFone: Khách hàng là thuê bao nhận được thông điệp
                                mời đăng ký tham gia chương trình khuyến mại từ MobiFone thực hiện thao tác đăng ký theo hướng dẫn để đăng ký tham gia CTKM
                            </p>
                            <p>
                                -	Thuê bao đăng ký thành công lần đầu tiên trong thời gian diễn ra chương trình
                                (không áp dụng cho thuê bao hủy gói cước đăng ký lại) và duy trì gói cước khuyến mại 24h ngày kể từ thời điểm đăng ký.
                            </p>
                            <p>
                                - Đối tượng không được tham gia CTKM: các thuê bao của cán bộ Công nhân viên của MobiFone,
                                và thuê bao nội bộ, thuê bao Fastconnect, MDT, các thuê bao của Công ty Cổ phần Công nghệ truyền thông Xmedia
                            </p>
                        </div>



                        <p><strong>8. Cơ cấu giải thưởng:</strong></p>

                        <table class="table-bordered table" style="color: black;">
                            <tbody>
                            <tr>
                                <td>
                                    <p style="text-align: center;"><strong>STT</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Giải thưởng</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Số lượng</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Gi&aacute; trị</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Mức thưởng</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>1</p>
                                </td>
                                <td rowspan="3">
                                    <p>Ng&agrave;y</p>
                                </td>
                                <td>
                                    <p>1 giải/ng&agrave;y</p>
                                </td>
                                <td>
                                    <p>50.000đ</p>
                                </td>
                                <td rowspan="4">
                                    <div style="padding-bottom:6px">- Tổng gi&aacute; trị giải thưởng tuần: <strong>2.950.000đ.</strong></div>

                                    <div style="padding-bottom:6px">- Tổng gi&aacute; trị giải thưởng mỗi th&aacute;ng: <strong>11.800.000đ</strong>.
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>2</p>
                                </td>
                                <td>
                                    <p>1 giải/ng&agrave;y</p>
                                </td>
                                <td>
                                    <p>100.000đ</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <p>1 giải/ng&agrave;y</p>
                                </td>
                                <td>
                                    <p>200.000đ</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <p>Tuần</p>
                                </td>
                                <td>
                                    <p>1 giải/tuần</p>
                                </td>
                                <td>
                                    <p>500.000đ</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <p><strong>Ghi ch&uacute;:</strong></p>

                        <div style="padding-bottom:6px">- Giải thưởng kh&ocirc;ng được quy đổi sang tiền mặt, sẽ được hệ thống nạp trực tiếp v&agrave;o
                            t&agrave;i khoản của kh&aacute;ch h&agrave;ng dưới h&igrave;nh thức nạp tiền trực tuyến Top
                            up.</div>

                        <p><strong>9. Nội dung v&agrave; thể lệ chi tiết của chương tr&igrave;nh khuyến mại:</strong>
                        </p>

                        <p><strong>9.1. Nội dung chương tr&igrave;nh khuyến mại</strong></p>

                        <div style="padding-bottom:6px">-	Đối với thuê bao đăng ký lần đầu: Tặng 5.000đ vào tài khoản chính cho 20.000
                            thuê bao đăng ký lần đầu gói cước Tranh tài Showbíz và duy trì gói cước tối thiểu 24h kể từ thời điểm đăng ký.</div>

                        <p>- Đối với thu&ecirc; bao đang sử dụng g&oacute;i Tranh t&agrave;i Showbiz:</p>

                        <p>+ Tham gia bình chọn ngôi sao yêu thích mỗi ngày để tích lũy điểm (Theo kịch bản của chương trình) </p>

                        <p>+ Thuê bao tích lũy điểm cao nhất tuần/tháng sẽ nhận được giải thưởng tương ứng.</p>

                        <p>+ Thuê bao phải thực hiện ít nhất 1 lần bình chọn ngôi sao mới được xét thưởng.</p>

                        <div style="padding-bottom:6px">+ Trong trường hợp có nhiều thuê bao
                            được cùng số điểm cao nhất, thực hiện trao giải cho thuê bao đạt số điểm đó sớm nhất.</div>

                        <p><strong>9.2. C&aacute;ch thức tham gia chương tr&igrave;nh khuyến mại:</strong></p>

                        <table class="table-bordered table" style="color: black;">
                            <tbody>
                            <tr>
                                <td>
                                    <p style="text-align: center;"><strong>STT</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Nội dung</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>C&aacute;ch thực hiện</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Gi&aacute; cước</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Ghi ch&uacute;</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <div style="padding-bottom:6px">C&aacute;ch thức đăng k&yacute; qua k&ecirc;nh SMS</div>
                                </td>
                                <td>
                                    <p>Soạn <b>KM</b>&nbsp;gửi <strong>9365</strong></p>
                                </td>
                                <td rowspan="4">
                                    <div style="padding-bottom:6px">2000đ/ng&agrave;y, tự động gia hạn. Miễn ph&iacute; 1 ng&agrave;y đầu ti&ecirc;n
                                        đối với thu&ecirc; bao đăng k&yacute; lần đầu.&nbsp;</div>
                                </td>
                                <td>
                                    <p>&nbsp;</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>2</p>
                                </td>
                                <td>
                                    <div style="padding-bottom:6px">Đăng ký qua kênh truyền thông khác từ MobiFone</div>
                                </td>
                                <td>
                                    <div style="padding-bottom:6px">Khách hàng nhận cuộc gọi từ MobiFone, thực hiện bấm phím theo hướng dẫn.</div>
                                </td>
                                <td>
                                    <p>&nbsp;</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <div style="padding-bottom:6px">C&aacute;c k&ecirc;nh kh&aacute;c</div>
                                </td>
                                <td>
                                    <div style="padding-bottom:6px">Thực hiện theo quy định của MobiFone đối với từng kênh đăng ký. </div>
                                </td>
                                <td>
                                    <div style="padding-bottom:6px"> Không áp dụng CTKM khi đăng ký ngoài kênh truyền thông của MobiFone).</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div style="padding-bottom:6px">- Mỗi ng&agrave;y dịch vụ c&oacute; một danh s&aacute;ch Ng&ocirc;i sao (Ca sỹ, Người mẫu,
                            Diễn vi&ecirc;n,&hellip;)&nbsp; để thu&ecirc; bao đ&atilde; đăng k&yacute; g&oacute;i cước
                            của dịch vụ thực hiện b&igrave;nh chọn Ng&ocirc;i sao n&agrave;o l&agrave; Ng&ocirc;i sao
                            trong ng&agrave;y.</div>

                        <p>- Người chơi phải đăng k&yacute; g&oacute;i cước v&agrave; gửi tin nhắn để lấy danh s&aacute;ch
                            Ng&ocirc;i sao v&agrave;&nbsp; tham gia b&igrave;nh chọn.</p>

                        <p>- Lượt b&igrave;nh chọn hợp lệ:</p>

                        <div style="padding-bottom:6px">+ Đối với thu&ecirc; bao đ&atilde; đăng k&yacute; v&agrave;o c&aacute;c ng&agrave;y trước:
                            Lượt b&igrave;nh chọn đầu ti&ecirc;n trong ng&agrave;y, c&aacute;c lượt b&igrave;nh chọn sau
                            kh&ocirc;ng được chấp nhận.</div>

                        <p>+ Đối với thu&ecirc; bao thực hiện đăng k&yacute; trong ng&agrave;y: L&agrave; lượt b&igrave;nh
                            chọn đầu ti&ecirc;n sau khi đăng k&yacute; th&agrave;nh c&ocirc;ng.</p>

                        <p>- Mỗi thu&ecirc; bao chỉ được thực hiện b&igrave;nh chọn duy nhất 1 lần/ng&agrave;y.</p>

                        <div style="padding-bottom:6px">- Nếu người chơi hủy g&oacute;i dịch vụ th&igrave; c&aacute;c lượt b&igrave;nh chọn người
                            chơi tham gia sẽ kh&ocirc;ng được bảo lưu. Nếu người chơi thực hiện đăng k&yacute;/hủy nhiều
                            lần trong ng&agrave;y th&igrave; lượt b&igrave;nh chọn được chấp nhận l&agrave; lượt b&igrave;nh
                            chọn hợp lệ của lần đăng k&yacute; cuối c&ugrave;ng trong ng&agrave;y (c&aacute;c lượt trước
                            đ&oacute; đ&atilde; bị hủy do kh&aacute;ch h&agrave;ng hủy g&oacute;i cước).</div>

                        <p>- Quy ước điểm thưởng d&agrave;nh cho kh&aacute;ch h&agrave;ng đăng k&yacute; g&oacute;i cước
                            Tranh t&agrave;i Showbiz của dịch vụ Xem Liền:</p>

                        <table class="table-bordered table" style="color: black;">
                            <tbody>
                            <tr>
                                <td>
                                    <p style="text-align: center;"><strong>STT</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Nội dung</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Điểm</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>Đăng k&yacute; th&agrave;nh c&ocirc;ng</p>
                                </td>
                                <td>
                                    <p>300 điểm/lần</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>2</p>
                                </td>
                                <td>
                                    <p>Gia hạn th&agrave;nh c&ocirc;ng</p>
                                </td>
                                <td>
                                    <p>300 điểm/lần</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <p>Lựa chọn Ng&ocirc;i sao Showbiz đ&uacute;ng trong ng&agrave;y</p>
                                </td>
                                <td>
                                    <p>500 điểm/lần</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <p>&nbsp;</p>

                        <div style="padding-bottom:6px">- Điểm thưởng chỉ c&oacute; gi&aacute; trị t&iacute;ch lũy trong tuần. Khi sang tuần mới số
                            điểm của to&agrave;n bộ thu&ecirc; bao được x&oacute;a bỏ v&agrave; c&aacute;c thu&ecirc;
                            bao bắt đầu từ đầu.</div>

                        <div style="padding-bottom:6px">-	Thời gian khách hàng gửi tham gia bình chọn: bắt đầu từ 08:00:00 (8h sáng) và kết thúc vào 22:00:00 mỗi ngày.</div>
                        <div style="padding-bottom:6px">-	Hệ thống sẽ thông báo gửi kết quả bình chọn đến người chơi sau khi có kết quả của ngày/tuần.</div>
                        </td>

                        </tr>
                        </tbody>
                        </table>
                        <p><strong>9.3.- Khách hàng soạn tin theo cú pháp quy định để sử dụng gói cước dịch vụ:</strong></p>
                        <table class="table-bordered table" style="color: black;">
                            <tbody>
                            <tr>
                                <td>
                                    <p style="text-align: center;"><strong>STT</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Nội dung</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Cú pháp</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Đầu số</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <div style="padding-bottom:6px">Đăng ký gói</div>
                                </td>
                                <td>
                                    <p>Soạn <b>KM</b></p>
                                    <p>Cú pháp phụ: <b>DK TS, SB, CS, DV, SG, AC</b></p>

                                </td>
                                <td rowspan="4">
                                    Các cú pháp gửi đầu số <b>9365</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>2</p>
                                </td>
                                <td>
                                    <div style="padding-bottom:6px">Nhận danh sách Ngôi sao trong ngày</div>
                                </td>
                                <td>
                                    <div style="padding-bottom:6px"><b>TOP</b></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <div style="padding-bottom:6px">Gửi đáp án</div>
                                </td>
                                <td>
                                    <div style="padding-bottom:6px"><b>NS</b> <Đáp án>
                                            Đáp án là: A, B, C, D.
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <div style="padding-bottom:6px">Tra cứu số điểm tích lũy trong tháng</div>
                                </td>
                                <td>
                                    <div style="padding-bottom:6px"><b>TKNS</b>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>



                        <p><strong>10. Quy định x&aacute;c minh v&agrave; trả thưởng:</strong></p>

                        <p>- Điều kiện thu&ecirc; bao mới đăng k&yacute; được nạp tiền thưởng:</p>

                        <div style="padding-bottom:6px">- Để được cộng 5.000đ v&agrave;o t&agrave;i khoản ch&iacute;nh, y&ecirc;u cầu thu&ecirc; bao
                            phải duy tr&igrave; g&oacute;i cước của dịch vụ khuyến mại đến thời điểm sau 24h khi kh&aacute;ch
                            h&agrave;ng đăng k&yacute; th&agrave;nh c&ocirc;ng.</div>

                        <div style="padding-bottom:6px">- Điều kiện thu&ecirc; bao đang sử dụng g&oacute;i cước Tranh t&agrave;i Showbiz tham gia b&igrave;nh
                            chọn ng&ocirc;i sao y&ecirc;u th&iacute;ch h&agrave;ng ng&agrave;y v&agrave; nhận giải tuần
                            thực hiện theo ch&iacute;nh s&aacute;ch hiện h&agrave;nh của dịch
                                    vụ và bổ sung thêm như sau:
                        <p>+ Thuê bao đủ điều kiện tham gia xét thưởng là thuê bao đăng ký gói dịch vụ,
                            tham gia bình chọn và gia hạn trừ cước thành công không ngắt quãng đến thời điểm công bố kết quả.</p>
                         <p> + Mỗi thuê bao không được trúng 2 giải ngày liên tiếp và 2 giải tuần liên tiếp </p>
                        </div>
                        <div style="padding-bottom:6px">
                            <p >-	<i>Lưu ý:</i></p>
                        <p><i>+ Không ngắt quãng được hiểu là tất cả các chu kỳ trừ cước của
                                khách hàng đều thành công, khách hàng không bị nợ cước tại thời điểm nào.</i></p>
                            <p><i>+ Điều kiện bổ sung vẫn được tiếp tục khi kết thúc Chương trình khuyến mại.</i></p>
                        </div>
                        <div style="padding-bottom:6px">
                            -	Điều kiện thuê bao đang sử dụng gói cước Tranh tài Showbiz tham gia bình chọn ngôi
                            sao yêu thích hàng ngày và nhận giải tuần thực hiện theo chính sách hiện hành của dịch vụ.
                        </div>



                        <div style="padding-bottom:6px">- C&ocirc;ng ty Xmedia chủ động nạp 5.000đ, 100.000đ, 200.000đ, 500.000đ v&agrave;o t&agrave;i
                            khoản ch&iacute;nh của thu&ecirc; bao dưới h&igrave;nh thức nạp tiền trực tuyến qua
                            topup.</div>

                        <p>- Thời gian nạp tiền thưởng: từ 14h00 đến 17h59 c&ugrave;ng ng&agrave;y.</p>
                        <div style="padding-bottom:6px">-	Dịch vụ trả thưởng cho khách hàng đủ điều kiện hưởng
                            khuyến mại trước 17h00 ngày n+2 và có thông báo cộng thưởng thành công cho KH từ đầu số dịch vụ.</div>

                        <p>- Quy tr&igrave;nh nạp tiền do C&ocirc;ng ty Xmedia chủ động thực hiện như sau:</p>

                        <div style="padding-bottom:6px">+<strong> Bước 1:</strong> Hệ thống sẽ gửi danh s&aacute;ch to&agrave;n bộ c&aacute;c thu&ecirc;
                            bao đủ điền kiện nhận thưởng trong ng&agrave;y v&agrave; nạp tiền cho kh&aacute;ch h&agrave;ng
                            qua hệ thống thanh to&aacute;n điện tử xPay tại địa chỉ&nbsp; http://xpay.com.vn.</div>

                        <div style="padding-bottom:6px">+<strong> Bước 2: </strong>Sau khi nạp tiền cho kh&aacute;ch h&agrave;ng, hệ thống xPay sẽ
                            gửi c&aacute;c dữ liệu chi tiết bao gồm c&aacute;c th&ocirc;ng tin về: M&atilde; số giao
                            dịch; Số điện thoại được nạp; Số tiền nạp; Thời gian nạp; Trạng th&aacute;i; Nội dung th&ocirc;ng
                            b&aacute;o đến kh&aacute;ch h&agrave;ng; M&atilde; giao dịch Telco.</div>

                        <div style="padding-bottom:6px">+<strong> Bước 3:</strong> Hệ thống import c&aacute;c th&ocirc;ng tin đầy đủ về lịch sử giao
                            dịch qua xPay l&ecirc;n trang CSKH để phục vụ việc giải quyết khiếu nại v&agrave; chăm s&oacute;c
                            kh&aacute;ch h&agrave;ng.</div>



                    </div>

                    <div class="tab-pane" id="2b">
                        <h2 align="center"><strong>Danh sách ngôi sao</strong></h2>
                        <table class="table-bordered table" style="color: black;">
                            <tbody>
                            <thead>
                            <tr>
                                <th>Ca sĩ Việt Nam</th>
                                <th>Diễn vi&ecirc;n Việt Nam</th>
                                <th>Ca sĩ Quốc tế</th>
                                <th>Diễn vi&ecirc;n Quốc tế</th>
                            </tr>

                            </thead>
                            <tr>
                                <td>Chipu</td>
                                <td>Hari Won</td>
                                <td>BoA</td>
                                <td>Phạm Băng Băng</td>
                            </tr>
                            <tr>
                                <td>Đ&agrave;m Vĩnh Hưng</td>
                                <td>Trường Giang</td>
                                <td>Bruno Mars</td>
                                <td>Chương Tử Di</td>
                            </tr>
                            <tr>
                                <td>Noo Phước Thịnh</td>
                                <td>Trấn Th&agrave;nh</td>
                                <td>Bi-Rain</td>
                                <td>Ch&acirc;u Tấn</td>
                            </tr>
                            <tr>
                                <td>Đức Ph&uacute;c</td>
                                <td>Trương Ngọc &Aacute;nh</td>
                                <td>Katy Perry</td>
                                <td>Lưu Diệc Phi</td>
                            </tr>
                            <tr>
                                <td>Kay Trần</td>
                                <td>Angela Phương Trinh</td>
                                <td>Ariana Grande</td>
                                <td>Dương Mịch</td>
                            </tr>
                            <tr>
                                <td>Hương Tr&agrave;m</td>
                                <td>Midu</td>
                                <td>Super Junior</td>
                                <td>Triệu Lệ Dĩnh</td>
                            </tr>
                            <tr>
                                <td>Min</td>
                                <td>Thanh Hằng</td>
                                <td>Lady Gaga</td>
                                <td>Địch Lệ Nhiệt Ba</td>
                            </tr>
                            <tr>
                                <td>T&oacute;c Ti&ecirc;n</td>
                                <td>Ngọc Trinh</td>
                                <td>Justin Bieber</td>
                                <td>Tom Cruise</td>
                            </tr>
                            <tr>
                                <td>Bảo Anh</td>
                                <td>Kiều Minh Tuấn</td>
                                <td>Selena Gomez</td>
                                <td>Leonardo Dicaprio</td>
                            </tr>
                            <tr>
                                <td>Only C</td>
                                <td>Hứa Vĩ Văn</td>
                                <td>Westlife</td>
                                <td>Brad Pitt</td>
                            </tr>
                            <tr>
                                <td>Justa Tee</td>
                                <td>Johnny Tr&iacute; Nguyễn</td>
                                <td>Britney Spears</td>
                                <td>Mark Walhberg</td>
                            </tr>
                            <tr>
                                <td>Mỹ T&acirc;m</td>
                                <td>Thanh Hằng</td>
                                <td>Adete</td>
                                <td>Will Smith</td>
                            </tr>
                            <tr>
                                <td>Đinh Manh Ninh</td>
                                <td>Ng&ocirc; Thanh V&acirc;n</td>
                                <td>T-Ara</td>
                                <td>Robert Pattinson</td>
                            </tr>
                            <tr>
                                <td>Đan Trường</td>
                                <td>Ho&agrave;i Linh</td>
                                <td>BTS</td>
                                <td>Song Joong Ki</td>
                            </tr>
                            <tr>
                                <td>Lam Trường</td>
                                <td>Việt Hương</td>
                                <td>Sam Smith</td>
                                <td>Song Hye Kyo</td>
                            </tr>
                            <tr>
                                <td>Đ&ocirc;ng Nhi</td>
                                <td>Kh&aacute;nh Ng&acirc;n</td>
                                <td>Big Bang</td>
                                <td>Ha Ji Won</td>
                            </tr>
                            <tr>
                                <td>Issac</td>
                                <td>Miu L&ecirc;</td>
                                <td>2NE1</td>
                                <td>Lee Min Ho</td>
                            </tr>
                            <tr>
                                <td>Hồ Ngọc H&agrave;</td>
                                <td>Qu&aacute;ch Ngọc Ngoan</td>
                                <td>Black Pink</td>
                                <td>Kim Woo Bin</td>
                            </tr>
                            <tr>
                                <td>Soobin Ho&agrave;ng Sơn</td>
                                <td>C&aacute;t Phượng</td>
                                <td>SNND</td>
                                <td>Lee Seung Gi</td>
                            </tr>
                            <tr>
                                <td>B&ugrave;i Anh Tuấn</td>
                                <td>Tăng Thanh H&agrave;</td>
                                <td>Twice</td>
                                <td>Park Shin Hye</td>
                            </tr>
                            <tr>
                                <td>H&agrave; Anh Tuấn</td>
                                <td>Ninh Dương Ngọc Lan</td>
                                <td>Alan Walker</td>
                                <td>Gong Hyo Jin</td>
                            </tr>
                            <tr>
                                <td>Văn Mai Hương</td>
                                <td>Ngọc Diệp</td>
                                <td>TFBoys</td>
                                <td>Lee Jong Suk</td>
                            </tr>
                            <tr>
                                <td>Phi Nhung</td>
                                <td>Lan Phương</td>
                                <td>Ch&acirc;u Kiệt Lu&acirc;n</td>
                                <td>Jo In Sung</td>
                            </tr>
                            <tr>
                                <td>Duy&nbsp; Mạnh</td>
                                <td>Ng&acirc;n Kh&aacute;nh</td>
                                <td>Yao Si Ting</td>
                                <td>Gong Yoo</td>
                            </tr>
                            <tr>
                                <td>Trung Qu&acirc;n idol</td>
                                <td>Th&aacute;i H&ograve;a</td>
                                <td>Đặng Lệ Qu&acirc;n</td>
                                <td>Park Seo Joon</td>
                            </tr>
                            <tr>
                                <td>Mr siro</td>
                                <td>Nh&atilde; Phương</td>
                                <td>Madonna</td>
                                <td>Xa Thị Mạn</td>
                            </tr>
                            <tr>
                                <td>Đoan Trang</td>
                                <td>Việt Trinh</td>
                                <td>Taylor Swift</td>
                                <td>Melissa McCarthy</td>
                            </tr>
                            <tr>
                                <td>Đăng Kh&ocirc;i</td>
                                <td>Phương Thanh</td>
                                <td>Maroon 5</td>
                                <td>Adam Sandler</td>
                            </tr>
                            <tr>
                                <td>Chi D&acirc;n</td>
                                <td>L&ecirc; Kh&aacute;nh</td>
                                <td>Wanna One</td>
                                <td>Sandra Bullock</td>
                            </tr>
                            <tr>
                                <td>Cao Th&aacute;i Sơn</td>
                                <td>Diễm My</td>
                                <td>Rihanna</td>
                                <td>Vin Diesel</td>
                            </tr>
                            <tr>
                                <td>Ch&acirc;u Đăng Khoa</td>
                                <td>Kiều Chinh</td>
                                <td>Charlie Puth</td>
                                <td>Julia Roberts</td>
                            </tr>
                            <tr>
                                <td>B&iacute;ch Phương</td>
                                <td>Diễm Hương</td>
                                <td>The Chainsmokers</td>
                                <td>Jennifer Lawrence</td>
                            </tr>
                            <tr>
                                <td>Bằng Cường</td>
                                <td>Th&uacute;y Nga</td>
                                <td>Shayne Ward</td>
                                <td>Emma Stone</td>
                            </tr>
                            <tr>
                                <td>Bằng Kiều</td>
                                <td>L&yacute; Nh&atilde; Kỳ</td>
                                <td>Ed Sheeran</td>
                                <td>Tom Hanks</td>
                            </tr>
                            <tr>
                                <td>Anh T&uacute;</td>
                                <td>Mai Thu Huyền</td>
                                <td>Backstreet Boys</td>
                                <td>Dwayne Johnson</td>
                            </tr>
                            <tr>
                                <td>&Aacute;i Phương</td>
                                <td>Huỳnh Lập</td>
                                <td>Amy Winehouse</td>
                                <td>Johnny Depp</td>
                            </tr>
                            <tr>
                                <td>Hải Băng</td>
                                <td>Trần Bảo Sơn</td>
                                <td>Jennifer Hudson</td>
                                <td>Đường Yến</td>
                            </tr>
                            <tr>
                                <td>Hiền Thục</td>
                                <td>Thủy Ti&ecirc;n</td>
                                <td>Celine Dion</td>
                                <td>Ch&acirc;u Tử Đan</td>
                            </tr>
                            <tr>
                                <td>Hồ Quang Hiếu</td>
                                <td>Trương Nam Th&agrave;nh</td>
                                <td>Blue</td>
                                <td>Cổ Thi&ecirc;n Lạc</td>
                            </tr>
                            <tr>
                                <td>Phạm Trưởng</td>
                                <td>Phương Oanh</td>
                                <td>Mariah Carey</td>
                                <td>Ng&ocirc; cẩn Ng&ocirc;n</td>
                            </tr>
                            <tr>
                                <td>Nhật Kim Anh</td>
                                <td>Thanh Hương</td>
                                <td>Alicia Keys</td>
                                <td>Dương Dương</td>
                            </tr>
                            <tr>
                                <td>Ng&ocirc; Kiến Huy</td>
                                <td>Thu Quỳnh</td>
                                <td>Seal</td>
                                <td>L&yacute; Băng Băng</td>
                            </tr>
                            <tr>
                                <td>Minh Vương</td>
                                <td>Băng Di</td>
                                <td>Adam Lambert</td>
                                <td>Trịnh Sảng</td>
                            </tr>
                            <tr>
                                <td>Ho&agrave;i L&acirc;m</td>
                                <td>Ch&iacute; Thiện</td>
                                <td>Beyonce</td>
                                <td>La Tấn</td>
                            </tr>
                            <tr>
                                <td>Ho&agrave;ng Hải</td>
                                <td>Ch&iacute; T&agrave;i</td>
                                <td>Phil Collins</td>
                                <td>Hồ Ca</td>
                            </tr>
                            <tr>
                                <td>Ng&ocirc; Tr&aacute;c Linh</td>
                                <td>Don Nguyễn</td>
                                <td>Ricky Martin</td>
                                <td>Hoắc Kiến Hoa</td>
                            </tr>
                            <tr>
                                <td>Maya</td>
                                <td>Anh Đức</td>
                                <td>Dan Byrd</td>
                                <td>Lu Han</td>
                            </tr>
                            <tr>
                                <td>Phan Mạnh Quỳnh</td>
                                <td>Đại Nghĩa</td>
                                <td>Shakin&#39; Stevens</td>
                                <td>Ng&ocirc; Kinh</td>
                            </tr>
                            <tr>
                                <td>Phạm Thanh Thảo</td>
                                <td>Đỗ Duy Nam</td>
                                <td>Aerosmith</td>
                                <td>Dương Tử</td>
                            </tr>
                            <tr>
                                <td>Vi Oanh</td>
                                <td>Đinh Ngọc Diệp</td>
                                <td>The Carpenters</td>
                                <td>Đổng Khiết</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                    <div class="tab-pane" id="3b">
                        <h2 align="center"><strong>Cơ cấu giải thưởng</strong></h2>


                        <table class="table-bordered table" style="color: black;">
                            <tbody>
                            <tr>
                                <td>
                                    <p style="text-align: center;"><strong>STT</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Giải thưởng</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Số lượng</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Gi&aacute; trị</strong></p>
                                </td>
                                <td>
                                    <p style="text-align: center;"><strong>Mức thưởng</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>1</p>
                                </td>
                                <td rowspan="3">
                                    <p>Ng&agrave;y</p>
                                </td>
                                <td>
                                    <p>1 giải/ng&agrave;y</p>
                                </td>
                                <td>
                                    <p>50.000đ</p>
                                </td>
                                <td rowspan="4">
                                    <div style="padding-bottom:6px">- Tổng gi&aacute; trị giải thưởng tuần: <strong>2.950.000đ.</strong></div>

                                    <div style="padding-bottom:6px">- Tổng gi&aacute; trị giải thưởng mỗi th&aacute;ng: <strong>11.800.000đ</strong>.
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>2</p>
                                </td>
                                <td>
                                    <p>1 giải/ng&agrave;y</p>
                                </td>
                                <td>
                                    <p>100.000đ</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <p>1 giải/ng&agrave;y</p>
                                </td>
                                <td>
                                    <p>200.000đ</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <p>Tuần</p>
                                </td>
                                <td>
                                    <p>1 giải/tuần</p>
                                </td>
                                <td>
                                    <p>500.000đ</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>


                        <p><strong>Ghi ch&uacute;:</strong></p>

                        <div style="padding-bottom:6px">- Giải thưởng không được quy đổi sang tiền mặt, sẽ được hệ thống nạp trực tiếp vào tài khoản
                            của khách hàng dưới hình thức nạp tiền trực tuyến Top up.</div>
                    </div>

                    <div class="tab-pane" id="4b">
                        <table class="table-bordered table" style="color: black;">
                            <tbody>
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Giải thưởng</th>
                                <th>Số điện thoại</th>
                                <th>Gi&aacute; trị</th>
                            </tr>
                            </thead>
                            <?php $stt=0; ?>
                            <!-- begin giải ngày -->
                            <?php for($i=0;$i<count($arr_giaithuong);$i++): ?>
                        <?php
                        $arr_day = explode(',', $arr_giaithuong[$i]);
                        if($arr_day[3]==500000){
                            continue;
                        }
                        $stt++;
                        ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <?php if($i%3==0):  ?>
                                    <td style="width:100px" rowspan="3">Ng&agrave;y <?php echo  $arr_day[0];?></td>
                                <?php endif; ?>
                                <!--td><?php #echo $arr_day[2]; ?></td-->
                                <td><?php echo substr($arr_day[2],0,7)."xxxx"; ?></td>
                                <td><?php echo  $arr_day[3];?> đ</td>
                            </tr>
                            <?php endfor; ?><!-- end giải ngày -->
                            <!-- begin giải tuần -->
                            <?php for($i=0;$i<count($arr_giaithuong);$i++): ?>
                            <?php
                            $arr_day = explode(',', $arr_giaithuong[$i]);
                            if($arr_day[3]!=500000){
                                continue;
                            }
                            $stt++;
                            ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td style="color:black">Tuần <?php echo $arr_day[4]-3; ?> <?php echo $arr_day[0]; ?>-<?php echo $arr_day[1]; ?></td>
                                <!--td><?php #echo $arr_day[2]; ?></td-->
                                <td><?php echo substr($arr_day[2],0,7)."xxxx"; ?></td>
                                <td>500000 đ</td>
                            </tr>
                            <?php endfor; ?><!-- end giải tuần -->
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <script>
                var hash = window.location.hash;
                hash && $('ul.nav a[href="' + hash + '"]').tab('show');

                $('.nav-tabs a').click(function (e) {
                    $(this).tab('show');
                    var scrollmem = $('body').scrollTop();
                    window.location.hash = this.hash;
                    $('html,body').scrollTop(scrollmem);
                });

            </script>
        </div>
    </div>
</div>
</div>