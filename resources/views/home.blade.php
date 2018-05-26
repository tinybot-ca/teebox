@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><h4>Reactionary Golf</h4></div>

                <div class="card-body">

                    <div id="video-container">

                        <video id="my-video" playsinline controls>
                            <source id="src_mp4" src="{{ asset('videos/01 BBGS Williamsburg  TONY INTRO SEQ.mp4') }}" type="video/mp4">

                            <!-- Captions are optional -->
                            {{-- <track kind="captions" label="English captions" src="{{ asset('videos/captions.vtt') }}" srclang="en" default> --}}
                        </video>

                    </div>

                    <!-- Description -->
                    <li class="list-group-item card-bg-light">
                        <h3>Be Better Golf Premium Content</h3>
                        Source: Be Better Golf <a href="https://www.youtube.com/channel/UCHgV07QZNSbB88gJIkJDUZg">YouTube channel</a> and <a href="https://www.bebettergolf.net/">website</a>.
                    </li>

                    <!-- Table of contents -->
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(1)"><strong>An introduction to the concept</strong> (11:19)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(2)"><strong>Building Your Reactionary Golf Swing</strong> (7:16)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(3)"><strong>The Grip:</strong> Setup for impact, setup for success (8:39)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(4)"><strong>The Takeaway:</strong> Square to the path (11:21)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(5)"><strong>The Top and the Transition:</strong> How you make your transition determines how well you strike the ball (16:08)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(6)"><strong>Shaping shots and practice:</strong> One swing, all shot shapes. Variability in practice creates consistency in play. (11:33)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(7)"><strong>The Role of the Lower Body:</strong> We want it all! (11:16)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(8)"><strong>The R.G. Power Feels with Jeff Flagg:</strong> "You got to get loaded to unload" world champion shares his secrets (10:06)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(9)"><strong>Wrap up:</strong> "Let's get to work (2:12)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(10)"><strong>Supplemental:</strong> Tony, Be Better Golf Intro (11:50)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(11)"><strong>Supplemental:</strong> Part 2 of BBG school intro (8:32)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(12)"><strong>Supplemental:</strong> Extra convo with Tony (15:07)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(13)"><strong>Supplemental:</strong> How to practice (4:49)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(14)"><strong>Supplemental:</strong> Jeff's $250,000 tips (2:22)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0)" onclick="update(15)"><strong>Supplemental:</strong> The arms-first feels that led to the Tiger slam (8:26)</a>
                    </li>


                </div><!-- card body -->
            </div><!-- card -->

            <br />

            <div class="card">
                <div class="card-header"><h4>Discussion</h4></div>

                {{-- <div class="card-body"> --}}

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item grid-bg">
                            <a class="card-link btn btn-outline-primary btn-sm" href="/comments/create">Submit</a>
                        </li>

                        @foreach ($comments as $comment)
                        <li class="list-group-item">
                                <a href="/comments/{{ $comment->id }}/edit">{{ $comment->created_at->diffForHumans() }}</a> {{ $comment->user->name }} said, "{{ $comment->body }}"
                        </li>
                        @endforeach

                    </ul>

                {{-- </div><!-- card body --> --}}
            </div><!-- card -->

        </div><!-- col-md-8 -->
    </div><!-- row -->
</div><!-- container -->

<script>

    var myVideo = document.getElementById("my-video");

    function seek(seconds) {
        myVideo.currentTime = seconds;

        if (myVideo.paused) {
            myVideo.play();
        }
    }

    function update(chapter) {

        var newmp4;

        switch (chapter) {
            case 1:
            newmp4 = "{{ asset('videos/01 BBGS Williamsburg  TONY INTRO SEQ.mp4') }}";
            break;

            case 2:
            newmp4 = "{{ asset('videos/02 BYRGS INTRODUCTION.mp4') }}";
            break;

            case 3:
            newmp4 = "{{ asset('videos/03 THE GRIP.mp4') }}";
            break;

            case 4:
            newmp4 = "{{ asset('videos/04 THE TAKEAWAY.mp4') }}";
            break;

            case 5:
            newmp4 = "{{ asset('videos/05 The Top and Transition.mp4') }}";
            break;

            case 6:
            newmp4 = "{{ asset('videos/06 BYGRS Shaping Shots and Creating Consistency in Practice.mp4') }}";
            break;

            case 7:
            newmp4 = "{{ asset('videos/07 BYRGS The Role of the Lower Body.mp4') }}";
            break;

            case 8:
            newmp4 = "{{ asset('videos/08 Power Keys with Jeff.mp4') }}";
            break;

            case 9:
            newmp4 = "{{ asset('videos/09 BYRGS Wrap Up.mp4') }}";
            break;

            case 10:
            newmp4 = "{{ asset('videos/10 Supplemental - Tony, Be Better Golf School Intro MVI 6187.mp4') }}";
            break;

            case 11:
            newmp4 = "{{ asset('videos/11 Part 2 of BBG school intro MVI 6188.mp4') }}";
            break;

            case 12:
            newmp4 = "{{ asset('videos/12 Extra convo with Tony IGL tony.mp4') }}";
            break;

            case 13:
            newmp4 = "{{ asset('videos/13 How to practice effectively...for just about anything - Annie Bosler and Don Gre.mp4') }}";
            break;

            case 14:
            newmp4 = "{{ asset('videos/14 Long Drive Tips with Jeff Flagg _ Superhuman _ Golf Digest.mp4') }}";
            break;

            case 15:
            newmp4 = "{{ asset('videos/15 Tiger Woods and Butch Harmon 2 of 7.mp4') }}";
            break;
        }

        document.getElementById("src_mp4").src = newmp4;
        document.getElementById("my-video").load();
        document.getElementById("my-video").play();
    }

    document.documentElement.addEventListener('keydown', function (e) {
        if ( ( e.keycode || e.which ) == 32) {
            e.preventDefault();
            myVideo.paused ? myVideo.play() : myVideo.pause();
        }
    }, false);

    // Todo: Map arrow keys to rewind or forward +/- 10 secs
    // https://stackoverflow.com/questions/38604103/how-can-you-make-video-js-skip-forwards-and-backwards-15-seconds

    function resize() {
        let videoWidth = $( "#video-container" ).width();
        let videoRatio = 1.777777777777778;

        $( "#my-video" ).css('width', videoWidth);
        $( "#my-video" ).css('height', videoWidth / videoRatio);
    }

    $(function() {
        resize();
    });

    $( window ).resize(function() {
        resize();
    });

</script>

@endsection
