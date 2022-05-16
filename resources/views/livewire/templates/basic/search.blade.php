<div>
    <form>
         <div class="header-search-icon"> 

         </div>
         <div class="header_search"><i class="uil-search-alt"></i>
             <input id="dropdownSearch" data-dropdown-toggle="searchDropDown"  type="text" class="form-control" name="search" wire:model.debouce.350ms="search" placeholder="Search for Friends , Videos and more.." autocomplete="off">
         </form>
             <div class="header_search_dropdown {{$search != '' ? 'block' : '' }}" id="searchDropDown">

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
