@extends('layouts.app')
@section('content')
<div id="app">
    <modal v-if="showModal" @close="showModal = false">
    </modal>
    <header class="header">
        <nav class="inner">
            <a class="anchor" id="show-modal" @click="showModal = true">&#9776;</a>
            <!-- <a href="{{ url('/') }}/" class="router-link-exact-active router-link-active">Онлайн</a> -->
            <!-- <a href="{{ url('/') }}/top" class="anchor">Топ</a> -->
            <a v-show="ns > 0" title="Обновить" v-on:click="refresh" class="refresh anchor">
                <div v-bind:class="[loading ? 'uil-ring-animate-css' : '', 'uil-ring-css']" style='transform:scale(0.25);'><div></div></div><div v-cloak>@{{ ns }}</div>
            </a>
        </nav>
    </header>
    <div v-cloak class="news-view view">
        <div class="news-list">
            <ul>
                <template v-for="item in news">
                    <li class="news-item tooltip" :title="item.description" >
                        <span class="score"><img :src="item.source | icon"></span>
                        <span class="titles">
                            <a :href="item.url" target="_blank" rel="noopener">@{{ item.title }}</a>
                        </span>
                        <br>
                        <span class="meta">
                            <span class="time">@{{ item.timestamp | moment }}</span>
                        </span>
                        <span class="host">@{{ item.source }}</span>
                        <br>
                    </li>
                </template>
                <div class="li-div" v-show="lt > 0">
                    <button :disabled="loading_more" class="button button-more" v-on:click="loadMore">Загрузить ещё</button>
                </div>
                <div class="li-div" v-show="news.length == 0 && !loading">
                    Нет новостей
                </div>
            </ul>
        </div>
    </div>
</div>
@endsection
