<div class="container">
    <div id="news_second_menu" style="margin-top: 70px; margin-bottom: 20px; overflow-x: auto" class="ui secondary pointing menu">

        <a id="top" class="item {{ (request()->is('/')) ? 'active' : '' }}" href={{route('home')}}>
            Top Stories
        </a>
        <a id="world" class="item {{ (request()->is('news/world*')) ? 'active' : '' }}" href={{route('news.world')}}>
            World
        </a>
        <a id="politics" class="item {{ (request()->is('news/politics*')) ? 'active' : '' }}" href={{route('news.politics')}}>
            Politics
        </a>
        <a id="business" class="item {{ (request()->is('news/business*')) ? 'active' : '' }}" href={{route('news.business')}}>
            Business
        </a>
        <a id="sport" class="item {{ (request()->is('news/sport*')) ? 'active' : '' }}" href={{route('news.sport')}}>
            Sport
        </a>
        <a id="technology" class="item {{ (request()->is('news/technology*')) ? 'active' : '' }}" href={{route('news.technology')}}>
            Technology
        </a>
        <a id="entertainment" class="item {{ (request()->is('news/entertainment*')) ? 'active' : '' }}" href={{route('news.entertainment')}}>
            Entertainment
        </a>
        <a id="science" class="item {{ (request()->is('news/science*')) ? 'active' : '' }}" href={{route('news.science')}}>
            Science
        </a>
        <a id="travel" class="item {{ (request()->is('news/travel*')) ? 'active' : '' }}" href={{route('news.travel')}}>
            Travel
        </a>
        <a id="weather" class="item {{ (request()->is('news/weather*')) ? 'active' : '' }}" href={{route('news.weather')}}>
            Weather
        </a>
    </div>
</div>
