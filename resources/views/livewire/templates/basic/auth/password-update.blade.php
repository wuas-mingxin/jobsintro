<div>
    <div class="main_content">
        <div class="mcontainer">

            @include($activeTemplate . 'partials.setting_header')

            <div class="grid lg:grid-cols-1 mt-12 gap-8">
                <div class="bg-white rounded-md lg:shadow-md shadow col-span-2 lg:mx-16">
                    <form action="{{ route('user.setting.password.update') }}" method="post" onsubmit="return passupdate()">
                        @csrf

                        <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">

                            <div class="col-span-2">
                                <label for="current_password">Current Password</label>
                                <input type="password" id="current_password" name="current_password" placeholder="********" autocomplete="off" class="shadow-none with-border">
                                <span id="pwdChk"></span>
                            </div>

                            <div>
                                <label for="new_password">Password</label>
                                <input type="password" id="new_password" name="password" placeholder="********" autocomplete="new-password" class="shadow-none with-border">
                                <span id="newPwd"></span>
                            </div>

                            <div>
                                <label for="password-confirm">Confirm Password</label>
                                <input type="password" id="password_confirm" placeholder="********"  name="password_confirmation" autocomplete="new-password" class="shadow-none with-border">
                                <span id="confPwd"></span>
                            </div>

                            <div class="col-span-2">
                                <label>Two-factor authentication</label>
                                <select id="two_factor" name="two_factor" class="shadow-none selectpicker with-border ">
                                    <option value="1" @if($user->two_factor == 1) selected @endif >Enable</option>
                                    <option value="0" @if($user->two_factor == 0) selected @endif >Disable</option>
                                </select>
                            </div>

                        </div>

                        <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                            <button type="submit" class="button bg-blue-700"> Save </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
 </div>
