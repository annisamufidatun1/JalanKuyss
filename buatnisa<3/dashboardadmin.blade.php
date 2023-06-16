@extends('templatenobg')

@section('body')
<!--<body data-spy="scroll" data-target="#scrollnav">-->
{{-- <h3 class="text-center">Database Reg. Event</h3> --}}
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8 pb-3">
                <h2 class="judul1">Hello, Admin!</h2>
                <h3 class="subjudul">Welcome back and check their request.</h3>
            </div>
        </div>

        <div class="row content">
            <div class="col">
                <h3 class="judul2">Event Listing</h3>
                <div class="row">
                    @foreach($regist_forms as $p)
                    @if ($p->status === 'pending')
                    <div class="col-12" id="set_dtl">
                        <div class="p-4 rounded-4 shadow-effect whitecard">
                            <div class="row">
                                {{-- <img width="90 px" src="{{ url('/poster_event/'.$p->eventPoster) }}">
                                <img src="{{ asset('/poster_event/'.$p->eventPoster) }}" class="img-fluid" width=250px></td> --}}
                                <img src="/Logo Icon/profpic.svg" width="150px" alt="">

                            <div class="col-6 judul1">
                                <h4>{{ $p->title }}</h4>
                            </div>

                            <div class="col-12">
                                {{ $p->event_location }} - {{ $p->category }}
                            </div>
                            </div>
                            <div class="col border-bottom">
                                <p class="mb-0 text-truncate" style="max-width: 150px;">{{ $p->event_detail }}</p>
                            </div>

                            <p>
                                <a class="btn bottom-right" data-toggle="modal" data-target="#popupEvent" role="button">Detail</a>
                            </p>

                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="modal fade" id="popupEvent" tabindex="-1" role="dialog" aria-labelledby="popupEvent" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="popTitle">Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 text-left border-line">
                                GENERAL INFORMATION
                                <div class="row">
                                    <div class="col-3">
                                        {{-- <img width="90 px" src="{{ url('/poster_event/'.$p->eventPoster) }}" class="img-fluid image">
                                        <img src="{{ asset('/poster_event/'.$p->eventPoster) }}" class="img-fluid mt-3 image" id="eventPoster"> --}}
                                        <img src="/Logo Icon/profpic.svg" width="150px" alt="">
                                    </div>
                                    <div class="col-3">
                                        <div class="row">
                                            Event Name:
                                            <div class="col" id="title">
                                                {{ $p->title }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            Ticket Price:
                                            <div class="col" id="ticket_price">
                                                {{ $p->ticket_price}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="row">
                                            Location:
                                            <div class="col" id="event_location">
                                                {{ $p->event_location}}
                                            </div>
                                        </div>
                                        <div class="row">
                                            Start Date:
                                            <div class="col" id="start_date">
                                                {{ $p->start_date}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="row">
                                            Category:
                                            <div class="col" id="category">
                                                {{ $p->category}}
                                            </div>
                                        </div>
                                        <div class="row">
                                            End Date:
                                            <div class="col" id="end_date">
                                                {{ $p->end_date}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            Event Details:
                                <span>
                                    {{ $p->event_detail }}
                                </span>

                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <form action={{route('approve',$p->id_form)}} method="POST"  enctype="multipart/form-data">
                        @csrf
                        <button type="submit" class="btn btn-success" id="accepted">Approve</button>
                    </form>
                    <form action={{route('refundForm',$p->id_form)}} method="GET"  enctype="multipart/form-data">
                        @csrf
                        <button type="submit" class="btn btn-danger" id="rejected">Reject</button>
                    </form>
                </div>

              </div>
            </div>
        </div>
@endsection
</body>
<script>
    $(document).ready(function()
    $(document).on('click', '#set_dtl', function() (
    var title = $(p).data('title'):
    var category = $(p).data('category');
    var eventDetail = s(p).data('event_detail'):
    var eventLocation = $(p).data('event_location');
    var eventPoster = $(p).data('event_poster');
    $('#title' ).text(title);
    $('#category' ).text(category)
    $('#eventDetail').text(eventDetail):
    $('#eventLocation').text(eventLocation);
    $('#image').prop('src', '/poster_event/'+$event_poster);

</script>
<html>
