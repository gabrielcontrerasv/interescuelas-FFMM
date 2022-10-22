@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="card d-flex mb-4 border border-dark justify-content-center">
                    <div class="card-header text-center">
                        <h1> <strong> {{ __('Tabla de medalleria ') }} </strong></h1>

                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">

                                    <tr>
                                        <th>Deporte</th>
                                        <th>Oro</th>
                                        <th>Plata</th>
                                        <th>Bronce</th>
                                        <th>Total</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sports as $sport)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-left text-center">
                                                    <div class="m-2 align-items-center">
                                                        <img src="https://st.depositphotos.com/1005563/3256/i/600/depositphotos_32564723-stock-photo-sports-balls-a-lot-of.jpg"
                                                            alt="" style="width: 45px; height: 45px"
                                                            class="rounded-circle" />
                                                    </div class="">
                                                    <div>
                                                        <form action="/medalleria/{{ $sport->id }}" method="GET">
                                                            <!-- <input type="hidden" name="sportId" value="{{ $sport->id }}"> -->
                                                            <a id="item"
                                                                onclick='this.parentNode.submit(); return false;'><strong>{{ strtoupper($sport->sport) }}</strong></a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                            <div class="ms-3">
                                                <td>{{ $sport->gold_award }}</td>
                                                <td>{{ $sport->silver_award }}</td>
                                                <td>{{ $sport->bronze_award }}</td>
                                                <td>{{ $sport->total_award }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                @livewire('multimedallist')
            </div>
        </div>


    </div>
@endsection
