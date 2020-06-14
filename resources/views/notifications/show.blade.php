@extends('layouts.app');

@section('content')
<div class="container">
    <p>
        Show All notifications for the user
    </p>
    <ul>
        @forelse ($notifications as $notification)
        @if ($notification->type === 'App\Notifications\PaymentReceived')
        <li>
            We have received a payment of ${{ $notification->data['amount'] / 100 }}
        </li>
        @endif

        @empty
        <li>You have no new notifications</li>
        @endforelse
    </ul>
</div>
@endsection