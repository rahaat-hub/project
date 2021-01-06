@extends('frontend.master')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
      <link rel="stylesheet" href="">

        <style>
        
        <style>
            body {
                margin: 0;
                color: #6a6f8c;
                background: #c8c8c8;
                font: 600 16px/18px 'Open Sans', sans-serif;
                height: 100vh;
                width: 100vw;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .login-box {
                width: 100%;
                margin: auto;
                max-width: 525px;
                min-height: 670px;
                position: relative;
                background: url('{{ asset('login.jpg') }}') no-repeat center center;
                background-size: cover;
                box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19)
            }

            .login-snip {
                width: 100%;
                height: 100%;
                position: absolute;
                padding: 90px 70px 50px 70px;
                background: rgba(0, 77, 77, .9)
            }

            .login-snip .login,
            .login-snip .sign-up-form {
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                position: absolute;
                transform: rotateY(180deg);
                backface-visibility: hidden;
                transition: all .4s linear
            }

            .login-snip .sign-in,
            .login-snip .sign-up,
            .login-space .group .check {
                display: none
            }

            .login-snip .tab,
            .login-space .group .label,
            .login-space .group .button {
                text-transform: uppercase
            }

            .login-snip .tab {
                font-size: 22px;
                margin-right: 15px;
                padding-bottom: 5px;
                margin: 0 15px 10px 0;
                display: inline-block;
                border-bottom: 2px solid transparent
            }

            .login-snip .sign-in:checked+.tab,
            .login-snip .sign-up:checked+.tab {
                color: #fff;
                border-color: #1161ee
            }

            .login-space {
                min-height: 345px;
                position: relative;
                perspective: 1000px;
                transform-style: preserve-3d
            }

            .login-space .group {
                margin-bottom: 15px
            }

            .login-space .group .label,
            .login-space .group .input,
            .login-space .group .button {
                width: 100%;
                color: #fff;
                display: block
            }

            .login-space .group .input,
            .login-space .group .button {
                border: none;
                padding: 15px 20px;
                border-radius: 25px;
                background: rgba(255, 255, 255, .1)
            }

            .login-space .group input[data-type="password"] {
                text-security: circle;
                -webkit-text-security: circle
            }

            .login-space .group .label {
                color: #aaa;
                font-size: 12px
            }

            .login-space .group .button {
                background: #1161ee
            }

            .login-space .group label .icon {
                width: 15px;
                height: 15px;
                border-radius: 2px;
                position: relative;
                display: inline-block;
                background: rgba(255, 255, 255, .1)
            }

            .login-space .group label .icon:before,
            .login-space .group label .icon:after {
                content: '';
                width: 10px;
                height: 2px;
                background: #fff;
                position: absolute;
                transition: all .2s ease-in-out 0s
            }

            .login-space .group label .icon:before {
                left: 3px;
                width: 5px;
                bottom: 6px;
                transform: scale(0) rotate(0)
            }

            .login-space .group label .icon:after {
                top: 6px;
                right: 0;
                transform: scale(0) rotate(0)
            }

            .login-space .group .check:checked+label {
                color: #fff
            }

            .login-space .group .check:checked+label .icon {
                background: #1161ee
            }

            .login-space .group .check:checked+label .icon:before {
                transform: scale(1) rotate(45deg)
            }

            .login-space .group .check:checked+label .icon:after {
                transform: scale(1) rotate(-45deg)
            }

            .login-snip .sign-in:checked+.tab+.sign-up+.tab+.login-space .login {
                transform: rotate(0)
            }

            .login-snip .sign-up:checked+.tab+.login-space .sign-up-form {
                transform: rotate(0)
            }

            *,
            :after,
            :before {
                box-sizing: border-box
            }

            .clearfix:after,
            .clearfix:before {
                content: '';
                display: table
            }

            .clearfix:after {
                clear: both;
                display: block
            }

            a {
                color: inherit;
                text-decoration: none
            }

            .hr {
                height: 2px;
                margin: 60px 0 50px 0;
                background: rgba(255, 255, 255, .2)
            }

            .foot {
                text-align: center
            }

            .card {
                width: 500px;
                left: 100px
            }

            ::placeholder {
                color: #b3b3b3
            }

        </style>
    </head>

    <body>
      <div class="container">
        <div class="row" style="display: flex; justify-content: center;">
          <div class="col-md-6 mx-auto p-0">
              <div class="card">
                  <div class="login-box">
                      <div class="login-snip">
                          <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                          <label for="tab-1" class="tab">Registration</label>
                          <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2"
                              class="tab"></label>
                          <div class="login-space">
                              <div class="login">
                                <form action="#">
                                  <div class="group">
                                      <label for="user" class="label">Username</label>
                                      <input id="user" data-type="text" class="input" placeholder="Enter your username">
                                  </div>

                                  <div class="group">
                                      <label for="user" class="label">Password</label>
                                      <input id="user" type="password" class="input" placeholder="Enter your password">
                                  </div>

                                  <div class="group"> <label for="e_mail" class="label">Email</label> <input id="e_mail"
                                          type="email" class="input" data-type="email"
                                          placeholder="Enter your Email address"> </div>

                                  <div class="group"> <label for="contact" class="label">Contact</label> <input id="pass"
                                          type="number" class="input" data-type="number"
                                          placeholder="Enter your Phone Number"> </div>

                                  <div class="group"> <label for="address" class="label">Address</label> <input
                                          id="address" type="textarea" class="input" data-type="password"
                                          placeholder="Enter your valid Address"> </div>
                                  <div class="group"> <a href="" style="background:#1161ee;border: none;
      padding: 15px 20px;
      border-radius: 25px;color:#fff;width:100%;display:flex;justify-content:center;">Sign Up</a></div>

                                  <div class="group"> <a href="" style="background:#1161ee;border: none;
      padding: 15px 20px;
      border-radius: 25px;color:#fff;width:100%;display:flex;justify-content:center;">Sign In</a></div>

                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
        




    </body>

    </html>

@endsection
