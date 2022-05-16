<div>
    <form>
         <div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div>
         <div class="header_search"><i class="uil-search-alt"></i>
             <input type="text" class="form-control" name="search" wire:model="search" placeholder="Search for Friends , Videos and more.." autocomplete="off">
         </form>
             <div uk-drop="mode: click" class="header_search_dropdown">

                 <h4 class="search_title"> Recently </h4>
                 <ul>
                    
                     @if($users && count($users) > 0)

                         @foreach($users as $user)
                             <li key={{ $loop->index }}> 
                                 <a href="#">
                                     <img src="{{ asset($user->avtar) }}" class="list-avatar">
                                     <div class="list-name"> {{ $user->firstname . ' ' . $user->lastname }} </div>
                                 </a>
                             </li>
                         @endforeach
                     @else
                         <li>
                             <div class="list-name"> No Result Found </div>
                         </li>
                     @endif
                 </ul>

             </div>
         </div>

</div>
