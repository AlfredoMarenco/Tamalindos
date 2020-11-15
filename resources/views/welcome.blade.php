@extends('layouts.template')

@section('section')
    <section class="site-blocks-cover overflow-hidden bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-7 align-self-center text-center text-md-left">
                    <div class="intro-text">
                        <h1 class="cuidamos">Cuidamos de<span class="d-md-block"> los tuyos</span></h1>
                        <p class="mb-4">Estamos trabajando para darles el mejor servicio<span class="d-block"></p>
                        <p><a href="#" class="btn btn-primary">Próximamente</a></p>
                    </div>
                </div>
                <div class="col-md-5 align-self-end text-center text-md-right">
                    <img src="img/dogger_img_1.png" alt="Image" class="img-fluid cover-img">
                </div>

                <div class="container">
                    <main class="app__layout-content">
                        <video autoplay></video>
                
                        <!-- Dialog  -->
                        <div class="app__dialog app__dialog--hide">
                          <div class="app__dialog-content">
                            <h5>QR Code</h5>
                            <input type="text" id="result">
                          </div>
                          <div class="app__dialog-actions">
                            <button type="button" class="app__dialog-open">Open</button>
                            <button type="button" class="app__dialog-close">Close</button>
                          </div>
                        </div>
                
                        <div class="app__dialog-overlay app__dialog--hide"></div>
                
                        <!-- Snackbar -->
                        <div class="app__snackbar"></div>
                      </main>
                    </div>
                    <div class="app__overlay">
                      <div class="app__overlay-frame"></div>
                      <!-- Scanner animation -->
                      <div class="custom-scanner"></div>
                      <div class="app__help-text"></div>
                    </div>
                
                    <div class="app__select-photos"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
