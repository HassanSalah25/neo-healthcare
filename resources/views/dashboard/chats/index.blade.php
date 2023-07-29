@extends('dashboard.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form class="" id="chat_list" action="" method="GET">
                <div class="card-header row gutters-5">
                    <div class="col text-center text-md-left">
                        <h5 class="mb-md-0 h6">{{__('Chat List')}}</h5>
                    </div>
                </div>
            </form>
            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('Customer')}}</th>
                            <th data-breakpoints="md">{{__('Last Message')}}</th>
                            <th class="text-right">{{__('Options')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($chat_threads as $key => $chat_thread)
                            <tr>
                                <td>{{ ($key+1) + ($chat_threads->currentPage() - 1)*$chat_threads->perPage() }}</td>
                                <td>
                                    {{ optional($chat_thread->customer)->name }}
                                </td>
                                <td>
                                    <span>{{ $chat_thread->chats()->latest()->first()->message }}</span> <br>
                                    <span class="fs-10 opacity-60">{{ Carbon\Carbon::parse($chat_thread->last_message_at)->diffForHumans()}}</span>
                                </td>
                                <td class="text-right">
                                        <a href="{{ route('chats.show', $chat_thread->id) }}" class="btn btn-sm btn-icon btn-circle btn-soft-primary" title="{{ __('Show') }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination aiz-pagination-center">
                    {{ $chat_threads->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
