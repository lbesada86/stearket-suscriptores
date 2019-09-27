
<div id="genero">
    <h3 style=" margin:auto; text-align:center;">Ingrese los intereses usuario:</h3><br>
        <div id="form" style="font-family: arial;">
            <form id="recuadro"action="inGenero.php" method="post" style="margin:auto;">
                <p>Ingrese ID de usuario:</p>
                <p><input type="number" name="numeroid" /></p>
                <p>Seleccionar Interes:</p>
                <input type="checkbox" name="arcade" value="1"/>Arcade
                <input type="checkbox" name="aventura" value="2"/>Aventura
                <input type="checkbox" name="carreras" value="3"/>Carreras
                <input type="checkbox" name="deportes" value="4"/>Deportes
                <input type="checkbox" name="disparos" value="5"/>Disparos<br>
                <input type="checkbox" name="estrategia" value="6"/>Estrategia
                <input type="checkbox" name="lucha" value="7"/>Lucha
                <input type="checkbox" name="plataforma" value="8"/>Plataforma
                <input type="checkbox" name="simulacion" value="9"/>Simulacion
                <p><input type="submit" action="index.php" value="Enviar" /></p>
            </form>
        </div>
</div>