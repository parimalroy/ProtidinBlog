@extends('frontEnd.layouts.master')

@section('content')
<br/><br/>
<div class="contact">
    <div class="contact-left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2620.908687693293!2d2.3574429999999995!3d48.936181!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66eb34e18b951%3A0xc3c6a4ac9498bfce!2sWorld&#39;s+Business+Import!5e0!3m2!1sen!2sin!4v1429768672602" frameborder="0" style="border:0"></iframe>
    </div>
    <div class="contact-right">
        <p class="phn">+88 0173 7620970</p>
        <p class="phn-bottom">Mirpur-6 Dhaka-1216 
            <span>Bangladesh</span></p>
        <p class="lom"></p>
    </div>
    <div class="clearfix"> </div>
    <div class="contact-left1">
        <h3>Contact Us With <span>Any Queston</span></h3>
        <div class="in-left">
            <form>
                <input type="text" placeholder="Your Name:" required=" ">
                <input type="text" placeholder="Phone Number:" required=" ">
                <input type="text" placeholder="E-mail:" required=" ">				
            </form>
        </div>
        <div class="in-right">
            <form>
                <textarea placeholder="Message:" required=" "></textarea>
                <input type="submit" value="SUBMIT">
            </form>
            <br/><br/><br/>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="contact-right1">
        <h3>Find Us On <span>Social Websites</span></h3>
        <h4></h4>
        <p></p>
        <ul>
            <li><a href="#" class="facebook"> </a></li>
            <li><a href="#" class="twitter"> </a></li>
            <li><a href="#" class="dribble"> </a></li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
@endsection