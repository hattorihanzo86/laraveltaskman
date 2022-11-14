@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Create Task</div>
                <div class="card-body">
                <task-form-component>
                </task-form-component>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">My Task</div>
                <div class="card-body">
                <list-view-component>
                </list-view-component>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
