    <div class="before-main-nav before-main-nav-3-b1 text-center">
		<a href="{{ URL::to('/') }}">
			<img src="images/logo-2-main.svg" alt="Головна сторінка">
		</a>
	</div>
    <div class="main-nav-wrapper nav-wrapper-3">
      <nav>
        <div class="main-nav main-nav-3 type-1">
          <div class="container">
            <div class="nav-content-wrapper">
              <div class="nav-logo"><a href="{{ URL::to('/') }}"><img src="images/logo-9.svg" alt="Головна сторінка"></a></div>
              <div class="nav-content clearfix">
                <div class="nav-top-search"><a href="#" class="search-trigger-show"></a></div>
                <ul class="nav-main-menu">
                  <li class="current-menu-item sub-menu"><a href="#">ГОЛОВНА</a>
                    <ul>
                      <li><a href="{{ URL::to('/') }}">ГОЛОВНА СТОРІНКА</a></li>
                      <li class="sub-menu"><a href="#">ПРО НАС</a>
                        <ul>
                          <li><a href="{{ route('about') }}">ПРО ПРОЕКТ</a></li>
                          <li><a href="#">КОНТАКТИ</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="division"><span></span></li>
                  <li class="sub-menu"><a href="#">СТОРІНКИ</a>
                    <ul>
                      <li><a href="{{ route('about') }}">ПРО ПРОЕКТ</a></li>
                      <li><a href="#">КОНТАКТИ</a></li>
                    </ul>
                  </li>
                  <li class="division"><span></span></li>
                  <li class="mega-menu menu-5-col sub-menu"><a href="#">КРИТЕРІЇ ПОШУКУ</a>
                    <ul class="mega-menu-content">
                      <li class="menu-title"><a href="#">УСТАНОВИ</a>
                        <ul>
                          <li><a href="#">Адміністрація президента України</a></li>
                          <li><a href="#">Верховна Рада України</a></li>
                          <li><a href="#">Кабінет Міністрів України</a></li>
                          <li><a href="#">Місцеві державні адміністрації</a></li>
                        </ul>
                      </li>
                      <li class="menu-title"><a href="#">ПОСАДИ</a>
                        <ul>
                          <li><a href="#">Президент</a></li>
                          <li><a href="#">Прем’єр-міністр України</a></li>
                          <li><a href="#">Народні депутати України</a></li>
                          <li><a href="#">Міністри</a></li>
                          <li><a href="#">Голови ОДА</a></li>
                        </ul>
                      </li>
                      <li class="menu-title"><a href="#">РІК ДЕКЛАРУВАННЯ</a>
                        <ul>
                          <li><a href="#">2013</a></li>
                          <li><a href="#">2014</a></li>
                          <li><a href="#">2015</a></li>
                          <li><a href="#">2016</a></li>
                        </ul>
                      </li>
                      <li class="menu-title"><a href="#">МАРКИ АВТО</a>
                        <ul>
                          <li><a href="#">Mercedes</a></li>
                          <li><a href="#">BMW</a></li>
                          <li><a href="#">Lexus</a></li>
                          <li><a href="#">Hummer</a></li>
                          <li><a href="#">Toyota</a></li>
                          <li><a href="#">Bentley</a></li>
                        </ul>
                      </li>
                      <li class="menu-title"><a href="#">ЦІНА АВТО (грн.)</a>
                        <ul>
                          <li><a href="#">до 50.000</a></li>
                          <li><a href="#">50.000-100.000</a></li>
                          <li><a href="#">100.000-200.000</a></li>
                          <li><a href="#">200.000-500.000</a></li>
                          <li><a href="#">500.000-1.000.000</a></li>
                          <li><a href="#">понад 1.000.000</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="division"><span></span></li>
                  <li class="menu-tabs _pending sub-menu"><a href="#">МАРКИ ТА МОДЕЛІ АВТО</a>
                    <ul>
                      <li class="sub-menu"><a href="#">Mercedes</a>
                        <ul>
                          <li><a href="#">A-class</a></li>
                          <li><a href="#">B-class</a></li>
                          <li><a href="#">C-class</a></li>
                          <li><a href="#">E-class</a></li>
                          <li><a href="#">S-class</a></li>
                        </ul>
                      </li>
                      <li class="sub-menu"><a href="#">BMW</a>
                        <ul>
                          <li><a href="#">1-series</a></li>
                          <li><a href="#">3-series</a></li>
                          <li><a href="#">4-series</a></li>
                          <li><a href="#">5-series</a></li>
                          <li><a href="#">6-series</a></li>
                          <li><a href="#">7-series</a></li>
                        </ul>
                      </li>
                      <li class="sub-menu"><a href="#">AUDI</a>
                        <ul>
                          <li><a href="#">A4</a></li>
                          <li><a href="#">A5</a></li>
                          <li><a href="#">A7</a></li>
                          <li><a href="#">Q5</a></li>
                          <li><a href="#">Q7</a></li>
                        </ul>
                      </li>
                      <li class="sub-menu"><a href="#">Toyota</a>
                        <ul>
                          <li><a href="#">Land Cruser</a></li>
                          <li><a href="#">Camry</a></li>
                          <li><a href="#">Corolla</a></li>
                          <li><a href="#">Avensis</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="division"><span></span></li>
                </ul>
                <div class="nav-hamburger-wrapper">
                  <div class="cell-vertical-wrapper">
                    <div class="cell-middle">
                      <div class="nav-hamburger"><span></span></div>
                    </div>
                  </div>
                </div>
              </div>

              <ul class="nav-main-menu small-screen" style="max-height: 853px;">
                <li class="current-menu-item sub-menu menu-dropdown"><a href="#">ГОЛОВНА СТОРІНКА</a>
                  <ul style="display: none;">
                    <li><a href="{{ URL::to('/') }}">ГОЛОВНА</a></li>
                    <li class="sub-menu menu-dropdown"><a href="#">ПРО НАС</a>
                      <ul style="display: none;">
                          <li><a href="{{ route('about') }}">ПРО ПРОЕКТ</a></li>
                          <li><a href="#">КОНТАКТИ</a></li>
					            </ul>
                    </li>
                  </ul>
                </li>
                <li class="sub-menu menu-dropdown"><a href="#">СТОРІНКИ</a>
                  <ul style="display: none;">
                      <li><a href="{{ route('about') }}">ПРО ПРОЕКТ</a></li>
                      <li><a href="#">КОНТАКТИ</a></li>
                  </ul>
                </li>
                <li class="sub-menu menu-dropdown"><a href="#">КРИТЕРІЇ ПОШУКУ</a>
                  <ul style="display: none;">
                    <li class="sub-menu menu-dropdown"><a href="#">УСТАНОВИ</a>
                      <ul style="display: none;">
                          <li><a href="#">Адміністрація президента України</a></li>
                          <li><a href="#">Верховна Рада України</a></li>
                          <li><a href="#">Кабінет Міністрів України</a></li>
                          <li><a href="#">Місцеві державні адміністрації</a></li>
                      </ul>
                    </li>
                    <li class="sub-menu menu-dropdown"><a href="#">ПОСАДИ</a>
                      <ul style="display: none;">
                          <li><a href="#">Президент</a></li>
                          <li><a href="#">Прем’єр-міністр України</a></li>
                          <li><a href="#">Народні депутати України</a></li>
                          <li><a href="#">Міністри</a></li>
                          <li><a href="#">Голови ОДА</a></li>
                      </ul>
                    </li>
                    <li class="sub-menu menu-dropdown"><a href="#">РІК ДЕКЛАРУВАННЯ</a>
                      <ul style="display: none;">
                          <li><a href="#">2013</a></li>
                          <li><a href="#">2014</a></li>
                          <li><a href="#">2015</a></li>
                          <li><a href="#">2016</a></li>
                      </ul>
                    </li>
                    <li class="sub-menu menu-dropdown"><a href="#">МАРКИ АВТО</a>
                      <ul style="display: none;">
                          <li><a href="#">Mercedes</a></li>
                          <li><a href="#">BMW</a></li>
                          <li><a href="#">Lexus</a></li>
                          <li><a href="#">Hummer</a></li>
                          <li><a href="#">Toyota</a></li>
                          <li><a href="#">Bentley</a></li>
                      </ul>
                    </li>
                    <li class="sub-menu menu-dropdown"><a href="#">ЦІНА АВТО (грн.)</a>
                      <ul style="display: none;">
                          <li><a href="#">до 50.000</a></li>
                          <li><a href="#">50.000-100.000</a></li>
                          <li><a href="#">100.000-200.000</a></li>
                          <li><a href="#">200.000-500.000</a></li>
                          <li><a href="#">500.000-1.000.000</a></li>
                          <li><a href="#">понад 1.000.000</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <form class="nav-search-form">
            <div class="content-wrapper">
			<img src="images/logo-5-white.svg" alt="logo" class="logo-light">
			<img src="images/logo-5.svg" alt="logo" class="logo-dark">
              <div class="content">
                <input name="search" placeholder="Write search..." class="form-control" type="search">
                <button>ПОШУК</button>
              </div><a href="#" class="search-trigger-hide"></a>
            </div>
          </form>
        </div>
      </nav>
    </div>