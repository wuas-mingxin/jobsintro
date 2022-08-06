<div>
    @forelse($notifications as $notification)
        <li class="{{$notification->read_at == null ? "not-read" : '' }}" key={{$loop->index}}>
            <a href="#" wire:click="readNotification({{$notification}})" >
                <div class="drop_avatar">
                    <img src="{{asset($notification->notificationBy ? $notification->notificationBy->avtar : null)}}" alt="">
                </div>
                <span class="drop_icon bg-gradient-primary">
                    <i class="icon-feather-thumbs-up"></i>
                </span>
                <div class="drop_text">
                    <p>
                    <strong>{{$notification->notificationBy ? $notification->notificationBy->firstname." ".$notification->notificationBy->lastname : null }}</strong> {{$notification->data['info']}}
                    {{--<span class="text-link">Learn Prototype Faster </span>--}}
                    </p>
                    <time>{{$notification->created_at->diffForHumans()}} </time>
                </div>
            </a>
        </li>
    @empty
        No Notifications to show
    @endforelse

    <script>
        document.addEventListener('livewire:load', function() {
            setInterval(() => {
                Livewire.emit('getNotifications')
                console.log("comment added")
            }, 3000);
        });
    </script>
</div>
