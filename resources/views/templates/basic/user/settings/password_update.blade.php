@extends($activeTemplate . 'layouts.user')
@section('content')
@livewire('templates.basic.auth.password-update')
@endsection

@push('javascript')
{{-- @include($activeTemplate . 'partials.customjs') --}}
{{-- <script src="{{ asset($activeTemplateTrue . 'assets/js/checkpassword.js') }}"></script> --}}
<script>
    $(document).ready(function () {
        $("#new_password").click(function () {
            var current_password = $("#current_password").val();
            //alert(current_password);
            $.ajax({
                type:'get',
                url:'{{ route("user.setting.ckeckPass") }}',
                data:{current_password:current_password},
                success:function(resp){
                    //alert(resp);
                    if (resp == "false") {
                        $("#pwdChk").html("<font color='red'>Current Password is Incorrect</font>");
                    } else if (resp == "true"){
                        $("#pwdChk").html("<font color='green'>Current Password is Correct</font>");
                    }
                },error:function(){
                    alert("Error");
                }
            });
        });
    });
</script>

<script type="text/javascript">
function passupdate(){
        var newPassword = document.getElementById("new_password").value;
        var confirmPassword = document.getElementById("password_confirm").value;
        var currentPassword = document.getElementById("current_password").value;

        if(currentPassword==""){
            document.getElementById("pwdChk").innerHTML="<font color='red'>*** Please Fill Current Password</font>";
            return false;
        }

        if(currentPassword.length < 7){
            document.getElementById("pwdChk").innerHTML="<font color='red'>*** Password length must be greater than 7 characters</font>";
            return false;
        }

        if(currentPassword.length > 20){
            document.getElementById("pwdChk").innerHTML="<font color='red'>*** Password length must be smaller than 20 characters</font>";
            return false;
        }

        if(newPassword==""){
            document.getElementById("newPwd").innerHTML="<font color='red'>*** Please Fill Password</font>";
            return false;
        }

        if(newPassword.length < 7){
            document.getElementById("newPwd").innerHTML="<font color='red'>*** Password length must be greater than 7 characters</font>";
            return false;
        }

        if(newPassword.length > 20){
            document.getElementById("newPwd").innerHTML="<font color='red'>*** Password length must be smaller than 20 characters</font>";
            return false;
        }

        if(newPassword!=confirmPassword){
            document.getElementById("newPwd").innerHTML="<font color='red'>*** Password does not match.</font>";
            return false;
        }
    }
</script>
@endpush
