<div class="mobile-nav" style="margin-top: 80px"></div>

<div class="col-xs-12 mobile-nav-hidden" style="background-image:url(https://fanart.tv/fanart/movies/268/moviebackground/batman-51189dc9d44dd.jpg);margin-top: 125px;background-size: cover; background-repeat: no-repeat; background-position: center center;">
	<h2 style="color: #fff; font-family: sans-serif; margin-top: 5%; margin-bottom: 5%; padding-left: 8%;padding-right: 8%;">AI LÀ THẦN TƯỢNG</h2>
</div>

<div class="row">
	<div class="col-xs-12 mobile-nav" style="">
		<h2 style="color: #989898; font-family: sans-serif; padding-left: 5px; font-weight: bold; font-size: 25px;">AI LÀ THẦN TƯỢNG</h2>
	</div>
	<div class="col-sm-12 nopadding">
        <ul class="nav nav-tabs">
            <li class="active" style="width:50%"><a data-toggle="tab" href="#home" style="font-size: 12px;">THÔNG TIN DỊCH VỤ</a></li>
            <li style="width:50%"><a data-toggle="tab" href="#menu1" style="font-size: 12px;">DANH SÁCH TRÚNG THƯỞNG</a></li>
        </ul>

        <div class="tab-content" style="background: #1c2529">
            <div id="home" class="tab-pane fade in active">
            	<div class="col-xs-12" style="padding-left: 8%;padding-right: 8%; margin-top: 10px;">
					<div style="font-size: 14px; font-weight: bolder; color: red;">
						[HOT] Cơ hội nhận ngay giải thưởng 50.000đ/ngày và 5.000.000đ/tháng khi tham gia bình chọn thần tượng ngay hôm nay!
					</div>
					<div style="font-size: 14px;">
						Danh sách thần tượng ngày 22/01/2019:
						<br>
						<br>
						Mời bạn tham gia bình chọn Thần Tượng dưới đây:
						<br>
						Ai sẽ là thần tượng của ngày hôm nay?
					</div>
					<div class="row">
						<div class="col-xs-10 col-sm-4 col-md-3">
							<ul style="padding-left: 0px; width: 80%">
								<li class="altt">1. ĐAN TRƯỜNG</li>
								<li class="altt">2. CẨM LY</li>
								<li class="altt">3. SƠN TÙNG ATM</li>
								<li class="altt">4. BÍCH PHƯƠNG</li>
								<li class="altt">5. TRẤN THÀNH</li>
							</ul>
						</div>
					</div>
					<div style="font-size: 14px; margin-bottom: 15px;">
						Soạn <strong style="font-size: 25px;">TT</strong> &lt;mã sỗ&gt; để gửi <strong style="font-size: 25px;">9766</strong> để chọn trả lời câu hỏi.
						<br>
						Ví dụ: TT 1 gửi 9766. Chi tiết truy cập http://khogiaitri.vn hoặc liên hệ 0247.1060808 (cước cố định).
						<br>
						Trân trọng cảm ơn!
					</div>
				</div>
	              
            </div>

			
            <div id="menu1" class="tab-pane fade" style="background-color: #e9ebee; margin-bottom: 50px;">
            	<div class="container">
            		<h2>Danh sách trúng thưởng</h2>
	            	<div class="col-xs-12">
		                <table class="table-bordered table" style="color: black;">
			                <tbody>
			                			<tr>
							            	<td><strong>STT</strong></td>
							            	<td><strong>Số điện thoại</strong></td>
							            	<td><strong>Giá trị giải thưởng</strong></td>
							            	<td><strong>Loại giải thưởng</strong></td>
							            	<td><strong>Thời gian (ngày/tháng/năm)</strong></td>
							            </tr>
			                	<?
							        $i = 1;
							        foreach ($data_reward->result() as $row) { 
							    ?>
							            <tr>
							            	<td><?= $i ?></td>
							            	<td><?= $row->sdt ?></td>
							            	<td><?= number_format($row->reward_amount, 0, '', ','); ?></td>
							            	<td><?= $row->reward_name ?></td>
							            	<td><?= $row->created_at ?></td>
							            </tr>
							    <? $i++;
							        } 
							    ?>
			                </tbody>
		            	</table>
	            	</div>
				</div>
            </div>
        </div>
    </div>
</div>


