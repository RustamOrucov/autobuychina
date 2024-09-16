@extends('admin.layouts.admin')
<style>
    .video-info{
        display: flex;
        flex-direction: column;
    }
    .url{
        display: flex;
        align-items: center;
    }
    .url a{
        margin-left: 15px;
    }
</style>
@section('content')
    <div class="video-info">
        <div class="part">
            <h1>Part 1</h1>
            <div class="url"><h3>CLICK URL =></h3> <a target="_blank" href="https://youtubeembedcode.com/en/">CLICK ME</a></div>
            <h2>Copy Youtube Video Url</h2>
            <img width="1050" src="/assets/img/youtube1.png" alt="">
        </div>
        <div class="part">
            <h1>Part 2</h1>
            <h2>Youtube Embed Generator Input Paste</h2>
            <img width="1050" src="/assets/img/youtube2.png" alt="">
        </div>
        <div class="part">
            <h1>Part 3</h1>
            <h2>Click Generate Video</h2>
            <img width="1050" src="/assets/img/youtube3.png" alt="">
        </div>
        <div class="part">
            <h1>Part 4</h1>
            <h2>Copy Generate Video Url</h2>
            <img width="1050" src="/assets/img/youtube4.png" alt="">
        </div>
        <div class="part">
            <h1>Part 5</h1>
            <h2>Paste Admin Panel Input And Save Button</h2>
            <img width="1050" src="/assets/img/youtube5.png" alt="">
        </div>
    </div>
@endsection
