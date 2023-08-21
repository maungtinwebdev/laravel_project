@extends('layouts.app')
@section('content')
    <div class="container mt-0 bg-" style="height: 550px">
        <div class="row bg-primary rounded mb-3 d-flex m-0 " style="height: 55px">
            <div class="col-11 d-flex m-auto bg-white rounded mt bg-" style="height: 45px"><div class="m-auto">This Is White-Space For Text Runnig Animation</div></div>
        </div>
        {{-- <h1>This Is Testing!</h1> --}}
        <div class="row bg- d-flex mx-auto rounded w-75 h-100" >
            <div class="col-10 d-flex justify-content-center bg- m-auto image-fluid">
                <div class="bg- m-auto" style="display: flex; flex-wrap:wrap;">
                    <label style="
                    /* background-color: gold; */
                    display: block;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: 280px;
                    height: 350px;
                    perspective: 1000px;
                    transform-style: preserve-3d;
                    transform: translate(-50%, -50%);
                    cursor: pointer;">
                        <input type="checkbox" style="
                            display: none;"/>
                        <div class="flip-card" style="position: relative;
                        width: 100%;
                        height: 100%;
                        transform-style: preserve-3d;
                        transition: all 0.5s ease-in-out;
                        z-index: 1;">
                            <div class="front" style="position: absolute;
                            width: 100%;
                            height: 100%;
                            text-align: center;
                            background: gold;
                            backface-visibility: hidden;
                            border-radius: 0 20px 0 20px;
                            box-shadow: 0 20px 20px rgba(50, 60, 60, 0.2);">
                                <img src="images/man.jpg" alt="" />
                                <h1 style="font-size: 30px;
                                color: #499bef;
                                margin: 0;">Maung Tin</h1>
                                <p>Manchester United Vs Manchester City</p>
                                <h2 style="font-size: 18px;
                                color: #4e699d;
                                margin: 12px 0 12px 0;">Smart Web Developer</h2>
                                <b style="font-size: 14px;
                                color: #424752;
                                margin: 0 0 35px 0;
                                display: block;">maungtin@gmail.com</b>
                                <p style="font-size: 18px;
                                font-weight: 600;">Click For Tip</p>
                            </div>
                            <div class="back" style="position: absolute;
                            width: 100%;
                            height: 100%;
                            text-align: center;
                            background: gold;
                            backface-visibility: hidden;
                            border-radius: 0 20px 0 20px;
                            box-shadow: 0 20px 20px rgba(50, 60, 60, 0.2);

                            transform: rotateY(180deg);
                            color: #000;
                            background: gold;
                            box-shadow: 0 20px 20px rgba(50, 60, 60, 0.2);
                            ">
                                <h1 style="color: #424752;
                                margin: 30px 0 0 0;">Special Tip</h1>
                                <hr style="width: 180px;
                                margin: 15px auto 10px auto;"/>
                                <p style="font-size: 16px;
                                color: #000;
                                padding: 0 18px;
                                line-height: 30px;
                                text-align: center;
                                margin: 0 auto;">Manchester United *Body</p>
                                <hr style="width: 180px;
                                margin: 15px auto 10px auto;" />
                                <p class="click" style="font-size: 18px;
                                font-weight: 600;">Click to back</p>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container bg-success">
        <div class="row bg-info d-flex mx-0" style="height: 650px" >
            <div class="col-8 bg-secondary m-auto" style="height: 500px"></div>
        </div>
    </div> --}}
@endsection
