@extends('layouts.guest')

@section('main-content')

<div class="mb-4">
    <a href="{{ route('projects.index') }}" class="btn btn-outline-info">
        Torna alla Home
    </a>
</div>
<h1 class="text-light text-center">
    {{ $project->title }}
</h1>

<div class="row w-50 m-auto ">
    <div class="col">
        <div class="card">
            <img src="https://beecrowd.io/wp-content/uploads/2022/08/Beecrowd-Agosto-6-02-larger.png" alt="{{ $project->title }}" class="card-img-top">

            <div class="card-body">
                <ul>
                    <li>
                        Data di creazione: {{ $project->created_at->format('d/m/Y - H:i') }}
                    </li>
                </ul>
                <p>
                    {{ $project->description }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

<style lang="scss" scoped>
</style>
