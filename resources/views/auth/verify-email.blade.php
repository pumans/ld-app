@extends('layout.app')
@section('title', 'Legal Expert Union')
@section('content')

    <!-- Page Title Section -->
    <br><br><br><br>
    <div class="page-title-section">
        <div class="auto-container">
            <p>Необхідно підтвердити e-mail</p>
            <p>Якщо повідомлення з кодом підтвердження на вказану адресу не надійшло</p>
            <p><a href="{{ route('verification.send') }}">Відправити</a> повторно</p>
        </div>
    </div>

@endsection
