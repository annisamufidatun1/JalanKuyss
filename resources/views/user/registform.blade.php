@extends('layouts.template')

@section('body')
<br>
<div class="head-of-DE">
    <h2><b>
        {{-- Notes: hrefnya dibenerin dulu yach --}}
        <a href="/register-event">
            <iconify-icon icon="mdi:arrow-left-circle" style="vertical-align: -0.175em;"></iconify-icon>
        </a> Registration Details<b></h2>
</div>

<br>

<div class="content-of-RF">
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{ $error }} <br/>
        @endforeach
    </div>
    @endif

    <h3><b>Organizer Details</b></h3>
    <form class="form-horizontal" action="/upload/proses" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label" for="organizer">Organizer:</label>
            <input type="text" name="organizer" class="form-control" id="organizer" placeholder="Masukkan Event Organizer">
        </div>
        <div class="form-group">
            <label class="control-label" for="address">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Masukkan alamat Anda">
        </div>
        <div class="form-group">
            <label class="control-label" for="email">Contact: </label>
            <input type="text" name="contact" class="form-control" id="contact" placeholder="Masukkan contact Anda">
        </div>
        <div class="form-group">
            <label class="control-label" for="email">Email: </label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan email">
        </div>
        <div class="form-group">
            <label class="control-label" for="idcard">Identity Card</label>
            <input type="file" name="idcard" class="form-control" id="idcard">
        </div>
    <hr>

    <h3><b>Event Details</b></h3>
    <div class="form-group ">
        <label class="control-label " for="title">Title:</label>

            <input type="text" name="title" class="form-control" id="title" placeholder="Masukkan Title">

    </div>
    <div class="form-group">
        <label class="control-label" for="eventlocation">Location</label>
            <input type="text" name="eventlocation" class="form-control" id="eventlocation"
                placeholder="Masukkan lokasi Anda">
    </div>
    <div class="form-group">
        <label class="control-label" for="category">Category</label>
            <input type="text" name="category" class="form-control" id="category" placeholder="Masukkan kategori Anda">
    </div>
    <div class="form-group">
        <label class="control-label" for="ticketprice">Price</label>
            <input type="text" name="ticketprice" class="form-control" id="ticketprice" placeholder="Masukkan ticket price">
    </div>
    <div class="form-group">
        <label class="control-label" for="startdate">Start Date</label>
            <input type="date" name="startdate" class="form-control" id="startdate"
                placeholder="Masukkan start date Anda">
    </div>
    <div class="form-group">
        <label class="control-label" for="enddate">End Date</label>
            <input type="date" name="enddate" class="form-control" id="enddate" placeholder="Masukkan end date Anda">
    </div>
    <div class="form-group">
        <label class="control-label" for="eventdetail">Event Detail</label>
            <textarea name="eventdetail" class="form-control" id="eventdetail" placeholder="Masukkan event detail"></textarea>
    </div>
    <div class="form-group">
        <label class="control-label" for="linkweb">Link Website</label>
            <input type="text" name="linkweb" class="form-control" id="linkweb" placeholder="Masukkan Link Website">
    </div>
    <div class="form-group">
        <label class="control-label" for="poster">Event Poster</label>
            <input type="file" name="eventPoster" class="form-control" id="eventPoster">
    </div>
    <div class="form-group">
        <label class="control-label" for="logo">Event Logo</label>
            <input type="file" name="logo" class="form-control" id="logo">
    </div>
    <div class="form-group">
        <label class="control-label" for="accountNumber">Account Number: </label>
            <input type="text" name="accountNumber" class="form-control" id="accountNumber" placeholder="Masukkan Account Number">
    </div>
    <div class="form-group">
        <label class="control-label" for="payproof">Payment Proof</label>
            <input type="file" name="payproof" class="form-control" id="payproof">
    </div>
    <div class="row justify-content-center">
            <button type="submit" class="btnkotak" value="Upload">Simpan data</button>
    </div>
    </form>
</div>
@endsection
</body>
</html>
