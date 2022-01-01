@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('public/css/home.css') }}">
    
@endsection

@section('content')
<div class="container mb-100">
    <div class="row">
        <div class="col-12 mt-4 p-0">
            <h1 class="text-center mtb-20 w-100" style="color: #2f3492">Tờ khai y tế/Vietnam Health Declaration</h1><br>
            <ul class="nav nav-tabs nav-tab tabs d-flex text-center col-12" style="background: #eaeaea"> 
                <li class="tab-item active col-4"><a data-toggle="tab" href="#tab-9-3" data-case="HDLocal">Khai báo di chuyển nội địa<br>For domestic move declaration</a></li>
                <li class="tab-item col-4"><a data-toggle="tab" href="#tab-9-1" data-case="HDPassenger">Cho người nhập cảnh<br>Entry declaration</a></li>
                <li class="tab-item col-4"><a data-toggle="tab" href="#tab-9-2" data-case="HDHealth">Khai báo toàn dân<br>For domestic guests</a></li>
                <div class="line"></div>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="tab-content" style="font-size: 20px">
            <div class="tab-pane active">
                <form action="">
                    @csrf
                    <div class="form-language">
                        <div class="lang-title">Chọn ngôn ngữ để khai báo y tế /Select the language to declare health:</div>
                        <div class="list-lang">
                            <div class="sendType-option inline-block">
                                <label style="font-weight:100;width:auto;display:inline-block;">
                                    <input class="style-radio radio-lang" type="radio" name="fields[lang]" value="vi">
                                    <img alt="" src="{{ asset('/public/front-end/images/vi.jpg') }}" width="70" height="50">
                                </label>
                                 
                                <label style="font-weight:100;width:auto;display:inline-block;">
                                    <input class="style-radio radio-lang" type="radio" name="fields[lang]" value="en" checked="">
                                    <img alt="" src="{{ asset('/public/front-end/images/en.jpg') }}" width="70" height="50">
                                </label>
                            </div>
                        </div>
                    </div>
    
                    <div class="form-resign">
                        <div>
                            <div class="national-brand text-center mb-15"> <div class="text-uppercase"><b>Thông tin khai báo y tế</b></div> <div class="slogan"></div> </div>
                            <div class="text-center text-uppercase"> <div class="">( Phòng chống dịch COVID-19 )</div> <div style="color: red;text-transform: none;">Khuyến cáo: Khai báo thông tin sai là vi phạm pháp luật Việt Nam và có thể xử lý hình sự</div> </div>
                        </div>
    
                        <div class="local-transport-box">
                            <span class="inline-block mr-5 mb-10 text-bold">Di chuyển trong nước</span>
                            <div class="local-transport-infor">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group">
                                            <label>Phương tiện đi lại <em style="line-height: 1">(*)</em></label>
                                            <select class="form-control" name="vehicle"> <option value="airplane">Máy bay</option>
                                                <option value="train">Tàu hỏa</option>
                                                <option value="car">Xe khách</option>
                                                <option value="waterway">Tàu thuyền</option>
                                                <option value="personal">Cá nhân</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="airplane2009" style="display: block;">
                                            <div class="form-group  ">
                                                <label>Mã hiệu chuyến bay</label>
                                                <input type="text" name="flightCode" data-x-suggest="Project.TKYT.Home.LocalTransport.getFlightList" data-value="" value="" class="form-control" placeholder="--Nhập mã hiệu chuyến bay--"> 
                                            </div>
                                        </div> 
                                    </div>
                                </div>
    
                                
                            </div>
                            <div class="other-infor-transport">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Nơi đi  <em style="line-height: 1">(*)</em></label>
                                            <select id="input10995" name="startProvinceId" class="form-control" data-msg-required="Bạn chưa chọn nơi đi">
                                                <option value="">-Chọn-</option>
                                                @foreach ($provinces as $province)
                                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                        <label>Điểm đi  <em style="line-height: 1">(*)</em></label>
                                            <select id="input10996" name="startGateId" class="form-control" data-x-cascade="fields[vehicle]:filters[vehicle],fields[startProvinceId]:filters[provinceId]" data-msg-required="Bạn chưa chọn điểm đi">
                                                <option value="">-Chọn-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                        <label>Nơi đến  <em style="line-height: 1">(*)</em></label>
                                        <select id="input10997" name="endProvinceId" class="form-control" data-msg-required="Bạn chưa chọn nơi đến">
                                            <option value="">-Chọn-</option>
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Điểm đến  <em style="line-height: 1">(*)</em></label>
                                            <select id="input10998" name="endGateId" class="form-control" data-x-cascade="fields[vehicle]:filters[vehicle],fields[endProvinceId]:filters[provinceId]" data-msg-required="Bạn chưa chọn điểm đến">
                                                <option value="">-Chọn-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Số phương tiện  <em style="line-height: 1">(*)</em></label>
                                            <input class="form-control" type="text" name="fields[vehicleCode]" value="" data-msg-required="Bạn chưa điền số phương tiện"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Số ghế </label>
                                            <input class="form-control" type="text" name="seat" value="" data-msg-required="Bạn chưa điền số ghế"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Ngày khởi hành  <em style="line-height: 1">(*)</em></label>
                                            <input id="input11005" type="text" size="10" autocomplete="off" name="startTime" class="form-control hasDatepicker" value="27/12/2021" data-msg-required="Bạn chưa chọn ngày khởi hành" style="z-index: 10; position: relative;">
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="infor-user">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group label-240 ">
                                            <label>Họ tên (ghi chữ IN HOA) <em style="line-height: 1">(*)</em></label>
                                            <input class="form-control" name="fullName" type="text" value="" style="text-transform: uppercase;" data-msg-required="Bạn chưa nhập họ tên"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Số hộ chiếu / CMND / CCCD</label>
                                            <input class="form-control" name="idCard" type="text" value="" data-msg-required="Bạn chưa nhập CMT, hộ chiếu"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Năm sinh  <em style="line-height: 1">(*)</em></label>
                                            <input type="hidden" id="input11006" value="" class="vhv-form-number" name="YoB"><input type="text" value="" size="16" id="numberInput11006" title="" class="formNumberInput form-control "> 
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Giới tính  <em style="line-height: 1">(*)</em></label>
                                            <div id="choicebox11007">
                                         
                                                <table class="">
                                                    <tbody>
                                                        <tr>
                                                            <td><label><input type="radio" value="Nam" checked="checked" name="gender">&nbsp;Nam</label></td><td>&nbsp;</td>
                                                            <td><label><input type="radio" value="Nu" name="gender">&nbsp;Nữ</label></td><td>&nbsp;</td>
                                                            <td><label><input type="radio" value="Khac" name="gender">&nbsp;Khác</label></td><td>&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> 
                                            <div>
                                                <label for="fields[gender]" class="error"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Quốc tịch  <em style="line-height: 1">(*)</em></label>
                                            <select id="input11008" name="nationalityId" style="width: 100%" class="form-control select2-hidden-accessible" data-msg-required="Bạn chưa chọn quốc tịch" data-select2-id="input11008" tabindex="-1" aria-hidden="true">
                                            
                                                <option value="">Chọn</option>
                                                <option value="5b0ec228e138230cb0072f82" selected="selected" data-select2-id="18">Việt Nam</option>
                                                @foreach ($nationalities as $nationality)
                                                    <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="17" style="width: 100%;">
                                                <span class="selection">
                                                    <button type="button" class="select2-selection form-control select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" style="padding:0;text-align:left;" tabindex="0" aria-labelledby="select2-input11008-container"><span class="select2-selection__rendered" id="select2-input11008-container" role="textbox" aria-readonly="true" title="Việt Nam">Việt Nam</span>
                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                    </button>
                                                </span>
                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                            </span> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-20"><b>Địa chỉ liên lạc tại Việt Nam</b></div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Tỉnh thành  <em style="line-height: 1">(*)</em></label>
                                            <select id="selectProvince" name="provinceId" style="width: 100%" class="form-control select2-hidden-accessible" data-msg-required="Bạn chưa chọn tỉnh, thành" data-select2-id="input11009" tabindex="-1" aria-hidden="true">
                                            
                                                <option value="" data-select2-id="20">Chọn</option>
                                                @foreach ($provinces as $province)
                                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="19" style="width: 100%;">
                                                <span class="selection">
                                                    <button type="button" class="select2-selection form-control select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" style="padding:0;text-align:left;" tabindex="0" aria-labelledby="select2-input11009-container"><span class="select2-selection__rendered" id="select2-input11009-container" role="textbox" aria-readonly="true" title="Chọn">Chọn</span>
                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                    </button>
                                                </span>
                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                            </span> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4  col-xs-12 " data-select2-id="139">
                                        <div class="form-group  " data-select2-id="138">
                                        <label>Quận / huyện  <em style="line-height: 1">(*)</em></label>
                                            <select id="selectDistrict" name="fields[districtId]" style="width: 100%" class="form-control select2-hidden-accessible" data-x-cascade="fields[provinceId]:provinceId" data-msg-required="Bạn chưa chọn quận, huyện" data-select2-id="input11010" tabindex="-1" aria-hidden="true">
                                         
                                                <option value="" data-select2-id="22">Chọn</option>
                                                
                                                {{-- @foreach ($districts as $district)
                                                    
                                                @endforeach --}}
                                            </select>
                                            {{-- <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="21" style="width: 100%;">
                                                <span class="selection">
                                                    <button type="button" class="select2-selection form-control select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" style="padding:0;text-align:left;" tabindex="0" aria-labelledby="select2-input11010-container">
                                                        <span class="select2-selection__rendered" id="select2-input11010-container" role="textbox" aria-readonly="true" title="Chọn">Chọn</span>
                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                    </button>
                                                </span>
                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                            </span> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Phường / xã  <em style="line-height: 1">(*)</em></label>
                                            <select id="selectWard" name="wardId" style="width: 100%" class="form-control select2-hidden-accessible" data-x-cascade="fields[districtId]:districtId" data-msg-required="Bạn chưa chọn phường, xã" data-select2-id="input11011" tabindex="-1" aria-hidden="true">
                                            
                                                <option value="" data-select2-id="24">Chọn</option>
                                            </select>
                                            {{-- <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="23" style="width: 100%;">
                                                <span class="selection">
                                                    <button type="button" class="select2-selection form-control select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" style="padding:0;text-align:left;" tabindex="0" aria-labelledby="select2-input11011-container"><span class="select2-selection__rendered" id="select2-input11011-container" role="textbox" aria-readonly="true" title="Chọn">Chọn</span>
                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                    </button>
                                                </span>
                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                            </span> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 ">
                                        <div class="form-group  ">
                                            <label>Số nhà, phố, tổ dân phố/thôn/đội <em style="line-height: 1">(*)</em></label>
                                            <input class="form-control valid" name="address" type="text" value="" data-msg-required="Bạn chưa nhập địa chỉ" aria-required="true" aria-invalid="false"> <label id="fields[address]-error" class="error" style="display: inline;" for="fields[address]"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Điện thoại  <em style="line-height: 1">(*)</em></label>
                                            <input class="form-control" name="phone" type="number" value="0777443873" data-mgs-number="Số điện thoại chỉ được nhập số" data-msg-required="Bạn chưa nhập điện thoại">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Email </label>
                                            <input class="form-control" name="email" data-msg-email="Email không đúng định dạng" type="text" value="" onblur="this.value=removeSpaces(this.value);"> 
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="infor-sign">
                                <div class="row">
                                    <div class="col-12 ">
                                        <div class="form-group form-lenght d-flex">
                                            <label class="mr-5">Trong vòng 14 ngày qua, Anh/Chị có đến tỉnh/thành phố, quốc gia/vùng lãnh thổ nào (Có thể đi qua nhiều nơi)</label>
                                            <div class="mt-10 inline-block pl-10"> 
                                                <input type="radio" name="placeTravelTo" value="0" class="style-radio" checked=""> Không
                                                <input type="radio" name="placeTravelTo" value="1" data-x-group="2" class="style-radio ml-3"> Có
                                            </div> 
                                            <div class="mt-10 placeTravelTo" style="display: none">
                                                <div style="clear:both">
                                                    <textarea class="input11012 form-control" id="input11012" style="/**/height:200pxpx;" name="fields[countryPassing]" disabled="disabled"></textarea>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label class="w-100">Trong vòng 14 ngày qua, Anh/Chị có thấy xuất hiện ít nhất 1 trong các dấu hiệu: sốt, ho, khó thở, viêm phổi, đau họng, mệt mỏi không?</label>
                                        <div class="mt-10 inline-block pl-10"> 
                                            <input type="radio" name="sign" value="0" class="style-radio" checked=""> Không
                                            <input type="radio" name="sign" value="1" data-x-group="1" class="style-radio"> Có
                                        </div>
                                        <div class="mt-10 showSignal" style="display: none;">
                                            <div style="clear:both">
                                                <textarea class="input11013 form-control" id="input11013" style="/**/height:200pxpx;" name="fields[showSignalNote]" disabled="disabled"></textarea>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-10">
                                    <div class="col-12">
                                        <b>Trong vòng 14 ngày qua, Anh/Chị có tiếp xúc với <span class="text-required">(*)</span></b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 ">
                                        <table class="table table-bordered tableData2"> 
                                            <thead> 
                                                <tr> 
                                                    <th scope="col"></th> 
                                                    <th scope="col" style="width:100px;" class="text-center">Có</th> 
                                                    <th scope="col" style="width:100px;" class="text-center">Không</th> 
                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                <tr> 
                                                    <td>Người bệnh hoặc nghi ngờ, mắc bệnh COVID-19 
                                                        <span class="text-required">(*)</span><br>
                                                        <label class="error" for="hasPatient"></label>
                                                    </td> 
                                                    <td class="text-center"> 
                                                        <input type="Radio" class="style-radio" name="hasPatient" value="1" data-msg-required="Bạn chưa chọn lịch sử tiếp xúc">
                                                    </td> 
                                                    <td class="text-center"> <input type="Radio" class="style-radio" name="hasPatient" value="2" checked="">
                                                    </td> 
                                                </tr> 
                                                <tr> 
                                                    <td>Người từ nước có bệnh COVID-19 
                                                        <span class="text-required">(*)</span><br>
                                                        <label class="error" for="hasFromSickCountry"></label>
                                                    </td> 
                                                    <td class="text-center"> 
                                                        <input type="Radio" class="style-radio" name="hasFromSickCountry" value="1" data-msg-required="Bạn chưa chọn lịch sử tiếp xúc">
                                                    </td> 
                                                    <td class="text-center"> <input type="Radio" class="style-radio" name="hasFromSickCountry" value="2" checked="">
                                                    </td> 
                                                </tr> 
                                                <tr> 
                                                    <td>Người có biểu hiện (Sốt, ho, khó thở , Viêm phổi) 
                                                        <span class="text-required">(*)</span><br>
                                                        <label class="error" for="hasSick"></label>
                                                    </td> 
                                                    <td class="text-center"> 
                                                        <input type="Radio" class="style-radio" name="hasSick" value="1" data-msg-required="Bạn chưa chọn lịch sử tiếp xúc">
                                                    </td> 
                                                    <td class="text-center"> <input type="Radio" class="style-radio" name="hasSick" value="2" checked="">
                                                    </td> 
                                                </tr> 
                                            </tbody> 
                                        </table> 
                                    </div>
                                </div>
                            </div>
                            <div class="agree-box">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="label-agree">Dữ liệu bạn cung cấp hoàn toàn bảo mật và chỉ phục vụ cho việc phòng chống dịch, 
                                            thuộc quản lý của Ban chỉ đạo quốc gia về Phòng chống dịch Covid-19. 
                                            Khi bạn nhấn nút "Gửi" là bạn đã hiểu và đồng ý.</div>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center mt-4 mb-4">
                                    <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="invalid-feedback" style="display:block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="btn-submit-box text-center"> <button type="submit" class="btn btn-success" id="btn-submit">Gửi tờ khai</button> </div>
                        </div>
                    </div>
                </form>    
            </div>
            <div class="tab-pane">
                <form action="">
                    @csrf
                    <div class="form-language">
                        <div class="lang-title">Chọn ngôn ngữ để khai báo y tế /Select the language to declare health:</div>
                        <div class="list-lang">
                            <div class="sendType-option inline-block">
                                <label style="font-weight:100;width:auto;display:inline-block;">
                                    <input class="style-radio radio-lang" type="radio" name="fields[lang]" value="vi">
                                    <img alt="" src="{{ asset('/public/front-end/images/vi.jpg') }}" width="70" height="50">
                                </label>
                                 
                                <label style="font-weight:100;width:auto;display:inline-block;">
                                    <input class="style-radio radio-lang" type="radio" name="fields[lang]" value="en" checked="">
                                    <img alt="" src="{{ asset('/public/front-end/images/en.jpg') }}" width="70" height="50">
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-resign">
                        <div>
                            <div class="national-brand text-center mb-15"> <div class="text-uppercase"><b>Tờ khai y tế đối với người nhập cảnh</b></div> <div class="slogan"></div> </div>
                            <div class="text-center text-uppercase"> <div class="">Đây là tài liệu quan trọng, thông tin của anh/chị sẽ giúp cơ quan y tế liên lạc khi cần thiết</div> <div style="color: red;text-transform: none;">Khuyến cáo: Khai báo thông tin sai là vi phạm pháp luật Việt Nam và có thể xử lý hình sự</div> </div>
                        </div>
                        <div class="entry-box">
                            <div class="object-box col-12">
                                <div class="row">
                                    <div class="col-md-6    ">
                                        <div class="form-group  ">
                                            <label>Đối tượng  <em style="line-height: 1">(*)</em></label>
                                            <select name="object" class="form-control" data-msg-required="Bạn chưa chọn đối tượng">
                                                <option value="">-Chọn-</option>
                                                <option value="expert">Chuyên gia</option>
                                                <option value="vietnamese">Người Việt Nam</option>
                                                <option value="internationalStudent">Học sinh/ Sinh viên quốc tế</option>
                                                <option value="other">Khác</option>
                                            </select>
                                        </div> 
                                    </div>
            
                                    <div class="col-md-6    ">
                                        <div class="form-group  ">
                                            <label>Cửa khẩu  <em style="line-height: 1">(*)</em></label>
                                            <select id="input76933" name="gateId" class="form-control select2-hidden-accessible valid" data-msg-required="Bạn chưa chọn cửa khẩu" data-select2-id="input76933" tabindex="-1" aria-hidden="true" aria-required="true" aria-invalid="false">
                                            
                                                <option value="" data-select2-id="203">-Chọn-</option>
                                            </select>
                                        </div>
                                        {{-- <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="202" style="width: 554px;">
                                            <span class="selection">
                                                <button type="button" class="select2-selection form-control select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" style="padding:0;text-align:left;" tabindex="0" aria-labelledby="select2-input76933-container">
                                                    <span class="select2-selection__rendered" id="select2-input76933-container" role="textbox" aria-readonly="true" title="Sân Bay quốc tế Đà Nẵng">Sân Bay quốc tế Đà Nẵng</span>
                                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                </button>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                        <label id="input76933-error" class="error" style="display: inline;" for="input76933"></label></div>  --}}
                                    </div>
                                </div>
                            </div>
                            <div class="infor-user col-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group label-240 ">
                                            <label>Họ tên (ghi chữ IN HOA) <em style="line-height: 1">(*)</em></label>
                                            <input class="form-control" name="fullName" type="text" value="" style="text-transform: uppercase;" data-msg-required="Bạn chưa nhập họ tên"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Số hộ chiếu / CMND / CCCD</label>
                                            <input class="form-control" name="idCard" type="text" value="" data-msg-required="Bạn chưa nhập CMT, hộ chiếu"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Năm sinh  <em style="line-height: 1">(*)</em></label>
                                            <input type="hidden" id="input11006" value="" class="vhv-form-number" name="YoB"><input type="text" value="" size="16" id="numberInput11006" title="" class="formNumberInput form-control "> 
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Giới tính  <em style="line-height: 1">(*)</em></label>
                                            <div id="choicebox11007">
                                         
                                                <table class="">
                                                    <tbody>
                                                        <tr>
                                                            <td><label><input type="radio" value="Nam" checked="checked" name="gender">&nbsp;Nam</label></td><td>&nbsp;</td>
                                                            <td><label><input type="radio" value="Nu" name="gender">&nbsp;Nữ</label></td><td>&nbsp;</td>
                                                            <td><label><input type="radio" value="Khac" name="gender">&nbsp;Khác</label></td><td>&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> 
                                            <div>
                                                <label for="fields[gender]" class="error"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Quốc tịch  <em style="line-height: 1">(*)</em></label>
                                            <select id="input11008" name="nationalityId" style="width: 100%" class="form-control select2-hidden-accessible" data-msg-required="Bạn chưa chọn quốc tịch" data-select2-id="input11008" tabindex="-1" aria-hidden="true">
                                            
                                                <option value="">Chọn</option>
                                                {{-- <option value="5b0ec228e138230cb0072f82" selected="selected" data-select2-id="18">Việt Nam</option> --}}
                                                @foreach ($nationalities as $nationality)
                                                    <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                                                @endforeach
                                            
                                            </select>
                                            {{-- <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="17" style="width: 100%;">
                                                <span class="selection">
                                                    <button type="button" class="select2-selection form-control select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" style="padding:0;text-align:left;" tabindex="0" aria-labelledby="select2-input11008-container"><span class="select2-selection__rendered" id="select2-input11008-container" role="textbox" aria-readonly="true" title="Việt Nam">Việt Nam</span>
                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                    </button>
                                                </span>
                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                            </span> --}}
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="infor-transport col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group  ">
                                            <label>Thông tin đi lại  <em style="line-height: 1">(*)</em></label>
                                            <div class="vehicleChoice">
                                                <label class="vehicle-flex mr-2">
                                                    <input name="tralvelInfor" type="radio" class="style-radio mr-1" value="airplane" data-msg-required="Bạn chưa chọn thông tin đi lại">
                                                    <span>Tàu bay</span>
                                                </label>
                                                <label class="vehicle-flex mr-2">
                                                    <input name="tralvelInfor" type="radio" class="style-radio mr-1" value="boat" data-msg-required="Bạn chưa chọn thông tin đi lại"><span>Tàu thuyền</span>
                                                </label>
                                                <label class="vehicle-flex mr-2">
                                                    <input name="tralvelInfor" type="radio" class="style-radio mr-1" value="car" data-msg-required="Bạn chưa chọn thông tin đi lại">
                                                    <span>Ô tô</span>
                                                </label>
                                                <label class="vehicle-flex mr-2 vehicle-other">
                                                    <input name="tralvelInfor" type="radio" class="style-radio mr-1" value="vehicleOther" data-msg-required="Bạn chưa chọn thông tin đi lại">
                                                    <span>Khác (Ghi rõ)</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6  col-xs-6 ">
                                        <div class="form-group  ">
                                            <label>Số hiệu phương tiện <em style="padding-left: 3px">(*)</em></label>
                                            <input class="form-control" name="TransportationNo" type="text" value="" data-msg-required="Bạn chưa nhập số hiệu phương tiện" placeholder="VD: VN123" onblur="this.value=removeSpaces(this.value);" required="required">
                                        </div> 
                                    </div>
                                    <div class="col-md-6 col-sm-6  col-xs-6 ">
                                        <div class="form-group  ">
                                            <label>Số ghế <em style="padding-left: 3px">(*)</em></label>
                                            <input class="form-control" name="SeatNo" type="text" value="" data-msg-required="Bạn chưa nhập số ghế" onblur="this.value=removeSpaces(this.value);" required="required">
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Ngày khởi hành  <em style="line-height: 1">(*)</em></label>
                                            <div class="dateInputText d-flex">
                                                <div class="day d-inline-b col-4 pl-0">
                                                    <select class="input-text form-control" name="startDay" data-msg-required="Bạn chưa chọn ngày khởi hành">
                                                        <option value="">Ngày</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option selected="" value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                        
                                                    </select>
                                                </div>
                                                <div class="month d-inline-b col-4">
                                                    <select class="input-text form-control" name="startMonth" data-msg-required="Bạn chưa chọn tháng khởi hành">
                                                        <option value="">Tháng</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option selected="" value="12">12</option>
                                                        
                                                    </select>
                                                </div>
                                                <div class="year d-inline-b col-4">
                                                    <select class="input-text form-control" name="startYear" data-msg-required="Bạn chưa chọn năm khởi hành">
                                                        <option value="">Năm</option>
                                                        <option value="2022">2022</option>
                                                        <option selected="" value="2021">2021</option>
                                                        <option value="2020">2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Ngày nhập cảnh  <em style="line-height: 1">(*)</em></label>
                                            <div class="dateInputText d-flex">
                                                <div class="day d-inline-b col-4 pl-0">
                                                    <select class="input-text form-control" name="fields[startDay]" data-msg-required="Bạn chưa chọn ngày khởi hành">
                                                        <option value="">Ngày</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option selected="" value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                        
                                                    </select>
                                                </div>
                                                <div class="month d-inline-b col-4">
                                                    <select class="input-text form-control" name="fields[startMonth]" data-msg-required="Bạn chưa chọn tháng khởi hành">
                                                        <option value="">Tháng</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option selected="" value="12">12</option>
                                                        
                                                    </select>
                                                </div>
                                                <div class="year d-inline-b col-4">
                                                    <select class="input-text form-control" name="fields[startYear]" data-msg-required="Bạn chưa chọn năm khởi hành">
                                                        <option value="">Năm</option>
                                                        <option value="2022">2022</option>
                                                        <option selected="" value="2021">2021</option>
                                                        <option value="2020">2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><label class="mb-10 "><b>Địa điểm khởi hành (tỉnh/quốc gia)</b></label></div>
                                    <div class="col-md-6 col-sm-6   ">
                                        <div class="form-group  ">
                                            <label>Quốc gia/ Vùng lãnh thổ  <em style="line-height: 1">(*)</em></label>
                                            <select id="input3148" name="CountryOfDeparture" class="form-control" data-msg-required="Bạn chưa chọn quốc gia">
                                            
                                                <option value="">-Chọn-</option>
                                                @foreach ($nationalities as $nationality)
                                                    <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                                                @endforeach
                                            </select>
                                        </div> 
                                    </div>
                                    <div class="col-md-6 col-sm-6   ">
                                        <div class="form-group  ">
                                            <label>Tỉnh  <em style="line-height: 1">(*)</em></label>
                                            <div class="input-province province">
                                                <div data-x-display="['5b0ec228e138230cb0072f82','5d8c3cae76801b4a0103e55e','5d8c3cae76801b4a0103e592','5d66285476801b3f8d00fd64','5d8c3cae76801b4a0103e55f','5d66287a76801b3f846a3e03','5d8c3cae76801b4a0103e5d0'].indexOf($('#form1009 select[name=&quot;fields[countryStartPlace]&quot;]').val()) !== -1" style="display: none;">
                                                    <div class="input-provinceId">
                                                        <select id="input3149" name="ProvinceOfDeparture" class="form-control select2-hidden-accessible" data-x-cascade="fields[countryStartPlace]:parentId" data-msg-required="Bạn chưa chọn tỉnh" data-select2-id="input3149" tabindex="-1" aria-hidden="true">
                                                
                                                            <option value="" data-select2-id="14">-Chọn-</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="13" style="width: 554px;"><span class="selection"><button type="button" class="select2-selection form-control select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" style="padding:0;text-align:left;" tabindex="0" aria-labelledby="select2-input3149-container"><span class="select2-selection__rendered" id="select2-input3149-container" role="textbox" aria-readonly="true" title="-Chọn-">-Chọn-</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></button></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                
                                                    </div>
                                                </div>  
                                                <div data-x-display="['5b0ec228e138230cb0072f82','5d8c3cae76801b4a0103e55e','5d8c3cae76801b4a0103e592','5d66285476801b3f8d00fd64','5d8c3cae76801b4a0103e55f','5d66287a76801b3f846a3e03','5d8c3cae76801b4a0103e5d0'].indexOf($('#form1009 select[name=&quot;fields[countryStartPlace]&quot;]').val()) == -1">
                                                    <div class="input-provinceText">
                                                        <input class="form-control" name="ProvinceOfDeparture" type="text" value="" data-msg-required="Bạn chưa chọn tỉnh">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><label class="mb-10 ">Địa điểm nơi đến (tỉnh/quốc gia)</label></div>
                                    <div class="col-md-6 col-sm-6   ">
                                        <div class="form-group  ">
                                            <label>Quốc gia/ Vùng lãnh thổ  <em style="line-height: 1">(*)</em></label>
                                            <select id="input3148" name="fields[countryStartPlace]" class="form-control" data-msg-required="Bạn chưa chọn quốc gia">
                                            
                                                <option value="">-Chọn-</option>
                                                @foreach ($nationalities as $nationality)
                                                    <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                                                @endforeach
                                            </select>
                                        </div> 
                                    </div>
                                    <div class="col-md-6 col-sm-6   ">
                                        <div class="form-group  ">
                                            <label>Tỉnh  <em style="line-height: 1">(*)</em></label>
                                            <div class="input-province province">
                                                <div data-x-display="['5b0ec228e138230cb0072f82','5d8c3cae76801b4a0103e55e','5d8c3cae76801b4a0103e592','5d66285476801b3f8d00fd64','5d8c3cae76801b4a0103e55f','5d66287a76801b3f846a3e03','5d8c3cae76801b4a0103e5d0'].indexOf($('#form1009 select[name=&quot;fields[countryStartPlace]&quot;]').val()) !== -1" style="display: none;">
                                                    <div class="input-provinceId">
                                                        <select id="input3149" name="fields[startProvinceId]" class="form-control select2-hidden-accessible" data-x-cascade="fields[countryStartPlace]:parentId" data-msg-required="Bạn chưa chọn tỉnh" data-select2-id="input3149" tabindex="-1" aria-hidden="true">
                                                
                                                            <option value="" data-select2-id="14">-Chọn-</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="13" style="width: 554px;"><span class="selection"><button type="button" class="select2-selection form-control select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" style="padding:0;text-align:left;" tabindex="0" aria-labelledby="select2-input3149-container"><span class="select2-selection__rendered" id="select2-input3149-container" role="textbox" aria-readonly="true" title="-Chọn-">-Chọn-</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></button></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                
                                                    </div>
                                                </div>  
                                                <div data-x-display="['5b0ec228e138230cb0072f82','5d8c3cae76801b4a0103e55e','5d8c3cae76801b4a0103e592','5d66285476801b3f8d00fd64','5d8c3cae76801b4a0103e55f','5d66287a76801b3f846a3e03','5d8c3cae76801b4a0103e5d0'].indexOf($('#form1009 select[name=&quot;fields[countryStartPlace]&quot;]').val()) == -1">
                                                    <div class="input-provinceText">
                                                        <input class="form-control" name="fields[startPlace]" type="text" value="" data-msg-required="Bạn chưa chọn tỉnh">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Trong vòng 14 ngày qua, Anh/Chị có đến quốc gia/vùng lãnh thổ nào? <em style="line-height: 1">(*)</em></label>
                                            <div style="clear:both">
                                                <textarea class="input2206 form-control full-width" id="input2206" style="/**/" name="fields[countryPassing]" onblur="var currentModule = VHV.App.modules[2009], input=this, value = this.value;this.value=removeSpaces(this.value);" data-msg-required="Bạn chưa điền tỉnh / thành phố / lãnh thổ / quốc gia đã đi đến trong 14 ngày qua" spellcheck="false"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quanrantine-address">
                                    <div class="mb-10"><b>Nơi lưu trú sau cách ly tập trung</b></div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4  col-xs-12 ">
                                            <div class="form-group  ">
                                                <label>Tỉnh / thành  <em style="line-height: 1">(*)</em></label>
                                                <select id="input2207" name="fields[afterIsolationStayProvinceId]" class="form-control" data-msg-required="Bạn chưa chọn tỉnh, thành">
                                                    <option value="">-Chọn-</option>
                                                    @foreach ($provinces as $province)
                                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="col-md-4 col-sm-4  col-xs-12 ">
                                            <div class="form-group  ">
                                                <label>Quận / huyện  <em style="line-height: 1">(*)</em></label>
                                                
                                                <select id="input2208" name="fields[afterIsolationStayDistrictId]" class="form-control" data-x-cascade="fields[afterIsolationStayProvinceId]:provinceId" data-msg-required="Bạn chưa chọn quận, huyện">
                                            
                                                    <option value="">-Chọn-</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="col-md-4 col-sm-4  col-xs-12 ">
                                            <div class="form-group  ">
                                                <label>Phường / xã  <em style="line-height: 1">(*)</em></label>
                                                <select id="input2209" name="fields[afterIsolationStayWardId]" class="form-control" data-x-cascade="fields[afterIsolationStayDistrictId]:districtId" data-msg-required="Bạn chưa chọn phường, xã">
                                                
                                                    <option value="">-Chọn-</option>
                                                </select>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="form-group  ">
                                                <label>Địa chỉ lưu trú sau cách ly <em style="line-height: 1">(*)</em></label>
                                                <input class="form-control" width="100%" name="fields[addressStayAfterIsolation]" type="text" value="" onblur="this.value=removeSpaces(this.value);">
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-address">
                                    <div class="mb-10"><b>Địa chỉ liên lạc tại Việt Nam</b></div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4  col-xs-12 ">
                                            <div class="form-group  ">
                                                <label>Tỉnh / thành  <em style="line-height: 1">(*)</em></label>
                                                <select id="input2207" name="fields[afterIsolationStayProvinceId]" class="form-control" data-msg-required="Bạn chưa chọn tỉnh, thành">
                                                    <option value="">-Chọn-</option>
                                                    @foreach ($provinces as $province)
                                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="col-md-4 col-sm-4  col-xs-12 ">
                                            <div class="form-group  ">
                                                <label>Quận / huyện  <em style="line-height: 1">(*)</em></label>
                                                
                                                <select id="input2208" name="fields[afterIsolationStayDistrictId]" class="form-control" data-x-cascade="fields[afterIsolationStayProvinceId]:provinceId" data-msg-required="Bạn chưa chọn quận, huyện">
                                            
                                                    <option value="">-Chọn-</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="col-md-4 col-sm-4  col-xs-12 ">
                                            <div class="form-group  ">
                                                <label>Phường / xã  <em style="line-height: 1">(*)</em></label>
                                                <select id="input2209" name="fields[afterIsolationStayWardId]" class="form-control" data-x-cascade="fields[afterIsolationStayDistrictId]:districtId" data-msg-required="Bạn chưa chọn phường, xã">
                                                
                                                    <option value="">-Chọn-</option>
                                                </select>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="form-group full-width">
                                                <label>Địa chỉ nơi ở tại Việt Nam  <em style="line-height: 1">(*)</em></label>
                                                <input class="form-control full-width" width="100%" name="fields[address]" type="text" value="" data-msg-required="Bạn chưa nhập địa chỉ" onblur="this.value=removeSpaces(this.value);">
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6    ">
                                            <div class="form-group  ">
                                                <label>Điện thoại  <em style="line-height: 1">(*)</em></label>
                                                <input class="form-control" name="fields[phone]" type="text" onkeypress="return keypress(event)" value="" data-msg-required="Bạn chưa nhập điện thoại">
                                            </div> 
                                        </div>
                                        <div class="col-md-6    ">
                                            <div class="form-group  ">
                                                <label>Email </label>
                                                <input class="form-control" name="fields[email]" data-msg-email="Email không đúng định dạng" type="text" value="" onblur="this.value=removeSpaces(this.value);">
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="sign">
                                    <div class="mb-10"><b>Trong vòng 14 ngày (tính đến thời điểm làm thủ tục xuất cảnh, nhập cảnh, quá cảnh) Anh/Chị có thấy xuất hiện dấu hiệu nào sau đây không? <span class="text-required">(*)</span></b></div>
                                    <div class="tableChoiceData d-flex col-12 mb-20 p-0">
                                        <div class="cols-left col-6 p-0 pr-4">
                                            <table class="table table-bordered ">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Triệu chứng</th>
                                                        <th scope="col" style="width:70px;" class="text-center">Có</th>
                                                        <th scope="col" style="width:70px;" class="text-center">Không</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Sốt <span class="text-required">(*)</span><br><label class="error" for="fields[hasFever]"></label></td>
                                                        <td class="text-center" style="width:70px;"><input type="Radio" class="style-radio" name="fields[hasFever]" value="1" data-msg-required="Bạn chưa chọn triệu chứng"></td>
                                                        <td class="text-center" style="width:70px;"><input type="Radio" class="style-radio" name="fields[hasFever]" value="2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ho <span class="text-required">(*)</span><br><label class="error" for="fields[hasCough]"></label></td>
                                                        <td class="text-center" style="width:70px;"><input type="Radio" class="style-radio" name="fields[hasCough]" value="1" data-msg-required="Bạn chưa chọn triệu chứng"></td>
                                                        <td class="text-center" style="width:70px;"><input type="Radio" class="style-radio" name="fields[hasCough]" value="2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Khó thở <span class="text-required">(*)</span><br><label class="error" for="fields[hasBreath]"></label></td>
                                                        <td class="text-center" style="width:70px;"><input type="Radio" class="style-radio" name="fields[hasBreath]" value="1" data-msg-required="Bạn chưa chọn triệu chứng"></td>
                                                        <td class="text-center" style="width:70px;"><input type="Radio" class="style-radio" name="fields[hasBreath]" value="2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Đau họng <span class="text-required">(*)</span><br><label class="error" for="fields[hasSoreThroat]"></label></td>
                                                        <td class="text-center" style="width:70px;"><input type="Radio" class="style-radio" name="fields[hasSoreThroat]" value="1" data-msg-required="Bạn chưa chọn triệu chứng"></td>
                                                        <td class="text-center" style="width:70px;"><input type="Radio" class="style-radio" name="fields[hasSoreThroat]" value="2"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="cols-right col-6 p-0">
                                            <table class="table table-bordered ">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Triệu chứng</th>
                                                        <th scope="col" style="width:70px;" class="text-center">Có</th>
                                                        <th scope="col" style="width:70px;" class="text-center">Không</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Nôn/buồn nôn <span class="text-required">(*)</span><br><label class="error" for="fields[hasNausea]"></label></td>
                                                        <td style="width:70px;" class="text-center"><input type="Radio" class="style-radio" name="fields[hasNausea]" value="1" data-msg-required="Bạn chưa chọn triệu chứng"></td>
                                                        <td style="width:70px;" class="text-center"><input type="Radio" class="style-radio" name="fields[hasNausea]" value="2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tiêu chảy <span class="text-required">(*)</span><br><label class="error" for="fields[hasDiarrhea]"></label></td>
                                                        <td class="text-center" style="width:70px;"><input type="Radio" class="style-radio" name="fields[hasDiarrhea]" value="1" data-msg-required="Bạn chưa chọn triệu chứng"></td>
                                                        <td class="text-center" style="width:70px;"><input type="Radio" class="style-radio" name="fields[hasDiarrhea]" value="2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Xuất huyết ngoài da <span class="text-required">(*)</span><br><label class="error" for="fields[hasHemorrhage]"></label></td>
                                                        <td class="text-center" style="width:70px;"><input type="Radio" class="style-radio" name="fields[hasHemorrhage]" value="1" data-msg-required="Bạn chưa chọn triệu chứng"></td>
                                                        <td class="text-center" style="width:70px;"><input type="Radio" class="style-radio" name="fields[hasHemorrhage]" value="2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nổi ban ngoài da <span class="text-required">(*)</span><br><label class="error" for="fields[hasRash]"></label></td>
                                                        <td class="text-center" style="width:70px;"><input type="Radio" class="style-radio" name="fields[hasRash]" value="1" data-msg-required="Bạn chưa chọn triệu chứng"></td>
                                                        <td class="text-center" style="width:70px;"><input type="Radio" class="style-radio" name="fields[hasRash]" value="2"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12   col-xs-12 ">
                                        <div class="form-group  ">
                                            <label>Danh sách vắc-xin hoặc sinh phẩm được sử dụng </label>
                                            <div class="form-group full-width">
                                                <input class="form-control full-width" width="100%" name="fields[address]" type="text" value="" data-msg-required="Bạn chưa nhập địa chỉ" onblur="this.value=removeSpaces(this.value);">
                                            </div>  
                                        </div> 
                                    </div>
                                </div>
                                <div class="history">
                                    <div class="mb-10"><b>Lịch sử phơi nhiễm: Trong vòng 14 ngày qua, Anh/Chị có <span class="text-required">(*)</span></b></div>
                                    <div class="row ">
                                        <div class="   col-12 ">
                                            <table class="table table-bordered ">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"></th>
                                                        <th scope="col" style="width:70px;" class="text-center">Có</th>
                                                        <th scope="col" style="width:70px;" class="text-center">Không</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Đến trang trại chăn nuôi / chợ buôn bán động vật sống / cơ sở giết mổ động vật / tiếp xúc động vật <span class="text-required">(*)</span><br><label class="error" for="fields[hasAnimal]"></label></td>
                                                        <td style="width:70px;" class="text-center">
                                                            <input type="Radio" class="style-radio" name="fields[hasAnimal]" value="1" data-msg-required="Bạn chưa chọn lịch sử phơi nhiễm">
                                                        </td>
                                                        <td style="width:70px;" class="text-center">
                                                            <input type="Radio" class="style-radio" name="fields[hasAnimal]" value="2">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tiếp xúc gần (&lt;2m) với người mắc bệnh viêm đường hô hấp do nCoV <span class="text-required">(*)</span><br><label class="error" for="fields[hasPatient]"></label></td>
                                                        <td class="text-center">
                                                            <input type="Radio" class="style-radio" name="fields[hasPatient]" value="1" data-msg-required="Bạn chưa chọn lịch sử phơi nhiễm">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="Radio" class="style-radio" name="fields[hasPatient]" value="2">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> 
                                    </div>
                                </div>
                                <div class="QuanrantineFacility">
                                    <div class="mb-10 col-xs-12">
                                        <div class="mb-10"><b>Chọn cơ sở cách ly <span class="text-required">(*)</span></b></div>
                                        <div class="flex option-isolation-base" style="align-items: center;">
                                            <div class="pull-left mr-20">
                                                <div class="">
                                                    <label>
                                                        <input class="style-radio radio-option" type="radio" name="fields[optionIsolationBase]" filters[benhvien]="1" value="1">Cơ sở cách ly tập trung</label>
                                                </div>
                                                <div class="">
                                                    <label><input class="style-radio radio-option-2" type="radio" name="fields[optionIsolationBase]" value="2" disabled="disabled">Cơ sở cách ly tự chọn</label>
                                                </div>
                                                <div>
                                                    <label><input class="style-radio radio-option-3" type="radio" name="fields[optionIsolationBase]" value="3">Khác</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row certificate">
                                    <div class="col-12">
                                        <div class="mb-10 text-bold">Phiếu kết quả xét nghiệm/ giấy chứng nhận khỏi covid</div>
                                        <div class="uploadImage">
                                            <div class="wrap-file-uploader  ">
                                                <div id="imageResult2216" class="uploadifyImageResult"></div> 
                                                <div id="file-uploader2216" class="file-uploader">
                                                    <div class="qq-uploader">
                                                        <div class="qq-upload-drop-area" style="display: none;">
                                                            <span>Drop files here to upload</span>
                                                        </div>
                                                        <div class="qq-upload-button" style="position: relative; overflow: hidden; direction: ltr;">
                                                            <span>Chọn File</span>
                                                            <input type="file" name="file" accept=".jpg,.gif,.png,.jpeg,.bmp,.webp,.heic,.ico,.xls,.doc,.rar,.zip,.7zip,.ppt,.xlsx,.docx,.pptx,.pdf,.txt,.html,.htm" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;">
                                                        </div>
                                                        <ul class="qq-upload-list"></ul>
                                                    </div>
                                                </div> 
                                                <input type="hidden" id="input2216" value="" name="fields[fileAttack]" size="40">
                                            </div>
    
                                        </div>
                                        <div class="mb-10">
                                            <input id="input2217" type="text" size="10" autocomplete="off" name="fields[testDate]" class="form-control hasDatepicker" placeholder="Ngày xét nghiệm" value="" style="z-index: 10; position: relative;">
                                        </div>
                                        <div class="mt-10"><label><input class="style-checkbox" type="checkbox" name="fields[resultType]" value="1"> Xác nhận âm tính</label></div>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center mt-4 mb-4">
                                    <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="invalid-feedback" style="display:block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="btn-submit-box text-center"> <button type="submit" class="btn btn-success" id="btn-submit">Gửi tờ khai</button> </div>
    
                            </div>
                        </div>
                        
    
                        
                    </div>
                </form>
            </div>
            <div class="tab-pane">
                <form action="{{ route('domesticGuest.store') }}" method="POST">
                    @csrf
                    <div class="form-language">
                        <div class="lang-title">Chọn ngôn ngữ để khai báo y tế /Select the language to declare health:</div>
                        <div class="list-lang">
                            <div class="sendType-option inline-block">
                                <label style="font-weight:100;width:auto;display:inline-block;" for="lang-vi">
                                    <input id="lang-vi" class="style-radio " type="radio" name="fields[lang]" value="vi" checked="" style="display: none">
                                    <img alt="" src="{{ asset('/public/front-end/images/vi.jpg') }}" width="70" height="50">
                                    
                                </label>
                                 
                                <label style="font-weight:100;width:auto;display:inline-block;">
                                    <input class="style-radio " id="lang-eng" type="radio" name="fields[lang]" value="en" onclick="switchLanguage()" style="display: none">
                                    <img alt="" src="{{ asset('/public/front-end/images/en.jpg') }}" width="70" height="50">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-resign">
                        <div>
                            <div class="text-center mb-15"> 
                                <div class="text-uppercase DG-national-brand"><b>Thông tin khai báo y tế</b></div> 
                                <div class="slogan"></div> 
                            </div>
                            <div class="text-center text-uppercase"> 
                                <div class="DG-national-description">( Phòng chống dịch COVID-19 )</div> 
                                <div class="DG-warning" style="color: red;text-transform: none;">Khuyến cáo: Khai báo thông tin sai là vi phạm pháp luật Việt Nam và có thể xử lý hình sự</div> 
                            </div>
                        </div>
                        <div class="guest-box">
                            <div class="infor-user">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group label-240 ">
                                            <label class="DG-fullName">Họ tên (ghi chữ IN HOA) <em style="line-height: 1">(*)</em></label>
                                            <input class="form-control" name="fullName" type="text" value="{{ session()->get('name') }}" style="text-transform: uppercase;" data-msg-required="Bạn chưa nhập họ tên"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label class="DG-idCard">Số hộ chiếu / CMND / CCCD</label>
                                            <input class="form-control" name="idCard" type="text" value="" data-msg-required="Bạn chưa nhập CMT, hộ chiếu"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label class="DG-YoB">Năm sinh  <em style="line-height: 1">(*)</em></label>
                                            <input type="hidden" id="input11006" value="" class="vhv-form-number" >
                                            <input name="YoB" type="text" value="" size="16" id="numberInput11006" title="" class="formNumberInput form-control "> 
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label class="DG-gender">Giới tính  <em style="line-height: 1">(*)</em></label>
                                            <div id="choicebox11007">
                                         
                                                <table class="">
                                                    <tbody>
                                                        <tr>
                                                            <td><label><input type="radio" value="Nam" checked="checked" name="gender">&nbsp;<span class="DG-male">Nam</span></label></td><td>&nbsp;</td>
                                                            <td><label><input type="radio" value="Nu" name="gender">&nbsp;<span class="DG-female">Nữ</span></label></td><td>&nbsp;</td>
                                                            <td><label><input type="radio" value="Khac" name="gender">&nbsp;<span class="DG-other">Khác</span></label></td><td>&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> 
                                            <div>
                                                <label for="fields[gender]" class="error"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label class="DG-nationality">Quốc tịch  <em style="line-height: 1">(*)</em></label>
                                            <select id="input11008" name="nationalityId" style="width: 100%" class="form-control select2-hidden-accessible" data-msg-required="Bạn chưa chọn quốc tịch" data-select2-id="input11008" tabindex="-1" aria-hidden="true">
                                            
                                                <option value="">Chọn</option>
                                                <option value="5b0ec228e138230cb0072f82" selected="selected" data-select2-id="18">Việt Nam</option>
                                                @foreach ($nationalities as $nationality)
                                                    <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="17" style="width: 100%;">
                                                <span class="selection">
                                                    <button type="button" class="select2-selection form-control select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" style="padding:0;text-align:left;" tabindex="0" aria-labelledby="select2-input11008-container"><span class="select2-selection__rendered" id="select2-input11008-container" role="textbox" aria-readonly="true" title="Việt Nam">Việt Nam</span>
                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                    </button>
                                                </span>
                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                            </span> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-20 "><b><span class="DG-contact">Địa chỉ liên lạc tại Việt Nam</span></b></div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label><span class="DG-contact-province">Tỉnh thành</span>  <em style="line-height: 1">(*)</em></label>
                                            <select id="input11009" name="fields[provinceId]" style="width: 100%" class="form-control select2-hidden-accessible" data-msg-required="Bạn chưa chọn tỉnh, thành" data-select2-id="input11009" tabindex="-1" aria-hidden="true">
                                            
                                                <option value="" data-select2-id="20">Chọn</option>
                                                @foreach ($provinces as $province)
                                                    <option value="{{ $province->id }}" data-select2-id="20">{{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="19" style="width: 100%;">
                                                <span class="selection">
                                                    <button type="button" class="select2-selection form-control select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" style="padding:0;text-align:left;" tabindex="0" aria-labelledby="select2-input11009-container"><span class="select2-selection__rendered" id="select2-input11009-container" role="textbox" aria-readonly="true" title="Chọn">Chọn</span>
                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                    </button>
                                                </span>
                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                            </span> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4  col-xs-12 " data-select2-id="139">
                                        <div class="form-group  " data-select2-id="138">
                                        <label><span class="DG-contact-district">Quận / huyện</span>  <em style="line-height: 1">(*)</em></label>
                                            <select id="input11010" name="fields[districtId]" style="width: 100%" class="form-control select2-hidden-accessible" data-x-cascade="fields[provinceId]:provinceId" data-msg-required="Bạn chưa chọn quận, huyện" data-select2-id="input11010" tabindex="-1" aria-hidden="true">
                                         
                                                <option value="" data-select2-id="22">Chọn</option>
                                                @foreach ($districts as $district)
                                                    <option value="{{ $district->id }}" data-select2-id="22">{{ $district->name }}</option>
                            
                                                @endforeach
                                            </select>
                                            {{-- <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="21" style="width: 100%;">
                                                <span class="selection">
                                                    <button type="button" class="select2-selection form-control select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" style="padding:0;text-align:left;" tabindex="0" aria-labelledby="select2-input11010-container">
                                                        <span class="select2-selection__rendered" id="select2-input11010-container" role="textbox" aria-readonly="true" title="Chọn">Chọn</span>
                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                    </button>
                                                </span>
                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                            </span> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label><span class="DG-contact-ward">Phường / xã  </span><em style="line-height: 1">(*)</em></label>
                                            <select id="input11011" name="wardId" style="width: 100%" class="form-control select2-hidden-accessible" data-x-cascade="fields[districtId]:districtId" data-msg-required="Bạn chưa chọn phường, xã" data-select2-id="input11011" tabindex="-1" aria-hidden="true">
                                            
                                                <option value="" data-select2-id="24">Chọn</option>
                                                @foreach ($wards as $ward)
                                                    <option value="{{ $ward->id }}" data-select2-id="22">{{ $ward->name }}</option>
                            
                                                @endforeach
                                            </select>
                                            {{-- <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="23" style="width: 100%;">
                                                <span class="selection">
                                                    <button type="button" class="select2-selection form-control select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" style="padding:0;text-align:left;" tabindex="0" aria-labelledby="select2-input11011-container"><span class="select2-selection__rendered" id="select2-input11011-container" role="textbox" aria-readonly="true" title="Chọn">Chọn</span>
                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                    </button>
                                                </span>
                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                            </span> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 ">
                                        <div class="form-group  ">
                                            <label><span class="DG-contact-street">Số nhà, phố, tổ dân phố/thôn/đội </span><em style="line-height: 1">(*)</em></label>
                                            <input class="form-control valid" name="address" type="text" value="" data-msg-required="Bạn chưa nhập địa chỉ" aria-required="true" aria-invalid="false"> <label id="fields[address]-error" class="error" style="display: inline;" for="fields[address]"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label><span class="DG-contact-phone">Điện thoại  </span><em style="line-height: 1">(*)</em></label>
                                            <input class="form-control" name="phone" type="number" value="" data-mgs-number="Số điện thoại chỉ được nhập số" data-msg-required="Bạn chưa nhập điện thoại">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6  col-xs-12 ">
                                        <div class="form-group  ">
                                            <label><span class="DG-contact-email">Email </span></label>
                                            <input class="form-control" name="email" data-msg-email="Email không đúng định dạng" type="text" value="{{ session()->get('email') }}" onblur="this.value=removeSpaces(this.value);"> 
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="infor-sign">
                                <div class="row">
                                    <div class="col-12 ">
                                        <div class="form-group form-lenght d-flex">
                                            <label class="mr-2"><span class="DG-traveledTo-title">Trong vòng 14 ngày qua, Anh/Chị có đến tỉnh/thành phố, quốc gia/vùng lãnh thổ nào (Có thể đi qua nhiều nơi)</span></label>
                                            <div class="mt-10 inline-block pl-10"> 
                                                <label for="">
                                                    <input type="radio" name="placeTravelTo" value="0" class="style-radio" checked=""> <span class="DG-traveledTo-no" onclick="hideFormPlaceTravelTo()">Không</span>
                                                </label>
                                                <label for="placeTravelTo">
                                                    <input type="radio" name="placeTravelTo" value="1" data-x-group="2" class="style-radio ml-3" onclick="showFormPlaceTravelTo()"> 
                                                    <span class="DG-traveledTo-yes">Có</span>
                                                </label>
                                            </div> 
                                             
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div id="placeTravelTo1" class="mt-10 " style="display: none">
                                            <textarea name="placeTravelTo1" id="" style="width: 100%" rows="2"></textarea>
                                            {{-- <div style="clear:both">
                                                <textarea class="input11012 form-control" id="input11012" style="/**/height:200pxpx;" name="fields[countryPassing]"></textarea>
                                            </div>  --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label class="w-100"><span class="DG-hasSign-title">Trong vòng 14 ngày qua, Anh/Chị có thấy xuất hiện ít nhất 1 trong các dấu hiệu: sốt, ho, khó thở, viêm phổi, đau họng, mệt mỏi không?</span></label>
                                        <div class="mt-10 inline-block pl-10"> 
                                            <input type="radio" name="sign" value="0" class="style-radio" checked=""> <span class="DG-hasSign-no">Không</span>
                                            <input type="radio" name="sign" value="1" data-x-group="1" class="style-radio"> <span class="DG-hasSign-yes">Có</span>
                                        </div>
                                        <div class="mt-10 showSignal" style="display: none;">
                                            <div style="clear:both">
                                                <textarea class="input11013 form-control" id="input11013" style="/**/height:200pxpx;" name="signNote" disabled="disabled"></textarea>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-10">
                                    <div class="col-12">
                                        <b><span class="DG-contactWith-title"><b>Trong vòng 14 ngày qua, Anh/Chị có tiếp xúc với </b></span>
                                            <span class="text-required">(*)</span>
                                        </b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 ">
                                        <table class="table table-bordered tableData2"> 
                                            <thead> 
                                                <tr> 
                                                    <th scope="col"></th> 
                                                    <th scope="col" style="width:100px;" class="text-center DG-contactWith-yes">Có</th> 
                                                    <th scope="col" style="width:100px;" class="text-center DG-contactWith-no">Không</th> 
                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                <tr> 
                                                    <td class="DG-contactWith-hasPatient">Người bệnh hoặc nghi ngờ, mắc bệnh COVID-19 
                                                        <span class="text-required">(*)</span><br>
                                                        <label class="error" for="hasPatient"></label>
                                                    </td> 
                                                    <td class="text-center"> 
                                                        <input type="Radio" class="style-radio" name="hasPatient" value="1" data-msg-required="Bạn chưa chọn lịch sử tiếp xúc">
                                                    </td> 
                                                    <td class="text-center"> <input type="Radio" class="style-radio" name="hasPatient" value="2" checked="">
                                                    </td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="DG-contactWith-hasFromSickCountry">Người từ nước có bệnh COVID-19 
                                                        <span class="text-required">(*)</span><br>
                                                        <label class="error" for="hasFromSickCountry"></label>
                                                    </td> 
                                                    <td class="text-center"> 
                                                        <input type="Radio" class="style-radio" name="hasFromSickCountry" value="1" data-msg-required="Bạn chưa chọn lịch sử tiếp xúc">
                                                    </td> 
                                                    <td class="text-center"> <input type="Radio" class="style-radio" name="hasFromSickCountry" value="2" checked="">
                                                    </td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="DG-contactWith-hasSick">Người có biểu hiện (Sốt, ho, khó thở , Viêm phổi) 
                                                        <span class="text-required">(*)</span><br>
                                                        <label class="error" for="hasSick"></label>
                                                    </td> 
                                                    <td class="text-center"> 
                                                        <input type="Radio" class="style-radio" name="hasSick" value="1" data-msg-required="Bạn chưa chọn lịch sử tiếp xúc">
                                                    </td> 
                                                    <td class="text-center"> <input type="Radio" class="style-radio" name="hasSick" value="2" checked="">
                                                    </td> 
                                                </tr> 
                                            </tbody> 
                                        </table> 
                                    </div>
                                </div>
                            </div>
                            <div class="agree-box">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="label-agree">Dữ liệu bạn cung cấp hoàn toàn bảo mật và chỉ phục vụ cho việc phòng chống dịch, 
                                            thuộc quản lý của Ban chỉ đạo quốc gia về Phòng chống dịch Covid-19. 
                                            Khi bạn nhấn nút "Gửi" là bạn đã hiểu và đồng ý.</div>
                                    </div>
                                    
                                </div>
                                <div class="row d-flex justify-content-center mt-4 mb-4">
                                    <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="invalid-feedback" style="display:block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="btn-submit-box text-center"> <button type="submit" class="btn btn-success" id="btn-submit">Gửi tờ khai</button> </div>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
   let nationalBrand = document.querySelector('.DG-national-brand');
let nationalDescription = document.querySelector('.DG-national-description');
let DGWarning = document.querySelector('.DG-warning');
let DGFullname = document.querySelector('.DG-fullName');
let DGIdCard = document.querySelector('.DG-idCard');
let DGYoB = document.querySelector('.DG-YoB');
let DGGender = document.querySelector('.DG-gender');
let DGMale = document.querySelector('.DG-male');
let DGFemale = document.querySelector('.DG-female');
let DGOther = document.querySelector('.DG-other');
let DGNationality = document.querySelector('.DG-nationality');
let DGContactAddress = document.querySelector('.DG-contact');
let DGContactProvince = document.querySelector('.DG-contact-province');
let DGContactDistrict = document.querySelector('.DG-contact-district');
let DGContactWard = document.querySelector('.DG-contact-ward');
let DGContactStreet = document.querySelector('.DG-contact-street');
let DGContactPhone = document.querySelector('.DG-contact-phone');
let DGContactEmail = document.querySelector('.DG-contact-email');
let DGTraveledToTitle = document.querySelector('.DG-traveledTo-title');
let DGTraveledToNo = document.querySelector('.DG-traveledTo-no');
let DGTraveledToYes = document.querySelector('.DG-traveledTo-yes');
let DGHasSignTitle = document.querySelector('.DG-hasSign-title');
let DGHasSignNo = document.querySelector('.DG-hasSign-no');
let DGHasSignYes = document.querySelector('.DG-hasSign-yes');
let DGContactWithTitle = document.querySelector('.DG-contactWith-title');
let DGContactWithYes = document.querySelector('.DG-contactWith-yes');
let DGContactWithNo = document.querySelector('.DG-contactWith-no');
let DGContactWithHasPatient = document.querySelector('.DG-contactWith-hasPatient');
let DGContactWithHasSickFromCountry = document.querySelector('.DG-contactWith-hasFromSickCountry');
let DGContactWithHasSick = document.querySelector('.DG-contactWith-hasSick');


var domesticGuest = {
    nationalBrand: "GENERAL HEALTH DECLARATION INFORMATION",
    nationalDescription: "( COVID-19 EPIDEMIC PREVENTION )",
    warning: "Warning: Declaring false information is a violation of Vietnamese law and may be subject to criminal handling",
    fullName: "Full name (CAPITAL LETTERS)",
    idCard: "Passport number / ID card",
    YoB: "Year of Birth",
    Gender: {
        gender: "Gender",
        male: "Male",
        female: "Female",
        other: "Other"   
    },
    nationality: "Nationality",
    contactAddress: "Contact address in Vietnam",
    contactProvince: "Province",
    contactDistrict: "District",
    contactWard: "Ward",
    contactStreet: "Number of houses, streets, locality / village / team",
    contactPhone: "Phone",
    contactEmail: "Email",
    traveledTo: {
        title: "In the last 14 days, which regions/ countries/ territories have you traveled to (may travel across multiple places)",
        yes: "Yes",
        no: "No"
    },
    hasSign: {
        title: "In the past 14 days Have you seen at least 1 of the following signs: fever, cough, difficulty breathing, pneumonia, sore throat, fatigue?",
        yes: "Yes",
        no: "No"
    },
    contactWith: {
        yes: "Yes",
        no: "No",
        title: "During the past 14 days, you were in contact with",
        hasPatient: "Sick or suspected person, infected with COVID-19",
        hasFromSickCountry: "People from countries with COVID-19 disease",
        hasSick: "People with manifestations (fever, cough, shortness of breath, pneumonia)"

    },



    
};
function switchLanguage() {
    nationalBrand.innerText = domesticGuest.nationalBrand;
    nationalDescription.innerText = domesticGuest.nationalDescription;
    DGWarning.innerText = domesticGuest.warning;
    DGFullname.innerText = domesticGuest.fullName;
    DGIdCard.innerText = domesticGuest.idCard;
    DGYoB.innerText = domesticGuest.YoB;
    DGGender.innerText = domesticGuest.Gender.gender;
    DGMale.innerText = domesticGuest.Gender.male;
    DGFemale.innerText = domesticGuest.Gender.female;
    DGOther.innerText = domesticGuest.Gender.other;
    DGNationality.innerText = domesticGuest.nationality;
    DGContactAddress.innerText = domesticGuest.contactAddress;
    DGContactProvince.innerText = domesticGuest.contactProvince;
    DGContactDistrict.innerText = domesticGuest.contactDistrict;
    DGContactWard.innerText = domesticGuest.contactWard;
    DGContactStreet.innerText = domesticGuest.contactStreet;
    DGContactPhone.innerText = domesticGuest.contactPhone;
    DGContactEmail.innerText = domesticGuest.contactEmail;
    DGTraveledToTitle.innerText = domesticGuest.traveledTo.title;
    DGTraveledToNo.innerText = domesticGuest.traveledTo.no;
    DGTraveledToYes.innerText = domesticGuest.traveledTo.yes;
    DGHasSignTitle.innerText = domesticGuest.hasSign.title;
    DGHasSignNo.innerText = domesticGuest.hasSign.no;
    DGHasSignYes.innerText = domesticGuest.hasSign.yes;
    DGContactWithTitle.innerText = domesticGuest.contactWith.title;
    DGContactWithYes.innerText = domesticGuest.contactWith.yes;
    DGContactWithNo.innerText = domesticGuest.contactWith.no;
    DGContactWithHasPatient.innerText = domesticGuest.contactWith.hasPatient;
    DGContactWithHasSickFromCountry.innerText = domesticGuest.contactWith.hasFromSickCountry;
    DGContactWithHasSick.innerText = domesticGuest.contactWith.hasSick;
};

function showFormPlaceTravelTo() {
    let place = document.querySelector('#placeTravelTo1');
    place.style.display = "block";
}

function hideFormPlaceTravelTo() {
    let place = document.querySelector('#placeTravelTo1');
    place.style.display = "none";
}
</script>

@endsection
