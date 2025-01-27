@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tractors.create') }}"> Create New Tractor</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>text</th>
{{--            <th>features</th>--}}
{{--            <th>enginetype</th>--}}
{{--            <th>ratedengine</th>--}}
{{--            <th>enginespeed</th>--}}
{{--            <th>clutch</th>--}}
{{--            <th>gears</th>--}}
{{--            <th>gearshiftmode</th>--}}
{{--            <th>speedrange</th>--}}
{{--            <th>brake</th>--}}
{{--            <th>rearpto</th>--}}
{{--            <th>liftcapacity</th>--}}
{{--            <th>hydraulic</th>--}}
{{--            <th>dimensions</th>--}}
{{--            <th>wheelbase</th>--}}
{{--            <th>groundclearance</th>--}}
{{--            <th>wheeltrack</th>--}}
{{--            <th>minturningradius</th>--}}
{{--            <th>tyre</th>--}}




            <th width="280px">Action</th>
        </tr>
        @foreach ($tractors as $tractor)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/image/{{ $tractor->image }}" width="100px"></td>
                <td>{{ $tractor->name }}</td>
                <td>{{ $tractor->text }}</td>
{{--                <td>{{ $tractor->features }}</td>--}}
{{--                <td>{{ $tractor->enginetype }}</td>--}}
{{--                <td>{{ $tractor->ratedengine }}</td>--}}
{{--                <td>{{ $tractor->enginespeed }}</td>--}}
{{--                <td>{{ $tractor->clutch }}</td>--}}
{{--                <td>{{ $tractor->gears }}</td>--}}
{{--                <td>{{ $tractor->gearshiftmode }}</td>--}}
{{--                <td>{{ $tractor->speedrange }}</td>--}}
{{--                <td>{{ $tractor->brake }}</td>--}}
{{--                <td>{{ $tractor->rearpto }}</td>--}}
{{--                <td>{{ $tractor->liftcapacity }}</td>--}}
{{--                <td>{{ $tractor->hydraulic }}</td>--}}
{{--                <td>{{ $tractor->dimensions }}</td>--}}
{{--                <td>{{ $tractor->wheelbase }}</td>--}}
{{--                <td>{{ $tractor->groundclearance }}</td>--}}
{{--                <td>{{ $tractor->wheeltrack }}</td>--}}
{{--                <td>{{ $tractor->minturningradius }}</td>--}}
{{--                <td>{{ $tractor->tyre }}</td>--}}


                <td>
                    <form action="{{ route('tractors.destroy',$tractor->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('tractors.show',$tractor->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('tractors.edit',$tractor->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $tractors->links() !!}

@endsection
