<html>
<body>
    <h1>
        Primer tutorial de CI en ADWE
    </h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Sueldo Anual</th>
        </tr>
        <?php foreach($empleados as $item): ?>
            <tr>
                <td> <?php echo $item['nombre']; ?></td>
                <td> <?php echo $item['sueldoAnual']; ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>