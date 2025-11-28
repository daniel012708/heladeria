<h1>Iniciar sesión</h1>

<form action="{{ route('login.enviar') }}" method="POST">
    @csrf

    <label>Usuario:</label>
    <input type="text" name="user">

    <br><br>

    <label>Contraseña:</label>
    <input type="password" name="pass">

    <br><br>

    <button type="submit">Ingresar</button>
</form>
