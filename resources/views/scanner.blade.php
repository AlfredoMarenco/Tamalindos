@extends('layouts.template')

@section('section')
    <video id="preview" style="width: 100%; height: 100%;" class="border" ></video>
    <script type="text/javascript">
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview'),
            continuous: true,
            mirror: false,
            refractoryPeriod: 5000,
        });
        scanner.addListener('scan', function(content) {
            console.log(content);
        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function(e) {
            console.error(e);
        });

    </script>
@endsection
