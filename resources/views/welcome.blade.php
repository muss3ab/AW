
    @extends('layouts.main')
    @section('content')
            <div class=" col-12 text-center bg-success" style=" height:30% width:100%;padding-bottom:5%; display:fixed">
                <h3 style="color:white;padding-bottom:2%; padding-top:2%;">إنشاء مهمة </h3>
                    <div class="inner-div"  style="float:right;width: 80%; margin-left:10%; margin-right:10%; margin-top:1%;  ">
                            <div class="row" >
                                <div class="col-md-12" >
                                        <div class="form-group" >
                                        <label  for="">عنوان المهمة</label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                        </div>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-12" >
                                        <div class="form-group" >
                                                <label  for="">وصف المهمة</label>
                                              <textarea class="form-control" name="" id="" rows="3"></textarea>

                                        </div>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-12" >
                                        <div class="form-group" >
                                        <label  for="">مراحل المهمة</label>
                                        <br>
                                        <small>أدناه يمكنك تحديد المراحل المطلوبة لإكمال حملتك , كن واضحا بشان المواصفات وقدم تعليمات سهلة وبسيطة</small>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                        </div>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-12" >
                                        <div class="form-group" >
                                                <button class="btn btn-success w-100">+ اضافة مرحلة</button>
                                        </div>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-12" >
                                        <label  for="">إثبات الخطوة </label>
                                        <br>
                                        <small>اسال عن الادلة باكبر قدر ممكن من الوضوح</small>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-12" >
                                    <label  for="">طلب دليل من العامل</label>
                                    <br>
                                    <div class="d-flex">
                                        <input type="text"  class="form-control" name="" id="" aria-describedby="helpId" placeholder="سؤال">
                                        <input type="checkbox" name="" id="" style="margin-left:0.5%">
                                    </div>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-12" >

                                        <label  for="">او</label>
                                        <div class="d-flex">
                                            <input type="text"  class="form-control" name="" id="" aria-describedby="helpId" placeholder="لقطة شاشة">
                                            <input type="checkbox" name="" id="" style="margin-left:0.5%">
                                        </div>
                                </div>
                            </div>

                            <br>
                            <div class="row" >
                                <div class="col-md-12" >
                                        <div class="form-group" >
                                                <button class="btn btn-success w-100">التالي</button>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    @endsection

