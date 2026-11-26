<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <title>Staff Login | Pyare Foundation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root{--navy:#16163f;--orange:#f46226;--cream:#fff8f3;--muted:#68707c;--line:#e8e3e0}
        *,*::before,*::after{box-sizing:border-box}
        html{min-height:100%;background:#fff}
        body{min-height:100vh;margin:0;color:var(--navy);font-family:'DM Sans',Arial,sans-serif;-webkit-font-smoothing:antialiased}
        a{color:inherit}
        button,input{font:inherit}
        .auth-layout{min-height:100vh;display:grid;grid-template-columns:minmax(0,1.02fr) minmax(0,.98fr)}
        .auth-brand{background:var(--navy);color:#fff;position:relative;overflow:hidden;display:flex;flex-direction:column;min-height:100vh}
        .auth-brand::before{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(12,12,40,.18) 0%,rgba(12,12,40,.55) 51%,rgba(12,12,40,.96) 100%),url("{{ asset('uploads/images/organisation/about_organization.jpeg') }}") center/cover no-repeat;opacity:.8}
        .auth-brand::after{content:"";position:absolute;right:-160px;top:24%;width:420px;height:420px;border:1px solid #ffffff35;border-radius:50%;box-shadow:0 0 0 65px #ffffff08,0 0 0 140px #ffffff06;pointer-events:none}
        .brand-top,.brand-bottom{position:relative;z-index:1}
        .brand-top{padding:42px clamp(30px,5vw,84px)}
        .brand-name{font-family:'Manrope',sans-serif;font-size:23px;font-weight:800;letter-spacing:-.055em;line-height:1.12;text-decoration:none;display:inline-flex;align-items:center;gap:12px;color:#fff}
        .brand-mark{width:38px;height:38px;display:grid;place-items:center;border-radius:8px;background:var(--orange);color:white;font-size:22px}
        .brand-bottom{margin-top:auto;padding:40px clamp(30px,5vw,84px) 55px}
        .brand-kicker{display:inline-flex;align-items:center;gap:10px;font-size:11px;font-weight:800;letter-spacing:.16em;color:#ffb78f;text-transform:uppercase}
        .brand-kicker::before{content:"";width:8px;height:8px;background:var(--orange);border-radius:50%}
        .brand-bottom h1{font-family:'Manrope',sans-serif;font-size:clamp(36px,3.7vw,59px);line-height:1.17;letter-spacing:-.055em;max-width:630px;font-weight:800;margin:19px 0 19px}
        .brand-bottom h1 span{color:#ff9367}
        .brand-bottom p{font-size:15px;line-height:1.8;color:#f2ebee;max-width:530px;margin:0}
        .brand-rule{width:58px;height:3px;background:var(--orange);margin:35px 0 22px}
        .brand-credit{font-size:12px;color:#f5e7e4;font-weight:600}
        .auth-main{position:relative;display:flex;align-items:center;justify-content:center;padding:65px clamp(24px,5vw,80px);background:#fff}
        .back-home{position:absolute;right:clamp(24px,5vw,80px);top:36px;font-size:12px;font-weight:800;text-decoration:none;color:#565a6d;display:inline-flex;align-items:center;gap:9px}
        .back-home:hover{color:var(--orange)}
        .login-wrap{width:100%;max-width:450px;margin:auto}
        .form-kicker{font-size:11px;letter-spacing:.16em;font-weight:800;color:var(--orange);text-transform:uppercase}
        .login-wrap h2{font-family:'Manrope',sans-serif;letter-spacing:-.05em;line-height:1.18;font-size:clamp(33px,3vw,45px);font-weight:800;margin:13px 0 13px}
        .form-intro{color:#6b7180;font-size:14px;line-height:1.75;margin:0 0 33px}
        .alert{padding:13px 16px;border-radius:6px;font-size:13px;line-height:1.6;margin-bottom:22px}
        .alert-success{color:#16633d;background:#effaf3;border:1px solid #ccebd6}
        .alert-error{color:#982b2b;background:#fff2f2;border:1px solid #f4d3d3}
        .field{margin-bottom:23px}
        .field-label{display:block;font-size:12px;font-weight:800;color:#292b49;margin-bottom:10px}
        .field-input{display:block;width:100%;height:54px;border:1px solid #dedfe4;border-radius:6px;background:#fff;color:#16163f;outline:none;padding:0 16px;font-size:14px;transition:border-color .2s,box-shadow .2s}
        .field-input::placeholder{color:#a0a5ae}
        .field-input:focus{border-color:var(--orange);box-shadow:0 0 0 3px rgba(244,98,38,.09)}
        .field-input[aria-invalid="true"]{border-color:#d95252}
        .input-with-action{position:relative}
        .input-with-action .field-input{padding-right:78px}
        .password-toggle{position:absolute;right:12px;top:50%;transform:translateY(-50%);border:0;background:transparent;color:#656d78;font-size:12px;font-weight:800;padding:9px;cursor:pointer}
        .password-toggle:hover{color:var(--orange)}
        .field-error{color:#bd3333;font-size:12px;line-height:1.5;margin:8px 0 0}
        .form-options{display:flex;align-items:center;justify-content:space-between;gap:14px;margin:2px 0 29px}
        .remember-label{display:flex;align-items:center;gap:9px;font-size:12px;color:#555e6c;cursor:pointer}
        .remember-label input{width:16px;height:16px;margin:0;accent-color:var(--orange)}
        .forgot-link{font-size:12px;color:var(--orange);font-weight:800;text-decoration:none;white-space:nowrap}
        .forgot-link:hover{text-decoration:underline}
        .submit-btn{display:flex;align-items:center;justify-content:center;gap:12px;width:100%;min-height:53px;background:var(--orange);color:#fff;border:0;border-radius:6px;font-size:13px;font-weight:800;letter-spacing:.02em;cursor:pointer;transition:background .2s}
        .submit-btn:hover{background:#dc4d1b}
        .submit-btn:disabled{opacity:.72;cursor:wait}
        .submit-icon{font-size:20px;line-height:1}
        .login-foot{margin:27px 0 0;border-top:1px solid #ede9e5;padding-top:21px;color:#747985;font-size:12px;line-height:1.8;text-align:center}
        .login-foot strong{color:#30354c}
        .mobile-brand{display:none}
        @media(max-width:1050px){.auth-layout{grid-template-columns: minmax(0,.85fr) minmax(0,1.15fr)}.brand-bottom h1{font-size:38px}}
        @media(max-width:780px){.auth-layout{display:block}.auth-brand{display:none}.auth-main{min-height:100vh;padding:130px 22px 50px;align-items:flex-start}.mobile-brand{display:block;position:absolute;top:35px;left:22px}.mobile-brand a{font-family:'Manrope',sans-serif;text-decoration:none;font-size:19px;letter-spacing:-.05em;font-weight:800}.mobile-brand span{color:var(--orange)}.back-home{right:22px;top:42px}.login-wrap{max-width:440px}.login-wrap h2{font-size:36px}}
        @media(max-width:430px){.auth-main{padding-top:126px}.login-wrap h2{font-size:32px}.form-options{align-items:flex-start;gap:8px}.forgot-link{font-size:11px}}
        @media(prefers-reduced-motion:reduce){*,*::before,*::after{transition:none!important}}
    </style>
</head>
<body>
<div class="auth-layout">
    <aside class="auth-brand" aria-label="Pyare Foundation">
        <div class="brand-top">
            <a class="brand-name" href="{{ route('home') }}"><span class="brand-mark" aria-hidden="true">✦</span>PYARE FOUNDATION</a>
        </div>
        <div class="brand-bottom">
            <span class="brand-kicker">OUR MISSION, OUR COMMITMENT</span>
            <h1>Working together for <span>meaningful change.</span></h1>
            <p>Supporting communities through health, education and empowerment. Welcome to the secure staff access area of Pyare Foundation.</p>
            <div class="brand-rule"></div>
            <div class="brand-credit">PYARE FOUNDATION &nbsp;·&nbsp; STAFF PORTAL</div>
        </div>
    </aside>

    <main class="auth-main">
        <div class="mobile-brand"><a href="{{ route('home') }}">PYARE <span>FOUNDATION</span></a></div>
        <a class="back-home" href="{{ route('home') }}"><span aria-hidden="true">←</span> BACK TO WEBSITE</a>
        <div class="login-wrap">
            <span class="form-kicker">STAFF ACCESS</span>
            <h2>Welcome back.</h2>
            <p class="form-intro">Sign in with your authorised staff credentials to access your dashboard.</p>

            @if (session('status'))
                <div class="alert alert-success" role="status">{{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-error" role="alert">We couldn't sign you in. Please check the details below and try again.</div>
            @endif

            <form id="staff-login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="field">
                    <label class="field-label" for="email">EMAIL ADDRESS</label>
                    <input class="field-input" id="email" name="email" type="email" autocomplete="username" placeholder="Enter your email address" value="{{ old('email') }}" @error('email') aria-invalid="true" aria-describedby="email-error" @enderror required autofocus>
                    @error('email')<p class="field-error" id="email-error">{{ $message }}</p>@enderror
                </div>
                <div class="field">
                    <label class="field-label" for="password">PASSWORD</label>
                    <div class="input-with-action">
                        <input class="field-input" id="password" name="password" type="password" autocomplete="current-password" placeholder="Enter your password" @error('password') aria-invalid="true" aria-describedby="password-error" @enderror required>
                        <button class="password-toggle" type="button" id="toggle-password" aria-label="Show password" aria-pressed="false">SHOW</button>
                    </div>
                    @error('password')<p class="field-error" id="password-error">{{ $message }}</p>@enderror
                </div>
                <div class="form-options">
                    <label class="remember-label"><input id="remember" type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}><span>Remember me</span></label>
                    @if (Route::has('password.request'))
                        <a class="forgot-link" href="{{ route('password.request') }}">Forgot password?</a>
                    @endif
                </div>
                <button class="submit-btn" id="staff-submit" type="submit"><span id="submit-text">SIGN IN TO DASHBOARD</span><span class="submit-icon" aria-hidden="true">↗</span></button>
            </form>
            <p class="login-foot">This area is reserved for <strong>authorised Pyare Foundation staff.</strong> If you need access, contact your administrator.</p>
        </div>
    </main>
</div>
<script>
(function () {
    var password = document.getElementById('password');
    var toggle = document.getElementById('toggle-password');
    if (password && toggle) {
        toggle.addEventListener('click', function () {
            var isVisible = password.type === 'text';
            password.type = isVisible ? 'password' : 'text';
            toggle.textContent = isVisible ? 'SHOW' : 'HIDE';
            toggle.setAttribute('aria-pressed', isVisible ? 'false' : 'true');
            toggle.setAttribute('aria-label', isVisible ? 'Show password' : 'Hide password');
        });
    }
    var form = document.getElementById('staff-login-form');
    var submit = document.getElementById('staff-submit');
    if (form && submit) {
        form.addEventListener('submit', function () {
            if (!form.checkValidity()) return;
            submit.disabled = true;
            document.getElementById('submit-text').textContent = 'SIGNING IN...';
        });
    }
})();
</script>
</body>
</html>
