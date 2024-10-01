@foreach ($events as $event)
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix {{$event->topic->name}} {{$event->event_type->name}}"
        data-ref="mixitup-target">
        <div class="main-card mt-4">
            <div class="event-thumbnail">
                <a href="{{route('store.detail',$event->slug)}}" class="thumbnail-img">
                    <img src="{{$event->image}}" alt="{{$event->title}}">
                </a>
                <span class="bookmark-icon" title="Bookmark"></span>
            </div>
            <div class="event-content">
                <a href="{{route('store.detail',$event->slug)}}" class="event-title">{{$event->title}}</a>
                <div class="duration-price-remaining">
                    @forelse ($event->tickets as $ticket)
                    <span class="duration-price">{{formatCurrency($ticket->price)}}</span>
                    <span class="remaining">{{$ticket->title}}</span>
                    @empty
                    <span class="duration-price">Sem bilhete!</span>
                    {{-- <span class="remaining">Sem bilhete registado.</span> --}}
                    @endforelse        
                </div>
            </div>
            <div class="event-footer">
                <div class="event-timing">
                    <div class="publish-date">
                        <span><i class="fa-solid fa-calendar-day me-2"></i>{{formatDate($event->start_date,'d M')}}</span>
                        <span class="dot"><i class="fa-solid fa-circle"></i></span>
                        <span>{{formatDate($event->start_date." ".$event->start_time,'D, H:i')}}</span>
                    </div>
                    <span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
                </div>
            </div>
        </div>
    </div>
@endforeach
