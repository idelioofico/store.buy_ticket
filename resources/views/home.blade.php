@extends('app')
@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <div class="wrapper">
        <div class="explore-events p-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="main-title">
                            <h3>Explorar Eventos</h3>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="event-filter-items">
                            <div class="featured-controls">
                                <div class="filter-tag">
                                    <a href="explore_events_by_date.html" class="active">Todos</a>
                                    <a href="explore_events_by_date.html">Today</a>
                                    <a href="explore_events_by_date.html">Tomorrow</a>
                                    <a href="explore_events_by_date.html">This Week</a>
                                    <a href="explore_events_by_date.html">This Weekend</a>
                                    <a href="explore_events_by_date.html">Next Week</a>
                                    <a href="explore_events_by_date.html">Next Weekend</a>
                                    <a href="explore_events_by_date.html">This Month</a>
                                    <a href="explore_events_by_date.html">Next Month</a>
                                    <a href="explore_events_by_date.html">This Year</a>
                                    <a href="explore_events_by_date.html">Next Year</a>
                                </div>
                                <div class="controls">
                                    <button type="button" class="control" data-filter="all">Todas</button>
                                    @foreach ($categories as $item)
                                        <button type="button" class="control"
                                            data-filter=".{{ strtolower($item['name']) }}">{{ $item['name'] }}</button>
                                    @endforeach
                                </div>
                                <div class="row" data-ref="event-filter-content" id="event_list">

                                </div>
                                <div class="browse-btn">
                                    <a href="explore_events.html" class="main-btn btn-hover ">Ver todos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
        <script>
            $(function() {

                $.ajax({
                    url: '{{ route('store.event_list') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(html) {
                        $('#event_list').html(html);
                    }
                });

                var containerEl = document.querySelector('[data-ref~="event-filter-content"]');
                var mixer = mixitup(containerEl, {
                    selectors: {
                        target: '[data-ref~="mixitup-target"]'
                    }
                });

            });
        </script>
    @endsection
