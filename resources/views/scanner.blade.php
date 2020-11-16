@extends('layouts.template')

@section('section')
    <video id="preview" class="border" style="width:500px; height: 500px; margin:0px auto;"></video>
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
    <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
        <label class="btn btn-primary active">
            <input type="radio" name="options" value="1" autocomplete="off" checked> Front Camera
        </label>
        <label class="btn btn-secondary">
            <input type="radio" name="options" value="2" autocomplete="off"> Back Camera
        </label>
    </div>
@endsection