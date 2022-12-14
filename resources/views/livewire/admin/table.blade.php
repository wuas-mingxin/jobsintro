<div>
    <select wire:model="status" style="float: right; margin-bottom:10px;">
        <option value="">All</option>
        <option value="0">Pending</option>
        <option value="1">Active</option>
        <option value="2">Rejected</option>
    </select>
      
    <div wire:loading>
        Processing...
    </div>
    <div class="row" style="width: 100%;">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--md  table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                            <tr>
                                <th>@lang('#') </th>
                                <th>@lang('Username')</th>
                                <th style="width:20%;">@lang('Post text')</th>
                                <th>@lang('Post file')</th>
                                <th>@lang('status')</th>
                                <th>@lang('Posted at')</th>
                                <th>@lang('Action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($posts as $post)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$post->user->username}}</td>
                                    <td style="width:200px!important; overflow:hidden;"><p style="width:200px; ">{{$post->post_text}}</p></td>
                                    <td><img src="{{asset($post->post_file)}}"/></td>
                                    <td>{!! statusShower($post->status) !!}</td>
                                    <td>{{diffForHumans($post->created_at)}}</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline--info info" id='info' data-post_text="{{$post->post_text}}" data-username="{{$post->user->username}}" data-post_file="{{asset($post->post_file)}}"> Info </button>
                                        @if($post->status != 1 || $post->status == 0)<button class="btn btn-sm btn-outline--primary" wire:click="$emit('updatePost', {{$post->id}}, 1)"> Approve</button>@endif
                                        @if($post->status != 2 || $post->status == 0)<button class="btn btn-sm btn-outline--danger" wire:click="$emit('updatePost', {{$post->id}}, 2)"> Reject</button>@endif
                                    </td>
                            @empty
                                <tr>
                                    <td wire:loading.remove class="text-muted text-center" colspan="100%">@lang('No record found')</td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table><!-- table end -->
                      
                    </div>
                </div>
                @if ($posts->hasPages())
                    <div class="card-footer py-4">
                        {{ $posts->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    @livewire('modal')
@push('script')
<script>
    $(document).on('click','#info', function () {
        var modal   = $('#postinfo');
        let data    = $(this).data();
        console.log(data)
        modal.find('#username').text(`${data.username}`);
        modal.find('#post_text').text(`${data.post_text}`);
        modal.find('#post_file').attr("src",`${data.post_file}`);
        modal.find('form').attr('action', `${data.action}`);
        modal.modal('show');
    });
</script>
@endpush
</div>
