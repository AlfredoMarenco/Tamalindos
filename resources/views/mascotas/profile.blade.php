@extends('layouts.bootstrap')

@section('section')
    <section id="#cabecera">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            @if ($mascota->photo == null)
                                <img src="https://ui-avatars.com/api/?name={{ $mascota->name }}&color=7F9CF5&background=EBF4FF"
                                    class="mb-2" style="width: 50%;">
                            @else
                                <img src="{{ Storage::url($mascota->photo) }}" class="img-fluid mb-2" style="width: 50%;">
                            @endif
                            <h5>{{ $mascota->name }}</h5>
                            <span class="lead">{{ $mascota->race->name }}</span>
                            <p style="color: gray;">Mérida</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 mt-5">
                    <div class="card-table">
                        <div class="card-body">
                            <table class="table">
                                <tbody class="text-left">
                                    <tr>
                                        <td><strong>Alergias: </strong>{{ $mascota->allergy }}</td>
                                        <td><strong>Padecimiento: </strong>{{ $mascota->ailments }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Padre o tutor: </strong>{{ $mascota->user->name }}</td>
                                        <td><strong>Desparasitada: </strong> {{ $mascota->dewormed }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Edad: </strong> {{ $mascota->age }} años</td>
                                        <td><strong>Peso: </strong> {{ $mascota->weight }} kg</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 mt-auto">
                                            <p><i class="fas fa-dog" style="color: green;">
                                                </i><strong> Personalidad</strong> </p>
                                            <p class="text-center">{{ $mascota->name }} es buena onda</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 mt-auto">
                                            <p><i class="far fa-calendar-check" style="color: green;">
                                                </i><strong> Próxima cita</strong> </p>
                                            <p class="text-center"></i>{{ Carbon\Carbon::now()->toDateTimeString() }}</p>
                                        </div>
                                        <div class="col-lg-6 col-md-3 mt-auto">
                                            <p> <strong>¿Encontraste a {{ $mascota->name }}?</strong></p>
                                            <a class="btn btn-primary" href="mailto:joselinparraguirrem@gmail.com">Enviar
                                                mensaje</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="#consulta-medica">
        <div class="container">
            <h1 class="text-center" style="padding-bottom: 10px;"> Consulta Médica </h1>
            <div class="table-responsive">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Motivo</th>
                            <th scope="col">Lugar</th>
                            <th scope="col">MVZ</th>
                            <th scope="col">Observaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">25/07/2020</th>
                            <td>Problemas intestinales por tránsito lento</td>
                            <td>Zoo Hábitat</td>
                            <td>Rosa</td>
                            <td>Le dieron una dosis de metoclopramida y antibiótico porque en sus heces encontraron
                                bacterias. Cita próxima 1o de Agosto</td>
                        </tr>
                        <tr>
                            <th scope="row">23/07/2020</th>
                            <td>Vómitos</td>
                            <td>Zoo Hábitat</td>
                            <td>Rosa</td>
                            <td>Inyección para calmar los vómitos. Próxima cita 24 de Julio</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
