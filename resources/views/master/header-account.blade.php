@if (session('user'))
    <div class="logined">
        <a href="/goods/release" class="header-release">发布二手商品</a>
        <a href="/mine/info">
            @if (session('user')->avatar)
                <img src="{{ session('user')->avatar }}" onClick="location.href='/mine/info'">
            @endif
            <span>{{ session('user')->nickname }}</span>
            @if (session('user')->avatar)
                <img class="setting" src="/resource/image/setting.png" onClick="location.href='/mine/info'">
            @endif
        </a>
    </div>
@else
    <div class="h_login">
        <a class="add_a" href="/account/register">注册</a>
        <a class="add_a" href="/account/login">登录</a>
    </div>
@endif
