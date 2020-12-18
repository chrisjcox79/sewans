 <div class="setting-link iconset">
                            <i class="icon icon-settings"></i>
                        </div>
                        <div id="settingsBox">
                            <div class="customer-links">
                             @if(!Auth::user())
                            <p><a href="{{route('login')}}" class="btn">{{ __('Login') }}</a></p>
                            <p class="text-center">没有账号？ <a href="{{route('register')}}" class="register">注册新会员</a></p>
                                <p class="text-center">Default welcome msg!</p>
                                @else
                                 <p><a href="{{route('user.account')}}" class="btn">{{ __('My Account') }}</a></p>

                                    <form action="{{route('logout')}}" method="POST" class="logout-link">
                                        @csrf
                                        <button type="submit" class="border-0 text-uppercase logout">{{ __('Logout') }}</button></form>


                                @endif
                            </div>
                            {{-- <div class="currency-picker">
                                <span class="ttl">Select Currency</span>
                                <ul id="currencies" class="cnrLangList">
                                    <li class="selected"><a href="#;">INR</a></li>
                                    <li><a href="#;">GBP</a></li>
                                    <li><a href="#;">CAD</a></li>
                                    <li><a href="#;">USD</a></li>
                                    <li><a href="#;">AUD</a></li>
                                    <li><a href="#;">EUR</a></li>
                                    <li><a href="#;">JPY</a></li>
                                </ul>
                            </div> --}}
                            <div class="language-picker">
                                <span class="ttl">SELECT LANGUAGE</span>
                                <ul id="language" class="cnrLangList">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a>German</a></li>
                                </ul>
                            </div>
                        </div>
