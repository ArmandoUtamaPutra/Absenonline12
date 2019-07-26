<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<link rel="stylesheet" href="{{ asset('css/login-peserta.css') }}">


<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="{{asset('images/login.png')}}" id="icon" alt="User Icon" />
            <h1 class="animated infinite pulse">Login</h1>
        </div>

        <!-- Login Form -->
        <form method="POST" action="{{ route('login_peserta') }}">
            @csrf
            <input type="text" id="email" class="fadeIn second" name="nik" placeholder="nik">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#"> AbsenOnline Group</a>
        </div>

    </div>
</div>
