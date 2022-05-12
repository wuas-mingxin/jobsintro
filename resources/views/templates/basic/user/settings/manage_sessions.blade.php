@extends($activeTemplate . 'layouts.user')
@section('content')
<div class="main_content">
    <div class="mcontainer">

        {{-- @include($activeTemplate . 'partials.setting_header')

        <div class="grid lg:grid-cols-1 mt-12 gap-8">
            <div class="bg-white rounded-md lg:shadow-md shadow col-span-2 lg:mx-16">
                <!-- Manage Sessions -->
            </div>

        </div> --}}

        <div class="mb-6">
            <h2 class="text-2xl font-semibold"> {{ $page_title }} </h2>
        </div>

        <div class="bg-white lg:divide-x lg:flex lg:shadow-md rounded-md shadow lg:rounded-xl overflow-hidden lg:m-0 -mx-4">
            @include($activeTemplate . 'partials.setting_bar')

            <div class="lg:w-2/3">

                <div class="lg:flex lg:flex-col justify-between lg:h-full">

                    <!-- form header -->
                    <div class="lg:px-10 lg:py-8 p-6">
                        <h3 class="font-bold mb-2 text-xl">{{ $page_title }}</h3>
                    </div>

                    <!-- form body -->
                    {{-- Manage Sessions --}}
                </div>

            </div>

        </div>

    </div>
</div>
@endsection

@push('javascript')
<script src="{{ asset($activeTemplateTrue . 'assets/js/checkpassword.js') }}"></script>
    
@endpush