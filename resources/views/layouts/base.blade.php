@extends("layouts.core")


@section("core.header")
    <div>
        @yield("base.header")
    </div>
@endsection

@section("core.body")
    <div>
        <div>
            <x-header/>
        </div>

        @yield("base.content")

        <x-footer/>
    </div>
@endsection

@section("core.footer")
    <div>
        @yield("base.footer")
    </div>
@endsection
