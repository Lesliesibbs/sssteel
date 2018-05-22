@extends('layouts.app')

@section('content')
<<<<<<< HEAD

=======
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
<<<<<<< HEAD

=======
        </div>
    </div>
</div>
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
@endsection
