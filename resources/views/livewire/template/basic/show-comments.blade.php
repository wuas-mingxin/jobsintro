<div>
    @forelse($comments as $comment)
    <div wire:key="{{ $loop->index }}">
        <div class="flex">
            <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                <img src="{{asset($comment->user->avtar)}}"
                    alt="" class="absolute h-full rounded-full w-full"/>
            </div>
            <div>
                <div
                    class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12  dark:bg-gray-800 dark:text-gray-100">
                    <p class="leading-6">{{$comment->content}}<i class="i uil-heart"></i> <i
                        class="uil-grin-tongue-wink"> </i></p>
                    <div
                        class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                </div>
                <div class="text-sm flex items-center space-x-3 mt-2 ml-5">
                    <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                    <a href="#"> Replay </a>
                    <span> 3d </span>
                </div>
            </div>
        </div>
    </div>
    @empty
    @endforelse
</div>