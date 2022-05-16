<div class="lg:w-1/3">
 
                        <nav class="responsive-nav setting-nav setting-menu"
                            uk-sticky="top:30 ; offset:80 ; media:@m ;bottom:true; animation: uk-animation-slide-top">
                            <h4 class="mb-0 p-3 uk-visible@m hidden"> Setting Navigation </h4>
                            <ul>
                                <li class="uk-active"><a href="{{ route('user.setting.generalSetting') }}"> <i class="uil-cog"></i> @lang('General Settings') </a></li>
                                <li><a href="{{ route('user.setting.profileSetting') }}"> <i class="uil-user"></i> @lang('Profile') </a></li>
                                <li><a href="{{ route('user.setting.privacySetting') }}"> <i class="uil-usd-circle"></i> @lang('Privacy')</a></li>
                                <li><a href="{{ route('user.setting.manage.sessions') }}"> <i class="uil-unlock-alt"></i> @lang('Manage Sessions') </a></li>
                                <li><a href="{{ route('user.setting.twofactor') }}"> <i class="uil-dollar-alt"></i> @lang('Two Factor Authentication')</a></li>
                                <li><a href="{{ route('user.setting.socialinks') }}"> <i class="uil-scenery"></i> @lang('Social links')</a></li>
                                <li><a href="{{ route('user.setting.notify') }}"> <i class="uil-shield-check"></i> Notification Settings</a></li>
                                <li><a href="#"> <i class="uil-bolt"></i> Membarship</a></li>
                                <li><a href="#"> <i class="uil-history"></i> Manage Sessions</a></li>
                                <li><a href="#"> <i class="uil-trash-alt"></i> Delete account</a></li>
                            </ul>
                        </nav>

                    </div>