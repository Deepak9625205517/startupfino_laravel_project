@extends('front.layouts.master') @section('content')
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style type="text/css">
       .payment {
    height:400px;
    width: 320px;
    border-radius: 10px;
    background: #fff;
    box-shadow: 0px 0px 29px 10px #e7e4e4;}
       .payment_header{
           border-radius:20px 20px 0px 0px;}
       .check{
    margin: 50px auto 10px;
    width: 90px;
    height: 90px;
    border-radius: 100%;
    background: red;
    display: flex;
    justify-content: center;
    align-items: center;}
       .check i{
         font-size: 50px;
         color: #ffff;}
        .content {
            text-align:center;
        padding: 0px 25px;}
        .content  h1{
            font-size:30px;
            padding-top:20px;
            font-weight: 700;}
        .content p{
         font-size: 15px;
         font-weight: 500;
         color: grey;
         margin-top: 25px;
         margin-bottom: 30px;}
        .content a{
    width: 65%;
    color: red;
    border-radius: 30px;
    border: 1px solid red;
    padding: 10px 10px;
    transition: all ease-in-out 0.3s;
    margin-bottom: 20px;
    font-weight: 700;}
        .content a:hover{
            text-decoration:none;
            background:red;
            color: white;}
    </style>
<div class="container mt-5">
   <div class="d-flex justify-content-center mt-5">
         <div class="payment">
            <div class="payment_header">
               <div class="check"><i class="fa fa-exclamation" aria-hidden="true"></i></div>
            </div>
            <div class="content">
               <h1>Payment Failed</h1>
               <p>Your transaction has failed. <br>Please go back and try again.</p>
               <div class="mb-5">
               <a href="{{route('subscription')}}" class="btn">Try Again</a>
            </div>     
         </div>
      </div>
   </div>
</div>
@stop