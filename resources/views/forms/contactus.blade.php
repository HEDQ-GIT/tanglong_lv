<form name="myForm" ng-submit="submitContact()">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input name="email" required type="email" ng-model="formData.email"/>
    <input type="submit" value="I need your help!"/>
    @{{ formData.email }}
</form>
{{--<form name="myForm" action="{{ URL('/contact/email') }}" method="post">--}}
    {{--<input name="email"/>--}}
    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
    {{--<input type="submit" value="I need your help!"/>--}}
{{--</form>--}}
