{{--<form action="{{asset('/verify/?code='.$feedback)}}">--}}
    <h1>hello </h1>
    <p>go by this link </p>
    <a href="{{asset('/mail/'.$feedback)}}">
        <input type="submit" value="click me"  style="background:aquamarine">
    </a>
    <h2>password</h2>
    <p>{{$parole}}</p>
{{--</form>--}}
