@extends('tractors.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tractors.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tractors.update',$tractor->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $tractor->name }}" class="form-control" placeholder="Name">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>text:</strong>
                    <textarea class="form-control" style="height:150px" name="text" placeholder="Detail">{{ $tractor->text }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>features:</strong>
                    <input type="text" name="features" value="{{ $tractor->features }}" class="form-control" placeholder="features">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>enginetype:</strong>
                    <input type="text" name="enginetype" value="{{ $tractor->enginetype }}" class="form-control" placeholder="enginetype">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ratedengine:</strong>
                    <input type="text" name="ratedengine" value="{{ $tractor->ratedengine }}" class="form-control" placeholder="ratedengine">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>enginespeed:</strong>
                    <input type="text" name="enginespeed" value="{{ $tractor->enginespeed }}" class="form-control" placeholder="enginespeed">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>clutch:</strong>
                    <input type="text" name="clutch" value="{{ $tractor->clutch }}" class="form-control" placeholder="clutch">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>gears:</strong>
                    <input type="text" name="gears" value="{{ $tractor->gears }}" class="form-control" placeholder="gears">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>gearshiftmode:</strong>
                    <input type="text" name="gearshiftmode" value="{{ $tractor->gearshiftmode }}" class="form-control" placeholder="gearshiftmode">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>speedrange:</strong>
                    <input type="text" name="speedrange" value="{{ $tractor->speedrange }}" class="form-control" placeholder="speedrange">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>brake:</strong>
                    <input type="text" name="brake" value="{{ $tractor->brake }}" class="form-control" placeholder="brake">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rearpto:</strong>
                    <input type="text" name="rearpto" value="{{ $tractor->rearpto }}" class="form-control" placeholder="rearpto">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>liftcapacity:</strong>
                    <input type="text" name="liftcapacity" value="{{ $tractor->liftcapacity }}" class="form-control" placeholder="liftcapacity">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="hydraulic" value="{{ $tractor->hydraulic }}" class="form-control" placeholder="hydraulic">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>dimensions:</strong>
                    <input type="text" name="dimensions" value="{{ $tractor->dimensions }}" class="form-control" placeholder="dimensions">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>wheelbase:</strong>
                    <input type="text" name="wheelbase" value="{{ $tractor->wheelbase }}" class="form-control" placeholder="wheelbase">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>groundclearance:</strong>
                    <input type="text" name="groundclearance" value="{{ $tractor->groundclearance }}" class="form-control" placeholder="groundclearance">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>wheeltrack:</strong>
                    <input type="text" name="wheeltrack" value="{{ $tractor->wheeltrack }}" class="form-control" placeholder="wheeltrack">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>minturningradius:</strong>
                    <input type="text" name="minturningradius" value="{{ $tractor->minturningradius }}" class="form-control" placeholder="minturningradius">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tyre:</strong>
                    <input type="text" name="tyre" value="{{ $tractor->tyre }}" class="form-control" placeholder="tyre">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/image/{{ $tractor->image }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
