@extends('admin.layouts.app')

@section('title')
    Visitors Messages
@endsection
@section('content')
    <main class="content">
        <div class="grid">
            <section class="col-12 card h-screen">
                <div class="card-head">
                    <div class="card-title-wrap">
                        <x-titles/>
                        <span class="badge text-xs font-light">{{ count($messages) }} RECORDS</span>
                    </div>
                </div>
                <div class="table-scroll h-full">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>recived at</th>
                                <th>Opteions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @forelse ($messages as $message)
                                <tr class="text-center">
                                    <td class="cell-name">#{{ $message->id }}</td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->message }}</td>
                                    <td>
                                        <span
                                            class="tag t-used">
                                            {{ App\Enums\VisitorsMessagesStatus::tryFrom($message->status)->name }}
                                        </span>
                                    </td>
                                    <td class="cell-date">
                                        {{ $message->created_at->format('Y-m-d') }}
                                    </td>
                                    <td>
                                        @include('admin.partials.dropdown', [
                                            'links'=>[
                                                'delete' => [
                                                    'url'=>route('admin.visitorsMessages.delete',['id'=>$message->id]),
                                                    'icon' => 'bi-trash',
                                                    ]
                                            ] 
                                        ])
                                    </td>
                                </tr>
                            @empty
                                <h2 class="text-2xl text-red-600">no result found
                                </h2>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
            </section>
        </div>
    </main>
@endsection
