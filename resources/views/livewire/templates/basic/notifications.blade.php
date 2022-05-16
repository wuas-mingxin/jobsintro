<div>
    <a href="#" class="is_icon" uk-tooltip="title: Notifications">
        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
        <span>{{count($notifications)}}</span>
    </a>
    <div uk-drop="mode: click" class="header_dropdown">
         <div  class="dropdown_scrollbar" data-simplebar>
             <div class="drop_headline">
                 <h4>Notifications </h4>
                 <div class="btn_action">
                    <a href="#" data-tippy-placement="left" title="Notifications">
                        <ion-icon name="settings-outline"></ion-icon>
                    </a>
                    <a href="#" data-tippy-placement="left" title="Mark as read all">
                        <ion-icon name="checkbox-outline"></ion-icon>
                    </a>
                </div>
             </div>
             <ul>
                @forelse($notifications as $notification)
                    @if($notification->type == "App\Notifications\PostLiked")
                        <li class="{{$notification->read_at == null ? "not-read" : '' }}">
                            <a href="#">
                                <div class="drop_avatar">
                                    <img src="{{asset($notification->notificationBy->avtar)}}" alt="">
                                </div>
                                <span class="drop_icon bg-gradient-primary">
                                    <i class="icon-feather-thumbs-up"></i>
                                </span>
                                <div class="drop_text">
                                    <p>
                                    <strong>{{$notification->notificationBy->firstname." ".$notification->notificationBy->lastname}}</strong> {{$notification->data['info']}}
                                    {{--<span class="text-link">Learn Prototype Faster </span>--}}
                                    </p>
                                    <time>{{$notification->created_at->diffForHumans()}} </time>
                                </div>
                            </a>
                        </li>
                    @endif
                @empty
                    "No notifications"
                @endforelse
            </ul>
        </div>
   </div>
</div>
