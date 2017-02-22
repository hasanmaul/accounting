@extends('master')

@section('halaman')
<div class="graphs">
                    <div class="col_3">
                        <div class="col-md-4 widget widget1">
                            <div class="r3_counter_box">
                                <i class="fa fa-usd"></i>
                                <div class="stats">
                                  <h5>{{ $penerimaans }} <span></span></h5>
                                  <div class="grow">
                                    <p>Penerimaan</p>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 widget widget1">
                            <div class="r3_counter_box">
                                <i class="fa fa-mail-forward"></i>
                                <div class="stats">
                                  <h5>{{ $tampilans }} <span></span></h5>
                                  <div class="grow grow1">
                                    <p>Pengeluaran</p>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

            <!-- switches -->
       
        <!-- //switches -->
<!--         <div class="col_1">
            <div class="col-md-4 span_8">
                <div class="activity_box">
                    <h3>Inbox</h3>
                    <div class="scrollbar scrollbar1" id="style-2">
                        <div class="activity-row">
                            <div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/></div>
                            <div class="col-xs-7 activity-desc">
                                <h5><a href="#">Shofi salsabila</a></h5>
                                <p>Hey sayang:* </p>
                            </div>
                            <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row">
                            <div class="col-xs-3 activity-img"><img src='images/5.png' class="img-responsive" alt=""/></div>
                            <div class="col-xs-7 activity-desc">
                                <h5><a href="#">Idriss</a></h5>
                                <p>Hey tanggung jawab aku hamil :(</p>
                            </div>
                            <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row">
                            <div class="col-xs-3 activity-img"><img src='images/3.png' class="img-responsive" alt=""/></div>
                            <div class="col-xs-7 activity-desc">
                                <h5><a href="#">Nanang</a></h5>
                                <p>syng kali ini kamu ya yang beli kondom</p>
                            </div>
                            <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row">
                            <div class="col-xs-3 activity-img"><img src='images/4.png' class="img-responsive" alt=""/></div>
                            <div class="col-xs-7 activity-desc">
                                <h5><a href="#">Dinda kameila</a></h5>
                                <p>KAMU SANGAT JELEK HASAN</p>
                            </div>
                            <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row">
                            <div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/></div>
                            <div class="col-xs-7 activity-desc">
                                <h5><a href="#">John Smith</a></h5>
                                <p>Hey ! There I'm available.</p>
                            </div>
                            <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 span_8">
                <div class="activity_box activity_box1">
                    <h3>chat</h3>
                    <div class="scrollbar" id="style-2">
                        <div class="activity-row activity-row1">
                            <div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/><span>10:00 PM</span></div>
                            <div class="col-xs-5 activity-img1">
                                <div class="activity-desc-sub">
                                    <h5>shofi salsabila</h5>
                                    <p>Hello bebeb hasan :*:*</p>
                                </div>
                            </div>
                            <div class="col-xs-4 activity-desc1"></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row activity-row1">
                            <div class="col-xs-2 activity-desc1"></div>
                            <div class="col-xs-7 activity-img2">
                                <div class="activity-desc-sub1">
                                    <h5>Maulana hasan</h5>
                                    <p>Hello juga shofi sayang:*:*:*:*</p>
                                </div>
                            </div>
                            <div class="col-xs-3 activity-img"><img src='images/3.png' class="img-responsive" alt=""/><span>10:02 PM</span></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row activity-row1">
                            <div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/><span>10:00 PM</span></div>
                            <div class="col-xs-5 activity-img1">
                                <div class="activity-desc-sub">
                                    <h5>shofi salsabila</h5>
                                    <p>aku sayng bnget sama kamuu :(</p>
                                </div>
                            </div>
                            <div class="col-xs-4 activity-desc1"></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row activity-row1">
                            <div class="col-xs-2 activity-desc1"></div>
                            <div class="col-xs-7 activity-img2">
                                <div class="activity-desc-sub1">
                                    <h5>Maulana hasan</h5>
                                    <p>aku juga sayang bnget sama kamu , kalo kamu lagi telanjang:(</p>
                                </div>
                            </div>
                            <div class="col-xs-3 activity-img"><img src='images/3.png' class="img-responsive" alt=""/><span>10:02 PM</span></div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <form>
                        <input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
                        <input type="submit" value="Send" required=""/>     
                    </form>
                </div>
             -->
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
            
        </div>
                </div>
@endsection