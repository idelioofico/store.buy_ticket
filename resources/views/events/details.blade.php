@extends('app')

@section('content')

@section('header')
    @include('layouts.header')
@endsection

<div class="wrapper">
    <div class="event-dt-block p-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="event-top-dts">
                        <div class="event-top-date">
                            <span
                                class="event-month">{{ formatDate($event->start_date . ' ' . $event->start_time, 'M') }}</span>
                            <span
                                class="event-date">{{ formatDate($event->start_date . ' ' . $event->start_time, 'd') }}</span>
                        </div>
                        <div class="event-top-dt">
                            <h3 class="event-main-title">{{ $event->title }}</h3>
                            {{-- <div class="event-top-info-status">
                            <span class="event-type-name"><i class="fa-regular fa-calendar-days me-3"></i></span>
                            <span class="event-type-name details-hr"> 
                                <span class="ev-event-date">{{ formatDate($event->start_date . ' ' . $event->start_time, 'D, d M, Y H:i') }}h</span>
                            </span>
                        </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-12">
                    <div class="main-event-dt">
                        <div class="event-img">
                            <img src="{{ $event->image }}" alt="">
                        </div>
                        
                        <div class="main-event-content d-none d-sm-block">
                            <h4>Sobre o evento</h4>
                            {!! $event->description !!}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="main-card event-right-dt">
                        <div class="bp-title">
                            <h4>Detalhes</h4>
                        </div>
                        
                        <div class="event-dt-right-group mt-5">
                            <div class="event-dt-right-icon">
                                <i class="fa-solid fa-circle-user"></i>
                            </div>
                            <div class="event-dt-right-content">
                                <h4>Organizado por</h4>
                                <h5><a href="#">{{ $event->company->name }}</a></h5>
                            </div>
                        </div>
                        <div class="event-dt-right-group">
                            <div class="event-dt-right-icon">
                                <i class="fa-solid fa-calendar-day"></i>
                            </div>
                            <div class="event-dt-right-content">
                                <h4>Data e hora</h4>
                                <h5>{{ formatDate($event->start_date . ' ' . $event->start_time, 'D, d M, Y H:i') }}h
                                </h5>
                                <div class="add-to-calendar">
                                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-calendar-days me-3"></i>Adicionar ao Calendário
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-brands fa-windows me-3"></i>Outlook</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-brands fa-apple me-3"></i>Apple</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-brands fa-google me-3"></i>Google</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-brands fa-yahoo me-3"></i>Yahoo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="event-dt-right-group">
                            <div class="event-dt-right-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="event-dt-right-content">
                                <h4>Localização</h4>
                                <h5 class="mb-0">{{ $event->city }}, {{ $event->address }}</h5>
                            </div>
                        </div>
                        <div class="select-tickets-block">
                            <h6>Bilhetes</h6>
                            @foreach ($event->tickets as $ticket)
                                <div class="select-ticket-action">
                                    <div class="ticket-price">{{ formatCurrency($ticket->price) }}</div>
                                    <div class="quantity">
                                        <div class="counter">
                                            <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                            <input type="text" value="0">
                                            <span class="up" onClick='increaseCount(event, this)'>+</span>
                                        </div>
                                    </div>
                                </div>
                                <p>{{ $ticket->title }}</p>
                            @endforeach
                            <div class="xtotel-tickets-count">
                                <div class="x-title">1x Ticket(s)</div>
                                <h4>AUD <span>$0.00</span></h4>
                            </div>
                        </div>
                        <div class="booking-btn">
                            <a href="checkout.html" class="main-btn btn-hover w-100">Reservar</a>
                        </div>
                    </div>
                </div> 
                <div class="col-12 d-block d-sm-none">
                    <div class="main-event-content">
                        <h4>Sobre o evento</h4>
                        {!! $event->description !!}
                    </div>
                </div>               
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="">
    $(function() {

    });
</script>
@endsection
