<div>
@foreach($posts as $post)
    <div wire:key={{$loop->index}} class="card lg:mx-0 uk-animation-slide-bottom-small mt-2">
    
    {{-- <!-- shared post header--> --}}
        @if($post->shared_from != 0)
            <div class="flex justify-between items-center lg:p-4 p-2.5 border-bottom">
                <div class="flex flex-1 items-center space-x-4">
                    <a href="#">
                        <img src="{{asset($post->sharedFrom->avtar)}}" class="bg-gray-200 border border-white rounded-full w-10 h-10"/>
                    </a>
                    <div class="flex-1 font-semibold capitalize">
                        <a href="#" class="text-white dark:text-gray-100"> {{$post->sharedFrom->firstname." ".$post->sharedFrom->lastname}} is shared a post</a>
                        <div class="text-gray-700 flex items-center space-x-2">{{$post->created_at->diffForHumans()}} <ion-icon name="people"></ion-icon></div>
                    </div>
                </div>
                <div>
                </div>
            </div>
            <div class="container">
        @endif
        {{-- <!-- post header--> --}}
        
        <div class="flex justify-between items-center lg:p-4 p-2.5">
            <div class="flex flex-1 items-center space-x-4">
                <a href="#">
                    <img src="{{asset($post->user->avtar)}}" class="bg-gray-200 border border-white rounded-full w-10 h-10"/>
                </a>
                <div class="flex-1 font-semibold capitalize">
                    <a href="#" class="text-white dark:text-gray-100">{{$post->user->firstname." ".$post->user->lastname}}</a>
                    <div class="text-gray-700 flex items-center space-x-2">{{ $post->shared_from ==0 ? $post->created_at->diffForHumans() : ''}} <ion-icon name="people"></ion-icon></div>
                </div>
            </div>
            <div>

            <a href="#">
                <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700">
                </i>
            </a>
            <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
            uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">
                <ul class="space-y-1">
                    <li>
                        <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                        <i class="uil-share-alt mr-1"></i> Share
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                        <i class="uil-edit-alt mr-1"></i>  Edit Post
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                        <i class="uil-comment-slash mr-1"></i>   Disable comments
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                        <i class="uil-favorite mr-1"></i>  Add favorites
                        </a>
                    </li>
                    <li>
                    <hr class="-mx-2 my-2 dark:border-gray-800"/>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                        <i class="uil-trash-alt mr-1"></i>  Delete
                        </a>
                    </li>
                </ul>

            </div>
            </div>
        </div>
        @if($post->post_text !== null)
            <div class="p-5 pt-0 border-b dark:border-gray-700">
                {{$post->post_text}}
            </div>
        @endif
        @if($post->post_file !== null)
        <div uk-lightbox="true">
            <a href={{asset($post->post_file)}}>
                <img src={{asset($post->post_file)}} alt="{{asset($post->post_text)}}" class="max-h-96 w-full object-cover"/>
            </a>
        </div>
        @endif

        <div class="p-4 space-y-3">

            <div class="flex space-x-4 lg:font-bold">
                <button class="flex items-center space-x-2 flex-1 justify-left  btn-like" wire:click="likePost('{{$post->id}}')">
                    <div class='p-2 rounded-full text-black {{$post->isLikedBy(auth()->user()) ? "lg:bg-blue-600 dark:bg-blue-600" : "lg:bg-grey-100 dark:bg-grey-100"}}'>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                            <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                        </svg>
                    </div>
                    <div>Like</div>
                    <div wire:loading wire:target="likePost('{{$post->id}}')">    
                        <svg role="status" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"></path>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"></path>
                        </svg>
                    </div>
                </button>
                
                <button class="flex items-center space-x-2 flex-1 justify-center {{count($post->comments)==0 ? 'disabled' : ''}}"  {{count($post->comments)==0 ? 'disabled' : ''}}  wire:click="showComments('{{$post->id}}')" >
                    <div class="p-2 rounded-full  text-black lg:bg-black-100 dark:bg-black-100">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                            <path fillRule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clipRule="evenodd" />
                        </svg>
                    </div>
                    <div> 
                        <div>  Comments {{count($post->comments)}}</div>
                    </div>
                </button>
                <button class="flex items-center space-x-2 flex-1 justify-end btn-like" wire:click="sharePost('{{$post->id}}')">
                    <div class="p-2 rounded-full  text-black lg:bg-black-100 dark:bg-black-100">
                    
                    </div>
                    <div> Share</div>
                    <div wire:loading wire:target="sharePost('{{$post->id}}')">    
                        <svg role="status" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"></path>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"></path>
                        </svg>
                    </div>
                </button>
            </div>
            {{--
            <div class="flex items-center space-x-3 pt-2">
                <div class="flex items-center">
                    <img src={{asset($post->user->avtar)}} alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900"/>
                    <img src={{asset($post->user->avtar)}} alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2"/>
                    <img src={{asset($post->user->avtar)}} alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2"/>
                </div>
                <div class="dark:text-gray-100">
                    Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                </div>
            </div>
            --}}
            {{-- /*Comments Section*/ --}}
            <div class={`border-t py-4 space-y-4 dark:border-gray-600 comments${value.id}`} id={`comments${value.id}`}>
                    @if($showComments['post_id'] == $post->id && $showComments['show'])
                        @livewire('template.basic.show-comments',['post_id' => $post->id], key($post->id))
                    @endif
            </div>

            {{--<button class='hover:text-blue-600 hover:underline button-show-more{{$post->id}}'>  Veiw {value.comments.length} comments </button> --}}
            {{-- /*Comments Section*/ --}}
            <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                <input placeholder="Add your Comment.." name='comment' wire:model="comment.{{$post->id}}"  wire:keydown.enter="addCommentToDatabase('{{$post->id}}')" class="bg-transparent max-h-10 shadow-none px-5"/>
                <div class="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                    <a href="#">
                        <ion-icon name="happy-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="image-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="link-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {!! $post->shared_from !=0 ? '</div>' : '' !!}
@endforeach
<div class="flex justify-center mt-6">
    <button  wire:click.prevent="loadMore" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
        Load more ..</button>
</div>

</div>