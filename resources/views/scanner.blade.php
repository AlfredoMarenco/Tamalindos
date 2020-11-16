@extends('layouts.template')

@section('section')
    <video id="preview" class="border" style="width:100%; height: 100%;"></video>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"
        rel="nofollow">
    </script>
    <script type="text/javascript">
        var scanner = new Instascan.Scanner({
            video: document.getElementById('preview'),
            scanPeriod: 5,
            mirror: false
        });
        scanner.addListener('scan', function(content) {
            //alert(content);
            window.location.href=content;
        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[1]);
            } else {
                console.error('No cameras found.');
                alert('No cameras found.');
            }
        }).catch(function(e) {
            console.error(e);
            alert(e);
        });
    </script>
@endsection
