@extends('/home')

@section('contentv')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                 <h5 class="alert alert-success">{{ session('status') }}</h5>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Vegetables</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('pages/vegetable') }}" method="post" enctype=multipart/form-data>
                        @csrf
                        <div class="m-3">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="m-3">
                            <label for="">Description:</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="m-3">
                            <label for="">Price:</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="m-3">
                            <label for="">Image:</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="m-3">
                            <input type="submit" class="btn btn-primary" value="Add vegetable">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection