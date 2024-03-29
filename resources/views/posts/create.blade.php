@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ajouter une nouvelle publication
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
          
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'posts.store']) !!}

                        <input type="hidden" name="id" value="{{ $id }}">
                        @include('posts.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
