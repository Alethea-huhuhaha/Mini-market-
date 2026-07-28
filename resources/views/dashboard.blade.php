<form method="POST" action=" {{ route('login.attempt') }}">
    @csrf
    <input type="email" placeholder="Email" />
    <input type="password" placeholder="Password" />
    <button type="submit">Submit</button>
</form>
