@extends('auth.master')
@section('content')
            <div class="card col-xl-4 col-lg-8 col-md-12 col-sm-12 col-xs-12 " style="background-color:#FFFFFF ;">
                <div class="card" id="enter-m-n">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
                            @if(session()->has('code'))
                                {{session('code')}}
                                {{session()->forget('code')}}
                            @elseif($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                            @else()
                            <div class="title h6 mt-4">برای عضویت کافی است شماره تلفن همراه خود را وارد نمایید تا کد فعالسازی برای شما ارسال شود</div>
                            @endif()
                                <form class="content" >

                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group label-floating">
                                            @csrf
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">شماره تماس</label>
                                            <input class="form-control" id="number" value="" placeholder="" type="phonnumber">
                                        </div>
                                        <div class="remember">
                                            <div class="checkbox">
                                                <label>
                                                    <input name="optionsCheckboxes" class="checkbox"  id="checkbox" type="checkbox">
                                                    تمام <a href="#">شرایط و ضوابط</a> وبسایت را می پذیرم.
                                                </label>
                                            </div>
                                        </div>

                                        <button disabled type="submit" id="submit1" class="btn btn-purple btn-lg full-width">ارسال</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <!-- ------------------------------------------------->



                <div class="card" id="code">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
                            <div class="title h6 mt-4">کد دریافتی را در این قسمت وارد کنید</div>
                            <form class="content" method="post" action="/checkcode">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12" >
                                        <div class="form-group label-floating">
                                            <label class="control-label">کد دریافتی</label>
                                            <input class="form-control" name="recievedCode" id="recievedCode" placeholder="" type="phonnumber">
                                            <div id="timer" class="my-3 mx-5"></div>
                                        </div>
                                        <button type="submit" id="submit" class="btn btn-purple btn-lg full-width">ارسال</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>
     $("#number").focus(function () {
         $("#number").attr("value","09")
     })
     $("#number").focusout(function () {
         $("#number").attr("value","")
     })

     $("#code").hide(function() {
     });

     $('#checkbox').click(function () {
         //check if checkbox is checked
         if ($(this).is(':checked')) {

             $('#submit1').removeAttr('disabled'); //enable input

         } else {
             $('#submit1').attr('disabled', true); //disable input
         }
     });

    $("#submit1").click(function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/signup',
            data: {
                number: $('#number').val(),
                checkbox:$('#checkbox').val(),
                _token: '{{ csrf_token() }}'
            },


        }).done(function(response) {
            if(response == '/login'){
                window.location.assign(response);
                $("#enter-m-n").hide(function() {
                   });
                $("#code").hide(function() {
                   });
            } else if(response == '/register'){
                window.location.href(response);
                $("#enter-m-n").hide(function() {
                });
                $("#code").hide(function() {
                });
             }else if(response == '/AccountSettings'){

                window.location.replace('/AccountSettings');

            } else {
                $("#enter-m-n").hide(function() {
                   });
                $("#code").show(function() {
                   });

            }
        });

        let countDownDate = new Date();
        countDownDate.setMinutes(countDownDate.getMinutes()+2);
        // Update the count down every 1 second
        let x = setInterval(function() {

            // Get todays date and time
            let now = new Date().getTime();

            // Find the distance between now and the count down date
            let distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("timer").innerHTML = minutes + "دقیقه و " + seconds + "ثانیه";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("timer").innerHTML = "زمان شما به پایان رسید.دوباره سعی کنید";
            }
        }, 1000);


    });



    </script>


@endsection