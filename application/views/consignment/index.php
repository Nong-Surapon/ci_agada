<!-- End of nav bar -->
<!-- Consignment Page -->
<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">รายละเอียด อสังหาริมทรัพย์</h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">
        <div class="clearfix" >
            <div class="wizard-container">

                <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                    <form action="" method="">
                        <div class="wizard-header">
                            <h3>
                                <b>กรุณา</b> กรอกรายละเอียดให้ครบท้วน <br>
                                <small>หากรายละเอียดครบถ้วนจะสามารถทำให้ผู้เข้าชมเว็บไซต์เข้าใจข้อมูลมากขึ้น</small>
                            </h3>
                        </div>

                        <ul>
                            <li><a href="#step1" data-toggle="tab">ขั้นตอนที่ 1 </a></li>
                            <li><a href="#step2" data-toggle="tab">ขั้นตอนที่ 2 </a></li>
                            <li><a href="#step3" data-toggle="tab">ขั้นตอนที่ 3 </a></li>
                            <li><a href="#step4" data-toggle="tab">ขั้นตอนที่ 4 </a></li>
                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane" id="step1">
                                <div class="row p-b-15  ">
                                    <h4 class="info-text">เริ่มต้นด้วยข้อมูลพื้นฐาน (พร้อมการตรวจสอบ)</h4>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="picture">
                                                <img src="assets/img/default-property.jpg" class="picture-src" id="wizardPicturePreview" title=""/>
                                                <input type="file" id="wizard-picture">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="property_name">หัวข้ออสังหาริมทรัพย์ บ้านที่ต้องการขาย <small class="text-danger">*</small></label>
                                            <input name="property_name" id="property_name" type="text" class="form-control chk_empty" placeholder="บ้านเดี่ยว บ้านพร้อมอยู่">
                                        </div>

                                        <div class="form-group">
                                            <label for="property_price">ราคาที่เหมาะสม <small class="text-danger">*</small></label>
                                            <input name="property_price" id="property_price" type="text" class="form-control chk_empty" placeholder="3000000" onkeyup="chkNumber(this)">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">เบอร์โทรศัพท์ติดต่อ <small class="text-danger">*</small></label>
                                            <input name="phone" id="phone" type="text" class="form-control chk_empty" placeholder="0987654321" onkeyup="chkNumber(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  End step 1 -->

                            <div class="tab-pane" id="step2">
                                <h4 class="info-text"> How much your Property is Beautiful ? </h4>
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>จังหวัด :</label>
                                                <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                    <option>Seoul</option>
                                                    <option>Paris</option>
                                                    <option>Casablanca</option>
                                                    <option>Tokyo</option>
                                                    <option>Marraekch</option>
                                                    <option>kyoto , shibua</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>เขต/อำเภอ :</label>
                                                <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                    <option>New york, CA</option>
                                                    <option>Paris</option>
                                                    <option>Casablanca</option>
                                                    <option>Tokyo</option>
                                                    <option>Marraekch</option>
                                                    <option>kyoto , shibua</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>แขวง/ตำบล :</label>
                                                <select id="basic" class="selectpicker show-tick form-control">
                                                    <option> -Status- </option>
                                                    <option>Rent </option>
                                                    <option>Boy</option>
                                                    <option>used</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ประเภท :</label>
                                                <select id="basic" class="selectpicker show-tick form-control">
                                                    <option> -กรุณาเลือก- </option>
                                                    <option>บ้าน </option>
                                                    <option>คอนโด</option>
                                                    <option>อสังหาริมทรัพย์</option>
                                                    <option>อื่นๆ</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ความต้องการ  :</label>
                                                <select id="basic" class="selectpicker show-tick form-control">
                                                    <option> -กรุณาเลือก- </option>
                                                    <option>ขาย </option>
                                                    <option>ใช้เช่า</option>
                                                    <option>ต้องการซื้อ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ห้องนอน :</label>
                                                <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ห้องน้ำ :</label>
                                                <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ขนาด (ตารางเมตร/ตารางวา) :</label>
                                                <select id="basic" class="selectpicker show-tick form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-12">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>ข้อมูลเกี่ยวกับอสังหาริมทรัพย์ บ้าน :</label>
                                                <textarea name="discrition" class="form-control" ></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>สิ่งอำนวยความสะดวก :</label>
                                                <textarea name="facilities" class="form-control" ></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <br>
                                </div>
                            </div>
                            <!-- End step 2 -->

                            <div class="tab-pane" id="step3">
                                <h4 class="info-text">Give us somme images and videos ? </h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="property-images">Chose Images :</label>
                                            <input class="form-control" type="file" id="property-images">
                                            <p class="help-block">Select multipel images for your property .</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="property-video">Property video :</label>
                                            <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  End step 3 -->


                            <div class="tab-pane" id="step4">
                                <h4 class="info-text"> Finished and submit </h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="">
                                            <p>
                                                <label><strong>Terms and Conditions</strong></label>
                                                By accessing or using  GARO ESTATE services, such as
                                                posting your property advertisement with your personal
                                                information on our website you agree to the
                                                collection, use and disclosure of your personal information
                                                in the legal proper manner
                                            </p>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" /> <strong>Accept termes and conditions.</strong>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  End step 4 -->

                        </div>

                        <div class="wizard-footer">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-primary' id="next" name='next' value='Next' />
                                <input type='button' class='btn btn-finish btn-primary ' name='finish' value='Finish' />
                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-default' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
                <!-- End submit form -->
            </div>
        </div>
    </div>
</div>