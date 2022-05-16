<div class="mb-6">
    <h2 class="text-2xl font-semibold"> {{ $page_title }} </h2>
    <nav class="responsive-nav border-b md:m-0 -mx-4">
        <ul >
            <li><a href="{{ route('user.setting.generalSetting') }}" class="lg:px-2"> @lang('General Settings')</a></li>
            <li><a href="{{ route('user.setting.profileSetting') }}" class="lg:px-2"> @lang('Profile')</a></li>
            <li><a href="{{ route('user.setting.privacySetting') }}" class="lg:px-2"> @lang('Privacy')</a></li>
            <li><a href="{{ route('user.setting.manage.sessions') }}" class="lg:px-2"> @lang('Manage Sessions')</a></li>
            <li><a href="{{ route('user.setting.twofactor') }}" class="lg:px-2"> @lang('Two Factor Authentication')</a></li>
            <li><a href="{{ route('user.setting.socialinks') }}" class="lg:px-2"> @lang('Social links') </a></li>
        </ul>
    </nav>
</div>